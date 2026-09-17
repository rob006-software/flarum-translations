# Polish inherited translations differences

Translations for Polish (`pl`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **10** are translated differently and **25** are
translated only in `pl`. Altogether they cover **8** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [1](#core) | 0 |
| `flarum-akismet` | [1](#flarum-akismet) | 0 |
| `fof-anti-spam` | [5](#fof-anti-spam) | [2](#fof-anti-spam-missing) |
| `fof-best-answer` | 0 | [2](#fof-best-answer-missing) |
| `fof-follow-tags` | 0 | [17](#fof-follow-tags-missing) |
| `fof-links` | 0 | [1](#fof-links-missing) |
| `fof-masquerade` | [1](#fof-masquerade) | [1](#fof-masquerade-missing) |
| `fof-pwa` | [2](#fof-pwa) | [2](#fof-pwa-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pl` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.forum.change_password.send_button`](https://weblate.rob006.net/translate/flarum2/core/pl/?q=context%3A%3D%22core.forum.change_password.send_button%22)

> Send Password Reset Email

```diff
-Wyślij e-mail resetujący hasło
+Wyślij link do zmiany hasła
```

Wyślij <del>e-mail</del><ins>link</ins> <del>resetujący</del><ins>do</ins> <del>hasło</del><ins>zmiany hasła</ins>


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/pl/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-API Key
+Klucz API
```


### `fof-anti-spam`

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_label%22)

> API Key

```diff
-Klucz AIP
+Klucz API
```

Klucz <del>AIP</del><ins>API</ins>

#### [`fof-anti-spam.admin.settings.stopforumspam.frequency_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.frequency_help%22)

> The number of spam reports between all enabled checks that will trip the spam filter.
> Ex: If the email has 1 hit, and the ip has 2 hits, there will be 3 hits in total. If the threshold is set to 3 or less we will prevent the registration.
>

```diff
-Liczba zgłoszeń spamu między wszystkimi włączonymi opcjami, które spowodują wyzwolenie filtra antyspamowego.
+Łączna liczba zgłoszeń spamu ze wszystkich włączonych metod sprawdzania, które spowodują wyzwolenie filtra antyspamowego.
 Na przykład: Jeśli e-mail ma 1 trafienie, a adres IP ma 2 trafienia, w sumie będą 3 trafienia. Jeśli próg jest ustawiony na 3 lub mniej, uniemożliwimy rejestrację.

```

<del>Liczba</del><ins>Łączna liczba</ins> zgłoszeń spamu <del>między</del><ins>ze</ins> <del>wszystkimi</del><ins>wszystkich</ins> <del>włączonymi</del><ins>włączonych</ins> <del>opcjami,</del><ins>metod sprawdzania,</ins> które spowodują wyzwolenie filtra antyspamowego.<br />Na przykład: Jeśli e-mail ma 1 trafienie, a adres IP ma 2 trafienia, w sumie będą 3 trafienia. Jeśli próg jest ustawiony na 3 lub mniej, uniemożliwimy rejestrację.<br />

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help%22)

> By default we will direct the lookup to the closest regional server in order to provide the fastest response. Should you wish to restrict traffic to a specific region, such as for compliance with company or country privacy regulations, then you can force a connection to a specific region.

```diff
-Domyślnie skierujemy wyszukiwanie do najbliższego serwera regionalnego, aby zapewnić najszybszą odpowiedź. Jeśli chcesz ograniczyć ruch do określonego regionu, na przykład w celu zapewnienia zgodności z przepisami dotyczącymi prywatności firmy lub kraju, możesz wymusić połączenie z określonym regionem.
+Zapytania będą domyślnie wysyłane do najbliższego serwera regionalnego, aby zapewnić najszybszą odpowiedź. Jeśli chcesz ograniczyć ruch do określonego regionu, na przykład w celu zapewnienia zgodności z przepisami dotyczącymi prywatności firmy lub kraju, możesz wymusić połączenie z określonym regionem.
```

<del>Domyślnie</del><ins>Zapytania</ins> <del>skierujemy</del><ins>będą</ins> <del>wyszukiwanie</del><ins>domyślnie wysyłane</ins> do najbliższego serwera regionalnego, aby zapewnić najszybszą odpowiedź. Jeśli chcesz ograniczyć ruch do określonego regionu, na przykład w celu zapewnienia zgodności z przepisami dotyczącymi prywatności firmy lub kraju, możesz wymusić połączenie z określonym regionem.

#### [`fof-anti-spam.forum.message.stopforumspam.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22fof-anti-spam.forum.message.stopforumspam.blocked%22)

> Details of your registration have been found in a spam prevention database, therefore your registration has been blocked.

```diff
-Szczegóły Twojej rejestracji zostały znalezione w bazie danych zapobiegania spamowi, dlatego Twoja rejestracja została zablokowana.
+Dane podane podczas rejestracji znajdują się w bazie danych używanej do wykrywania spamu, dlatego rejestracja została zablokowana.
```

<del>Szczegóły</del><ins>Dane</ins> <del>Twojej</del><ins>podane podczas</ins> rejestracji <del>zostały</del><ins>znajdują</ins> <del>znalezione</del><ins>się</ins> w bazie danych <del>zapobiegania</del><ins>używanej</ins> <del>spamowi,</del><ins>do</ins> <del>dlatego</del><ins>wykrywania</ins> <del>Twoja</del><ins>spamu, dlatego</ins> rejestracja została zablokowana.

#### [`fof-anti-spam.forum.spammer_modal.intro`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.intro%22)

> When marking a user as a spammer, several actions will be taken, which depends on the extensions available on your forum.

```diff
-Oznaczając użytkownika jako spamera, zostanie podjętych kilka działań, które zależą od rozszerzeń dostępnych na Twoim forum.
+Po oznaczeniu użytkownika jako spamera zostaną wykonane działania zależne od rozszerzeń zainstalowanych na forum.
```

<del>Oznaczając</del><ins>Po oznaczeniu</ins> użytkownika jako<del> spamera, zostanie</del> <del>podjętych</del><ins>spamera</ins> <del>kilka</del><ins>zostaną</ins> <del>działań,</del><ins>wykonane</ins> <del>które</del><ins>działania</ins> <del>zależą</del><ins>zależne</ins> od rozszerzeń <del>dostępnych</del><ins>zainstalowanych</ins> na<del> Twoim</del> forum.


### `fof-masquerade`

#### [`fof-masquerade.admin.types.boolean`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pl/?q=context%3A%3D%22fof-masquerade.admin.types.boolean%22)

> Checkbox

```diff
-Checkbox
+Pole wyboru
```


### `fof-pwa`

#### [`fof-pwa.admin.pwa.about.long_name_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pl/?q=context%3A%3D%22fof-pwa.admin.pwa.about.long_name_text%22)

> The name of the web application displayed to the user.

```diff
-Nazwa aplikacji wyświetlana użytkownikom.
+Pełna nazwa aplikacji wyświetlana użytkownikom.
```

<del>Nazwa</del><ins>Pełna nazwa</ins> aplikacji wyświetlana użytkownikom.

#### [`fof-pwa.forum.settings.pwa_notifications.access_default_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pl/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_default_button%22)

> Opt In

```diff
-Zgadzam się
+Włącz
```


## Missing translations

These strings are translated only in `pl`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `pl`.


### `fof-anti-spam` (missing)

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
+Zablokowano rejestrację użytkownika {username} ({email}) z {ip})
```

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pl/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
+Oznaczono {username} jako spamera
```


### `fof-best-answer` (missing)

#### [`flarum-audit.lib.browser.discussion.best_answer_set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pl/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_set%22)

> Set {post} as best answer in {discussion}

```diff
+Wybrano {post} jako najlepsza odpowiedź w {discussion}
```

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pl/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
+Cofnięto oznaczenie {post} jako najlepszej odpowiedzi w {discussion}
```


### `fof-follow-tags` (missing)

#### [`fof-follow-tags.admin.basics.following_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.basics.following_label%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```

#### [`fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label%22)

> Show all discussions on the Following page for guests

```diff
+Pokazuj wszystkie dyskusje gościom na stronie „Obserwowane”
```

#### [`fof-follow-tags.admin.settings.prompt_button_on_following_page_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_button_on_following_page_label%22)

> Show a "Choose tags to follow" button on the Following page

```diff
+Pokaż przycisk „Wybierz tagi do obserwowania” na stronie „Obserwowane”
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_help`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_help%22)

> Users who have not confirmed their choice yet will be shown a modal asking them to follow tags. The modal will keep coming back on each visit until they press "Continue to forum".
>

```diff
+Użytkownicy, którzy nie potwierdzili jeszcze swojego wyboru, zobaczą okno z prośbą o wybranie tagów do obserwowania. Okno będzie wyświetlane przy każdej wizycie, dopóki nie klikną „Przejdź do forum”.
+
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_label%22)

> Prompt new users to choose tags to follow

```diff
+Proś nowych użytkowników o wybranie tagów do obserwowania
```

#### [`fof-follow-tags.admin.settings.prompt_tag_ids_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_ids_label%22)

> Tags to offer

```diff
+Tagi do wyświetlenia
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_label%22)

> Tags to offer in the prompt

```diff
+Tagi wyświetlane w oknie wyboru
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.all`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.all%22)

> All tags

```diff
+Wszystkie tagi
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.list`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.list%22)

> Tags selected below

```diff
+Tagi wybrane poniżej
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary%22)

> First-level primary tags

```diff
+Tagi główne pierwszego poziomu
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren%22)

> All primary tags of any level

```diff
+Wszystkie tagi główne, niezależnie od poziomu
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary%22)

> First-level primary tags and secondary tags

```diff
+Tagi główne pierwszego poziomu i tagi dodatkowe
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary%22)

> Only secondary tags

```diff
+Tylko tagi dodatkowe
```

#### [`fof-follow-tags.forum.prompt.choose_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.forum.prompt.choose_button%22)

