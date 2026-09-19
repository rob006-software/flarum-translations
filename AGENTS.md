# Instructions for AI agents

This repository contains raw translation data for [Flarum](https://flarum.org/) core and community extensions.
It is managed by [flarum-translations-builder](https://github.com/rob006-software/flarum-translations-builder) (the code
responsible for all automation lives there) and by a Weblate instance, with separate projects for
[Flarum 1.x](https://weblate.rob006.net/projects/flarum/) and [Flarum 2.x](https://weblate.rob006.net/projects/flarum2/).
Most of the files here are generated or updated automatically - as a translator you should only edit files in
`translations/<language>/`.

Weblate is behind Cloudflare with aggressive anti-bot protection (API endpoints included) - do not try to interact with
it. Everything you need is in this repository; contribute through a GitHub pull request (see below).


## Repository layout

- `sources/<component>.json` - English phrases fetched directly from extensions. Generated, never edit.
- `translations/<language>/<component>.json` - translations for a specific language. This is what you edit.
- `config/components.php` - list of components and URLs of the English source files. URLs contain the repository and
  the exact tag/version the sources were fetched from. `__builtInLanguages` lists languages that the extension already
  ships itself - these languages intentionally have no translation file for that component.
- `config/languages.php` - list of supported languages (language codes used as directory names).
- `config/inheritors.php` - languages that inherit translations from other languages (see below).
- `README.md` - list of supported extensions with links to their repositories.
- `status/<language>.md` - translation status per language. Extensions are sorted by popularity (rank, downloads),
  so extensions near the top of the list should be translated first. `status/inheritors/` lists differences between
  inherited translations.
- `status/*` (other files), `metadata/`, `cache/`, `config/` - managed by automation, do not edit.

Component name is derived from the Composer package name: `fof/username-request` -> `fof-username-request.json`.


## Branches and workflow

There are two branches:

- `master` - translations for Flarum 1.x,
- `flarum2` - translations for Flarum 2.x.

Always explain this setup to the owner and **ask which branch should be targeted** before you start. Suggest starting
with Flarum 1.x (`master`): translations from 1.x are automatically copied to 2.x (for phrases with identical
English source that are not translated in 2.x yet). Preferred flow:

1. Translate on `master`, open a PR.
2. After the PR is merged, the translations are copied to `flarum2` within ~10 minutes.
3. Fetch upstream changes, translate whatever is still missing on `flarum2`, open a second PR.

Merging the first PR may take a while, so opening PRs for both branches at the same time is fine too - as long as
translations are consistent and the same phrase is not translated differently on each branch. Handling both branches
in the same session may also be cheaper, since the same context (terminology, already translated phrases) can be
reused.

Contributors do not have write access to this repository - fork it and open a PR from the fork:

- Before starting, make sure your local branch is synced with the upstream branch you target
  (`rob006-software/flarum-translations`). Weblate and automation commit to both branches very often.
- All the work should go to a single PR. It may contain many commits (for example one commit per extension) or one
  big commit - both are fine.
- Make sure the PR targets the correct base branch (`master` or `flarum2`).


## Hard rules

- **Never add or remove keys, and never add or remove files.** Only change values of existing keys. Untranslated
  phrases already exist as keys with an empty value (`""`).
- If a translation file for a component is missing in your language, do not create it. It is omitted intentionally -
  the extension ships translations for this language itself (see `__builtInLanguages` in `config/components.php`).
- Translation files may contain keys that do not exist in `sources/`. Do not remove them - they are kept for backward
  compatibility (older extension versions) and are removed automatically after some time. Translating them is not
  needed.
- Keep the file format untouched: nested JSON, 4-space indentation, unescaped Unicode (write `ł` directly, not as
  the `\u0142` escape sequence), unescaped slashes, key order unchanged, trailing newline at the end of file.
- Do not edit `sources/`, `status/`, `config/`, `metadata/`, `cache/` or `README.md`.

A quick sanity check: each changed line should be a pure replacement, so `git diff --numstat` should show the same
number of added and removed lines for every file.


## ICU MessageFormat

Translations use [ICU MessageFormat](https://unicode-org.github.io/icu/userguide/format_parse/messages/). Flarum
docs: https://docs.flarum.org/extend/i18n/ (source: https://github.com/flarum/docs/blob/main/docs/extend/i18n.md).
The docs describe YAML files - this repository uses JSON, the data is converted to YAML when exported to language packs.

- **Placeholders** (`{username}`, `{count}`, `{discussion}`, `{0}`, ...) must stay exactly as in the source - never
  translate or rename them. You may reorder them as your language requires. Many placeholders are replaced by rendered
  elements (for example `{username}` is often a link with the user name, `{ago}` or `{time}` is a relative date like
  "3 minutes ago"), so the placeholder value cannot be inflected - build the sentence so that it works with the value
  as-is (e.g. put the value in a position where the nominative case fits, or use a construction like "Label: {value}").
  Never replace a placeholder with a hardcoded value (e.g. `10` instead of `{max}`).
- **Tags** (`<a>...</a>`, `<b>`, `<strong>`, `<code>`, `<link>`, `<username>`, ...) are markup or components inserted by
  the extension. Keep tag names intact and balanced, translate only the text between them. Content of `<code>` is
  usually code, a setting name or a command - do not translate it. A few angle-bracketed strings are literal text or
  keyboard shortcut notation (e.g. `<shift-{modifierKey}-9>`) - check the source context and keep shortcuts as-is.
- **Plurals**: keywords `plural`, `one`, `few`, `many`, `other`, `=0`, `=1` and the `#` sign are syntax, never translate
  them. Use the plural categories **required by your language**, not the ones used by English
  (see [CLDR plural rules](https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html)).
  Polish for example needs `one`/`few`/`many`/`other`:
  ```
  "{count, plural, one {# comment} other {# comments}}"
  "{count, plural, one {# komentarz} few {# komentarze} many {# komentarzy} other {# komentarza}}"
  ```
  The `other` category is always required. Do not drop `#` from the `one` branch unless `one` means exactly 1 in your
  language (in many languages `one` also matches 21, 31, ...) - use `=1 {...}` for an "exactly one" message instead.
  Inside a plural branch, use `#` for the plural value rather than `{count}` - PHP fails to format a message where the
  same argument is used both as `plural` and as a plain placeholder.
- Nested placeholders inside plural branches are fine (`{count, plural, one {{users} likes it} other {...}}`), but keep
  braces balanced.
- **Apostrophes**: avoid the ASCII apostrophe (`'`) directly before `{`, `}`, `'` or (inside plural) `#`. Flarum
  formats the same message with different ICU implementations depending on where it is rendered, and they disagree:
  - PHP (backend, emails, both 1.x and 2.x) and JS in Flarum 2.x (`format-message`) treat `'` as an escape character:
    `File '{name}' deleted` renders as `File {name} deleted`, `l'{name}` renders as `l{name}`, and an apostrophe
    before `#` in a plural branch breaks the whole message (it throws an error).
  - JS in Flarum 1.x (`@ultraq/icu-message-formatter`) treats `'` literally: `File 'X' deleted`, `l'X`.

  Since you usually can't tell where a phrase is rendered, and doubling (`''`) is not portable either, use typographic
  characters instead: `’` for elision/possessive (`l’{name}`), and quotes of your language (`„…”`, `«…»`, `“…”`) for
  quoting. An apostrophe followed by a letter (`It's`, `l'utilisateur`) is safe everywhere.

  The opposite case: if the source uses apostrophes to escape literal braces (`'{{ login_url }}'`, a regex like
  `'{20,}'`), keep them in the translation - without them the message is invalid. Quotes of your language may go
  outside: `„'{{ login_url }}'“`.
- Keep leading/trailing punctuation and whitespace consistent with the source (e.g. trailing `…`, `:` or `.`), unless
  your language's typography requires otherwise.


## References (`=> some.key`)

Phrases in the format `=> some.key` are references to another translation (for example `=> core.ref.delete`), possibly
from another component. They don't need to be translated:

- To mark such a phrase as translated, copy the source value (`=> core.ref.delete`) as the translation. Make sure the
  referenced phrase is translated too.
- Sometimes a literal phrase is better, because your language cannot use the same phrase in every context where the
  extension author reused it. For example the same English word may need a different grammatical case, gender or
  number (Polish: `Discord` in "Log in with Discord" must be `Discorda`; "Deleted" depends on the gender of the deleted
  object; a permission name is usually a noun like "Przenoszenie postów", not the imperative "Przenieś posty" used on a
  button). In such cases write the literal translation instead of the reference.
- You may also point to a different existing key that fits better (`=> other.existing.key`), but the target key must
  exist in `sources/` - keys that exist only in translation files are legacy and will be removed.
- **Never translate the reference itself** (e.g. `=> jakiś.klucz`) - that breaks the reference.
- Keys under `*.ref.*` are reused in many places - translate them in a neutral form that fits all usages.


## Inherited languages

Some languages inherit translations automatically (see `config/inheritors.php`):

- `de@formal` from `de`, `es@formal` from `es`,
- `sr_Latn` from `sr_Cyrl` (transliterated to Latin script).

Empty phrases in the inheriting language are filled from the base language, and later changes of the base language are
propagated as long as the phrase was not modified in the inheriting language. So translate the base language first, and
in the inheriting language only change phrases that really differ (e.g. formal vs. informal address).


## Style and consistency

- Before translating, check existing translations in your language (especially `core.json` and popular extensions) to
  learn the established terminology and form of address (formal/informal, "you" singular/plural). Stay consistent
  with it - the same English term should be translated the same way everywhere.
- The user's gender is usually unknown (`{username} replied`). Follow the convention already used in your language's
  translations instead of inventing a new one.
- Translate the meaning, not word by word. UI labels should be short: button labels are usually imperatives, headings
  and permission names are usually nouns.
- Do not translate product and brand names (Flarum, GitHub, Discord, ...), except inflection required by grammar.


## Missing context

The key name (e.g. `admin.settings.xxx_label`, `forum.composer.xxx_button`) often tells where and how a phrase is used.
If that's not enough:

- You may check how the same phrase is translated in other languages (`translations/*/<component>.json`), but take it
  with a grain of salt - those translations may be wrong (machine translations, or human translations made without
  checking the context).
- You may analyze the extension source code - repository URL is in `README.md`, and the exact version can be found
  in URLs in `config/components.php`. This can be expensive (many tokens), so **ask the owner before going that route**.
