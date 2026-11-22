# Ukrainian inherited translations differences

Translations for Ukrainian (`uk`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **7** are
translated only in `uk`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `huoxin-filter-rule-manager` | [7](#huoxin-filter-rule-manager-missing) |


## Missing translations

These strings are translated only in `uk`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `uk`.


### `huoxin-filter-rule-manager` (missing)

#### [`huoxin-filter-rule-manager.admin.config_groups_help`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.config_groups_help%22)

> The rule triggers if the user belongs to any of the selected groups. The matched group ID is available as '{{ matched\_group }}'.

```diff
+Правило спрацьовує, якщо користувач належить до однієї з вибраних груп. Ідентифікатор знайденої групи доступний під токеном «'{{ matched_group }}'».
```

#### [`huoxin-filter-rule-manager.admin.config_patterns_help`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.config_patterns_help%22)

> One pattern per line. Bare patterns are matched case-insensitively; use PCRE form like /pattern/flags for full control. The first match is available as '{{ matched\_pattern }}' and '{{ matched\_string }}'.

```diff
+Один вираз на рядок. Вирази без обмежувачів перевіряються без урахування регістру. Для точного налаштування використовуйте формат PCRE, наприклад /pattern/flags. Перший збіг доступний під токенами «'{{ matched_pattern }}'» і «'{{ matched_string }}'».
```

#### [`huoxin-filter-rule-manager.admin.config_words_help`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.config_words_help%22)

> One word or phrase per line. The rule triggers if the post contains any of them (case-insensitive). The first match is available as '{{ matched\_word }}' in the alert message.

```diff
+По одному слову або фразі на рядок. Правило спрацьовує, якщо допис містить будь-яке з них без урахування регістру. Перший збіг доступний у повідомленні попередження як «'{{ matched_word }}'».
```

#### [`huoxin-filter-rule-manager.admin.message_help`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.message_help%22)

> Use '{{ token }}' to interpolate values returned by rules. Token values are HTML-escaped automatically; the template itself is rendered trusted so you can use simple HTML like '&lt;br&gt;'. Supports translation keys.

```diff
+Використовуйте «'{{ token }}'», щоб підставляти значення, які повертають правила. Значення токенів автоматично екрануються для HTML. Сам шаблон вважається довіреним, тому можна використовувати просту розмітку HTML, наприклад '<br>'. Підтримуються ключі перекладу.
```

#### [`huoxin-filter-rule-manager.admin.ruleset_custom_title_help`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.ruleset_custom_title_help%22)

> Optional. Overrides the default translated title for modals and toasts. Use '{{ token }}' to interpolate values returned by rules. Token values are HTML-escaped automatically; the title itself is rendered trusted so you can use simple HTML like '&lt;br&gt;'. Supports translation keys.

```diff
+Необов’язково. Замінює типовий переклад заголовка діалогових вікон і спливних сповіщень. Використовуйте «'{{ token }}'», щоб підставляти значення, які повертають правила. Значення токенів автоматично екрануються для HTML. Сам заголовок вважається довіреним, тому можна використовувати просту розмітку HTML, наприклад '<br>'. Підтримуються ключі перекладу.
```

#### [`huoxin-filter-rule-manager.admin.ruleset_flag_message_placeholder`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.ruleset_flag_message_placeholder%22)

> e.g. Matched words: '{{ matched\_word }}'

```diff
+Наприклад: знайдені слова — «'{{ matched_word }}'»
```

#### [`huoxin-filter-rule-manager.admin.ruleset_message_placeholder`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/uk/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.ruleset_message_placeholder%22)

> Your post contains a restricted word: '{{ matched\_word }}'

```diff
+Ваш допис містить заборонене слово: «'{{ matched_word }}'»
```

<!-- {% endraw %} -->