> Choose tags to follow

```diff
+Wybierz tagi do obserwowania
```

#### [`fof-follow-tags.forum.prompt.continue_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.forum.prompt.continue_button%22)

> Continue to forum

```diff
+Przejdź do forum
```

#### [`fof-follow-tags.forum.prompt.later_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.forum.prompt.later_button%22)

> Remind me later

```diff
+Przypomnij mi później
```

#### [`fof-follow-tags.forum.prompt.modal_title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pl/?q=context%3A%3D%22fof-follow-tags.forum.prompt.modal_title%22)

> Choose tags to follow

```diff
+Wybierz tagi do obserwowania
```


### `fof-links` (missing)

#### [`fof-links.admin.edit_link.icon_additional_text`](https://weblate.rob006.net/translate/flarum2/fof-links/pl/?q=context%3A%3D%22fof-links.admin.edit_link.icon_additional_text%22)

> If you want to use a brand icon, the prefix is &lt;code&gt;fab fa-&lt;/code&gt; instead.

```diff
+Jeśli chcesz użyć ikony marki, zamiast tego zastosuj prefiks <code>fab fa-</code>.
```


### `fof-masquerade` (missing)

#### [`flarum-audit.lib.browser.masquerade.profile_updated`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pl/?q=context%3A%3D%22flarum-audit.lib.browser.masquerade.profile_updated%22)

> Updated {username}'s profile fields

```diff
+Zaktualizowano pola profilu użytkownika {username}
```


### `fof-pwa` (missing)

#### [`fof-pwa.admin.pwa.other.share_buttons_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pl/?q=context%3A%3D%22fof-pwa.admin.pwa.other.share_buttons_label%22)

> Enable share buttons

```diff
+Włącz przyciski udostępniania
```

#### [`fof-pwa.admin.pwa.other.share_buttons_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pl/?q=context%3A%3D%22fof-pwa.admin.pwa.other.share_buttons_text%22)

> If enabled, a "Share" button will be added to discussions, posts, and users.

```diff
+Po włączeniu przycisk „Udostępnij” zostanie dodany do dyskusji, postów i profili użytkowników.
```

<!-- {% endraw %} -->
