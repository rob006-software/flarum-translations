# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **1** are translated differently and **10** are
translated only in `pl`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `fof-masquerade` | [1](#fof-masquerade) | 0 |
| `fof-oauth` | 0 | [10](#fof-oauth-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `fof-masquerade`

#### [`fof-masquerade.admin.fields.icon-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pl/?q=context%3A%3D%22fof-masquerade.admin.fields.icon-help%22)

> Shows an icon in front of values entered by the user. For a reference of available icons, check the &lt;a&gt;FontAwesome website&lt;/a&gt;. Use icon names with the "fa-" prefix, like "fas fa-info".
>

```diff
-Wyświetla ikonę przed wartościami podanymi przez użytkownika. Listę dostępnych ikon możesz znaleźć na <a>stronie Font Awesome</a>. Użyj nazw ikon w prefiksem „fa-”, np. „fas fa-info”.
+Wyświetla ikonę przed wartościami podanymi przez użytkownika. Listę dostępnych ikon możesz znaleźć na <a>stronie Font Awesome</a>. Użyj nazw ikon z prefiksem „fa-”, np. „fas fa-info”.

```

Wyświetla ikonę przed wartościami podanymi przez użytkownika. Listę dostępnych ikon możesz znaleźć na &lt;a&gt;stronie Font Awesome&lt;/a&gt;. Użyj nazw ikon <del>w</del><ins>z</ins> prefiksem „fa-”, np. „fas fa-info”.<br />


## Missing translations

These strings are translated only in `pl`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `pl`.


### `fof-oauth` (missing)

#### [`fof-oauth.admin.permissions.moderate_user_providers`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.permissions.moderate_user_providers%22)

> Moderate user's linked accounts

```diff
+Moderowanie powiązanych kont użytkowników
```

#### [`fof-oauth.admin.settings.disable_avatars_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_help%22)

> If enabled, the user's avatar will not be updated to match the provider's avatar on signup. Note that this only affects future signups, and will not change the avatar of existing users.
>

```diff
+Po włączeniu tej opcji awatar użytkownika nie będzie podczas rejestracji aktualizowany na awatar z konta u dostawcy. Dotyczy to tylko przyszłych rejestracji i nie zmieni awatarów istniejących użytkowników.
+
```

#### [`fof-oauth.admin.settings.disable_avatars_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_label%22)

> Disable avatars from provider

```diff
+Wyłącz pobieranie awatarów od dostawcy
```

#### [`fof-oauth.admin.settings.providers.google.hosted_domain_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.settings.providers.google.hosted_domain_label%22)

> Hosted Domain (G suite/Google Apps for Business, optional)

```diff
+Domena organizacji (G Suite/Google Apps for Business, opcjonalnie)
```

#### [`fof-oauth.admin.settings.providers.group_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_help%22)

> Select a group to automatically assign to users who register using this provider.

```diff
+Wybierz grupę, do której automatycznie będą przypisywani użytkownicy rejestrujący się przez tego dostawcę.
```

#### [`fof-oauth.admin.settings.providers.group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_label%22)

> Assign Group

```diff
+Przypisz grupę
```

#### [`fof-oauth.admin.settings.providers.no_group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.admin.settings.providers.no_group_label%22)

> No group assignment

```diff
+Nie przypisuj grupy
```

#### [`fof-oauth.email.provider_email_change_notice.subject`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.email.provider_email_change_notice.subject%22)

> Email Address Change Requested

```diff
+Prośba o zmianę adresu e-mail
```

#### [`fof-oauth.forum.log_in.unverified_email_in_use`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.forum.log_in.unverified_email_in_use%22)

> {provider} hasn't confirmed this email address, so we can't use it to sign you in. If you already have an account, log in below, then link {provider} from your account settings.

```diff
+{provider} nie potwierdził tego adresu e-mail, więc nie możemy użyć go do zalogowania. Jeśli masz już konto, zaloguj się poniżej, a następnie powiąż je z usługą {provider} w ustawieniach konta.
```

#### [`fof-oauth.forum.user.settings.linked-account.identification-label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pl/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.identification-label%22)

> {provider} ID

```diff
+ID {provider}
```

<!-- {% endraw %} -->
