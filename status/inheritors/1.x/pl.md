# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **7** are
translated only in `pl`. Altogether they cover **1** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `fof-oauth` | [7](#fof-oauth-missing) |


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
