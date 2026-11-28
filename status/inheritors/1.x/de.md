# German inherited translations differences

Translations for German (`de`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **2** are translated differently and **7** are
translated only in `de`. Altogether they cover **3** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [1](#core) | 0 |
| `flarum-extension-manager` | [1](#flarum-extension-manager) | 0 |
| `forumfortress-flarum` | 0 | [7](#forumfortress-flarum-missing) |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `de` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/de/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Wähle den Treiber, welcher die Foren-URLs mit einem "Slug" ausstattet.
+Wähle den Treiber, welcher die Foren-URLs mit einem „Slug“ ausstattet.
```

Wähle den Treiber, welcher die Foren-URLs mit einem <del>"Slug"</del><ins>„Slug“</ins> ausstattet.


### `flarum-extension-manager`

#### [`flarum-extension-manager.admin.extensions.install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/de/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install%22)

> Install a new extension

```diff
-Installiere eine neue Erweiterung
+Neue Erweiterung installieren
```

<del>Installiere eine neue</del><ins>Neue</ins> Erweiterung<ins> installieren</ins>


## Missing translations

These strings are translated only in `de`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `de`.


### `forumfortress-flarum` (missing)

#### [`forumfortress-flarum.admin.settings.add_detected_proxy`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.add_detected_proxy%22)

> Add detected proxy

```diff
+Erkannten Proxy hinzufügen
```

#### [`forumfortress-flarum.admin.settings.advanced_proxy_settings`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.advanced_proxy_settings%22)

> Advanced reverse proxy settings

```diff
+Erweiterte Einstellungen für Reverse-Proxy
```

#### [`forumfortress-flarum.admin.settings.forwarded_ip_header_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.forwarded_ip_header_help%22)

> With trusted proxies configured, select the header your proxy sets. Automatic detection tries X-Forwarded-For, Forwarded, X-Real-IP, CF-Connecting-IP and True-Client-IP in that order. Configure the proxy to replace incoming values or append the verified peer for list headers.

```diff
+Nachdem du vertrauenswürdige Proxys konfiguriert hast, wählst du den Header aus, den dein Proxy setzt. Bei der automatischen Erkennung werden nacheinander die Header „X-Forwarded-For“, „Forwarded“, „X-Real-IP“, „CF-Connecting-IP“ und „True-Client-IP“ geprüft. Konfiguriere den Proxy so, dass eingehende Werte ersetzt oder bei Listen-Headern der verifizierte Peer angehängt wird.
```

#### [`forumfortress-flarum.admin.settings.forwarded_ip_header_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.forwarded_ip_header_label%22)

> Forwarded client IP header

```diff
+IP-Header des weitergeleiteten Clients
```

#### [`forumfortress-flarum.admin.settings.proxy_hint`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.proxy_hint%22)

> This connection came from {address} with {header}. Add this address if it belongs to a proxy you control.

```diff
+Diese Verbindung stammt von {address} mit {header}. Füge diese Adresse hinzu, wenn sie zu einem Proxy gehört, den du verwaltest.
```

#### [`forumfortress-flarum.admin.settings.trusted_proxies_help`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.trusted_proxies_help%22)

> Enter the IP addresses or CIDR ranges of your trusted proxies, separated by commas. With the default header selection and this field blank, Forum Fortress checks supported headers when the connection comes from a local or reserved address.

```diff
+Gib die IP-Adressen oder CIDR-Bereiche deiner vertrauenswürdigen Proxys durch Kommas getrennt ein. Bei der Standardauswahl für Header und einem leeren Feld überprüft Forum Fortress die unterstützten Header, wenn die Verbindung von einer lokalen oder reservierten Adresse stammt.
```

#### [`forumfortress-flarum.admin.settings.trusted_proxies_label`](https://weblate.rob006.net/translate/flarum2/forumfortress-flarum/de/?q=context%3A%3D%22forumfortress-flarum.admin.settings.trusted_proxies_label%22)

> Trusted reverse proxies

```diff
+Vertrauenswürdige Reverse-Proxys
```

<!-- {% endraw %} -->
