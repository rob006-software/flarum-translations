# Russian inherited translations differences

Translations for Russian (`ru`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **44** are translated differently and **64** are
translated only in `ru`. Altogether they cover **17** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `datitisev-backup` | 0 | [4](#datitisev-backup-missing) |
| `datlechin-title-length` | 0 | [6](#datlechin-title-length-missing) |
| `ernestdefoe-aurora` | [1](#ernestdefoe-aurora) | 0 |
| `fof-anti-spam` | [2](#fof-anti-spam) | 0 |
| `fof-best-answer` | [2](#fof-best-answer) | 0 |
| `fof-doorman` | [7](#fof-doorman) | 0 |
| `fof-gamification` | [1](#fof-gamification) | 0 |
| `fof-github-sponsors` | 0 | [4](#fof-github-sponsors-missing) |
| `fof-horizon` | [3](#fof-horizon) | 0 |
| `fof-seo` | [4](#fof-seo) | 0 |
| `fof-upload` | [1](#fof-upload) | 0 |
| `ianm-boring-avatars` | [1](#ianm-boring-avatars) | 0 |
| `maicol07-sso` | 0 | [26](#maicol07-sso-missing) |
| `pianotell-flamoji` | [21](#pianotell-flamoji) | 0 |
| `quasimo-carousel-grids` | 0 | [23](#quasimo-carousel-grids-missing) |
| `ralkage-account-lockout` | 0 | [1](#ralkage-account-lockout-missing) |
| `ralkage-profile-messages` | [1](#ralkage-profile-messages) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `ru` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `ernestdefoe-aurora`

#### [`ernestdefoe-aurora.forum.palette.apply`](https://weblate.rob006.net/translate/flarum2/ernestdefoe-aurora/ru/?q=context%3A%3D%22ernestdefoe-aurora.forum.palette.apply%22)

> Apply {palette} palette

```diff
-Применить палитру {palette}
+Применить палитру «{palette}»
```

Применить палитру <del>{palette}</del><ins>«{palette}»</ins>


### `fof-anti-spam`

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/ru/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
-Заблокирована регистрация для {username} ({email}) с {ip}
+Регистрация {username} ({email}) с {ip} заблокирована
```

<del>Заблокирована регистрация для</del><ins>Регистрация</ins> {username} ({email}) с {ip}<ins> заблокирована</ins>

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/ru/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
-Пользователь {username} отмечен как спамер
+Пометил {username} как спамера
```

<del>Пользователь</del><ins>Пометил</ins> {username}<del> отмечен</del> как <del>спамер</del><ins>спамера</ins>


### `fof-best-answer`

#### [`flarum-audit.lib.browser.discussion.best_answer_set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/ru/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_set%22)

> Set {post} as best answer in {discussion}

```diff
-{post} отмечено лучшим ответом в {discussion}
+{post} отмечен как лучший ответ в {discussion}
```

{post} <del>отмечено</del><ins>отмечен</ins> <del>лучшим</del><ins>как</ins> <del>ответом</del><ins>лучший ответ</ins> в {discussion}

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/ru/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
-Снята отметка лучшего ответа с {post} в {discussion}
+{post} Больше не лучший ответ в {discussion}
```

<del>Снята отметка</del><ins>{post}</ins> <del>лучшего</del><ins>Больше</ins> <del>ответа</del><ins>не</ins> <del>с</del><ins>лучший</ins> <del>{post}</del><ins>ответ</ins> в {discussion}


### `fof-doorman`

#### [`fof-doorman.admin.list.content.delete`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.list.content.delete%22)

> Are you sure you want to delete the invite code "{key}"?

```diff
-Удалить код "{key}"?
+Вы уверены, что хотите удалить код "{key}"?
```

<del>Удалить</del><ins>Вы уверены, что хотите удалить</ins> код "{key}"?

#### [`fof-doorman.admin.modals.send_invites.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.help%22)

> Accepts a comma, space, or comma-space seperated list. Type an individual email or paste a list then press space to add it/them.

```diff
-Можно использовать список, разделённый запятыми, пробелами или запятыми и пробелами. Введите отдельный email или вставьте список, а затем нажмите пробел, чтобы добавить.
+Можно использовать список, разделенный запятыми, пробелами или запятыми и пробелами. Введите отдельное электронное письмо или вставьте список, а затем нажмите пробел, чтобы добавить его/их.
```

Можно использовать список, <del>разделённый</del><ins>разделенный</ins> запятыми, пробелами или запятыми и пробелами. Введите <del>отдельный</del><ins>отдельное</ins> <del>email</del><ins>электронное письмо</ins> или вставьте список, а затем нажмите пробел, чтобы <del>добавить.</del><ins>добавить его/их.</ins>

#### [`fof-doorman.admin.modals.send_invites.invalid_emails`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.invalid_emails%22)

> The following email(s) are invalid: {emails}

```diff
-Эти почтовые адреса недействительны: {emails}
+Следующие электронные письма недействительны: {emails}
```

<del>Эти</del><ins>Следующие</ins> <del>почтовые</del><ins>электронные</ins> <del>адреса</del><ins>письма</ins> недействительны: {emails}

#### [`fof-doorman.admin.modals.send_invites.max_use_conflict`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.max_use_conflict%22)

> The number of emails exceeds the max number of uses for this code.

```diff
-Количество писем превышает максимальное количество использований этого кода.
+Количество электронных писем превышает максимальное количество использований этого кода.
```

Количество <ins>электронных </ins>писем превышает максимальное количество использований этого кода.

#### [`fof-doorman.admin.modals.send_invites.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.placeholder%22)

> Enter emails here

```diff
-Введите email
+Введите адрес электронной почты
```

Введите <del>email</del><ins>адрес электронной почты</ins>

#### [`fof-doorman.admin.modals.send_invites.send`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.send%22)

> Send Emails

```diff
-Отправить письма
+Отправить электронные письма
```

Отправить <ins>электронные </ins>письма

#### [`fof-doorman.admin.modals.send_invites.success`](https://weblate.rob006.net/translate/flarum2/fof-doorman/ru/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.success%22)

> Emails successfully sent

```diff
-Электронные письма отправлены
+Электронные письма успешно отправлены
```

Электронные письма <ins>успешно </ins>отправлены


### `fof-gamification`

#### [`fof-gamification.admin.page.rankings.blocked.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/ru/?q=context%3A%3D%22fof-gamification.admin.page.rankings.blocked.help%22)

> These users will not be shown on the ranking page. Usernames should be separated by a comma followed by a space.

```diff
-Эти пользователи не будут отображаться на странице рангов. Имена пользователей следует разделять сочетанием запятая/пробел.
+Эти пользователи не будут отображаться на странице рейтинга. Имена пользователей следует указывать через запятую и пробел.
```

Эти пользователи не будут отображаться на странице <del>рангов.</del><ins>рейтинга.</ins> Имена пользователей следует <del>разделять</del><ins>указывать</ins> <del>сочетанием</del><ins>через</ins> <del>запятая/пробел.</del><ins>запятую и пробел.</ins>


### `fof-horizon`

#### [`fof-horizon.admin.settings.trim_recent_failed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/ru/?q=context%3A%3D%22fof-horizon.admin.settings.trim_recent_failed%22)

> Trim Recent Failed Jobs

```diff
-Очистить недавние неудачные задания
+Очистить последние неудачные задания
```

Очистить <del>недавние</del><ins>последние</ins> неудачные задания

#### [`fof-horizon.admin.settings.trim_recent_failed_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/ru/?q=context%3A%3D%22fof-horizon.admin.settings.trim_recent_failed_help%22)

> This table is used to display recent failed jobs in the Horizon dashboard.
>

```diff
-Эта таблица используется для отображения недавних неудачных заданий на панели мониторинга Horizon.
-
+Эта таблица используется для отображения последних неудачных заданий на панели мониторинга Horizon.
+
```

Эта таблица используется для отображения <del>недавних</del><ins>последних</ins> неудачных заданий на панели мониторинга Horizon.<br />

#### [`fof-horizon.admin.stats.health.critical`](https://weblate.rob006.net/translate/flarum2/fof-horizon/ru/?q=context%3A%3D%22fof-horizon.admin.stats.health.critical%22)

> Critical

```diff
-Критический
+Критически
```


### `fof-seo`

#### [`fof-seo.admin.pages.health.checks.description.reason_default`](https://weblate.rob006.net/translate/flarum2/fof-seo/ru/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_default%22)

> You did not change the default forum description after installation!

```diff
-Вы не изменили стандартное описание форума после установки
+Вы не изменили стандартное описание форума после установки!
```

Вы не изменили стандартное описание форума после <del>установки</del><ins>установки!</ins>

#### [`fof-seo.admin.pages.health.checks.description.reason_missing`](https://weblate.rob006.net/translate/flarum2/fof-seo/ru/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_missing%22)

> You did not set up a forum description yet!

```diff
-Вы ещё не настроили описание форума
+Вы ещё не настроили описание форума!
```

Вы ещё не настроили описание <del>форума</del><ins>форума!</ins>

#### [`fof-seo.admin.pages.health.checks.keywords.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/ru/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.reason%22)

> You did not set up a forum keywords yet!

```diff
-Вы ещё не настроили ключевые слова форума
+Вы ещё не настроили ключевые слова форума!
```

Вы ещё не настроили ключевые слова <del>форума</del><ins>форума!</ins>

#### [`fof-seo.admin.pages.health.checks.sitemap.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/ru/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.reason%22)

> It is highly recommended to install the FriendsOfFlarum Sitemap extension!

```diff
-Настоятельно рекомендуется установить расширение FriendsOfFlarum Sitemap
+Настоятельно рекомендуется установить расширение FriendsOfFlarum Sitemap!
```

Настоятельно рекомендуется установить расширение FriendsOfFlarum <del>Sitemap</del><ins>Sitemap!</ins>


### `fof-upload`

#### [`fof-upload.admin.labels.aws-s3.use_path_style_endpoint`](https://weblate.rob006.net/translate/flarum2/fof-upload/ru/?q=context%3A%3D%22fof-upload.admin.labels.aws-s3.use_path_style_endpoint%22)

> Use path style endpoint

```diff
-Use path style endpoint
+Использовать path-style endpoint
```

<del>Use path</del><ins>Использовать</ins> <del>style</del><ins>path-style</ins> endpoint


### `ianm-boring-avatars`

#### [`ianm-boring-avatars.admin.settings.theme_help`](https://weblate.rob006.net/translate/flarum2/ianm-boring-avatars/ru/?q=context%3A%3D%22ianm-boring-avatars.admin.settings.theme_help%22)

> The theme to use for the boring avatars.
>

```diff
-Тема для использования со "скучными аватарами"
-
+Тема аватарок
+
```

Тема <del>для использования со "скучными аватарами"</del><ins>аватарок</ins><br />


### `pianotell-flamoji`

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_placeholder%22)

> e.g. Memes

```diff
-например, Мемы
+например, мемы
```

например, <del>Мемы</del><ins>мемы</ins>

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.category_text%22)

> Optional. Custom emojis sharing the same category appear together in their own picker tab. Leave blank for the default Custom tab.

```diff
-Опционально. Пользовательские эмодзи одной категории отображаются в отдельной вкладке выбора. Оставьте пустым для использования стандартной вкладки «Пользовательские».
+Необязательный. Пользовательские эмодзи из одной категории отображаются вместе на отдельной вкладке. Оставьте поле пустым, чтобы использовать вкладку «Пользовательские» по умолчанию.
```

<del>Опционально.</del><ins>Необязательный.</ins> Пользовательские эмодзи<ins> из</ins> одной категории отображаются <del>в</del><ins>вместе</ins> <del>отдельной</del><ins>на</ins> <del>вкладке</del><ins>отдельной</ins> <del>выбора.</del><ins>вкладке.</ins> Оставьте <del>пустым</del><ins>поле</ins> <del>для</del><ins>пустым,</ins> <del>использования</del><ins>чтобы</ins> <del>стандартной</del><ins>использовать</ins> <del>вкладки</del><ins>вкладку</ins> <del>«Пользовательские».</del><ins>«Пользовательские» по умолчанию.</ins>

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.emoji_title_text%22)

> A friendly name shown in the picker preview and matched when searching. Optional.

```diff
-Понятное имя, отображаемое в предпросмотре окна выбора и в поиске — опционально.
+Удобное название, которое отображается в предварительном просмотре и используется при поиске. Необязательный.
```

<del>Понятное</del><ins>Удобное</ins> <del>имя,</del><ins>название,</ins> <del>отображаемое</del><ins>которое</ins> <del>в</del><ins>отображается</ins> <del>предпросмотре</del><ins>в</ins> <del>окна</del><ins>предварительном</ins> <del>выбора</del><ins>просмотре</ins> и <del>в</del><ins>используется</ins> <del>поиске</del><ins>при</ins> <del>—</del><ins>поиске.</ins> <del>опционально.</del><ins>Необязательный.</ins>

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.intro_text%22)

> Custom emojis are your own images that members insert by typing a shortcode. The shortcode and image are required; a title and category are optional.

```diff
-Пользовательские эмодзи — это ваши собственные изображения, которые участники сообщества вставляют при помощи кода. Он и изображение обязательны, а название и категория — опциональны.
+Пользовательские эмодзи — это изображения, которые участники сообщества добавляют, вводя короткий код. Короткий код и изображение обязательны, а заголовок и категория — необязательны.
```

Пользовательские эмодзи — это <del>ваши собственные </del>изображения, которые участники сообщества <del>вставляют</del><ins>добавляют,</ins> <del>при</del><ins>вводя</ins> <del>помощи</del><ins>короткий</ins> <del>кода.</del><ins>код.</ins> <del>Он</del><ins>Короткий код</ins> и изображение обязательны, а <del>название</del><ins>заголовок</ins> и категория — <del>опциональны.</del><ins>необязательны.</ins>

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.path_or_url_text%22)

> Where the image is hosted: a full URL (https://…) or a forum-relative path (/assets/…). Required. Upload the image yourself first — this only records its location.

```diff
-Где размещено изображение: полный URL или относительный путь вида /assets/. Сначала загрузите изображение — здесь записывается только его расположение.
+Где размещено изображение: полный URL (https://…) или относительный путь к форуму (/assets/…). Обязательно. Сначала загрузите изображение самостоятельно — так вы зафиксируете только его местоположение.
```

Где размещено изображение: полный URL <ins>(https://…) </ins>или относительный путь <del>вида</del><ins>к</ins> <del>/assets/.</del><ins>форуму (/assets/…). Обязательно.</ins> Сначала загрузите изображение<ins> самостоятельно</ins> — <del>здесь</del><ins>так</ins> <del>записывается</del><ins>вы зафиксируете</ins> только его <del>расположение.</del><ins>местоположение.</ins>

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.shortcode_invalid%22)

> Wrap the shortcode in colons and use only letters, numbers, and \_ + - (e.g. :myemoji\_partyparrot:).

```diff
-Заключите код в двоеточия и используйте только буквы, цифры и символы _ + -. Например, :myemoji_partyparrot:.
+Заключите шорткод в двоеточия и используйте только буквы, цифры и символы _ + - (например, :myemoji_partyparrot:).
```

Заключите <del>код</del><ins>шорткод</ins> в двоеточия и используйте только буквы, цифры и символы \_ + <del>-.</del><ins>-</ins> <del>Например,</del><ins>(например,</ins> <del>:myemoji\_partyparrot:.</del><ins>:myemoji\_partyparrot:).</ins>

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_label%22)

> Shortcode

```diff
-Код
+Короткий код
```

#### [`pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.edit_emoji.text_to_replace_text%22)

> The text members type to insert this emoji. Must be wrapped in colons and contain only letters, numbers, and the characters \_ + - (e.g. :myemoji\_partyparrot:). Required, and must be unique. Tip: prefix your shortcodes so they read clearly and won't clash with standard emoji.

```diff
-Текст, который участники сообщества вводят для вставки этого эмодзи. Должен быть заключён в двоеточия и содержать только буквы, цифры и символы _ + -. Например, :myemoji_partyparrot:. Используйте префиксы для кодов, чтобы они были понятны и не конфликтовали со стандартными эмодзи.
+Введите текст, чтобы вставить этот эмодзи. Должно быть заключено в двоеточия и содержать только буквы, цифры и символы _ + - (например, :myemoji_partyparrot:). Обязательно к заполнению и должно быть уникальным. Совет: добавляйте префикс к своим коротким кодам, чтобы их было легко читать и они не конфликтовали со стандартными эмодзи.
```

<del>Текст, который участники сообщества</del><ins>Введите</ins> <del>вводят</del><ins>текст,</ins> <del>для</del><ins>чтобы</ins> <del>вставки</del><ins>вставить</ins> <del>этого</del><ins>этот</ins> эмодзи. <del>Должен</del><ins>Должно</ins> быть <del>заключён</del><ins>заключено</ins> в двоеточия и содержать только буквы, цифры и символы \_ + <del>-.</del><ins>-</ins> <del>Например,</del><ins>(например,</ins> <del>:myemoji\_partyparrot:.</del><ins>:myemoji\_partyparrot:).</ins> <del>Используйте</del><ins>Обязательно</ins> <del>префиксы</del><ins>к</ins> <del>для</del><ins>заполнению</ins> <del>кодов,</del><ins>и должно быть уникальным. Совет: добавляйте префикс к своим коротким кодам,</ins> чтобы <del>они</del><ins>их</ins> <del>были</del><ins>было</ins> <del>понятны</del><ins>легко читать</ins> и<ins> они</ins> не конфликтовали со стандартными эмодзи.

#### [`pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.custom_emojis_section.import_legacy_shortcodes%22)

> Imported {count} emoji whose shortcodes don't follow the recommended :word: convention: {shortcodes}. They were imported as-is and still work, but consider updating them.

```diff
-Импортировано {count} эмодзи, коды которых не соответствуют рекомендуемому формату :word: : {shortcodes}. Они импортированы как есть и работают, но рекомендуется их обновить.
+Импортировано {count} эмодзи, шорткоды которых не соответствуют рекомендуемому соглашению :word: {shortcodes}. Они были импортированы без изменений и по-прежнему работают, но рекомендуем обновить их.
```

Импортировано {count} эмодзи, <del>коды</del><ins>шорткоды</ins> которых не соответствуют рекомендуемому <del>формату</del><ins>соглашению</ins> :word:<del> :</del> {shortcodes}. Они<ins> были</ins> импортированы <del>как</del><ins>без</ins> <del>есть</del><ins>изменений</ins> и<ins> по-прежнему</ins> работают, но <del>рекомендуется</del><ins>рекомендуем</ins> <del>их</del><ins>обновить</ins> <del>обновить.</del><ins>их.</ins>

#### [`pianotell-flamoji.admin.settings.cdn_advanced_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_advanced_text%22)

> The defaults are pinned to the exact emoji-mart version this extension was built against, with matching SRI hashes. If you change a URL, update its SRI hash to match (or clear it to disable integrity checking), and keep the data version aligned with the emoji sprite sheet — mismatched versions can render emojis incorrectly. Leave a URL empty to force that resource to load locally.

```diff
-Параметры по умолчанию привязаны к точной версии emoji-mart, для которой собрано это расширение, с соответствующими хешами SRI. Если вы измените URL, обновите его хеш SRI или очистите, чтобы отключить проверку целостности, и синхронизируйте версию данных со спрайтом эмодзи — несовпадающие версии могут привести к неправильному отображению эмодзи. Оставьте URL пустым, чтобы этот ресурс загружался локально.
+Значения по умолчанию привязаны к той версии emoji-mart, на основе которой было создано это расширение, с соответствующими хэшами SRI. Если вы измените URL-адрес, обновите его хэш SRI, чтобы он совпадал с хэшем (или удалите его, чтобы отключить проверку целостности), и убедитесь, что версия данных совпадает с таблицей спрайтов эмодзи — несовпадение версий может привести к некорректному отображению эмодзи. Оставьте поле URL пустым, чтобы ресурс загружался локально.
```

<del>Параметры</del><ins>Значения</ins> по умолчанию привязаны к <del>точной</del><ins>той</ins> версии emoji-mart, <del>для</del><ins>на основе</ins> которой <del>собрано</del><ins>было создано</ins> это расширение, с соответствующими <del>хешами</del><ins>хэшами</ins> SRI. Если вы измените <del>URL,</del><ins>URL-адрес,</ins> обновите его <del>хеш</del><ins>хэш</ins> <del>SRI</del><ins>SRI,</ins> <del>или</del><ins>чтобы</ins> <del>очистите,</del><ins>он совпадал с хэшем (или удалите его,</ins> чтобы отключить проверку <del>целостности,</del><ins>целостности),</ins> и <del>синхронизируйте</del><ins>убедитесь,</ins> <del>версию</del><ins>что версия</ins> данных <del>со</del><ins>совпадает</ins> <del>спрайтом</del><ins>с таблицей спрайтов</ins> эмодзи — <del>несовпадающие</del><ins>несовпадение</ins> <del>версии</del><ins>версий</ins> <del>могут</del><ins>может</ins> привести к <del>неправильному</del><ins>некорректному</ins> отображению эмодзи. Оставьте<ins> поле</ins> URL пустым, чтобы<del> этот</del> ресурс загружался локально.

#### [`pianotell-flamoji.admin.settings.cdn_data_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_sri_label%22)

> Data SRI Hash (Optional)

```diff
-Хеш SRI данных — опционально
+Данные SRI Hash (необязательно)
```

<del>Хеш</del><ins>Данные</ins> SRI<del> данных</del> <del>—</del><ins>Hash</ins> <del>опционально</del><ins>(необязательно)</ins>

#### [`pianotell-flamoji.admin.settings.cdn_data_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_data_url_label%22)

> CDN Data URL

```diff
-URL данных на CDN
+URL-адрес данных CDN
```

<del>URL</del><ins>URL-адрес</ins> данных<del> на</del> CDN

#### [`pianotell-flamoji.admin.settings.cdn_js_sri_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_sri_label%22)

> JavaScript SRI Hash (Optional)

```diff
-Хеш SRI JavaScript — опционально
+Хеш SRI в JavaScript (необязательно)
```

Хеш SRI <del>JavaScript</del><ins>в</ins> <del>—</del><ins>JavaScript</ins> <del>опционально</del><ins>(необязательно)</ins>

#### [`pianotell-flamoji.admin.settings.cdn_js_url_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.cdn_js_url_label%22)

> CDN JavaScript URL

```diff
-URL JavaScript на CDN
+URL-адрес CDN JavaScript
```

<del>URL JavaScript на</del><ins>URL-адрес</ins> CDN<ins> JavaScript</ins>

#### [`pianotell-flamoji.admin.settings.show_recents_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_label%22)

> Show (and save) frequently used emojis

```diff
-Показывать и сохранять часто используемые эмодзи
+Показывать и сохранять часто использованные эмодзи
```

Показывать и сохранять часто <del>используемые</del><ins>использованные</ins> эмодзи

#### [`pianotell-flamoji.admin.settings.show_recents_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_recents_text%22)

> Show the Frequently Used tab at the top of the picker. It starts empty and fills as each member picks emojis. Each user's frequents are saved in their own browser only.

```diff
-Показывать вкладку «Часто используемые» в верхней части окна выбора. Вкладка заполняется по мере использования эмодзи. Часто используемые эмодзи каждого пользователя сохраняются только в его браузере.
+В верхней части панели выбора отображается вкладка «Часто используемые». Изначально она пуста и заполняется по мере того, как участники выбирают эмодзи. Часто используемые эмодзи каждого пользователя сохраняются только в его браузере.
```

<del>Показывать</del><ins>В</ins> <del>вкладку</del><ins>верхней</ins> <del>«Часто</del><ins>части</ins> <del>используемые»</del><ins>панели</ins> <del>в</del><ins>выбора</ins> <del>верхней</del><ins>отображается</ins> <del>части</del><ins>вкладка</ins> <del>окна</del><ins>«Часто</ins> <del>выбора.</del><ins>используемые».</ins> <del>Вкладка</del><ins>Изначально она пуста и</ins> заполняется по мере <del>использования</del><ins>того, как участники выбирают</ins> эмодзи. Часто используемые эмодзи каждого пользователя сохраняются только в его браузере.

#### [`pianotell-flamoji.admin.settings.show_variants_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.show_variants_text%22)

> Some emojis have skin tone variants. When an emoji is selected in the picker that has variants, a variant popup will appear so the user can select the desired variant. This has no effect in sticker mode, since custom emoji don't have skin-tone variants.

```diff
-Некоторые эмодзи имеют варианты тонов кожи. Если выбран эмодзи с вариантами, появится окно выбора тона кожи. В режиме стикеров это не применяется — пользовательские эмодзи не имеют вариантов тонов кожи.
+У некоторых эмодзи есть варианты с разными оттенками кожи. При выборе эмодзи в палитре, у которого есть варианты, появляется всплывающее окно с вариантами, в котором пользователь может выбрать нужный. В режиме стикеров это не работает, так как у пользовательских эмодзи нет вариантов с разными оттенками кожи.
```

<del>Некоторые</del><ins>У некоторых</ins> эмодзи <del>имеют</del><ins>есть</ins> варианты <del>тонов</del><ins>с разными оттенками</ins> кожи. <del>Если</del><ins>При</ins> <del>выбран</del><ins>выборе</ins> эмодзи<ins> в палитре, у которого есть варианты, появляется всплывающее окно</ins> с вариантами, <del>появится</del><ins>в</ins> <del>окно</del><ins>котором</ins> <del>выбора</del><ins>пользователь</ins> <del>тона</del><ins>может</ins> <del>кожи.</del><ins>выбрать нужный.</ins> В режиме стикеров это не <del>применяется</del><ins>работает,</ins> <del>—</del><ins>так</ins> <del>пользовательские</del><ins>как</ins> <del>эмодзи</del><ins>у</ins> <del>не</del><ins>пользовательских</ins> <del>имеют</del><ins>эмодзи нет</ins> вариантов <del>тонов</del><ins>с разными оттенками</ins> кожи.

#### [`pianotell-flamoji.admin.settings.sticker_mode_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.sticker_mode_text%22)

> Render custom emoji as large stickers — in posts, the live composer preview, and an enlarged picker grid. Because only custom emoji are enlarged, the picker is restricted to your custom emoji while this is on. Off by default.

```diff
-Отображать пользовательские эмодзи как большие стикеры — в сообщениях, в предпросмотре редактора и в увеличенной сетке средства выбора. Поскольку увеличены только пользовательские эмодзи, выбор ограничен вашими эмодзи при включении этого режима. По умолчанию отключено.
+Отображайте пользовательские эмодзи в виде больших стикеров — в постах, в предварительном просмотре в реальном времени и в увеличенной сетке выбора. Поскольку увеличенными отображаются только пользовательские эмодзи, при включенном параметре выбор будет ограничен только вашими пользовательскими эмодзи. По умолчанию параметр выключен.
```

<del>Отображать</del><ins>Отображайте</ins> пользовательские эмодзи <del>как</del><ins>в</ins> <del>большие</del><ins>виде</ins> <del>стикеры</del><ins>больших стикеров</ins> — в <del>сообщениях,</del><ins>постах,</ins> в <del>предпросмотре</del><ins>предварительном</ins> <del>редактора</del><ins>просмотре в реальном времени</ins> и в увеличенной сетке<del> средства</del> выбора. Поскольку <del>увеличены</del><ins>увеличенными отображаются</ins> только пользовательские эмодзи, <del>выбор</del><ins>при</ins> <del>ограничен</del><ins>включенном</ins> <del>вашими</del><ins>параметре</ins> <del>эмодзи</del><ins>выбор</ins> <del>при</del><ins>будет</ins> <del>включении</del><ins>ограничен</ins> <del>этого</del><ins>только</ins> <del>режима.</del><ins>вашими пользовательскими эмодзи.</ins> По умолчанию <del>отключено.</del><ins>параметр выключен.</ins>

#### [`pianotell-flamoji.admin.settings.use_cdn_label`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_label%22)

> Load Emoji-Mart via CDN

```diff
-Загружать Emoji-Mart через CDN
+Загрузить Emoji-Mart через CDN
```

<del>Загружать</del><ins>Загрузить</ins> Emoji-Mart через CDN

#### [`pianotell-flamoji.admin.settings.use_cdn_text`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.admin.settings.use_cdn_text%22)

> Load the emoji-mart library and emoji data from a third-party CDN (e.g. jsDelivr) instead of serving them from your own server. Off by default. If the CDN fails to load — or a Subresource Integrity (SRI) hash doesn't match — the picker automatically falls back to the copy bundled with this extension. Note that loading from an external origin requires your Content-Security-Policy (if any) to allow it.

```diff
-Загружать библиотеку emoji-mart и данные эмодзи с CDN третьей стороны — например jsDelivr — вместо использования собственного сервера. По умолчанию отключено. Если CDN не загрузится или хеш Subresource Integrity (SRI) не совпадёт, выбор автоматически вернётся к копии, поставляемой с этим расширением. Учтите, что загрузка с внешнего источника требует разрешения в вашей Content-Security-Policy, если она используется.
+Загрузите библиотеку emoji-mart и данные об эмодзи со стороннего CDN (например, jsDelivr) вместо того, чтобы использовать их с собственного сервера. По умолчанию отключено. Если загрузка с CDN не удалась или хэш Subresource Integrity (SRI) не совпадает, средство выбора автоматически возвращается к копии, входящей в состав этого расширения. Обратите внимание, что для загрузки с внешнего источника необходимо, чтобы это было разрешено вашей политикой безопасности контента (если таковая имеется).
```

<del>Загружать</del><ins>Загрузите</ins> библиотеку emoji-mart и данные<ins> об</ins> эмодзи <del>с</del><ins>со стороннего</ins> CDN <del>третьей</del><ins>(например,</ins> <del>стороны</del><ins>jsDelivr)</ins> <del>—</del><ins>вместо</ins> <del>например</del><ins>того,</ins> <del>jsDelivr</del><ins>чтобы</ins> <del>—</del><ins>использовать</ins> <del>вместо</del><ins>их</ins> <del>использования</del><ins>с</ins> собственного сервера. По умолчанию отключено. Если<ins> загрузка с</ins> CDN не <del>загрузится</del><ins>удалась</ins> или <del>хеш</del><ins>хэш</ins> Subresource Integrity (SRI) не <del>совпадёт,</del><ins>совпадает,</ins> <del>выбор</del><ins>средство выбора</ins> автоматически <del>вернётся</del><ins>возвращается</ins> к копии, <del>поставляемой</del><ins>входящей</ins> <del>с</del><ins>в</ins> <del>этим</del><ins>состав</ins> <del>расширением.</del><ins>этого</ins> <del>Учтите,</del><ins>расширения. Обратите внимание,</ins> что <del>загрузка</del><ins>для загрузки</ins> с внешнего источника <del>требует</del><ins>необходимо,</ins> <del>разрешения</del><ins>чтобы</ins> <del>в</del><ins>это было разрешено</ins> вашей <del>Content-Security-Policy,</del><ins>политикой</ins> <del>если</del><ins>безопасности</ins> <del>она</del><ins>контента</ins> <del>используется.</del><ins>(если таковая имеется).</ins>

#### [`pianotell-flamoji.forum.emoji-mart.no_emojis_found_title`](https://weblate.rob006.net/translate/flarum2/pianotell-flamoji/ru/?q=context%3A%3D%22pianotell-flamoji.forum.emoji-mart.no_emojis_found_title%22)

> Oh no!

```diff
-Ничего не нашлось
+Ничего не нашлось!
```

Ничего не <del>нашлось</del><ins>нашлось!</ins>


### `ralkage-profile-messages`

#### [`ralkage-profile-messages.forum.notification.new_profile_message_reply_text`](https://weblate.rob006.net/translate/flarum2/ralkage-profile-messages/ru/?q=context%3A%3D%22ralkage-profile-messages.forum.notification.new_profile_message_reply_text%22)

> {username} replied to your message on {profileOwner}'s profile.

```diff
-{username} ответил(а) вам в профиле {profileOwner}.
+{username} ответил(а) вам на стене {profileOwner}.
```

{username} ответил(а) вам <del>в</del><ins>на</ins> <del>профиле</del><ins>стене</ins> {profileOwner}.


## Missing translations

These strings are translated only in `ru`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `ru`.


### `datitisev-backup` (missing)

#### [`datitisev-backup.admin.adapter-settings-modal.aliyun.path-prefix.description`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/ru/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aliyun.path-prefix.description%22)

> Optional default path prefix for the files.

```diff
+Необязательный префикс пути по умолчанию для файлов.
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.bucket.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/ru/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.bucket.label%22)

> Bucket

```diff
+Бакет
```

#### [`datitisev-backup.admin.adapter-settings-modal.aws.path-prefix.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/ru/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.aws.path-prefix.label%22)

> Path prefix

```diff
+Префикс пути
```

#### [`datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.label`](https://weblate.rob006.net/translate/flarum2/datitisev-backup/ru/?q=context%3A%3D%22datitisev-backup.admin.adapter-settings-modal.gdrive.refresh-token.label%22)

> Refresh Token

```diff
+Токен обновления
```


### `datlechin-title-length` (missing)

#### [`datlechin-title-length.admin.settings.limit_help`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/ru/?q=context%3A%3D%22datlechin-title-length.admin.settings.limit_help%22)

> Enable to use custom title length limit. If disabled, the Flarum's default title length limit will be used.

```diff
+Включите, чтобы использовать собственные ограничения длины заголовка. Если отключено, будут использоваться стандартные ограничения Flarum.
```

#### [`datlechin-title-length.admin.settings.limit_label`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/ru/?q=context%3A%3D%22datlechin-title-length.admin.settings.limit_label%22)

> Enable limit title length

```diff
+Включить ограничение длины заголовка
```

#### [`datlechin-title-length.admin.settings.max_help`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/ru/?q=context%3A%3D%22datlechin-title-length.admin.settings.max_help%22)

> The maximum length of the title, the maximum value is 1000.

```diff
+Максимальная длина заголовка. Максимальное значение — 1000.
```

#### [`datlechin-title-length.admin.settings.max_label`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/ru/?q=context%3A%3D%22datlechin-title-length.admin.settings.max_label%22)

> Maximum length

```diff
+Максимальная длина
```

#### [`datlechin-title-length.admin.settings.min_help`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/ru/?q=context%3A%3D%22datlechin-title-length.admin.settings.min_help%22)

> The minimum length of the title, the minimum value is 1.

```diff
+Минимальная длина заголовка. Минимальное значение — 1.
```

#### [`datlechin-title-length.admin.settings.min_label`](https://weblate.rob006.net/translate/flarum2/datlechin-title-length/ru/?q=context%3A%3D%22datlechin-title-length.admin.settings.min_label%22)

> Minimum length

```diff
+Минимальная длина
```


### `fof-github-sponsors` (missing)

#### [`fof-github-sponsors.admin.settings.account_type_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/ru/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_help%22)

> Select whether you're tracking sponsors for a personal GitHub user account or an organization account.

```diff
+Выберите, отслеживаете ли вы спонсоров для личного аккаунта GitHub или аккаунта организации.
```

#### [`fof-github-sponsors.admin.settings.api_token_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/ru/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_help%22)

> Create a personal access token at &lt;a&gt;https://github.com/settings/tokens/new&lt;/a&gt; with the &lt;code&gt;user&lt;/code&gt; and &lt;code&gt;read:org&lt;/code&gt; scopes. This token is used to fetch your sponsor information from GitHub.

```diff
+Создайте персональный токен доступа на <a>https://github.com/settings/tokens/new</a> с правами <code>user</code> и <code>read:org</code>. Этот токен используется для получения информации о ваших спонсорах из GitHub.
```

#### [`fof-github-sponsors.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/ru/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_help%22)

> Select which Flarum user group sponsors should be added to. Users will be automatically added when they become sponsors and removed when they stop sponsoring.

```diff
+Выберите группу пользователей для спонсоров. Пользователи будут автоматически добавляться при оформлении спонсорства и удаляться при его прекращении.
```

#### [`fof-github-sponsors.admin.settings.login_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/ru/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_help%22)

> Enter your GitHub username (for user accounts) or organization name (for organizations). This is the account whose sponsors will be synchronized.

```diff
+Введите имя пользователя GitHub для личных аккаунтов или название организации. Это аккаунт, спонсоры которого будут синхронизированы.
```


### `maicol07-sso` (missing)

#### [`maicol07-sso.admin.settings.client_api_key`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_api_key%22)

> API key

```diff
+API-ключ
```

#### [`maicol07-sso.admin.settings.client_api_key_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_api_key_help%22)

> The API key from your Flarum instance.

```diff
+API-ключ вашего экземпляра Flarum.
```

#### [`maicol07-sso.admin.settings.client_name`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_name%22)

> Name

```diff
+Название
```

#### [`maicol07-sso.admin.settings.client_name_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_name_help%22)

> Name of the Flarum instance

```diff
+Название экземпляра Flarum
```

#### [`maicol07-sso.admin.settings.client_password_token`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_password_token%22)

> Password token

```diff
+Токен пароля
```

#### [`maicol07-sso.admin.settings.client_password_token_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_password_token_help%22)

> A random password token to use with the Flarum instance signups.

```diff
+Токен пароля, который используется при регистрации через экземпляр Flarum.
```

#### [`maicol07-sso.admin.settings.client_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_url%22)

> URL

```diff
+URL
```

#### [`maicol07-sso.admin.settings.client_url_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_url_help%22)

> URL of the Flarum instance

```diff
+URL экземпляра Flarum
```

#### [`maicol07-sso.admin.settings.client_verify_ssl`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_verify_ssl%22)

> Verify SSL

```diff
+Проверять SSL
```

#### [`maicol07-sso.admin.settings.client_verify_ssl_help`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.client_verify_ssl_help%22)

> Verify the Flarum instance SSL status when making requests to it (recommended).

```diff
+Проверять SSL-сертификат экземпляра Flarum при выполнении запросов к нему — рекомендуется.
```

#### [`maicol07-sso.admin.settings.cookies_prefix`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.cookies_prefix%22)

> Cookies name prefix

```diff
+Префикс имени cookie
```

#### [`maicol07-sso.admin.settings.jwt_iss`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_iss%22)

> Issuer Domain

```diff
+Домен издателя
```

#### [`maicol07-sso.admin.settings.jwt_section_subtitle`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_section_subtitle%22)

> JWT Addon settings

```diff
+Настройки дополнения JWT
```

#### [`maicol07-sso.admin.settings.jwt_signer_key`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_signer_key%22)

> Signer key

```diff
+Ключ подписи
```

#### [`maicol07-sso.admin.settings.jwt_signing_algorithm`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.jwt_signing_algorithm%22)

> Signing Method

```diff
+Метод подписи
```

#### [`maicol07-sso.admin.settings.login_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.login_url%22)

> Login URL

```diff
+URL входа
```

#### [`maicol07-sso.admin.settings.logout_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.logout_url%22)

> Logout URL

```diff
+URL выхода
```

#### [`maicol07-sso.admin.settings.manage_account_btn_open_in_new_tab`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.manage_account_btn_open_in_new_tab%22)

> Open account management in a new tab

```diff
+Открывать управление аккаунтом в новой вкладке
```

#### [`maicol07-sso.admin.settings.manage_account_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.manage_account_url%22)

> Manage account URL

```diff
+URL управления аккаунтом
```

#### [`maicol07-sso.admin.settings.provider_mode`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.provider_mode%22)

> Enable this option to use the provider mode (SSO between Flarum instances). Allows other Flarum instances to login an user of this Flarum instance. This will disable the standard SSO feature with other websites.

```diff
+Включите эту опцию, чтобы использовать режим провайдера — SSO между экземплярами Flarum. Позволяет другим экземплярам Flarum выполнять вход пользователей этого экземпляра Flarum. Это отключит стандартную функцию SSO для других сайтов.
```

#### [`maicol07-sso.admin.settings.remove_login_btn`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.remove_login_btn%22)

> Remove login button

```diff
+Удалить кнопку входа
```

#### [`maicol07-sso.admin.settings.remove_signup_btn`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.remove_signup_btn%22)

> Remove signup button

```diff
+Удалить кнопку регистрации
```

#### [`maicol07-sso.admin.settings.signup_url`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.signup_url%22)

> Signup URL

```diff
+URL регистрации
```

#### [`maicol07-sso.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.admin.settings.title%22)

> SSO Settings

```diff
+Настройки SSO
```

#### [`maicol07-sso.forum.manage_account_btn`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.forum.manage_account_btn%22)

> Manage account

```diff
+Управление аккаунтом
```

#### [`maicol07-sso.forum.no_login_url_error`](https://weblate.rob006.net/translate/flarum2/maicol07-sso/ru/?q=context%3A%3D%22maicol07-sso.forum.no_login_url_error%22)

> No login URL set, please check the SSO settings!

```diff
+URL для входа не указан. Проверьте настройки SSO!
```


### `quasimo-carousel-grids` (missing)

#### [`carousel-grids.admin.add_item`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.add_item%22)

> Add Item

```diff
+Добавить элемент
```

#### [`carousel-grids.admin.background_image`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.background_image%22)

> Background Image URL

```diff
+URL фонового изображения
```

#### [`carousel-grids.admin.columns_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.columns_label%22)

> Columns per row (desktop)

```diff
+Количество колонок в строке на десктопе
```

#### [`carousel-grids.admin.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.delete_confirmation%22)

> Are you sure you want to delete this item?

```diff
+Удалить этот элемент?
```

#### [`carousel-grids.admin.description`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.description%22)

> Description

```diff
+Описание
```

#### [`carousel-grids.admin.edit_item`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.edit_item%22)

> Edit Item

```diff
+Править элемент
```

#### [`carousel-grids.admin.image_position`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.image_position%22)

> Logo Position

```diff
+Позиция логотипа
```

#### [`carousel-grids.admin.items_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.items_label%22)

> Manage Grid Items

```diff
+Управление элементами сетки
```

#### [`carousel-grids.admin.link`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.link%22)

> Link URL (optional)

```diff
+URL ссылки (по желанию)
```

#### [`carousel-grids.admin.logo`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.logo%22)

> Logo URL (optional)

```diff
+URL логотипа (по желанию)
```

#### [`carousel-grids.admin.manage_items`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.manage_items%22)

> Manage Items

```diff
+Управление элементами
```

#### [`carousel-grids.admin.position_after_hero`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.position_after_hero%22)

> After Hero Section

```diff
+После блока Hero
```

#### [`carousel-grids.admin.position_before_footer`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.position_before_footer%22)

> Before Footer

```diff
+Перед подвалом
```

#### [`carousel-grids.admin.position_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.position_label%22)

> Display Position

```diff
+Позиция отображения
```

#### [`carousel-grids.admin.position_left`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.position_left%22)

> Left

```diff
+Слева
```

#### [`carousel-grids.admin.position_top`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.position_top%22)

> Top

```diff
+Сверху
```

#### [`carousel-grids.admin.save_button`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.save_button%22)

> Save

```diff
+Сохранить
```

#### [`carousel-grids.admin.save_settings`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.save_settings%22)

> Save Settings

```diff
+Сохранить настройки
```

#### [`carousel-grids.admin.saved_message`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.saved_message%22)

> Settings saved successfully

```diff
+Настройки сохранены
```

#### [`carousel-grids.admin.scope_all`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.scope_all%22)

> All Pages

```diff
+На всех страницах
```

#### [`carousel-grids.admin.scope_homepage`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.scope_homepage%22)

> Homepage Only

```diff
+Только на главной
```

#### [`carousel-grids.admin.scope_label`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.scope_label%22)

> Display Scope

```diff
+Область отображения
```

#### [`carousel-grids.admin.title`](https://weblate.rob006.net/translate/flarum2/quasimo-carousel-grids/ru/?q=context%3A%3D%22carousel-grids.admin.title%22)

> Title

```diff
+Заголовок
```


### `ralkage-account-lockout` (missing)

#### [`ralkage-account-lockout.forum.user_controls.unlock_button`](https://weblate.rob006.net/translate/flarum2/ralkage-account-lockout/ru/?q=context%3A%3D%22ralkage-account-lockout.forum.user_controls.unlock_button%22)

> Unlock

```diff
+Разблокировать
```

<!-- {% endraw %} -->
