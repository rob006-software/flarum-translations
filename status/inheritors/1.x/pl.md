# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **5** are translated differently and **7** are
translated only in `pl`. Altogether they cover **2** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `fof-oauth` | 0 | [7](#fof-oauth-missing) |
| `ianm-twofactor` | [5](#ianm-twofactor) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `ianm-twofactor`

#### [`ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/pl/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens%22)

> Also Kill Developer Tokens

```diff
-Zabij także tokeny developerskie
+Unieważniaj także tokeny deweloperskie
```

<del>Zabij</del><ins>Unieważniaj</ins> także tokeny <del>developerskie</del><ins>deweloperskie</ins>

#### [`ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/pl/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.also_kill_developer_tokens_help%22)

> Also kill developer access tokens that have been inactive for the specified period of time.

```diff
-Zabija również tokeny dostępu dewelopera, które były nieaktywne przez określony czas.
+Unieważnia również tokeny dostępu dewelopera, które były nieaktywne przez określony czas.
```

<del>Zabija</del><ins>Unieważnia</ins> również tokeny dostępu dewelopera, które były nieaktywne przez określony czas.

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/pl/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens%22)

> Kill Inactive Tokens

```diff
-Zabij nieaktywne tokeny
+Unieważniaj nieaktywne tokeny
```

<del>Zabij</del><ins>Unieważniaj</ins> nieaktywne tokeny

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_age_days`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/pl/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_age_days%22)

> Kill Inactive Tokens After (Days)

```diff
-Zabij nieaktywne tokeny po (dniach)
+Unieważniaj nieaktywne tokeny po (dniach)
```

<del>Zabij</del><ins>Unieważniaj</ins> nieaktywne tokeny po (dniach)

#### [`ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_help`](https://weblate.rob006.net/translate/flarum2/ianm-twofactor/pl/?q=context%3A%3D%22ianm-twofactor.admin.settings.tokens.kill_inactive_tokens_help%22)

> Automatically kill access tokens that have been inactive for a specified period of time.

```diff
-Automatycznie zabija tokeny dostępu, które były nieaktywne przez określony czas.
+Automatycznie unieważnia tokeny dostępu, które były nieaktywne przez określony czas.
```

Automatycznie <del>zabija</del><ins>unieważnia</ins> tokeny dostępu, które były nieaktywne przez określony czas.


## Missing translations

These strings are translated only in `pl`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `pl`.


### `fof-oauth` (missing)

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
