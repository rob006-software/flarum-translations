# Portuguese (Brazil) inherited translations differences

Translations for Portuguese (Brazil) (`pt_BR`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **649** are translated differently and **2120** are
translated only in `pt_BR`. Altogether they cover **92** components.

<!-- {% raw %} -->


## Contents

| Component | Different translations | Missing translations |
| --- | --- | --- |
| `core` | [118](#core) | [33](#core-missing) |
| `flarum-akismet` | [4](#flarum-akismet) | 0 |
| `flarum-audit` | 0 | [93](#flarum-audit-missing) |
| `flarum-extension-manager` | 0 | [105](#flarum-extension-manager-missing) |
| `flarum-flags` | [8](#flarum-flags) | 0 |
| `flarum-gdpr` | [19](#flarum-gdpr) | [14](#flarum-gdpr-missing) |
| `flarum-likes` | [5](#flarum-likes) | [1](#flarum-likes-missing) |
| `flarum-lock` | [3](#flarum-lock) | 0 |
| `flarum-markdown` | [3](#flarum-markdown) | 0 |
| `flarum-mentions` | [10](#flarum-mentions) | [3](#flarum-mentions-missing) |
| `flarum-nicknames` | [9](#flarum-nicknames) | 0 |
| `flarum-statistics` | [7](#flarum-statistics) | 0 |
| `flarum-sticky` | [3](#flarum-sticky) | [1](#flarum-sticky-missing) |
| `flarum-subscriptions` | [4](#flarum-subscriptions) | 0 |
| `flarum-suspend` | [6](#flarum-suspend) | 0 |
| `flarum-tags` | [20](#flarum-tags) | [10](#flarum-tags-missing) |
| `fof-amazon-affiliation` | 0 | [8](#fof-amazon-affiliation-missing) |
| `fof-analytics` | 0 | [20](#fof-analytics-missing) |
| `fof-anti-spam` | 0 | [63](#fof-anti-spam-missing) |
| `fof-author-change` | 0 | [16](#fof-author-change-missing) |
| `fof-badges` | 0 | [289](#fof-badges-missing) |
| `fof-ban-ips` | 0 | [44](#fof-ban-ips-missing) |
| `fof-best-answer` | [38](#fof-best-answer) | [18](#fof-best-answer-missing) |
| `fof-blog` | [35](#fof-blog) | [8](#fof-blog-missing) |
| `fof-bookmarks` | 0 | [22](#fof-bookmarks-missing) |
| `fof-byobu` | [31](#fof-byobu) | [4](#fof-byobu-missing) |
| `fof-categories` | 0 | [27](#fof-categories-missing) |
| `fof-checklist` | 0 | [2](#fof-checklist-missing) |
| `fof-clockwork` | 0 | [1](#fof-clockwork-missing) |
| `fof-cookie-consent` | 0 | [7](#fof-cookie-consent-missing) |
| `fof-default-group` | [1](#fof-default-group) | 0 |
| `fof-default-user-preferences` | 0 | [11](#fof-default-user-preferences-missing) |
| `fof-discussion-templates` | [3](#fof-discussion-templates) | 0 |
| `fof-discussion-thumbnail` | [1](#fof-discussion-thumbnail) | 0 |
| `fof-discussion-views` | 0 | [6](#fof-discussion-views-missing) |
| `fof-doorman` | [2](#fof-doorman) | [57](#fof-doorman-missing) |
| `fof-drafts` | 0 | [40](#fof-drafts-missing) |
| `fof-filter` | 0 | [24](#fof-filter-missing) |
| `fof-first-post-approval` | 0 | [7](#fof-first-post-approval-missing) |
| `fof-follow-tags` | [13](#fof-follow-tags) | [23](#fof-follow-tags-missing) |
| `fof-formatting` | [4](#fof-formatting) | 0 |
| `fof-forum-statistics-widget` | [4](#fof-forum-statistics-widget) | [6](#fof-forum-statistics-widget-missing) |
| `fof-forum-stats-widget` | 0 | [6](#fof-forum-stats-widget-missing) |
| `fof-forum-widgets-core` | 0 | [3](#fof-forum-widgets-core-missing) |
| `fof-gamification` | [48](#fof-gamification) | 0 |
| `fof-geoip` | 0 | [69](#fof-geoip-missing) |
| `fof-github-sponsors` | 0 | [10](#fof-github-sponsors-missing) |
| `fof-horizon` | 0 | [25](#fof-horizon-missing) |
| `fof-html-errors` | 0 | [5](#fof-html-errors-missing) |
| `fof-ignore-users` | 0 | [9](#fof-ignore-users-missing) |
| `fof-impersonate` | 0 | [8](#fof-impersonate-missing) |
| `fof-linguist` | 0 | [76](#fof-linguist-missing) |
| `fof-links` | [1](#fof-links) | [2](#fof-links-missing) |
| `fof-mailing` | 0 | [19](#fof-mailing-missing) |
| `fof-mark-unread` | 0 | [2](#fof-mark-unread-missing) |
| `fof-masquerade` | 0 | [42](#fof-masquerade-missing) |
| `fof-merge-discussions` | 0 | [23](#fof-merge-discussions-missing) |
| `fof-moderator-notes` | [8](#fof-moderator-notes) | [1](#fof-moderator-notes-missing) |
| `fof-moderator-warnings` | [27](#fof-moderator-warnings) | 0 |
| `fof-move-posts` | 0 | [29](#fof-move-posts-missing) |
| `fof-news-widget` | 0 | [3](#fof-news-widget-missing) |
| `fof-oauth` | [20](#fof-oauth) | [15](#fof-oauth-missing) |
| `fof-online-users-widget` | 0 | [6](#fof-online-users-widget-missing) |
| `fof-open-collective` | 0 | [13](#fof-open-collective-missing) |
| `fof-pages` | [7](#fof-pages) | 0 |
| `fof-photoswipe` | 0 | [5](#fof-photoswipe-missing) |
| `fof-polls` | [24](#fof-polls) | [105](#fof-polls-missing) |
| `fof-profile-image-crop` | 0 | [5](#fof-profile-image-crop-missing) |
| `fof-pwa` | 0 | [40](#fof-pwa-missing) |
| `fof-pwned-passwords` | 0 | [6](#fof-pwned-passwords-missing) |
| `fof-reactions` | [12](#fof-reactions) | [9](#fof-reactions-missing) |
| `fof-recaptcha` | [2](#fof-recaptcha) | [9](#fof-recaptcha-missing) |
| `fof-rich-text` | 0 | [19](#fof-rich-text-missing) |
| `fof-sentry` | 0 | [39](#fof-sentry-missing) |
| `fof-seo` | 0 | [195](#fof-seo-missing) |
| `fof-share-social` | 0 | [20](#fof-share-social-missing) |
| `fof-signature` | 0 | [17](#fof-signature-missing) |
| `fof-sitemap` | [14](#fof-sitemap) | [17](#fof-sitemap-missing) |
| `fof-socialprofile` | [8](#fof-socialprofile) | [1](#fof-socialprofile-missing) |
| `fof-split` | [4](#fof-split) | [1](#fof-split-missing) |
| `fof-subscribed` | [23](#fof-subscribed) | 0 |
| `fof-synopsis` | 0 | [12](#fof-synopsis-missing) |
| `fof-terms` | [14](#fof-terms) | [7](#fof-terms-missing) |
| `fof-top-posters-widget` | 0 | [2](#fof-top-posters-widget-missing) |
| `fof-upgrade-advisor` | 0 | [69](#fof-upgrade-advisor-missing) |
| `fof-upload` | [52](#fof-upload) | [60](#fof-upload-missing) |
| `fof-user-bio` | [2](#fof-user-bio) | [7](#fof-user-bio-missing) |
| `fof-user-directory` | [17](#fof-user-directory) | [2](#fof-user-directory-missing) |
| `fof-usercard-stats` | 0 | [2](#fof-usercard-stats-missing) |
| `fof-username-request` | 0 | [68](#fof-username-request-missing) |
| `fof-webhooks` | 0 | [74](#fof-webhooks-missing) |
| `validation` | [15](#validation) | 0 |


## Different translations

Each entry contains the English source string, followed by a diff between the translation from Flarum 1.x (`-` line) and the translation from `pt_BR` (`+` line). Changed words are additionally marked as <del>removed</del> and <ins>added</ins> below the diff.


### `core`

#### [`core.admin.appearance.colored_header_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.colored_header_label%22)

> Colored Header

```diff
-Cabeçalho colorido
+Cabeçalho Colorido
```

Cabeçalho <del>colorido</del><ins>Colorido</ins>

#### [`core.admin.appearance.custom_footer_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.custom_footer_heading%22)

> Custom Footer

```diff
-Rodapé personalizado
+Rodapé Personalizado
```

Rodapé <del>personalizado</del><ins>Personalizado</ins>

#### [`core.admin.appearance.custom_header_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.custom_header_heading%22)

> Custom Header

```diff
-Cabeçalho personalizado
+Cabeçalho Personalizado
```

Cabeçalho <del>personalizado</del><ins>Personalizado</ins>

#### [`core.admin.appearance.custom_styles_cannot_use_less_features`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.custom_styles_cannot_use_less_features%22)

> The @import and data-uri features are not allowed in custom LESS.

```diff
-Os recursos @import e data-uri não são permitidos no LESS customizado.
+Os recursos @import e data-uri não são permitidos no LESS personalizado.
```

Os recursos @import e data-uri não são permitidos no LESS <del>customizado.</del><ins>personalizado.</ins>

#### [`core.admin.appearance.edit_css_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.edit_css_button%22)

> Edit Custom CSS

```diff
-Editar CSS personalizado
+Editar CSS Personalizado
```

Editar CSS <del>personalizado</del><ins>Personalizado</ins>

#### [`core.admin.appearance.favicon_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.favicon_text%22)

> Upload an image to be displayed as the forum's shortcut icon.

```diff
-Carregue uma imagem para ser exibida como ícone do fórum.
+Envie uma imagem para ser exibida como ícone de atalho do fórum.
```

<del>Carregue</del><ins>Envie</ins> uma imagem para ser exibida como ícone<ins> de atalho</ins> do fórum.

#### [`core.admin.appearance.logo_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.appearance.logo_text%22)

> Upload an image to be displayed in place of the forum title.

```diff
-Carregue uma imagem para ser exibida no lugar do título do fórum.
+Envie uma imagem para ser exibida no lugar do título do fórum.
```

<del>Carregue</del><ins>Envie</ins> uma imagem para ser exibida no lugar do título do fórum.

#### [`core.admin.basics.default_language_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.default_language_heading%22)

> Default Language

```diff
-Idioma padrão
+Idioma Padrão
```

Idioma <del>padrão</del><ins>Padrão</ins>

#### [`core.admin.basics.home_page_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.home_page_text%22)

> Choose the page which users will first see when they visit your forum.

```diff
-Escolha a página que os usuários verão pela primeira vez quando visitarem seu fórum.
+Escolha a página que os usuários verão primeiro ao visitarem seu fórum.
```

Escolha a página que os usuários verão <del>pela primeira vez</del><ins>primeiro</ins> <del>quando</del><ins>ao</ins> visitarem seu fórum.

#### [`core.admin.basics.slug_driver_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.slug_driver_heading%22)

> Slug Driver: {model}

```diff
-Slug Driver: {model}
+Driver de Slug: {model}
```

<del>Slug</del><ins>Driver</ins> <del>Driver:</del><ins>de Slug:</ins> {model}

#### [`core.admin.basics.slug_driver_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.slug_driver_text%22)

> Select a driver to be used for slugging this model.

```diff
-Selecione um driver a ser usado para criar URLs amigáveis (slugs) deste modelo.
+Selecione um driver a ser usado para gerar os slugs deste modelo.
```

Selecione um driver a ser usado para <del>criar URLs</del><ins>gerar</ins> <del>amigáveis</del><ins>os</ins> <del>(slugs)</del><ins>slugs</ins> deste modelo.

#### [`core.admin.basics.welcome_banner_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.welcome_banner_heading%22)

> Welcome Banner

```diff
-Banner de boas-vindas
+Banner de Boas-vindas
```

Banner de <del>boas-vindas</del><ins>Boas-vindas</ins>

#### [`core.admin.basics.welcome_banner_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.welcome_banner_text%22)

> Configure the text that displays in the banner on the All Discussions page. Use this to welcome guests to your forum.

```diff
-Configure o texto exibido no banner na página Todas as discussões. Use isso para receber convidados no seu fórum.
+Configure o texto exibido no banner na página Todas as Discussões. Use isso para receber convidados no seu fórum.
```

Configure o texto exibido no banner na página Todas as <del>discussões.</del><ins>Discussões.</ins> Use isso para receber convidados no seu fórum.

#### [`core.admin.dashboard.clear_cache_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.clear_cache_button%22)

> Clear Cache

```diff
-Limpar cache
+Limpar Cache
```

Limpar <del>cache</del><ins>Cache</ins>

#### [`core.admin.dashboard.io_error_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.io_error_message%22)

> Could not write to filesystem. Check your filesystem permissions and try again. Or try running from the command line.

```diff
-Não foi possível escrever no sistema de arquivos. Verifique as permissões e tente novamente ou execute pela linha de comando.
+Não foi possível escrever no sistema de arquivos. Verifique as permissões e tente novamente, ou execute pela linha de comando.
```

Não foi possível escrever no sistema de arquivos. Verifique as permissões e tente <del>novamente</del><ins>novamente,</ins> ou execute pela linha de comando.

#### [`core.admin.dashboard.status.scheduler.never-run`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.status.scheduler.never-run%22)

> Never run

```diff
-Nunca rodar
+Nunca executado
```

Nunca <del>rodar</del><ins>executado</ins>

#### [`core.admin.debug-warning.detail`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.debug-warning.detail%22)

> When &lt;code&gt;debug&lt;/code&gt; mode is active, Flarum will rebuild its &lt;code&gt;JavaScript&lt;/code&gt; and &lt;code&gt;CSS&lt;/code&gt; assets on every request, and could also potentially leak other information, such as database secrets, environment variables, etc.
>
> It is highly recommended to disable &lt;code&gt;debug&lt;/code&gt; in your &lt;code&gt;config.php&lt;/code&gt; file in production. See &lt;link&gt;Flarum docs&lt;/link&gt; for more information.
>

```diff
-Quando o modo <code>debug</code> estiver ativo, o Flarum reconstruirá seus ativos <code>JavaScript</code> e <code>CSS</code> em cada solicitação e também poderá vazar outras informações, como banco de dados, variáveis de ambiente, etc.
+Quando o modo <code>debug</code> está ativo, o Flarum reconstrói seus assets <code>JavaScript</code> e <code>CSS</code> a cada requisição, e também pode vazar outras informações, como segredos do banco de dados, variáveis de ambiente, etc.

-É altamente recomendado desabilitar <code>debug</code> em seu arquivo <code>config.php</code> em produção. Consulte a <link>Documentação do Flarum</link> para obter mais informações.
+É altamente recomendado desativar o <code>debug</code> em seu arquivo <code>config.php</code> em produção. Veja a <link>documentação do Flarum</link> para mais informações.

```

Quando o modo &lt;code&gt;debug&lt;/code&gt; <del>estiver</del><ins>está</ins> ativo, o Flarum <del>reconstruirá</del><ins>reconstrói</ins> seus <del>ativos</del><ins>assets</ins> &lt;code&gt;JavaScript&lt;/code&gt; e &lt;code&gt;CSS&lt;/code&gt; <del>em</del><ins>a</ins> cada <del>solicitação</del><ins>requisição,</ins> e também <del>poderá</del><ins>pode</ins> vazar outras informações, como<ins> segredos do</ins> banco de dados, variáveis de ambiente, etc.<br /><br />É altamente recomendado <del>desabilitar</del><ins>desativar o</ins> &lt;code&gt;debug&lt;/code&gt; em seu arquivo &lt;code&gt;config.php&lt;/code&gt; em produção. <del>Consulte</del><ins>Veja</ins> a <del>&lt;link&gt;Documentação</del><ins>&lt;link&gt;documentação</ins> do Flarum&lt;/link&gt; para<del> obter</del> mais informações.<br />

#### [`core.admin.debug-warning.label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.debug-warning.label%22)

> Debug mode active

```diff
-Modo Debug ativo
+Modo debug ativo
```

Modo <del>Debug</del><ins>debug</ins> ativo

#### [`core.admin.edit_css.customize_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.edit_css.customize_text%22)

> Customize your forum's appearance by adding your own Less/CSS code to be applied on top of Flarum's &lt;a&gt;default styles&lt;/a&gt;.

```diff
-Personalize a aparência do seu fórum adicionando seu próprio código Less / CSS para ser aplicado sobre o <a>estilo padrão</a> do Flarum.
+Personalize a aparência do seu fórum adicionando seu próprio código Less/CSS para ser aplicado sobre os <a>estilos padrão</a> do Flarum.
```

Personalize a aparência do seu fórum adicionando seu próprio código <del>Less / CSS</del><ins>Less/CSS</ins> para ser aplicado sobre <del>o</del><ins>os</ins> <del>&lt;a&gt;estilo</del><ins>&lt;a&gt;estilos</ins> padrão&lt;/a&gt; do Flarum.

#### [`core.admin.edit_css.title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.edit_css.title%22)

> Edit Custom CSS

```diff
-Editar CSS personalizado
+Editar CSS Personalizado
```

Editar CSS <del>personalizado</del><ins>Personalizado</ins>

#### [`core.admin.email.description`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.email.description%22)

> Configure the driver, settings and addresses your forum will use to send email.

```diff
-Configure o driver, as configurações e os endereços que seu fórum usará para enviar e-mail.
+Configure o driver, as configurações e os endereços que seu fórum usará para enviar e-mails.
```

Configure o driver, as configurações e os endereços que seu fórum usará para enviar <del>e-mail.</del><ins>e-mails.</ins>

#### [`core.admin.email.driver_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.email.driver_heading%22)

> Choose a Driver

```diff
-Escolha um driver
+Escolha um Driver
```

Escolha um <del>driver</del><ins>Driver</ins>

#### [`core.admin.email.send_test_mail_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.email.send_test_mail_heading%22)

> Send Test Mail

```diff
-Enviar teste de e-mail
+Enviar E-mail de Teste
```

Enviar <del>teste</del><ins>E-mail</ins> de <del>e-mail</del><ins>Teste</ins>

#### [`core.admin.email.send_test_mail_success`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.email.send_test_mail_success%22)

> Test mail sent successfully!

```diff
-Teste de e-mail enviado com sucesso!
+E-mail de teste enviado com sucesso!
```

<del>Teste</del><ins>E-mail</ins> de <del>e-mail</del><ins>teste</ins> enviado com sucesso!

#### [`core.admin.extension.configure_scopes`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.configure_scopes%22)

> Configure Scopes

```diff
-Configurações
+Configurar Escopos
```

#### [`core.admin.extension.confirm_purge`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.confirm_purge%22)

> Purging will remove all database entries and assets related to the extension. It will not uninstall the extension; that must be done via Composer. Are you sure you want to continue?

```diff
-A limpeza removerá todas as entradas do banco de dados e recursos relacionados à extensão. Ela NÃO desinstalará a extensão; isso deve ser feito via Composer. Tem certeza de que deseja continuar?
+A limpeza removerá todas as entradas do banco de dados e recursos relacionados à extensão. Não desinstalará a extensão; isso deve ser feito via Composer. Tem certeza de que deseja continuar?
```

A limpeza removerá todas as entradas do banco de dados e recursos relacionados à extensão. <del>Ela NÃO</del><ins>Não</ins> desinstalará a extensão; isso deve ser feito via Composer. Tem certeza de que deseja continuar?

#### [`core.admin.extension.disabled`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.disabled%22)

> Disabled

```diff
-Desabilitada
+Desativada
```

#### [`core.admin.extension.enabled`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.enabled%22)

> Enabled

```diff
-Habilitada
+Ativada
```

#### [`core.admin.extension.info_links.discuss`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.info_links.discuss%22)

> Discuss

```diff
-Discussão
+Discutir
```

#### [`core.admin.extension.info_links.source`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.info_links.source%22)

> Source

```diff
-Source
+Fonte
```

#### [`core.admin.extension.readme.title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.readme.title%22)

> {extName} documentation

```diff
-Documentação da extensão {extName}
+Documentação de {extName}
```

Documentação <del>da extensão</del><ins>de</ins> {extName}

#### [`core.admin.loading.title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.loading.title%22)

> Please Wait...

```diff
-Por favor, espere...
+Aguarde...
```

#### [`core.admin.permissions.allow_hide_own_posts_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.allow_hide_own_posts_label%22)

> Allow deleting own posts

```diff
-Permitir excluir seus próprios posts
+Permitir excluir os próprios posts
```

Permitir excluir <del>seus</del><ins>os</ins> próprios posts

#### [`core.admin.permissions.moderate_access_tokens_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.moderate_access_tokens_label%22)

> Moderate Access Tokens

```diff
-Tokens de acesso moderado
+Moderar Tokens de Acesso
```

<ins>Moderar </ins>Tokens de<del> acesso</del> <del>moderado</del><ins>Acesso</ins>

#### [`core.admin.permissions.new_group_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.new_group_button%22)

> New Group

```diff
-Novo grupo
+Novo Grupo
```

Novo <del>grupo</del><ins>Grupo</ins>

#### [`core.admin.permissions.post_without_throttle_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.post_without_throttle_label%22)

> Reply multiple times without waiting

```diff
-Responda várias vezes sem esperar
+Responder várias vezes sem esperar
```

<del>Responda</del><ins>Responder</ins> várias vezes sem esperar

#### [`core.admin.permissions.reply_to_discussions_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.reply_to_discussions_label%22)

> Reply to discussions

```diff
-Responder às discussões
+Responder a discussões
```

Responder <del>às</del><ins>a</ins> discussões

#### [`core.admin.permissions.sign_up_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.sign_up_label%22)

> Sign up

```diff
-Inscrever-se
+Cadastrar-se
```

#### [`core.admin.permissions.view_hidden_groups_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.view_hidden_groups_label%22)

> View hidden group badges

```diff
-Ver emblemas de grupo ocultos
+Ver emblemas de grupos ocultos
```

Ver emblemas de <del>grupo</del><ins>grupos</ins> ocultos

#### [`core.admin.permissions.view_last_seen_at_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.view_last_seen_at_label%22)

> Always view user last seen time

```diff
-Sempre ver quando o usuário foi visto pela última vez
+Sempre ver a última visita do usuário
```

Sempre ver <del>quando o usuário foi</del><ins>a</ins> <del>visto</del><ins>última</ins> <del>pela</del><ins>visita</ins> <del>última</del><ins>do</ins> <del>vez</del><ins>usuário</ins>

#### [`core.admin.permissions.view_post_ips_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.permissions.view_post_ips_label%22)

> View post IP addresses

```diff
-Exibir endereços IP dos posts
+Ver endereços IP dos posts
```

<del>Exibir</del><ins>Ver</ins> endereços IP dos posts

#### [`core.admin.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.upload_image.upload_button%22)

> Choose an Image...

```diff
-Escolha uma imagem...
+Escolher uma Imagem...
```

<del>Escolha</del><ins>Escolher</ins> uma <del>imagem...</del><ins>Imagem...</ins>

#### [`core.forum.change_email.incorrect_password_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.change_email.incorrect_password_message%22)

> The password you entered is incorrect.

```diff
-A senha que você digitou está incorreta.
+A senha digitada está incorreta.
```

A senha <del>que você digitou</del><ins>digitada</ins> está incorreta.

#### [`core.forum.change_password.text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.change_password.text%22)

> Click the button below and check your email for a link to change your password.

```diff
-Clique no botão abaixo e verifique se há um link para alterar sua senha em seu e-mail.
+Clique no botão abaixo e verifique seu e-mail para um link para alterar sua senha.
```

Clique no botão abaixo e verifique <del>se</del><ins>seu</ins> <del>há</del><ins>e-mail para</ins> um link para alterar sua<del> senha em seu</del> <del>e-mail.</del><ins>senha.</ins>

#### [`core.forum.composer.exit_full_screen_tooltip`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.composer.exit_full_screen_tooltip%22)

> Exit Full Screen

```diff
-Sair da tela cheia
+Sair da Tela Cheia
```

Sair da <del>tela</del><ins>Tela</ins> <del>cheia</del><ins>Cheia</ins>

#### [`core.forum.composer.full_screen_tooltip`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.composer.full_screen_tooltip%22)

> Full Screen

```diff
-Tela cheia
+Tela Cheia
```

Tela <del>cheia</del><ins>Cheia</ins>

#### [`core.forum.composer_discussion.body_placeholder`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.composer_discussion.body_placeholder%22)

> Write a Post...

```diff
-Escrever um Post...
+Escreva um Post...
```

<del>Escrever</del><ins>Escreva</ins> um Post...

#### [`core.forum.composer_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.composer_discussion.title_placeholder%22)

> Discussion Title

```diff
-Título da discussão
+Título da Discussão
```

Título da <del>discussão</del><ins>Discussão</ins>

#### [`core.forum.composer_reply.submit_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.composer_reply.submit_button%22)

> Post Reply

```diff
-Publicar Resposta
+Responder
```

#### [`core.forum.discussion_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.discussion_controls.toggle_dropdown_accessible_label%22)

> Toggle discussion actions dropdown menu

```diff
-Alternar menu suspenso de ações da discussão
+Alternar menu de ações da discussão
```

Alternar menu <del>suspenso </del>de ações da discussão

#### [`core.forum.discussion_list.unread_replies_a11y_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.discussion_list.unread_replies_a11y_label%22)

> {count, plural, one {# unread reply} other {# unread replies}}. Mark unread {count, plural, one {reply} other {replies}} as read.

```diff
-{count, plural, one {# resposta não lida} other {# respostas não lidas}}. Marcar {count, plural, one {resposta} other {respostas}} não {count, plural, one {lida} other {lidas}} como {count, plural, one {lida} other {lidas}}
+{count, plural, one {# resposta não lida. Marcar como lida} other {# respostas não lidas. Marcar como lidas}}.
```

{count, plural, one {# resposta não <ins>lida. Marcar como </ins>lida} other {# respostas não <del>lidas}}.</del><ins>lidas.</ins> Marcar<del> {count, plural, one {resposta} other {respostas}} não {count, plural, one {lida} other {lidas}}</del> como<del> {count, plural, one {lida} other</del> <del>{lidas}}</del><ins>lidas}}.</ins>

#### [`core.forum.forgot_password.email_sent_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.forgot_password.email_sent_message%22)

> If the email you entered is registered with this site, we'll send you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two.

```diff
-Se o email inserido estiver registrado neste site, enviaremos um e-mail contendo um link para redefinir sua senha. Verifique sua pasta de spam se não a receber dentro de um ou dois minutos.
+Se o e-mail digitado estiver registrado neste site, enviaremos um e-mail com um link para redefinir sua senha. Verifique sua pasta de spam se não o receber dentro de um ou dois minutos.
```

Se o <del>email</del><ins>e-mail</ins> <del>inserido</del><ins>digitado</ins> estiver registrado neste site, enviaremos um e-mail <del>contendo</del><ins>com</ins> um link para redefinir sua senha. Verifique sua pasta de spam se não <del>a</del><ins>o</ins> receber dentro de um ou dois minutos.

#### [`core.forum.forgot_password.title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.forgot_password.title%22)

> Forgot Password

```diff
-Esqueceu a senha
+Esqueceu a Senha
```

Esqueceu a <del>senha</del><ins>Senha</ins>

#### [`core.forum.header.back_to_index_tooltip`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.header.back_to_index_tooltip%22)

> Back to Discussion List

```diff
-Voltar à lista de discussão
+Voltar à Lista de Discussões
```

Voltar à <del>lista</del><ins>Lista</ins> de <del>discussão</del><ins>Discussões</ins>

#### [`core.forum.header.search_placeholder`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.header.search_placeholder%22)

> Search Forum

```diff
-Pesquisar no Fórum
+Buscar no Fórum
```

<del>Pesquisar</del><ins>Buscar</ins> no Fórum

#### [`core.forum.header.search_role_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.header.search_role_label%22)

> Search Forum

```diff
-Pesquisar no Fórum
+Buscar no Fórum
```

<del>Pesquisar</del><ins>Buscar</ins> no Fórum

#### [`core.forum.header.session_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.header.session_dropdown_accessible_label%22)

> Toggle session options dropdown menu

```diff
-Alternar menu suspenso de opções de sessão
+Alternar menu de opções de sessão
```

Alternar menu <del>suspenso </del>de opções de sessão

#### [`core.forum.index.cannot_start_discussion_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.index.cannot_start_discussion_button%22)

> Can't Start Discussion

```diff
-Não é Possível Iniciar Discussão
+Não Pode Iniciar Discussão
```

Não <del>é Possível</del><ins>Pode</ins> Iniciar Discussão

#### [`core.forum.index.toggle_sidenav_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.index.toggle_sidenav_dropdown_accessible_label%22)

> Toggle navigation dropdown menu

```diff
-Alternar menu suspenso de navegação
+Alternar menu de navegação
```

Alternar menu <del>suspenso </del>de navegação

#### [`core.forum.log_in.sign_up_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.log_in.sign_up_text%22)

> Don't have an account? &lt;a&gt;Sign Up&lt;/a&gt;

```diff
-Não tem uma conta? <a>Inscreva-se</a>
+Não tem uma conta? <a>Cadastre-se</a>
```

Não tem uma conta? <del>&lt;a&gt;Inscreva-se&lt;/a&gt;</del><ins>&lt;a&gt;Cadastre-se&lt;/a&gt;</ins>

#### [`core.forum.notifications.empty_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.notifications.empty_text%22)

> No Notifications

```diff
-Nenhuma notificação
+Sem Notificações
```

#### [`core.forum.notifications.mark_as_read_tooltip`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.notifications.mark_as_read_tooltip%22)

> Mark as Read

```diff
-Marcar como Lido
+Marcar como Lida
```

Marcar como <del>Lido</del><ins>Lida</ins>

#### [`core.forum.post_controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.post_controls.delete_confirmation%22)

> Are you sure you want to delete this post forever? This action cannot be undone.

```diff
-Tem certeza de que deseja excluir este post para sempre? Essa ação não pode ser desfeita.
+Tem certeza de que deseja excluir este post para sempre? Esta ação não pode ser desfeita.
```

Tem certeza de que deseja excluir este post para sempre? <del>Essa</del><ins>Esta</ins> ação não pode ser desfeita.

#### [`core.forum.post_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.post_controls.toggle_dropdown_accessible_label%22)

> Toggle post controls dropdown menu

```diff
-Alternar menu suspenso de controles da postagem
+Alternar menu de controles do post
```

Alternar menu <del>suspenso </del>de controles <del>da</del><ins>do</ins> <del>postagem</del><ins>post</ins>

#### [`core.forum.security.cannot_terminate_current_session`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.security.cannot_terminate_current_session%22)

> Cannot terminate the current active session. Log out instead.

```diff
-Não é possível encerrar a sessão ativa atual. Em vez disso, efetue logout.
+Não é possível encerrar a sessão ativa atual. Saia para fazer isso.
```

Não é possível encerrar a sessão ativa atual. <del>Em vez</del><ins>Saia</ins> <del>disso,</del><ins>para</ins> <del>efetue</del><ins>fazer</ins> <del>logout.</del><ins>isso.</ins>

#### [`core.forum.security.current_active_session`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.security.current_active_session%22)

> Current Active Session

```diff
-Sessão ativa atual
+Sessão Ativa Atual
```

Sessão <del>ativa</del><ins>Ativa</ins> <del>atual</del><ins>Atual</ins>

#### [`core.forum.security.session_terminated`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.security.session_terminated%22)

> {count, plural, one {Session terminated} other {# Sessions terminated}}.

```diff
-{count, plural, one {Sessão terminada} other {# Sessões terminadas}}.
+{count, plural, one {Sessão encerrada} other {# Sessões encerradas}}.
```

{count, plural, one {Sessão <del>terminada}</del><ins>encerrada}</ins> other {# Sessões <del>terminadas}}.</del><ins>encerradas}}.</ins>

#### [`core.forum.security.terminate_all_other_sessions`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.security.terminate_all_other_sessions%22)

> Terminate all other sessions

```diff
-Terminar todas as outras sessões
+Encerrar todas as outras sessões
```

<del>Terminar</del><ins>Encerrar</ins> todas as outras sessões

#### [`core.forum.security.terminate_session`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.security.terminate_session%22)

> Terminate

```diff
-Terminar
+Encerrar
```

#### [`core.forum.settings.notification_checkbox_a11y_label_template`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.settings.notification_checkbox_a11y_label_template%22)

> Receive "{description}" notifications via {method}

```diff
-Receba notificações "{description}" por meio de {method}
+Receber notificações de "{description}" via {method}
```

<del>Receba</del><ins>Receber</ins> notificações<del> "{description}"</del> <del>por</del><ins>de</ins> <del>meio</del><ins>"{description}"</ins> <del>de</del><ins>via</ins> {method}

#### [`core.forum.settings.notify_discussion_renamed_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.settings.notify_discussion_renamed_label%22)

> Someone renames a discussion I started

```diff
-Alguém renomeia uma discussão que eu iniciei
+Alguém renomeia uma discussão que iniciei
```

Alguém renomeia uma discussão que <del>eu </del>iniciei

#### [`core.forum.settings.privacy_disclose_online_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.settings.privacy_disclose_online_label%22)

> Allow others to see when I am online

```diff
-Permitir que outras pessoas vejam quando estou online
+Permitir que outros vejam quando estou online
```

Permitir que <del>outras pessoas</del><ins>outros</ins> vejam quando estou online

#### [`core.forum.user.avatar_upload_tooltip`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.user.avatar_upload_tooltip%22)

> Upload a new avatar

```diff
-Carregar um novo avatar
+Enviar um novo avatar
```

<del>Carregar</del><ins>Enviar</ins> um novo avatar

#### [`core.forum.user.joined_date_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.user.joined_date_text%22)

> Joined {ago}

```diff
-Entrou em {ago}
+Entrou {ago}
```

Entrou <del>em </del>{ago}

#### [`core.forum.user_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.user_controls.delete_error_message%22)

> Deletion of user &lt;i&gt;{username} ({email})&lt;/i&gt; failed

```diff
-A exclusão do usuário <i>{username} ({email})</i> falhou
+Falha ao excluir o usuário <i>{username} ({email})</i>
```

<del>A</del><ins>Falha</ins> <del>exclusão</del><ins>ao</ins> <del>do</del><ins>excluir o</ins> usuário &lt;i&gt;{username} ({email})&lt;/i&gt;<del> falhou</del>

#### [`core.forum.user_controls.toggle_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.user_controls.toggle_dropdown_accessible_label%22)

> Toggle user controls dropdown menu

```diff
-Alternar menu suspenso de controles do usuário
+Alternar menu de controles do usuário
```

Alternar menu <del>suspenso </del>de controles do usuário

#### [`core.forum.user_email_confirmation.resend_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.forum.user_email_confirmation.resend_button%22)

> Resend Confirmation Email

```diff
-Reenviar e-mail de confirmação
+Reenviar E-mail de Confirmação
```

Reenviar <del>e-mail</del><ins>E-mail</ins> de <del>confirmação</del><ins>Confirmação</ins>

#### [`core.group.admin`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.group.admin%22)

> Admin

```diff
-Administrador
+Admin
```

#### [`core.group.admins`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.group.admins%22)

> Admins

```diff
-Administradores
+Admins
```

#### [`core.group.mod`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.group.mod%22)

> Mod

```diff
-Moderador
+Mod
```

#### [`core.group.mods`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.group.mods%22)

> Mods

```diff
-Moderadores
+Mods
```

#### [`core.lib.badge.hidden_tooltip`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.badge.hidden_tooltip%22)

> Hidden

```diff
-Escondido
+Oculto
```

#### [`core.lib.edit_user.activate_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.edit_user.activate_button%22)

> Activate User

```diff
-Ativar o usuário
+Ativar Usuário
```

Ativar <del>o usuário</del><ins>Usuário</ins>

#### [`core.lib.edit_user.set_password_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.edit_user.set_password_label%22)

> Set new password

```diff
-Definir uma nova senha
+Definir nova senha
```

Definir <del>uma </del>nova senha

#### [`core.lib.error.extension_initialiation_failed_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.extension_initialiation_failed_message%22)

> {extension} failed to initialize, check the browser console for further information.

```diff
-{extension} falhou ao inicializar, verifique o console do navegador para mais informações.
+{extension} falhou ao inicializar. Verifique o console do navegador para mais informações.
```

{extension} falhou ao <del>inicializar,</del><ins>inicializar.</ins> <del>verifique</del><ins>Verifique</ins> o console do navegador para mais informações.

#### [`core.lib.error.generic_cross_origin_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.generic_cross_origin_message%22)

> Oops! Something went wrong during a cross-origin request. Please reload the page and try again.

```diff
-Oops! Algo deu errado durante uma solicitação de origem cruzada. Por favor, recarregue a página e tente novamente.
+Opa! Algo deu errado durante uma solicitação de origem cruzada. Recarregue a página e tente novamente.
```

<del>Oops!</del><ins>Opa!</ins> Algo deu errado durante uma solicitação de origem cruzada.<del> Por favor,</del> <del>recarregue</del><ins>Recarregue</ins> a página e tente novamente.

#### [`core.lib.error.generic_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.generic_message%22)

> Oops! Something went wrong. Please reload the page and try again.

```diff
-Opa! Algo deu errado. Por favor, recarregue a página e tente novamente.
+Opa! Algo deu errado. Recarregue a página e tente novamente.
```

Opa! Algo deu errado. <del>Por favor, recarregue</del><ins>Recarregue</ins> a página e tente novamente.

#### [`core.lib.error.payload_too_large_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.payload_too_large_message%22)

> The request payload was too large.

```diff
-A carga da solicitação era muito grande.
+A carga da solicitação foi muito grande.
```

A carga da solicitação <del>era</del><ins>foi</ins> muito grande.

#### [`core.lib.error.render_failed_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.render_failed_message%22)

> Sorry, we encountered an error while displaying this content. If you're a user, please try again later. If you're an administrator, take a look in your Flarum log files for more information.

```diff
-Desculpe, encontramos um erro ao exibir este conteúdo. Se você é um usuário, por favor tente novamente mais tarde. Se você é um administrador, dê uma olhada em seus arquivos de log Flarum para obter mais informações.
+Desculpe, encontramos um erro ao exibir este conteúdo. Se você é um usuário, tente novamente mais tarde. Se você é um administrador, dê uma olhada nos arquivos de log do Flarum para mais informações.
```

Desculpe, encontramos um erro ao exibir este conteúdo. Se você é um usuário, <del>por favor </del>tente novamente mais tarde. Se você é um administrador, dê uma olhada<del> em</del> <del>seus</del><ins>nos</ins> arquivos de log<ins> do</ins> Flarum para<del> obter</del> mais informações.

#### [`core.lib.series.three_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.series.three_text%22)

> {first}, {second}, and {third}

```diff
-{first}, {second}, e {third}
+{first}, {second} e {third}
```

{first}, <del>{second},</del><ins>{second}</ins> e {third}

#### [`core.ref.change_email`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.change_email%22)

> Change Email

```diff
-Mudar E-mail
+Alterar E-mail
```

<del>Mudar</del><ins>Alterar</ins> E-mail

#### [`core.ref.change_password`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.change_password%22)

> Change Password

```diff
-Mudar Senha
+Alterar Senha
```

<del>Mudar</del><ins>Alterar</ins> Senha

#### [`core.ref.confirm_password`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.confirm_password%22)

> Confirm Password

```diff
-Confirme a Senha
+Confirmar Senha
```

<del>Confirme a</del><ins>Confirmar</ins> Senha

#### [`core.ref.confirmation_email_sent`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.confirmation_email_sent%22)

> We've sent a confirmation email to {email}. If it doesn't arrive soon, check your spam folder.

```diff
-Enviamos um e-mail de confirmação para {email}. Se não recebê-lo logo, verifique sua pasta de spam.
+Enviamos um e-mail de confirmação para {email}. Se ele não chegar logo, verifique sua pasta de spam.
```

Enviamos um e-mail de confirmação para {email}. Se <ins>ele </ins>não <del>recebê-lo</del><ins>chegar</ins> logo, verifique sua pasta de spam.

#### [`core.ref.custom_footer_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.custom_footer_text%22)

> Add HTML to be displayed at the very bottom of the page.

```diff
-Adicione HTML a ser exibido na parte inferior da página.
+Adicione HTML para ser exibido na parte inferior da página.
```

Adicione HTML <del>a</del><ins>para</ins> ser exibido na parte inferior da página.

#### [`core.ref.custom_footer_title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.custom_footer_title%22)

> Edit Custom Footer

```diff
-Editar rodapé personalizado
+Editar Rodapé Personalizado
```

Editar <del>rodapé</del><ins>Rodapé</ins> <del>personalizado</del><ins>Personalizado</ins>

#### [`core.ref.custom_header_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.custom_header_text%22)

> Add HTML to be displayed at the very top of the page, above Flarum's own header.

```diff
-Adicione HTML a ser exibido na parte superior da página, acima do cabeçalho do próprio Flarum.
+Adicione HTML para ser exibido na parte superior da página, acima do cabeçalho do próprio Flarum.
```

Adicione HTML <del>a</del><ins>para</ins> ser exibido na parte superior da página, acima do cabeçalho do próprio Flarum.

#### [`core.ref.custom_header_title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.custom_header_title%22)

> Edit Custom Header

```diff
-Editar cabeçalho personalizado
+Editar Cabeçalho Personalizado
```

Editar <del>cabeçalho</del><ins>Cabeçalho</ins> <del>personalizado</del><ins>Personalizado</ins>

#### [`core.ref.delete_forever`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.delete_forever%22)

> Delete Forever

```diff
-Excluir Permanentemente
+Excluir para Sempre
```

Excluir <del>Permanentemente</del><ins>para Sempre</ins>

#### [`core.ref.edit_user`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.edit_user%22)

> Edit User

```diff
-Editar usuário
+Editar Usuário
```

Editar <del>usuário</del><ins>Usuário</ins>

#### [`core.ref.generic_confirmation_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.generic_confirmation_message%22)

> Are you sure you want to proceed? This action cannot be undone.

```diff
-Tem certeza de que deseja continuar? Essa ação não pode ser desfeita.
+Tem certeza de que deseja continuar? Esta ação não pode ser desfeita.
```

Tem certeza de que deseja continuar? <del>Essa</del><ins>Esta</ins> ação não pode ser desfeita.

#### [`core.ref.mark_all_as_read`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.mark_all_as_read%22)

> Mark All as Read

```diff
-Marcar tudo como lido
+Marcar Tudo como Lido
```

Marcar <del>tudo</del><ins>Tudo</ins> como <del>lido</del><ins>Lido</ins>

#### [`core.ref.next_page`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.next_page%22)

> Next Page

```diff
-Próxima página
+Próxima Página
```

Próxima <del>página</del><ins>Página</ins>

#### [`core.ref.previous_page`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.previous_page%22)

> Previous Page

```diff
-Página anterior
+Página Anterior
```

Página <del>anterior</del><ins>Anterior</ins>

#### [`core.ref.reset_your_password`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.reset_your_password%22)

> Reset Your Password

```diff
-Redefinir sua senha
+Redefinir Sua Senha
```

Redefinir <del>sua</del><ins>Sua</ins> <del>senha</del><ins>Senha</ins>

#### [`core.ref.search_users`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.search_users%22)

> Search users

```diff
-Pesquisar usuários
+Buscar usuários
```

<del>Pesquisar</del><ins>Buscar</ins> usuários

#### [`core.ref.sign_up`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.sign_up%22)

> Sign Up

```diff
-Inscrever-se
+Cadastrar-se
```

#### [`core.ref.write_a_reply`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.ref.write_a_reply%22)

> Write a Reply...

```diff
-Escreva uma resposta...
+Escreva uma Resposta...
```

Escreva uma <del>resposta...</del><ins>Resposta...</ins>

#### [`core.views.admin.extensions.empty`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.admin.extensions.empty%22)

> No installed extensions

```diff
-Sem extensões instaladas
+Nenhuma extensão instalada
```

#### [`core.views.admin.extensions.enable`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.admin.extensions.enable%22)

> Enable

```diff
-Habilitar
+Ativar
```

#### [`core.views.admin.extensions.name`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.admin.extensions.name%22)

> Extension Name

```diff
-Nome da extensão
+Nome da Extensão
```

Nome da <del>extensão</del><ins>Extensão</ins>

#### [`core.views.admin.info.caption`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.admin.info.caption%22)

> Application Info

```diff
-Informações do Aplicativo
+Info do Aplicativo
```

<del>Informações</del><ins>Info</ins> do Aplicativo

#### [`core.views.confirm_email.text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.confirm_email.text%22)

> Click the button below to confirm your account's email.

```diff
-Clique no botão abaixo para confirmar o endereço de e-mail da sua conta.
+Clique no botão abaixo para confirmar o e-mail da sua conta.
```

Clique no botão abaixo para confirmar o <del>endereço de </del>e-mail da sua conta.

#### [`core.views.content.load_error_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.content.load_error_message%22)

> Something went wrong while trying to load the full version of this site. Try hard-refreshing this page to fix the error.

```diff
-Ocorreu um erro ao tentar carregar a versão completa deste site. Tente atualizar essa página para corrigir o erro.
+Algo deu errado ao tentar carregar a versão completa deste site. Tente forçar a atualização desta página para corrigir o erro.
```

<del>Ocorreu</del><ins>Algo</ins> <del>um</del><ins>deu</ins> <del>erro</del><ins>errado</ins> ao tentar carregar a versão completa deste site. Tente <del>atualizar</del><ins>forçar</ins> <del>essa</del><ins>a atualização desta</ins> página para corrigir o erro.

#### [`core.views.error.csrf_token_mismatch_return_link`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.error.csrf_token_mismatch_return_link%22)

> Go back, to try again

```diff
-Voltar para tentar novamente
+Voltar e tentar novamente
```

Voltar <del>para</del><ins>e</ins> tentar novamente

#### [`core.views.error.not_found`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.error.not_found%22)

> The page you requested could not be found.

```diff
-A página solicitada não pôde ser encontrada.
+A página solicitada não foi encontrada.
```

A página solicitada não <del>pôde ser</del><ins>foi</ins> encontrada.

#### [`core.views.log_out.log_out_confirmation`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.log_out.log_out_confirmation%22)

> Are you sure you want to log out of {forum}?

```diff
-Tem certeza de que deseja sair do {forum}?
+Tem certeza de que deseja sair de {forum}?
```

Tem certeza de que deseja sair <del>do</del><ins>de</ins> {forum}?

#### [`core.views.reset_password.new_password_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.reset_password.new_password_label%22)

> New Password

```diff
-Nova senha
+Nova Senha
```

Nova <del>senha</del><ins>Senha</ins>


### `flarum-akismet`

#### [`flarum-akismet.admin.akismet_settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/pt_BR/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.api_key_label%22)

> API Key

```diff
-API Key
+Chave de API
```

#### [`flarum-akismet.admin.akismet_settings.delete_blatant_spam_help`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/pt_BR/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.delete_blatant_spam_help%22)

> If Akismet has determined that the comment is blatant spam, instead of flagging, automatically delete post

```diff
-Se o Akismet determinar que o comentário é spam, em vez de sinalizar, exclua automaticamente a postagem
+Se o Akismet determinar que o comentário é spam evidente, exclui o post automaticamente em vez de sinalizá-lo
```

Se o Akismet determinar que o comentário é <del>spam, em</del><ins>spam</ins> <del>vez</del><ins>evidente,</ins> <del>de</del><ins>exclui</ins> <del>sinalizar,</del><ins>o</ins> <del>exclua</del><ins>post</ins> automaticamente <del>a</del><ins>em</ins> <del>postagem</del><ins>vez de sinalizá-lo</ins>

#### [`flarum-akismet.admin.akismet_settings.delete_blatant_spam_label`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/pt_BR/?q=context%3A%3D%22flarum-akismet.admin.akismet_settings.delete_blatant_spam_label%22)

> Automatically delete blatant spam

```diff
-Excluir spam sinalizado automaticamente
+Excluir automaticamente spam evidente
```

Excluir <del>spam</del><ins>automaticamente</ins> <del>sinalizado</del><ins>spam</ins> <del>automaticamente</del><ins>evidente</ins>

#### [`flarum-akismet.forum.post.not_spam_button`](https://weblate.rob006.net/translate/flarum2/flarum-akismet/pt_BR/?q=context%3A%3D%22flarum-akismet.forum.post.not_spam_button%22)

> Not Spam

```diff
-Não é Spam
+Não É Spam
```

Não <del>é</del><ins>É</ins> Spam


### `flarum-flags`

#### [`flarum-flags.admin.settings.flag_own_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.admin.settings.flag_own_posts_label%22)

> Allow users to flag their own posts

```diff
-Permitir que os usuários sinalizem seus próprios posts
+Permitir que usuários sinalizem os próprios posts
```

Permitir que <del>os </del>usuários sinalizem <del>seus</del><ins>os</ins> próprios posts

#### [`flarum-flags.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.admin.settings.title%22)

> Flags Settings

```diff
-Configurações de Sinalização
+Configurações de Sinalizações
```

Configurações de <del>Sinalização</del><ins>Sinalizações</ins>

#### [`flarum-flags.forum.flag_post.reason_inappropriate_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_inappropriate_text%22)

> This post is offensive, abusive, or violates our &lt;a&gt;community guidelines&lt;/a&gt;.

```diff
-Este post é ofensivo, abusivo, ou viola as <a>regras da comunidade</a>.
+Este post é ofensivo, abusivo ou viola as <a>regras da comunidade</a>.
```

Este post é ofensivo, <del>abusivo,</del><ins>abusivo</ins> ou viola as &lt;a&gt;regras da comunidade&lt;/a&gt;.

#### [`flarum-flags.forum.flag_post.reason_off_topic_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_off_topic_text%22)

> This post is not relevant to the current discussion and should be moved elsewhere.

```diff
-Este post não é relevante à discussão atual e deve ser movido para outro lugar.
+Este post não é relevante à discussão atual e deveria ser movido para outro lugar.
```

Este post não é relevante à discussão atual e <del>deve</del><ins>deveria</ins> ser movido para outro lugar.

#### [`flarum-flags.forum.flag_post.reason_other_label`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.forum.flag_post.reason_other_label%22)

> Other (please specify)

```diff
-Outro (por favor, especifique)
+Outro (especifique)
```

Outro <del>(por favor, especifique)</del><ins>(especifique)</ins>

#### [`flarum-flags.forum.post.dismiss_flag_button`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.forum.post.dismiss_flag_button%22)

> Dismiss Flag

```diff
-Desfazer Sinalização
+Descartar Sinalização
```

<del>Desfazer</del><ins>Descartar</ins> Sinalização

#### [`flarum-flags.forum.post.flagged_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.forum.post.flagged_by_text%22)

> Flagged by {username}

```diff
-{username} sinalizou
+Sinalizado por {username}
```

#### [`flarum-flags.forum.post.flagged_by_with_reason_text`](https://weblate.rob006.net/translate/flarum2/flarum-flags/pt_BR/?q=context%3A%3D%22flarum-flags.forum.post.flagged_by_with_reason_text%22)

> Flagged by {username} as {reason}

```diff
-{username} sinalizou como {reason}
+Sinalizado por {username} como {reason}
```

<del>{username}</del><ins>Sinalizado</ins> <del>sinalizou</del><ins>por {username}</ins> como {reason}


### `flarum-gdpr`

#### [`flarum-gdpr.admin.gdpr_page.data_types.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.help_text%22)

> These are the currently registered data types. Each type is listed along with it's associated export, anonymization, and deletion actions. If an extension handles any data which falls under GDPR regulations, it should register it's data types with &lt;code&gt;flarum/gdpr&lt;/code&gt;.
> Data stored in the &lt;code&gt;user&lt;/code&gt; table is handled seperately, see user table data below.
>

```diff
-Estes são os tipos de dados atualmente registrados. Cada tipo é listado junto com suas ações associadas de exportação, anonimização e exclusão. Se uma extensão manipular quaisquer dados que se enquadrem nas regulamentações do GDPR, ela deve registrar seus tipos de dados com <code>flarum/gdpr</code>.
+Estes são os tipos de dados atualmente registrados. Cada tipo é listado junto com suas ações associadas de exportação, anonimização e exclusão. Se uma extensão manipula dados que se enquadram nas regulamentações do GDPR, ela deve registrar seus tipos de dados com <code>flarum/gdpr</code>.
 Os dados armazenados na tabela <code>user</code> são tratados separadamente, veja os dados da tabela de usuários abaixo.

```

Estes são os tipos de dados atualmente registrados. Cada tipo é listado junto com suas ações associadas de exportação, anonimização e exclusão. Se uma extensão <del>manipular quaisquer</del><ins>manipula</ins> dados que se <del>enquadrem</del><ins>enquadram</ins> nas regulamentações do GDPR, ela deve registrar seus tipos de dados com &lt;code&gt;flarum/gdpr&lt;/code&gt;.<br />Os dados armazenados na tabela &lt;code&gt;user&lt;/code&gt; são tratados separadamente, veja os dados da tabela de usuários abaixo.<br />

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.help_text%22)

> On the most part, any columns added to the &lt;code&gt;user&lt;/code&gt; table will be handled automatically, both for exporting data and for erasure.
> However, there are some special cases, which are listed below.
>

```diff
-Na maioria das vezes, quaisquer colunas adicionadas à tabela <code>user</code> serão tratadas automaticamente, tanto para exportação de dados quanto para exclusão.
-No entanto, existem alguns casos especiais, que estão listados abaixo.
+Na maior parte das vezes, quaisquer colunas adicionadas à tabela <code>user</code> serão tratadas automaticamente, tanto para exportação de dados quanto para exclusão.
+No entanto, há alguns casos especiais, listados abaixo.

```

Na <del>maioria</del><ins>maior parte</ins> das vezes, quaisquer colunas adicionadas à tabela &lt;code&gt;user&lt;/code&gt; serão tratadas automaticamente, tanto para exportação de dados quanto para exclusão.<br />No entanto, <del>existem</del><ins>há</ins> alguns casos especiais,<del> que estão</del> listados abaixo.<br />

#### [`flarum-gdpr.admin.settings.allow_anonymization_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_anonymization_help%22)

> The default option, and recommended for most communities. Under this mode, posts/comments will be preserved as much as possible as allowed by GDPR, but any user identifiable information is removed.

```diff
-A opção padrão, e recomendada para a maioria das comunidades. Nesse modo, postagens/comentários serão preservados tanto quanto possível conforme permitido pelo GDPR, mas qualquer informação identificável do usuário será removida.
+A opção padrão, recomendada para a maioria das comunidades. Neste modo, posts/comentários serão preservados o máximo possível conforme permitido pelo GDPR, mas qualquer informação identificável do usuário será removida.
```

A opção padrão, <del>e </del>recomendada para a maioria das comunidades. <del>Nesse</del><ins>Neste</ins> modo, <del>postagens/comentários</del><ins>posts/comentários</ins> serão preservados <del>tanto</del><ins>o</ins> <del>quanto</del><ins>máximo</ins> possível conforme permitido pelo GDPR, mas qualquer informação identificável do usuário será removida.

#### [`flarum-gdpr.admin.settings.allow_deletion_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_deletion_help%22)

> A much stricter option. Under this mode, all posts/comments will be deleted, and the user will be removed from the database. Use with caution.

```diff
-Uma opção muito mais rigorosa. Nesse modo, todas as postagens/comentários serão excluídos e o usuário será removido do banco de dados. Use com cautela.
+Uma opção muito mais rigorosa. Neste modo, todos os posts/comentários serão excluídos e o usuário será removido do banco de dados. Use com cautela.
```

Uma opção muito mais rigorosa. <del>Nesse</del><ins>Neste</ins> modo, <del>todas</del><ins>todos</ins> <del>as</del><ins>os</ins> <del>postagens/comentários</del><ins>posts/comentários</ins> serão excluídos e o usuário será removido do banco de dados. Use com cautela.

#### [`flarum-gdpr.admin.settings.default_anonymous_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_anonymous_username_help%22)

> When a user is anonymized, their username will be replaced with this value, plus the ID of the anonymization request, for example &lt;code&gt;Anonymous123&lt;/code&gt;.

```diff
-Quando um usuário é anonimizado, seu nome de usuário será substituído por este valor, mais o ID da solicitação de anonimização, por exemplo <code>Anônimo123</code>.
+Quando um usuário é anonimizado, seu nome de usuário será substituído por este valor mais o ID da solicitação de anonimização, por exemplo <code>Anonymous123</code>.
```

Quando um usuário é anonimizado, seu nome de usuário será substituído por este <del>valor,</del><ins>valor</ins> mais o ID da solicitação de anonimização, por exemplo <del>&lt;code&gt;Anônimo123&lt;/code&gt;.</del><ins>&lt;code&gt;Anonymous123&lt;/code&gt;.</ins>

#### [`flarum-gdpr.admin.settings.gdpr_page.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.help_text%22)

> Before deciding on which actions to use on your forum, it is vital to understand which data is integrated, and how it is handled for both anonymization and deletion. Vist the GDPR overview to understand how data is handled, and which optional extensions have registered their data to be handled by this extension.

```diff
-Antes de decidir quais ações usar em seu fórum, é vital entender quais dados são integrados e como eles são tratados tanto para anonimização quanto para exclusão. Visite a visão geral do GDPR para entender como os dados são tratados e quais extensões opcionais registraram seus dados para serem tratados por esta extensão.
+Antes de decidir quais ações usar em seu fórum, é vital entender quais dados estão integrados e como são tratados tanto para anonimização quanto para exclusão. Visite a visão geral do GDPR para entender como os dados são tratados e quais extensões opcionais registraram seus dados para serem tratados por esta extensão.
```

Antes de decidir quais ações usar em seu fórum, é vital entender quais dados <del>são</del><ins>estão</ins> integrados e como<del> eles</del> são tratados tanto para anonimização quanto para exclusão. Visite a visão geral do GDPR para entender como os dados são tratados e quais extensões opcionais registraram seus dados para serem tratados por esta extensão.

#### [`flarum-gdpr.forum.delete_user.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.title%22)

> Erase {username}'s account

```diff
-Excluir conta de {username}
+Excluir a conta de {username}
```

Excluir <ins>a </ins>conta de {username}

#### [`flarum-gdpr.forum.erasure_request_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.erasure_request_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.

```diff
-Você confirmou sua solicitação de exclusão de conta. A ação será tomada dentro de 30 dias, conforme exigido pelo GDPR.
+Você confirmou sua solicitação de exclusão de conta. A ação será tomada em até 30 dias, conforme exigido pelo GDPR.
```

Você confirmou sua solicitação de exclusão de conta. A ação será tomada <del>dentro</del><ins>em</ins> <del>de</del><ins>até</ins> 30 dias, conforme exigido pelo GDPR.

#### [`flarum-gdpr.forum.export_file`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.export_file%22)

> Export of user data for {username} ({email}) prepared at {date} from {forumTitle} ({url})

```diff
-Exportação de dados do usuário para {username} ({email}) preparada em {date} de {forumTitle} ({url})
+Exportação dos dados do usuário {username} ({email}) preparada em {date} a partir de {forumTitle} ({url})
```

Exportação <del>de</del><ins>dos</ins> dados do usuário<del> para</del> {username} ({email}) preparada em {date}<ins> a partir</ins> de {forumTitle} ({url})

#### [`flarum-gdpr.forum.request_erasure.status.user_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.user_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.
>

```diff
-Você confirmou sua solicitação de exclusão de conta. A ação será tomada dentro de 30 dias, conforme exigido pelo GDPR.
+Você confirmou sua solicitação de exclusão de conta. A ação será tomada em até 30 dias, conforme exigido pelo GDPR.

```

Você confirmou sua solicitação de exclusão de conta. A ação será tomada <del>dentro</del><ins>em</ins> <del>de</del><ins>até</ins> 30 dias, conforme exigido pelo GDPR.<br />

#### [`flarum-gdpr.forum.request_erasure.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.text%22)

> Once received and confirmed, an admin will review your request within 30 days, as required by the GDPR.

```diff
-Uma vez recebida e confirmada, um administrador revisará sua solicitação dentro de 30 dias, conforme exigido pelo GDPR.
+Após recebida e confirmada, um administrador revisará sua solicitação em até 30 dias, conforme exigido pelo GDPR.
```

<del>Uma vez</del><ins>Após</ins> recebida e confirmada, um administrador revisará sua solicitação <del>dentro</del><ins>em</ins> <del>de</del><ins>até</ins> 30 dias, conforme exigido pelo GDPR.

#### [`flarum-gdpr.forum.settings.export_data_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_help%22)

> Requesting data export will provide you with a downloadable copy of all the information associated with your account. This includes posts, comments, and profile details.

```diff
-Solicitar exportação de dados fornecerá uma cópia para download de todas as informações associadas à sua conta. Isso inclui postagens, comentários e detalhes do perfil.
+Solicitar a exportação de dados fornecerá uma cópia para download de todas as informações associadas à sua conta. Isso inclui posts, comentários e detalhes do perfil.
```

Solicitar <ins>a </ins>exportação de dados fornecerá uma cópia para download de todas as informações associadas à sua conta. Isso inclui <del>postagens,</del><ins>posts,</ins> comentários e detalhes do perfil.

#### [`flarum-gdpr.forum.settings.request_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_help%22)

> Requesting erasure will permanently delete your account and all associated data. This action is irreversible. Before proceeding, ensure you have saved any content you wish to keep.

```diff
-Solicitar exclusão apagará permanentemente sua conta e todos os dados associados. Esta ação é irreversível. Antes de prosseguir, certifique-se de ter salvo qualquer conteúdo que deseja manter.
+Solicitar a exclusão removerá permanentemente sua conta e todos os dados associados. Esta ação é irreversível. Antes de prosseguir, certifique-se de ter salvo qualquer conteúdo que deseja manter.
```

Solicitar <ins>a </ins>exclusão <del>apagará</del><ins>removerá</ins> permanentemente sua conta e todos os dados associados. Esta ação é irreversível. Antes de prosseguir, certifique-se de ter salvo qualquer conteúdo que deseja manter.

#### [`flarum-gdpr.lib.data.posts.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.anonymize_description%22)

> Removes the IP address from all posts the user has made.

```diff
-Remove o endereço IP de todas as postagens feitas pelo usuário.
+Remove o endereço IP de todos os posts feitos pelo usuário.
```

Remove o endereço IP de <del>todas</del><ins>todos</ins> <del>as</del><ins>os</ins> <del>postagens</del><ins>posts</ins> <del>feitas</del><ins>feitos</ins> pelo usuário.

#### [`flarum-gdpr.lib.data.posts.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.delete_description%22)

> Deletes all posts the user has made.

```diff
-Exclui todas as postagens feitas pelo usuário.
+Exclui todos os posts feitos pelo usuário.
```

Exclui <del>todas</del><ins>todos</ins> <del>as</del><ins>os</ins> <del>postagens</del><ins>posts</ins> <del>feitas</del><ins>feitos</ins> pelo usuário.

#### [`flarum-gdpr.lib.data.posts.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.export_description%22)

> Exports all posts the user has made. Data restricted to content, creation date, IP address and discussion ID.

```diff
-Exporta todas as postagens feitas pelo usuário. Dados restritos ao conteúdo, data de criação, endereço IP e ID da discussão.
+Exporta todos os posts feitos pelo usuário. Dados restritos ao conteúdo, data de criação, endereço IP e ID da discussão.
```

Exporta <del>todas</del><ins>todos</ins> <del>as</del><ins>os</ins> <del>postagens</del><ins>posts</ins> <del>feitas</del><ins>feitos</ins> pelo usuário. Dados restritos ao conteúdo, data de criação, endereço IP e ID da discussão.

#### [`flarum-gdpr.lib.data.user.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.user.anonymize_description%22)

> Sets all columns on the user table to null. Non-nullable columns are set to their default values or special values. Password is changed, preferences set to default and all groups are removed.

```diff
-Define todas as colunas na tabela de usuários como nulas. Colunas não anuláveis são definidas para seus valores padrão ou valores especiais. A senha é alterada, as preferências são definidas como padrão e todos os grupos são removidos.
+Define todas as colunas na tabela de usuários como nulas. Colunas não anuláveis recebem seus valores padrão ou valores especiais. A senha é alterada, as preferências voltam ao padrão e todos os grupos são removidos.
```

Define todas as colunas na tabela de usuários como nulas. Colunas não anuláveis <del>são definidas para</del><ins>recebem</ins> seus valores padrão ou valores especiais. A senha é alterada, as preferências<del> são</del> <del>definidas</del><ins>voltam</ins> <del>como</del><ins>ao</ins> padrão e todos os grupos são removidos.

#### [`flarum-gdpr.lib.data.user.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.user.export_description%22)

> Exports data from the user table. All columns except id, password.

```diff
-Exporta dados da tabela de usuários. Todas as colunas, exceto id, senha.
+Exporta dados da tabela de usuários. Todas as colunas, exceto id e senha.
```

Exporta dados da tabela de usuários. Todas as colunas, exceto <del>id,</del><ins>id e</ins> senha.

#### [`flarum-gdpr.lib.request_data.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.request_data.title%22)

> Request data for {username}

```diff
-Solicitar dados para {username}
+Solicitar dados de {username}
```

Solicitar dados <del>para</del><ins>de</ins> {username}


### `flarum-likes`

#### [`flarum-likes.admin.settings.like_own_posts_help`](https://weblate.rob006.net/translate/flarum2/flarum-likes/pt_BR/?q=context%3A%3D%22flarum-likes.admin.settings.like_own_posts_help%22)

> When enabled, subject to permission, users may 'like' their own posts on the forum. To prevent users placing a 'like' on their own posts, disable this setting.

```diff
-Quando ativado, sujeito a permissão, os usuários podem 'curtir' suas próprias postagens no fórum. Para impedir que os usuários coloquem 'curtidas' em suas próprias postagens, desative essa configuração.
+Quando ativado, sujeito a permissão, os usuários podem curtir os próprios posts no fórum. Para impedir que os usuários curtam os próprios posts, desative esta configuração.
```

Quando ativado, sujeito a permissão, os usuários podem <del>'curtir'</del><ins>curtir</ins> <del>suas</del><ins>os</ins> <del>próprias</del><ins>próprios</ins> <del>postagens</del><ins>posts</ins> no fórum. Para impedir que os usuários<del> coloquem 'curtidas'</del> <del>em</del><ins>curtam</ins> <del>suas</del><ins>os</ins> <del>próprias</del><ins>próprios</ins> <del>postagens,</del><ins>posts,</ins> desative <del>essa</del><ins>esta</ins> configuração.

#### [`flarum-likes.admin.settings.like_own_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-likes/pt_BR/?q=context%3A%3D%22flarum-likes.admin.settings.like_own_posts_label%22)

> Users may like their own posts

```diff
-Os usuários podem curtir suas próprias postagens
+Usuários podem curtir os próprios posts
```

<del>Os usuários</del><ins>Usuários</ins> podem curtir <del>suas</del><ins>os</ins> <del>próprias</del><ins>próprios</ins> <del>postagens</del><ins>posts</ins>

#### [`flarum-likes.forum.post.liked_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/pt_BR/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_self_text%22)

> {users} like this.

```diff
-{users} curtiu isso.
+{count, plural, one {{users} curtiu isto} other {{users} curtiram isto}}.
```

<del>{users}</del><ins>{count, plural, one {{users}</ins> curtiu <del>isso.</del><ins>isto} other {{users} curtiram isto}}.</ins>

#### [`flarum-likes.forum.post.liked_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-likes/pt_BR/?q=context%3A%3D%22flarum-likes.forum.post.liked_by_text%22)

> {count, plural, one {{users} likes this} other {{users} like this}}.

```diff
-{users} {count, plural, one {curtiu} other {curtiram}} isso.
+{count, plural, one {{users} curtiu isto} other {{users} curtiram isto}}.
```

<del>{users} </del>{count, plural, one <del>{curtiu}</del><ins>{{users} curtiu isto}</ins> other <del>{curtiram}}</del><ins>{{users}</ins> <del>isso.</del><ins>curtiram isto}}.</ins>

#### [`flarum-likes.forum.post_likes.title`](https://weblate.rob006.net/translate/flarum2/flarum-likes/pt_BR/?q=context%3A%3D%22flarum-likes.forum.post_likes.title%22)

> Users Who Like This

```diff
-Usuários que Curtiram Isso
+Usuários que Curtiram
```

Usuários que Curtiram<del> Isso</del>


### `flarum-lock`

#### [`flarum-lock.forum.post_stream.discussion_locked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/pt_BR/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_locked_text%22)

> {username} locked the discussion {time}.

```diff
-{username} trancou esta discussão.
+{username} trancou a discussão {time}.
```

{username} trancou <del>esta</del><ins>a</ins> <del>discussão.</del><ins>discussão {time}.</ins>

#### [`flarum-lock.forum.post_stream.discussion_unlocked_text`](https://weblate.rob006.net/translate/flarum2/flarum-lock/pt_BR/?q=context%3A%3D%22flarum-lock.forum.post_stream.discussion_unlocked_text%22)

> {username} unlocked the discussion {time}.

```diff
-{username} destrancou esta discussão.
+{username} destrancou a discussão {time}.
```

{username} destrancou <del>esta</del><ins>a</ins> <del>discussão.</del><ins>discussão {time}.</ins>

#### [`flarum-lock.forum.settings.notify_discussion_locked_label`](https://weblate.rob006.net/translate/flarum2/flarum-lock/pt_BR/?q=context%3A%3D%22flarum-lock.forum.settings.notify_discussion_locked_label%22)

> Someone locks a discussion I started

```diff
-Alguém tranca uma discussão que eu comecei
+Alguém tranca uma discussão que iniciei
```

Alguém tranca uma discussão que <del>eu comecei</del><ins>iniciei</ins>


### `flarum-markdown`

#### [`flarum-markdown.lib.composer.ordered_list_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/pt_BR/?q=context%3A%3D%22flarum-markdown.lib.composer.ordered_list_tooltip%22)

> Add a numbered list

```diff
-Adicionar uma lista
+Adicionar uma lista numerada
```

Adicionar uma lista<ins> numerada</ins>

#### [`flarum-markdown.lib.composer.quote_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/pt_BR/?q=context%3A%3D%22flarum-markdown.lib.composer.quote_tooltip%22)

> Insert a quote

```diff
-Insira uma citação
+Inserir uma citação
```

<del>Insira</del><ins>Inserir</ins> uma citação

#### [`flarum-markdown.lib.composer.spoiler_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-markdown/pt_BR/?q=context%3A%3D%22flarum-markdown.lib.composer.spoiler_tooltip%22)

> Insert a spoiler

```diff
-Insira um spoiler
+Inserir um spoiler
```

<del>Insira</del><ins>Inserir</ins> um spoiler


### `flarum-mentions`

#### [`flarum-mentions.admin.settings.allow_username_format_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_label%22)

> Allow username mention format (@Username)

```diff
-Permitir menção de nome de usuário (@Username)
+Permitir menção por nome de usuário (@Username)
```

Permitir menção <del>de</del><ins>por</ins> nome de usuário (@Username)

#### [`flarum-mentions.admin.settings.allow_username_format_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.admin.settings.allow_username_format_text%22)

> The current format for user mentions is @"Display Name"#ID.
> This setting allows using the old format of @Username, however it will still be converted to the new format upon saving.
>

```diff
-O formato atual para menções do usuário é @"Nome"#ID.
-Esta configuração permite usar o formato antigo de @Username, no entanto, ele ainda será convertido para o novo formato ao salvar.
+O formato atual para menções de usuário é @"Nome de Exibição"#ID.
+Esta configuração permite usar o formato antigo @Username, mas ele ainda será convertido para o novo formato ao salvar.

```

O formato atual para menções <del>do</del><ins>de</ins> usuário é <del>@"Nome"#ID.</del><ins>@"Nome de Exibição"#ID.</ins><br />Esta configuração permite usar o formato antigo<del> de</del> @Username,<del> no</del> <del>entanto,</del><ins>mas</ins> ele ainda será convertido para o novo formato ao salvar.<br />

#### [`flarum-mentions.email.group_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.email.group_mentioned.subject%22)

> {mentioner\_display\_name} mentioned a group you're a member of in {title}

```diff
-{mentioner_display_name} mencionou um grupo do qual você é membro em {title}
+{mentioner_display_name} mencionou um grupo do qual você faz parte em {title}
```

{mentioner\_display\_name} mencionou um grupo do qual você <del>é</del><ins>faz</ins> <del>membro</del><ins>parte</ins> em {title}

#### [`flarum-mentions.email.post_mentioned.subject`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.email.post_mentioned.subject%22)

> {replier\_display\_name} replied to your post in {title}

```diff
-{replier_display_name} respondeu seu post em {title}
+{replier_display_name} respondeu ao seu post em {title}
```

{replier\_display\_name} respondeu <ins>ao </ins>seu post em {title}

#### [`flarum-mentions.forum.notifications.group_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.notifications.group_mentioned_text%22)

> {username} mentioned a group you're a member of

```diff
-{username} mencionou um grupo do qual você é membro
+{username} mencionou um grupo do qual você faz parte
```

{username} mencionou um grupo do qual você <del>é</del><ins>faz</ins> <del>membro</del><ins>parte</ins>

#### [`flarum-mentions.forum.notifications.post_mentioned_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.notifications.post_mentioned_text%22)

> {username} replied to your post

```diff
-{username} respondeu à sua postagem
+{username} respondeu ao seu post
```

{username} respondeu <del>à</del><ins>ao</ins> <del>sua</del><ins>seu</ins> <del>postagem</del><ins>post</ins>

#### [`flarum-mentions.forum.post.mentioned_by_self_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_self_text%22)

> {users} replied to this.

```diff
-{users} {count, plural, one {respondeu} other {responderam}}.
+{count, plural, one {{users} respondeu a isto} other {{users} responderam a isto}}.
```

<del>{users} </del>{count, plural, one <del>{respondeu}</del><ins>{{users} respondeu a isto}</ins> other <del>{responderam}}.</del><ins>{{users} responderam a isto}}.</ins>

#### [`flarum-mentions.forum.post.mentioned_by_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_text%22)

> {users} replied to this.

```diff
-{users} {count, plural, one {respondeu} other {responderam}}.
+{count, plural, one {{users} respondeu a isto} other {{users} responderam a isto}}.
```

<del>{users} </del>{count, plural, one <del>{respondeu}</del><ins>{{users} respondeu a isto}</ins> other <del>{responderam}}.</del><ins>{{users} responderam a isto}}.</ins>

#### [`flarum-mentions.forum.settings.notify_group_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_group_mentioned_label%22)

> Someone mentions a group I'm a member of in a post

```diff
-Alguém menciona um grupo do qual sou membro em um post
+Alguém menciona um grupo do qual faço parte em um post
```

Alguém menciona um grupo do qual <del>sou</del><ins>faço</ins> <del>membro</del><ins>parte</ins> em um post

#### [`flarum-mentions.forum.settings.notify_post_mentioned_label`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.settings.notify_post_mentioned_label%22)

> Someone replies to one of my posts

```diff
-Alguém responde a um de meus posts
+Alguém responde a um dos meus posts
```

Alguém responde a um <del>de</del><ins>dos</ins> meus posts


### `flarum-nicknames`

#### [`flarum-nicknames.admin.permissions.edit_own_nickname_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.permissions.edit_own_nickname_label%22)

> Edit own nickname

```diff
-Editar o próprio nome
+Editar o próprio apelido
```

Editar o próprio <del>nome</del><ins>apelido</ins>

#### [`flarum-nicknames.admin.settings.max_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.settings.max_label%22)

> Maximum nickname length

```diff
-Comprimento máximo do nome
+Tamanho máximo do apelido
```

<del>Comprimento</del><ins>Tamanho</ins> máximo do <del>nome</del><ins>apelido</ins>

#### [`flarum-nicknames.admin.settings.min_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.settings.min_label%22)

> Minimum nickname length

```diff
-Comprimento mínimo do nome
+Tamanho mínimo do apelido
```

<del>Comprimento</del><ins>Tamanho</ins> mínimo do <del>nome</del><ins>apelido</ins>

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
-Isso ocultará a entrada `nome` no registro e usará um número aleatório. Também tornará o campo `nome` obrigatório. Isso só terá efeito se "Permitir configuração de nome no registro" estiver ativado.
+Isso ocultará o campo `username` no cadastro e usará um número aleatório no lugar. Também tornará o campo `nickname` obrigatório. Só terá efeito se "Permitir definir apelidos no cadastro" estiver ativado.
```

Isso ocultará <del>a</del><ins>o</ins> <del>entrada</del><ins>campo</ins> <del>\`nome\`</del><ins>\`username\`</ins> no <del>registro</del><ins>cadastro</ins> e usará um número <del>aleatório.</del><ins>aleatório no lugar.</ins> Também tornará o campo <del>\`nome\`</del><ins>\`nickname\`</ins> obrigatório.<del> Isso</del> <del>só</del><ins>Só</ins> terá efeito se "Permitir<del> configuração</del> <del>de</del><ins>definir</ins> <del>nome</del><ins>apelidos</ins> no <del>registro"</del><ins>cadastro"</ins> estiver ativado.

#### [`flarum-nicknames.admin.settings.random_username_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_label%22)

> Randomize Usernames

```diff
-Nomes de Usuário aleatórios
+Aleatorizar Nomes de Usuário
```

<ins>Aleatorizar </ins>Nomes de Usuário<del> aleatórios</del>

#### [`flarum-nicknames.admin.settings.set_on_registration_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.settings.set_on_registration_label%22)

> Allow setting nicknames on registration

```diff
-Permitir nome no registro
+Permitir definir apelidos no cadastro
```

Permitir <del>nome</del><ins>definir apelidos</ins> no <del>registro</del><ins>cadastro</ins>

#### [`flarum-nicknames.admin.settings.unique_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.settings.unique_label%22)

> Require unique nicknames

```diff
-Exigir apelidos exclusivos
+Exigir apelidos únicos
```

Exigir apelidos <del>exclusivos</del><ins>únicos</ins>

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
-Você deve selecionar "nickname" como o driver do nome de exibição na <a><strong>Página Básica</strong></a> para que esta extensão tenha efeito.
+Você deve selecionar "Apelido" como driver de nome de exibição na página <a><strong>Básico</strong></a> para que esta extensão tenha efeito.
```

Você deve selecionar <del>"nickname"</del><ins>"Apelido"</ins> como<del> o</del> driver <del>do</del><ins>de</ins> nome de exibição na <del>&lt;a&gt;&lt;strong&gt;Página</del><ins>página</ins> <del>Básica&lt;/strong&gt;&lt;/a&gt;</del><ins>&lt;a&gt;&lt;strong&gt;Básico&lt;/strong&gt;&lt;/a&gt;</ins> para que esta extensão tenha efeito.

#### [`flarum-nicknames.api.invalid_nickname_message`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/pt_BR/?q=context%3A%3D%22flarum-nicknames.api.invalid_nickname_message%22)

> This nickname is invalid. Please contact your forum administrator for more information on nickname rules.

```diff
-Este apelido é inválido. Entre em contato com o administrador do fórum para obter mais informações sobre as regras de apelidos.
+Este apelido é inválido. Entre em contato com o administrador do fórum para mais informações sobre as regras de apelidos.
```

Este apelido é inválido. Entre em contato com o administrador do fórum para <del>obter </del>mais informações sobre as regras de apelidos.


### `flarum-statistics`

#### [`flarum-statistics.admin.date_selection_modal.description`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.description%22)

> Pick a custom date range to display statistics for. Loading data may take
> multiple minutes on forums with a lot of activity.
>

```diff
-Escolha um intervalo de datas personalizado para exibir estatísticas. O carregamento de dados pode demorar
+Escolha um intervalo de datas personalizado para exibir estatísticas. O carregamento de dados pode levar
 vários minutos em fóruns com muita atividade.

```

Escolha um intervalo de datas personalizado para exibir estatísticas. O carregamento de dados pode <del>demorar</del><ins>levar</ins><br />vários minutos em fóruns com muita atividade.<br />

#### [`flarum-statistics.admin.date_selection_modal.end_date`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.end_date%22)

> End date (inclusive)

```diff
-Data de término (inclusivo)
+Data final (inclusive)
```

Data <del>de término</del><ins>final</ins> <del>(inclusivo)</del><ins>(inclusive)</ins>

#### [`flarum-statistics.admin.date_selection_modal.errors.end_before_start`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.errors.end_before_start%22)

> The end date must be after the start date.

```diff
-A data de término deve ser posterior à data de início.
+A data final deve ser posterior à data inicial.
```

A data <del>de término</del><ins>final</ins> deve ser posterior à data<del> de</del> <del>início.</del><ins>inicial.</ins>

#### [`flarum-statistics.admin.date_selection_modal.start_date`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.start_date%22)

> Start date (inclusive)

```diff
-Data de início (inclusivo)
+Data inicial (inclusive)
```

Data <del>de início</del><ins>inicial</ins> <del>(inclusivo)</del><ins>(inclusive)</ins>

#### [`flarum-statistics.admin.date_selection_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.submit_button%22)

> Confirm date range

```diff
-Confirmar intervalo de datas
+Confirmar intervalo
```

Confirmar intervalo<del> de datas</del>

#### [`flarum-statistics.admin.date_selection_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.date_selection_modal.title%22)

> Choose custom date range

```diff
-Escolha o intervalo de datas personalizado
+Escolher intervalo personalizado
```

<del>Escolha o</del><ins>Escolher</ins> intervalo<del> de datas</del> personalizado

#### [`flarum-statistics.admin.statistics.custom_label`](https://weblate.rob006.net/translate/flarum2/flarum-statistics/pt_BR/?q=context%3A%3D%22flarum-statistics.admin.statistics.custom_label%22)

> Choose custom range...

```diff
-Escolha o intervalo personalizado...
+Intervalo personalizado...
```

<del>Escolha o intervalo</del><ins>Intervalo</ins> personalizado...


### `flarum-sticky`

#### [`flarum-sticky.admin.permissions.sticky_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/pt_BR/?q=context%3A%3D%22flarum-sticky.admin.permissions.sticky_discussions_label%22)

> Sticky discussions

```diff
-Discussões fixadas
+Fixar discussões
```

#### [`flarum-sticky.forum.post_stream.discussion_stickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/pt_BR/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_stickied_text%22)

> {username} stickied the discussion {time}.

```diff
-{username} fixou a discussão.
+{username} fixou a discussão {time}.
```

{username} fixou a <del>discussão.</del><ins>discussão {time}.</ins>

#### [`flarum-sticky.forum.post_stream.discussion_unstickied_text`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/pt_BR/?q=context%3A%3D%22flarum-sticky.forum.post_stream.discussion_unstickied_text%22)

> {username} unstickied the discussion {time}.

```diff
-{username} desafixou a discussão.
+{username} desafixou a discussão {time}.
```

{username} desafixou a <del>discussão.</del><ins>discussão {time}.</ins>


### `flarum-subscriptions`

#### [`flarum-subscriptions.forum.settings.follow_after_reply_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/pt_BR/?q=context%3A%3D%22flarum-subscriptions.forum.settings.follow_after_reply_label%22)

> Automatically follow discussions that I reply to

```diff
-Seguir automaticamente discussões que eu responder
+Seguir automaticamente as discussões que eu responder
```

Seguir automaticamente <ins>as </ins>discussões que eu responder

#### [`flarum-subscriptions.forum.settings.notify_for_all_posts_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/pt_BR/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_for_all_posts_label%22)

> Notify about every new post instead of only the last in a discussion

```diff
-Notificar sobre todos os novos posts em vez de apenas o último em uma discussão
+Notificar sobre cada novo post em vez de apenas o último em uma discussão
```

Notificar sobre <del>todos os</del><ins>cada</ins> <del>novos</del><ins>novo</ins> <del>posts</del><ins>post</ins> em vez de apenas o último em uma discussão

#### [`flarum-subscriptions.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/pt_BR/?q=context%3A%3D%22flarum-subscriptions.forum.settings.notify_new_post_label%22)

> Someone posts in a discussion I'm following

```diff
-Alguém posta numa discussão que estou seguindo
+Alguém posta em uma discussão que estou seguindo
```

Alguém posta <del>numa</del><ins>em uma</ins> discussão que estou seguindo

#### [`flarum-subscriptions.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/flarum-subscriptions/pt_BR/?q=context%3A%3D%22flarum-subscriptions.forum.sub_controls.ignoring_text%22)

> Never be notified. Hide from the discussion list.

```diff
-Nunca seja notificado. Oculta da lista de discussão.
+Nunca seja notificado. Ocultar da lista de discussões.
```

Nunca seja notificado. <del>Oculta</del><ins>Ocultar</ins> da lista de <del>discussão.</del><ins>discussões.</ins>


### `flarum-suspend`

#### [`flarum-suspend.email.no_reason_given`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/pt_BR/?q=context%3A%3D%22flarum-suspend.email.no_reason_given%22)

> No reason was given for this suspension.

```diff
-Nenhuma razão foi dada para esta suspensão.
+Nenhum motivo foi dado para esta suspensão.
```

<del>Nenhuma</del><ins>Nenhum</ins> <del>razão</del><ins>motivo</ins> foi <del>dada</del><ins>dado</ins> para esta suspensão.

#### [`flarum-suspend.email.suspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/pt_BR/?q=context%3A%3D%22flarum-suspend.email.suspended.subject%22)

> Your account has been suspended

```diff
-A sua conta foi suspensa
+Sua conta foi suspensa
```

<del>A sua</del><ins>Sua</ins> conta foi suspensa

#### [`flarum-suspend.email.unsuspended.subject`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/pt_BR/?q=context%3A%3D%22flarum-suspend.email.unsuspended.subject%22)

> Your account has been unsuspended

```diff
-Sua conta não está mais suspensa
+Sua suspensão foi removida
```

Sua <del>conta não está</del><ins>suspensão</ins> <del>mais</del><ins>foi</ins> <del>suspensa</del><ins>removida</ins>

#### [`flarum-suspend.forum.notifications.user_unsuspended_text`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/pt_BR/?q=context%3A%3D%22flarum-suspend.forum.notifications.user_unsuspended_text%22)

> You have been unsuspended

```diff
-Você não está mais suspenso
+Sua suspensão foi removida
```

#### [`flarum-suspend.forum.suspend_user.display_message`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/pt_BR/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.display_message%22)

> Display message for user

```diff
-Exibir mensagem para o usuário
+Mensagem exibida ao usuário
```

<del>Exibir mensagem</del><ins>Mensagem</ins> <del>para</del><ins>exibida</ins> <del>o</del><ins>ao</ins> usuário

#### [`flarum-suspend.forum.suspend_user.status_heading`](https://weblate.rob006.net/translate/flarum2/flarum-suspend/pt_BR/?q=context%3A%3D%22flarum-suspend.forum.suspend_user.status_heading%22)

> Suspension Status

```diff
-Situação da Suspensão
+Status da Suspensão
```

<del>Situação</del><ins>Status</ins> da Suspensão


### `flarum-tags`

#### [`flarum-tags.admin.edit_tag.delete_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_button%22)

> Delete Tag

```diff
-Deletar Tag
+Excluir Tag
```

<del>Deletar</del><ins>Excluir</ins> Tag

#### [`flarum-tags.admin.edit_tag.delete_tag_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.edit_tag.delete_tag_confirmation%22)

> Are you sure you want to delete this tag? The tag's discussions will NOT be deleted.

```diff
-Tem certeza que deseja deletar esta tag? As discussões da tag NÃO serão deletadas.
+Tem certeza de que deseja excluir esta tag? As discussões da tag NÃO serão excluídas.
```

Tem certeza <ins>de </ins>que deseja <del>deletar</del><ins>excluir</ins> esta tag? As discussões da tag NÃO serão <del>deletadas.</del><ins>excluídas.</ins>

#### [`flarum-tags.admin.edit_tag.hide_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.edit_tag.hide_label%22)

> Hide from All Discussions

```diff
-Esconder de Todas as Discussões
+Ocultar de Todas as Discussões
```

<del>Esconder</del><ins>Ocultar</ins> de Todas as Discussões

#### [`flarum-tags.admin.nav.tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.nav.tags_text%22)

> Manage the list of tags available to organise discussions with.

```diff
-Administre a lista de tags disponíveis para organizar discussões.
+Gerencie a lista de tags disponíveis para organizar discussões.
```

<del>Administre</del><ins>Gerencie</ins> a lista de tags disponíveis para organizar discussões.

#### [`flarum-tags.admin.permissions.allow_edit_tags_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.permissions.allow_edit_tags_label%22)

> Allow tag editing

```diff
-Permitir edição de Tag
+Permitir edição de tags
```

Permitir edição de <del>Tag</del><ins>tags</ins>

#### [`flarum-tags.admin.permissions.bypass_tag_counts_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.permissions.bypass_tag_counts_label%22)

> Bypass tag requirements

```diff
-Ignorar requisitos de tag
+Ignorar requisitos de tags
```

Ignorar requisitos de <del>tag</del><ins>tags</ins>

#### [`flarum-tags.admin.permissions.tag_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.permissions.tag_discussions_label%22)

> Tag discussions

```diff
-Tag da Discussão
+Marcar discussões com tags
```

#### [`flarum-tags.admin.tag_settings.required_primary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_primary_text%22)

> Enter the minimum and maximum number of primary tags that may be applied to a discussion.

```diff
-Entre com o número mínimo e máximo de tags primárias que podem ser aplicadas a uma discussão.
+Digite o número mínimo e máximo de tags primárias que podem ser aplicadas a uma discussão.
```

<del>Entre com</del><ins>Digite</ins> o número mínimo e máximo de tags primárias que podem ser aplicadas a uma discussão.

#### [`flarum-tags.admin.tag_settings.required_secondary_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.tag_settings.required_secondary_text%22)

> Enter the minimum and maximum number of secondary tags that may be applied to a discussion.

```diff
-Entre com o número mínimo e máximo de tags secundárias que podem ser aplicadas a uma discussão.
+Digite o número mínimo e máximo de tags secundárias que podem ser aplicadas a uma discussão.
```

<del>Entre com</del><ins>Digite</ins> o número mínimo e máximo de tags secundárias que podem ser aplicadas a uma discussão.

#### [`flarum-tags.admin.tag_settings.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.tag_settings.title%22)

> Tag Settings

```diff
-Configurações de Tag
+Configurações de Tags
```

Configurações de <del>Tag</del><ins>Tags</ins>

#### [`flarum-tags.admin.tags.about_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.tags.about_tags_text%22)

> Tags are used to categorize discussions. Primary tags are like traditional forum categories: they can be arranged in a two-level hierarchy. Secondary tags do not have hierarchy or order, and are useful for micro-categorization.

```diff
-Tags são utilizadas para categorizar discussões. Tags primárias são como categorias tradicionais de fórum: elas podem ser organizadas numa hierarquia de dois níveis. Tags secundárias não possuem hierarquia ou ordem, e são úteis para sub-categorização.
+Tags são usadas para categorizar discussões. Tags primárias são como categorias tradicionais de fórum: podem ser organizadas em uma hierarquia de dois níveis. Tags secundárias não têm hierarquia ou ordem, e são úteis para microcategorização.
```

Tags são <del>utilizadas</del><ins>usadas</ins> para categorizar discussões. Tags primárias são como categorias tradicionais de fórum:<del> elas</del> podem ser organizadas <del>numa</del><ins>em uma</ins> hierarquia de dois níveis. Tags secundárias não <del>possuem</del><ins>têm</ins> hierarquia ou ordem, e são úteis para <del>sub-categorização.</del><ins>microcategorização.</ins>

#### [`flarum-tags.admin.tags.create_primary_tag_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.tags.create_primary_tag_button%22)

> Create Primary Tag

```diff
-Criar Tag Principal
+Criar Tag Primária
```

Criar Tag <del>Principal</del><ins>Primária</ins>

#### [`flarum-tags.forum.choose_tags.edit_title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.choose_tags.edit_title%22)

> Edit Tags for {title}

```diff
-Edite as Tags de {title}
+Editar Tags de {title}
```

<del>Edite as</del><ins>Editar</ins> Tags de {title}

#### [`flarum-tags.forum.choose_tags.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.choose_tags.title%22)

> Choose Tags for Your Discussion

```diff
-Escolha as Tags para Sua Discussão
+Escolher Tags para Sua Discussão
```

<del>Escolha as</del><ins>Escolher</ins> Tags para Sua Discussão

#### [`flarum-tags.forum.composer_discussion.choose_tags_link`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.composer_discussion.choose_tags_link%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
-Escolha as Tags
+=> flarum-tags.ref.choose_tags
```

#### [`flarum-tags.forum.header.back_to_tags_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.header.back_to_tags_tooltip%22)

> Back to Tag List

```diff
-Voltar a Lista de Tags
+Voltar à Lista de Tags
```

Voltar <del>a</del><ins>à</ins> Lista de Tags

#### [`flarum-tags.forum.post_stream.added_and_removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_and_removed_tags_text%22)

> {username} added the {tagsAdded} and removed the {tagsRemoved} {time}.

```diff
-{username} adicionou {tagsAdded} e removeu {tagsRemoved}.
+{username} adicionou {tagsAdded} e removeu {tagsRemoved} {time}.
```

{username} adicionou {tagsAdded} e removeu <del>{tagsRemoved}.</del><ins>{tagsRemoved} {time}.</ins>

#### [`flarum-tags.forum.post_stream.added_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.post_stream.added_tags_text%22)

> {username} added the {tagsAdded} {time}.

```diff
-{username} adicionou {tagsAdded}.
+{username} adicionou {tagsAdded} {time}.
```

{username} adicionou <del>{tagsAdded}.</del><ins>{tagsAdded} {time}.</ins>

#### [`flarum-tags.forum.post_stream.removed_tags_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.forum.post_stream.removed_tags_text%22)

> {username} removed the {tagsRemoved} {time}.

```diff
-{username} removeu {tagsRemoved}.
+{username} removeu {tagsRemoved} {time}.
```

{username} removeu <del>{tagsRemoved}.</del><ins>{tagsRemoved} {time}.</ins>

#### [`flarum-tags.lib.deleted_tag_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.deleted_tag_text%22)

> Deleted

```diff
-Deletada
+Excluída
```


### `fof-best-answer`

#### [`fof-best-answer.admin.edit_tag.qna_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.edit_tag.qna_label%22)

> Enable Best Answers to be set in this tag

```diff
-Permita que as Melhores Respostas sejam definidas nesta tag
+Permitir definir melhores respostas nesta tag
```

<del>Permita que as Melhores</del><ins>Permitir</ins> <del>Respostas</del><ins>definir</ins> <del>sejam</del><ins>melhores</ins> <del>definidas</del><ins>respostas</ins> nesta tag

#### [`fof-best-answer.admin.edit_tag.reminders`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.edit_tag.reminders%22)

> Send reminders to set a Best Answer for discussions in this tag

```diff
-Envie lembretes para definir uma Melhor Resposta para discussões nesta tag
+Enviar lembretes para definir uma melhor resposta nas discussões desta tag
```

<del>Envie</del><ins>Enviar</ins> lembretes para definir uma <del>Melhor</del><ins>melhor</ins> <del>Resposta</del><ins>resposta</ins> <del>para</del><ins>nas</ins> discussões <del>nesta</del><ins>desta</ins> tag

#### [`fof-best-answer.admin.permissions.best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.permissions.best_answer%22)

> Select Best Answer (own Discussion)

```diff
-Selecione a Melhor Resposta (própria Discussão)
+Selecionar Melhor Resposta (própria discussão)
```

<del>Selecione a</del><ins>Selecionar</ins> Melhor Resposta (própria <del>Discussão)</del><ins>discussão)</ins>

#### [`fof-best-answer.admin.permissions.best_answer_not_own_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.permissions.best_answer_not_own_discussion%22)

> Select Best Answer (not own Discussion)

```diff
-Selecione a Melhor Resposta (não é a própria Discussão)
+Selecionar Melhor Resposta (discussão de outros)
```

<del>Selecione a</del><ins>Selecionar</ins> Melhor Resposta<del> (não é</del> <del>a</del><ins>(discussão</ins> <del>própria</del><ins>de</ins> <del>Discussão)</del><ins>outros)</ins>

#### [`fof-best-answer.admin.settings.schedule_log_output`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.schedule_log_output%22)

> Append scheduler output to log storage

```diff
-Anexar resultado do agendador ao armazenamento de log
+Anexar a saída do agendador aos logs
```

Anexar <del>resultado</del><ins>a saída</ins> do agendador<del> ao armazenamento</del> <del>de</del><ins>aos</ins> <del>log</del><ins>logs</ins>

#### [`fof-best-answer.admin.settings.schedule_on_one_server`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.schedule_on_one_server%22)

> Use 'onOneServer()' directive for the task scheduler

```diff
-Use a diretiva 'onOneServer()' para o agendador de tarefas
+Usar a diretiva 'onOneServer()' no agendador de tarefas
```

<del>Use</del><ins>Usar</ins> a diretiva 'onOneServer()'<del> para</del> <del>o</del><ins>no</ins> agendador de tarefas

#### [`fof-best-answer.admin.settings.schedule_stop_overnight`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.schedule_stop_overnight%22)

> Prevent reminder notifications being sent during unsocial hours

```diff
-Impedir que notificações de lembrete sejam enviadas durante horários não sociais
+Não enviar notificações de lembrete em horários inconvenientes
```

<del>Impedir</del><ins>Não</ins> <del>que</del><ins>enviar</ins> notificações de lembrete<del> sejam enviadas</del> <del>durante</del><ins>em</ins> horários<del> não</del> <del>sociais</del><ins>inconvenientes</ins>

#### [`fof-best-answer.admin.settings.schedule_stop_overnight_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.schedule_stop_overnight_help%22)

> 9pm - 8am server time

```diff
-21:00 - 08:00 horário do servidor
+21h - 8h, horário do servidor
```

<del>21:00</del><ins>21h</ins> - <del>08:00</del><ins>8h,</ins> horário do servidor

#### [`fof-best-answer.admin.settings.select_best_answer_reminder_days_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_reminder_days_help%22)

> Send a reminder after the configurable amount of days to the OP to select a Best Answer, 0 = disable reminders.

```diff
-Envie um lembrete após a quantidade configurável de dias para o autor para selecionar uma melhor resposta, 0 = desativar lembretes.
+Envia um lembrete ao autor, após o número de dias configurado, para selecionar uma melhor resposta. 0 = desativar lembretes.
```

<del>Envie</del><ins>Envia</ins> um lembrete <del>após</del><ins>ao</ins> <del>a</del><ins>autor,</ins> <del>quantidade</del><ins>após</ins> <del>configurável</del><ins>o número</ins> de dias<del> para o</del> <del>autor</del><ins>configurado,</ins> para selecionar uma melhor <del>resposta,</del><ins>resposta.</ins> 0 = desativar lembretes.

#### [`fof-best-answer.admin.settings.show_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.show_filter_help%22)

> For tags which have Best Answers enabled, choose to display solved/unsolved filter option in the discussion list

```diff
-Para tags com as Melhores Respostas ativadas, escolha exibir a opção de filtro resolvido/não resolvido na lista de discussão
+Em tags com melhor resposta ativada, mostra a opção de filtro resolvidas/não resolvidas na lista de discussões
```

<del>Para</del><ins>Em</ins> tags com<del> as Melhores</del> <del>Respostas</del><ins>melhor</ins> <del>ativadas,</del><ins>resposta</ins> <del>escolha</del><ins>ativada,</ins> <del>exibir</del><ins>mostra</ins> a opção de filtro <del>resolvido/não</del><ins>resolvidas/não</ins> <del>resolvido</del><ins>resolvidas</ins> na lista de <del>discussão</del><ins>discussões</ins>

#### [`fof-best-answer.admin.settings.show_filter_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.show_filter_label%22)

> Display Best Answer filter dropdown

```diff
-Exibir menu suspenso do filtro de Melhor Resposta
+Mostrar o menu de filtro de melhor resposta
```

<del>Exibir</del><ins>Mostrar</ins> <del>menu</del><ins>o</ins> <del>suspenso</del><ins>menu</ins> <del>do</del><ins>de</ins> filtro de <del>Melhor</del><ins>melhor</ins> <del>Resposta</del><ins>resposta</ins>

#### [`fof-best-answer.admin.settings.use_alt_ui_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.use_alt_ui_help%22)

> Best answer controls in post footer

```diff
-Controle de Melhor Resposta no rodapé da postagem
+Controles de melhor resposta no rodapé do post
```

<del>Controle</del><ins>Controles</ins> de <del>Melhor</del><ins>melhor</ins> <del>Resposta</del><ins>resposta</ins> no rodapé <del>da</del><ins>do</ins> <del>postagem</del><ins>post</ins>

#### [`fof-best-answer.email.body.awarded`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.email.body.awarded%22)

> Hey {recipient\_display\_name},
>
> Great job, {actor\_display\_name} just set your post as the best answer in the discussion: {discussion\_title}. Thanks for helping out.
>
> View it here: {discussion\_url}
>

```diff
-Olá, {recipient_display_name},
+Olá {recipient_display_name},

-Ótimo trabalho, {actor_display_name} acabou de definir sua postagem como a melhor resposta na discussão: {discussion_title}. Obrigado por contribuir.
+Ótimo trabalho! {actor_display_name} acabou de definir seu post como a melhor resposta na discussão: {discussion_title}. Obrigado por ajudar.

 Veja aqui: {discussion_url}

```

<del>Olá,</del><ins>Olá</ins> {recipient\_display\_name},<br /><br />Ótimo <del>trabalho,</del><ins>trabalho!</ins> {actor\_display\_name} acabou de definir <del>sua</del><ins>seu</ins> <del>postagem</del><ins>post</ins> como a melhor resposta na discussão: {discussion\_title}. Obrigado por <del>contribuir.</del><ins>ajudar.</ins><br /><br />Veja aqui: {discussion\_url}<br />

#### [`fof-best-answer.email.body.ba-set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.email.body.ba-set%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just set a best answer in the discussion: {discussion\_title}, which you participated in.
>
> Check it out: {discussion\_url}
>

```diff
-Olá, {recipient_display_name},
+Olá {recipient_display_name},

-{actor_display_name} acabou de definir a melhor resposta na discussão: {discussion_title}, da qual você participou.
+{actor_display_name} acabou de definir uma melhor resposta na discussão: {discussion_title}, da qual você participou.

 Confira: {discussion_url}

```

<del>Olá,</del><ins>Olá</ins> {recipient\_display\_name},<br /><br />{actor\_display\_name} acabou de definir <del>a</del><ins>uma</ins> melhor resposta na discussão: {discussion\_title}, da qual você participou.<br /><br />Confira: {discussion\_url}<br />

#### [`fof-best-answer.email.body.select`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.email.body.select%22)

> Hey {recipient\_display\_name},
>
> Just checking in; by now you should have plenty of replies to your question: {discussion\_title}. Hopefully one of them has helped you solve your problem.
>
> If so, it would be really helpful for future members if you could set a best answer to your question. It'll help people with the same problem find the answer they need, and it's also a big thank you to the members who helped you out. They give their time voluntarily, so it's nice to let them know that they're doing well.
>
> Visit the discussion here: {discussion\_url}, and select the most appropriate post as the best answer.
>
> Thanks!
>

```diff
-Olá, {recipient_display_name},
+Olá {recipient_display_name},

-Apenas checando; você deve ter respostas para sua pergunta: {discussion_title}.
-Espero que uma deles tenha ajudado você a resolver seu problema.
+Só passando para saber: a esta altura você já deve ter várias respostas para sua pergunta: {discussion_title}. Esperamos que uma delas tenha ajudado a resolver seu problema.

-Nesse caso, seria muito útil para os futuros membros se você pudesse definir a melhor resposta para sua pergunta. Isso ajudará as pessoas com o mesmo problema a encontrar a resposta de que precisam e também é um grande obrigado aos membros que o ajudaram. Eles doam seu tempo voluntariamente, então é bom que saibam que estão indo bem.
+Se for o caso, seria muito útil para os futuros membros se você definisse uma melhor resposta para sua pergunta. Isso ajuda quem tem o mesmo problema a encontrar a resposta de que precisa, e também é um grande agradecimento aos membros que ajudaram você. Eles doam seu tempo voluntariamente, então é bom que saibam que estão indo bem.

-Visite a discussão aqui: {discussion_url} e selecione a postagem mais apropriada como a melhor resposta.
+Acesse a discussão aqui: {discussion_url} e selecione o post mais adequado como a melhor resposta.

 Obrigado!

```

<del>Olá,</del><ins>Olá</ins> {recipient\_display\_name},<br /><br /><del>Apenas</del><ins>Só</ins> <del>checando;</del><ins>passando para saber: a esta altura</ins> você<ins> já</ins> deve ter<ins> várias</ins> respostas para sua pergunta: {discussion\_title}.<del><br />Espero</del><ins> Esperamos</ins> que uma <del>deles</del><ins>delas</ins> tenha ajudado<del> você</del> a resolver seu problema.<br /><br /><del>Nesse</del><ins>Se for o</ins> caso, seria muito útil para os futuros membros se você<del> pudesse</del> <del>definir</del><ins>definisse</ins> <del>a</del><ins>uma</ins> melhor resposta para sua pergunta. Isso<del> ajudará</del> <del>as</del><ins>ajuda</ins> <del>pessoas</del><ins>quem</ins> <del>com</del><ins>tem</ins> o mesmo problema a encontrar a resposta de que <del>precisam</del><ins>precisa,</ins> e também é um grande <del>obrigado</del><ins>agradecimento</ins> aos membros que <del>o</del><ins>ajudaram</ins> <del>ajudaram.</del><ins>você.</ins> Eles doam seu tempo voluntariamente, então é bom que saibam que estão indo bem.<br /><br /><del>Visite</del><ins>Acesse</ins> a discussão aqui: {discussion\_url} e selecione <del>a</del><ins>o</ins> <del>postagem</del><ins>post</ins> mais <del>apropriada</del><ins>adequado</ins> como a melhor resposta.<br /><br />Obrigado!<br />

#### [`fof-best-answer.email.subject.awarded`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.email.subject.awarded%22)

> Your post was set as the best answer by {display\_name}

```diff
-Sua postagem foi definida como a melhor resposta por {display_name}
+Seu post foi definido como a melhor resposta por {display_name}
```

<del>Sua</del><ins>Seu</ins> <del>postagem</del><ins>post</ins> foi <del>definida</del><ins>definido</ins> como a melhor resposta por {display\_name}

#### [`fof-best-answer.email.subject.ba-set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.email.subject.ba-set%22)

> A best answer was set by {display\_name}

```diff
-A melhor resposta foi definida por {display_name}
+Uma melhor resposta foi definida por {display_name}
```

<del>A</del><ins>Uma</ins> melhor resposta foi definida por {display\_name}

#### [`fof-best-answer.email.subject.select`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.email.subject.select%22)

> Did you manage to get your question answered?

```diff
-Você conseguiu obter uma resposta para sua pergunta?
+Você conseguiu uma resposta para sua pergunta?
```

Você conseguiu <del>obter </del>uma resposta para sua pergunta?

#### [`fof-best-answer.forum.answered_badge`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.answered_badge%22)

> Answered

```diff
-Respondido
+Respondida
```

#### [`fof-best-answer.forum.best_answer_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.best_answer_label%22)

> set by &lt;a&gt;{username}&lt;/a&gt; {time\_set}

```diff
-definido por <a>{username}</a> {time_set}
+definida por <a>{username}</a> {time_set}
```

<del>definido</del><ins>definida</ins> por &lt;a&gt;{username}&lt;/a&gt; {time\_set}

#### [`fof-best-answer.forum.composer.titlePlaceholder`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.composer.titlePlaceholder%22)

> Question title

```diff
-Título da Questão
+Título da pergunta
```

Título da <del>Questão</del><ins>pergunta</ins>

#### [`fof-best-answer.forum.errors.mismatch`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.errors.mismatch%22)

> Selected post does not exist in this discussion.

```diff
-A postagem selecionada não existe nesta discussão.
+O post selecionado não existe nesta discussão.
```

<del>A</del><ins>O</ins> <del>postagem</del><ins>post</ins> <del>selecionada</del><ins>selecionado</ins> não existe nesta discussão.

#### [`fof-best-answer.forum.filter.accessible_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.filter.accessible_label%22)

> Solved/Unsolved selection

```diff
-Seleção Resolvidas/não Resolvidas
+Seleção de resolvidas/não resolvidas
```

Seleção <del>Resolvidas/não</del><ins>de</ins> <del>Resolvidas</del><ins>resolvidas/não resolvidas</ins>

#### [`fof-best-answer.forum.filter.all_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.filter.all_label%22)

> All questions

```diff
-Todas as Perguntas
+Todas as perguntas
```

Todas as <del>Perguntas</del><ins>perguntas</ins>

#### [`fof-best-answer.forum.filter.solved_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.filter.solved_label%22)

> Solved questions

```diff
-Questões Resolvidas
+Perguntas resolvidas
```

#### [`fof-best-answer.forum.filter.unsolved_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.filter.unsolved_label%22)

> Unsolved questions

```diff
-Questões não Resolvidas
+Perguntas não resolvidas
```

<del>Questões</del><ins>Perguntas</ins> não <del>Resolvidas</del><ins>resolvidas</ins>

#### [`fof-best-answer.forum.index.ask_question`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.index.ask_question%22)

> Ask a Question

```diff
-Faça uma Pergunta
+Fazer uma Pergunta
```

<del>Faça</del><ins>Fazer</ins> uma Pergunta

#### [`fof-best-answer.forum.index.cannot_ask_question`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.index.cannot_ask_question%22)

> Cannot Ask a Question

```diff
-Não pode Perguntar
+Não Pode Perguntar
```

Não <del>pode</del><ins>Pode</ins> Perguntar

#### [`fof-best-answer.forum.index.solved_link`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.index.solved_link%22)

> Solved discussions

```diff
-Discussões Resolvidas
+Discussões resolvidas
```

Discussões <del>Resolvidas</del><ins>resolvidas</ins>

#### [`fof-best-answer.forum.index.unsolved_link`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.index.unsolved_link%22)

> Unsolved discussions

```diff
-Discussões não Resolvidas
+Discussões não resolvidas
```

Discussões não <del>Resolvidas</del><ins>resolvidas</ins>

#### [`fof-best-answer.forum.notification.awarded`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.notification.awarded%22)

> Your post was set as the best answer by {username}

```diff
-Sua postagem foi definida como a Melhor Resposta por {username}
+Seu post foi definido como a melhor resposta por {username}
```

<del>Sua</del><ins>Seu</ins> <del>postagem</del><ins>post</ins> foi <del>definida</del><ins>definido</ins> como a <del>Melhor</del><ins>melhor</ins> <del>Resposta</del><ins>resposta</ins> por {username}

#### [`fof-best-answer.forum.notification.best_answer_in_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.notification.best_answer_in_discussion%22)

> {username} set a best answer in this discussion

```diff
-{username} definiu a melhor resposta nesta discussão
+{username} definiu uma melhor resposta nesta discussão
```

{username} definiu <del>a</del><ins>uma</ins> melhor resposta nesta discussão

#### [`fof-best-answer.forum.notification.content`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.notification.content%22)

> Please select a Best Answer if your question has been answered

```diff
-Por favor, selecione uma Melhor Resposta se sua pergunta foi respondida
+Selecione uma melhor resposta se sua pergunta foi respondida
```

<del>Por favor, selecione</del><ins>Selecione</ins> uma <del>Melhor</del><ins>melhor</ins> <del>Resposta</del><ins>resposta</ins> se sua pergunta foi respondida

#### [`fof-best-answer.forum.notification.preferences.awarded_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.awarded_best_answer%22)

> Someone sets my post as a best answer

```diff
-Alguém definiu minha postagem como a Melhor Resposta
+Alguém define meu post como melhor resposta
```

Alguém <del>definiu</del><ins>define</ins> <del>minha</del><ins>meu</ins> <del>postagem</del><ins>post</ins> como<del> a</del> <del>Melhor</del><ins>melhor</ins> <del>Resposta</del><ins>resposta</ins>

#### [`fof-best-answer.forum.notification.preferences.best_answer_in_discussion`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.notification.preferences.best_answer_in_discussion%22)

> A best answer is set in a discussion I participated in

```diff
-A melhor resposta é definida em uma discussão da qual participei
+Uma melhor resposta é definida em uma discussão da qual participei
```

<del>A</del><ins>Uma</ins> melhor resposta é definida em uma discussão da qual participei

#### [`fof-best-answer.forum.remove_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.remove_best_answer%22)

> Unselect Best Answer

```diff
-Desmarcar a Melhor Resposta
+Desmarcar Melhor Resposta
```

Desmarcar <del>a </del>Melhor Resposta

#### [`fof-best-answer.forum.this_best_answer`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.this_best_answer%22)

> Select Best Answer

```diff
-Selecione a Melhor Resposta
+Marcar Melhor Resposta
```

<del>Selecione a</del><ins>Marcar</ins> Melhor Resposta

#### [`fof-best-answer.forum.user.best-answer-count`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.user.best-answer-count%22)

> {count, plural, one { {count} best answer} other {{count} best answers}}

```diff
-{count, plural, one { {count} melhor resposta} other {{count} melhores respostas}}
+{count, plural, one {# melhor resposta} other {# melhores respostas}}
```

{count, plural, one <del>{ {count}</del><ins>{#</ins> melhor resposta} other <del>{{count}</del><ins>{#</ins> melhores respostas}}


### `fof-blog`

#### [`fof-blog.admin.permissions.approve_posts`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.permissions.approve_posts%22)

> Can approve blog articles

```diff
-Pode aprovar artigos do blog
+Aprovar artigos do blog
```

<del>Pode aprovar</del><ins>Aprovar</ins> artigos do blog

#### [`fof-blog.admin.permissions.auto_approve_posts`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.permissions.auto_approve_posts%22)

> Post articles without approval

```diff
-Postar artigos sem aprovação
+Publicar artigos sem aprovação
```

<del>Postar</del><ins>Publicar</ins> artigos sem aprovação

#### [`fof-blog.admin.permissions.write_articles`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.permissions.write_articles%22)

> Write and edit blog articles

```diff
-Escrever e editar artigos de blog
+Escrever e editar artigos do blog
```

Escrever e editar artigos <del>de</del><ins>do</ins> blog

#### [`fof-blog.admin.settings.add_hero_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.add_hero_text%22)

> Show welcome banner on blog pages if it wasn't closed yet.

```diff
-Mostrar banner de boas-vindas nas páginas do blog, caso ainda não tenha sido fechado.
+Mostra o banner de boas-vindas nas páginas do blog, se ainda não tiver sido fechado.
```

<del>Mostrar</del><ins>Mostra o</ins> banner de boas-vindas nas páginas do blog, <del>caso</del><ins>se</ins> ainda não <del>tenha</del><ins>tiver</ins> sido fechado.

#### [`fof-blog.admin.settings.add_sidebar_nav_label`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.add_sidebar_nav_label%22)

> Add to sidebar navigation

```diff
-Adicionar à navegação da barra lateral
+Adicionar à navegação lateral
```

Adicionar à navegação <del>da barra </del>lateral

#### [`fof-blog.admin.settings.add_sidebar_nav_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.add_sidebar_nav_text%22)

> Include a link to the blog on the sidebar nav menu.

```diff
-Inclua um link para o blog no menu de navegação da barra lateral.
+Inclui um link para o blog no menu de navegação da barra lateral.
```

<del>Inclua</del><ins>Inclui</ins> um link para o blog no menu de navegação da barra lateral.

#### [`fof-blog.admin.settings.allow_comments_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.allow_comments_text%22)

> By default, allow comments on blog posts. When disabled, it can be enabled individually per blog post. &lt;b&gt;Note:&lt;/b&gt; Changing this setting will not affect pre-existing blog posts.

```diff
-Por padrão, permite comentários nas postagens do blog. Quando desativado, pode ser ativado individualmente por postagem no blog. <b>Observação:</b> alterar essa configuração não afetará postagens de blog pré-existentes.
+Por padrão, permite comentários nos posts do blog. Quando desativado, pode ser ativado individualmente por post do blog. <b>Nota:</b> alterar esta configuração não afeta posts do blog já existentes.
```

Por padrão, permite comentários <del>nas</del><ins>nos</ins> <del>postagens</del><ins>posts</ins> do blog. Quando desativado, pode ser ativado individualmente por <del>postagem</del><ins>post</ins> <del>no</del><ins>do</ins> blog. <del>&lt;b&gt;Observação:&lt;/b&gt;</del><ins>&lt;b&gt;Nota:&lt;/b&gt;</ins> alterar <del>essa</del><ins>esta</ins> configuração não <del>afetará</del><ins>afeta</ins> <del>postagens</del><ins>posts</ins> <del>de</del><ins>do</ins> blog <del>pré-existentes.</del><ins>já existentes.</ins>

#### [`fof-blog.admin.settings.default_article_image_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.default_article_image_text%22)

> Select a default article image to display when no image is set.

```diff
-Selecione uma imagem de artigo padrão para exibir quando nenhuma imagem estiver definida.
+Selecione uma imagem padrão para exibir em artigos sem imagem definida.
```

Selecione uma imagem <del>de artigo </del>padrão para exibir <del>quando</del><ins>em</ins> <del>nenhuma</del><ins>artigos</ins> <del>imagem</del><ins>sem</ins> <del>estiver</del><ins>imagem</ins> definida.

#### [`fof-blog.admin.settings.featured_count_label`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.featured_count_label%22)

> Max Featured Posts

```diff
-Máximo de publicações em destaque
+Máx. de Posts em Destaque
```

<del>Máximo</del><ins>Máx.</ins> de <del>publicações</del><ins>Posts</ins> em <del>destaque</del><ins>Destaque</ins>

#### [`fof-blog.admin.settings.featured_count_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.featured_count_text%22)

> How many posts should be displayed in a big grid at the top of a blog page?

```diff
-Quantas postagens devem ser exibidas em uma grande grade no topo de uma página de blog?
+Quantos posts devem ser exibidos em uma grade grande no topo de uma página do blog?
```

<del>Quantas</del><ins>Quantos</ins> <del>postagens</del><ins>posts</ins> devem ser <del>exibidas</del><ins>exibidos</ins> em uma<del> grande</del> grade<ins> grande</ins> no topo de uma página <del>de</del><ins>do</ins> blog?

#### [`fof-blog.admin.settings.hide_on_discussion_list_label`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.hide_on_discussion_list_label%22)

> Don't show on discussion list

```diff
-Não mostrar na lista de discussão
+Não mostrar na lista de discussões
```

Não mostrar na lista de <del>discussão</del><ins>discussões</ins>

#### [`fof-blog.admin.settings.hide_on_discussion_list_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.hide_on_discussion_list_text%22)

> Hide blog posts from the discussions list.

```diff
-Oculte as postagens do blog da lista de discussões.
+Oculta os posts do blog da lista de discussões.
```

<del>Oculte</del><ins>Oculta</ins> <del>as</del><ins>os</ins> <del>postagens</del><ins>posts</ins> do blog da lista de discussões.

#### [`fof-blog.admin.settings.require_review_label`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.require_review_label%22)

> Blog posts requires review

```diff
-As postagens do blog exigem revisão
+Posts do blog exigem revisão
```

<del>As postagens</del><ins>Posts</ins> do blog exigem revisão

#### [`fof-blog.admin.settings.require_review_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.require_review_text%22)

> When posting an article, it will not be visible directly and needs to be reviewed by a moderator.

```diff
-Ao postar um artigo, ele não ficará visível diretamente e precisa ser revisado por um moderador.
+Ao publicar um artigo, ele não ficará visível imediatamente e precisará ser revisado por um moderador.
```

Ao <del>postar</del><ins>publicar</ins> um artigo, ele não ficará visível <del>diretamente</del><ins>imediatamente</ins> e <del>precisa</del><ins>precisará</ins> ser revisado por um moderador.

#### [`fof-blog.admin.settings.select_categories_button`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.select_categories_button%22)

> Select blog categories

```diff
-Selecione as categorias do blog
+Selecionar categorias do blog
```

<del>Selecione as</del><ins>Selecionar</ins> categorias do blog

#### [`fof-blog.admin.settings.show_tag_hierarchy_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.admin.settings.show_tag_hierarchy_text%22)

> Add spacing to child-categories and give the category-list a hierarchy.

```diff
-Adicione espaçamento às categorias filhas e dê uma hierarquia à lista de categorias.
+Adiciona espaçamento às categorias filhas e dá uma hierarquia à lista de categorias.
```

<del>Adicione</del><ins>Adiciona</ins> espaçamento às categorias filhas e <del>dê</del><ins>dá</ins> uma hierarquia à lista de categorias.

#### [`fof-blog.forum.article.slug`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article.slug%22)

> Slug

```diff
-Lesma
+Slug
```

#### [`fof-blog.forum.article.summary`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article.summary%22)

> Summary

```diff
-Sumário
+Resumo
```

#### [`fof-blog.forum.category_empty`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.category_empty%22)

> There are no blog posts in this category.

```diff
-Não há postagens no blog nesta categoria.
+Não há posts do blog nesta categoria.
```

Não há <del>postagens</del><ins>posts</ins> <del>no</del><ins>do</ins> blog nesta categoria.

#### [`fof-blog.forum.comment_section.locked`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.comment_section.locked%22)

> The comment section is disabled for this article

```diff
-A seção de comentários está desabilitada para esse artigo
+A seção de comentários está desativada para este artigo
```

A seção de comentários está <del>desabilitada</del><ins>desativada</ins> para <del>esse</del><ins>este</ins> artigo

#### [`fof-blog.forum.composer.comment_section`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.composer.comment_section%22)

> The comment section is not available when composing an article.

```diff
-A seção de comentários não está disponível ao compor um artigo.
+A seção de comentários não está disponível ao escrever um artigo.
```

A seção de comentários não está disponível ao <del>compor</del><ins>escrever</ins> um artigo.

#### [`fof-blog.forum.composer.enter_message_here`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.composer.enter_message_here%22)

> Enter your message here

```diff
-Insira sua mensagem aqui
+Digite sua mensagem aqui
```

<del>Insira</del><ins>Digite</ins> sua mensagem aqui

#### [`fof-blog.forum.composer.no_blog_tags_selected`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.composer.no_blog_tags_selected%22)

> None of the tags you have selected is a blog tag. Please select at least one.

```diff
-Nenhuma das tags que você selecionou é uma tag de blog. Selecione pelo menos um.
+Nenhuma das tags selecionadas é uma tag do blog. Selecione pelo menos uma.
```

Nenhuma das tags <del>que você selecionou</del><ins>selecionadas</ins> é uma tag <del>de</del><ins>do</ins> blog. Selecione pelo menos <del>um.</del><ins>uma.</ins>

#### [`fof-blog.forum.composer.post_article`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.composer.post_article%22)

> Post article

```diff
-Postar artigo
+Publicar artigo
```

<del>Postar</del><ins>Publicar</ins> artigo

#### [`fof-blog.forum.composer.post_without_blog_info`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.composer.post_without_blog_info%22)

> Are you sure you want to post this blog post? You did not yet enter a blog summary or image.

```diff
-Tem certeza de que deseja postar esta postagem no blog? Você ainda não inseriu um resumo ou imagem do blog.
+Tem certeza de que deseja publicar este post do blog? Você ainda não informou um resumo ou uma imagem do blog.
```

Tem certeza de que deseja <del>postar</del><ins>publicar</ins> <del>esta</del><ins>este</ins> <del>postagem</del><ins>post</ins> <del>no</del><ins>do</ins> blog? Você ainda não <del>inseriu</del><ins>informou</ins> um resumo ou<ins> uma</ins> imagem do blog.

#### [`fof-blog.forum.composer.select_category`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.composer.select_category%22)

> Select a category

```diff
-Selecionar uma categoria
+Selecionar categoria
```

Selecionar <del>uma </del>categoria

#### [`fof-blog.forum.forum_nav`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.forum_nav%22)

> Forum Nav

```diff
-Navegação do fórum
+Navegação do Fórum
```

Navegação do <del>fórum</del><ins>Fórum</ins>

#### [`fof-blog.forum.hidden`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.hidden%22)

> Hidden

```diff
-Escondido
+Oculto
```

#### [`fof-blog.forum.no_more_posts`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.no_more_posts%22)

> No more blog posts.

```diff
-Não há mais postagens no blog.
+Sem mais posts no blog.
```

<del>Não há</del><ins>Sem</ins> mais <del>postagens</del><ins>posts</ins> no blog.

#### [`fof-blog.forum.recent_posts`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.recent_posts%22)

> Recent blog posts

```diff
-Postagens recentes do blog
+Posts recentes do blog
```

<del>Postagens</del><ins>Posts</ins> recentes do blog

#### [`fof-blog.forum.tools.delete_forever`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.tools.delete_forever%22)

> Delete forever

```diff
-Apagar para sempre
+Excluir para sempre
```

<del>Apagar</del><ins>Excluir</ins> para sempre

#### [`fof-blog.forum.tools.disable_comments`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.tools.disable_comments%22)

> Disable comments

```diff
-Desabilitar comentários
+Desativar comentários
```

<del>Desabilitar</del><ins>Desativar</ins> comentários

#### [`fof-blog.forum.tools.enable_comments`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.tools.enable_comments%22)

> Enable comments

```diff
-Habilitar comentários
+Ativar comentários
```

<del>Habilitar</del><ins>Ativar</ins> comentários

#### [`fof-blog.forum.tools.hide_article`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.tools.hide_article%22)

> Hide article

```diff
-Esconder artigo
+Ocultar artigo
```

<del>Esconder</del><ins>Ocultar</ins> artigo

#### [`fof-blog.forum.validation.missing_id`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.validation.missing_id%22)

> Missing ID

```diff
-ID ausente
+ID Ausente
```

ID <del>ausente</del><ins>Ausente</ins>


### `fof-byobu`

#### [`fof-byobu.admin.permission.create_private_discussions_with_blocking_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_blocking_users%22)

> Create private discussions with users that block it

```diff
-Crie discussões privadas com usuários que bloqueiam
+Criar discussões privadas com usuários que as bloqueiam
```

<del>Crie</del><ins>Criar</ins> discussões privadas com usuários que<ins> as</ins> bloqueiam

#### [`fof-byobu.admin.permission.create_private_discussions_with_groups`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_groups%22)

> Create private discussions with groups

```diff
-Crie discussões privadas com grupos
+Criar discussões privadas com grupos
```

<del>Crie</del><ins>Criar</ins> discussões privadas com grupos

#### [`fof-byobu.admin.permission.create_private_discussions_with_users`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.create_private_discussions_with_users%22)

> Create private discussions with users

```diff
-Crie discussões privadas com usuários
+Criar discussões privadas com usuários
```

<del>Crie</del><ins>Criar</ins> discussões privadas com usuários

#### [`fof-byobu.admin.permission.edit_group_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.edit_group_recipients%22)

> Edit groups partaking in private discussions

```diff
-Editar grupos participando de discussões privadas
+Editar os grupos participantes de discussões privadas
```

Editar <ins>os </ins>grupos <del>participando</del><ins>participantes</ins> de discussões privadas

#### [`fof-byobu.admin.permission.edit_user_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.edit_user_recipients%22)

> Edit users partaking in private discussions

```diff
-Editar usuários participando de discussões privadas
+Editar os usuários participantes de discussões privadas
```

Editar <ins>os </ins>usuários <del>participando</del><ins>participantes</ins> de discussões privadas

#### [`fof-byobu.admin.permission.make_private_into_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.make_private_into_public%22)

> Transform a private discussion into a public discussion

```diff
-Transforme uma discussão privada em uma discussão pública
+Transformar uma discussão privada em discussão pública
```

<del>Transforme</del><ins>Transformar</ins> uma discussão privada em<del> uma</del> discussão pública

#### [`fof-byobu.admin.permission.view_private_discussions-when-flagged`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.view_private_discussions-when-flagged%22)

> View private discussions of other users if flagged

```diff
-Veja as discussões privadas de outros usuários, se sinalizado
+Ver discussões privadas de outros usuários quando sinalizadas
```

<del>Veja as</del><ins>Ver</ins> discussões privadas de outros <del>usuários,</del><ins>usuários</ins> <del>se</del><ins>quando</ins> <del>sinalizado</del><ins>sinalizadas</ins>

#### [`fof-byobu.admin.settings.badge-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.badge-icon%22)

> Byobu Discussion Badge

```diff
-Distintivo de Discussão Byobu
+Emblema de Discussão do Byobu
```

<del>Distintivo</del><ins>Emblema</ins> de Discussão<ins> do</ins> Byobu

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left%22)

> Delete PDs when the last user leaves

```diff
-Apagar Discussões Privadas quando o último membro sair
+Excluir DPs quando o último usuário sair
```

<del>Apagar Discussões</del><ins>Excluir</ins> <del>Privadas</del><ins>DPs</ins> quando o último <del>membro</del><ins>usuário</ins> sair

#### [`fof-byobu.admin.settings.delete_on_last_recipient_left_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.delete_on_last_recipient_left_help%22)

> If enabled, PDs will be permanently deleted from the database when the last user leaves. Otherwise, the PD will be soft-deleted/hidden.

```diff
-Se ativado, as Discussões Privadas serão excluídas permanentemente do banco de dados quando o último usuário sair. Caso contrário, a Discussão Privada será soft-excluída/ocultada.
+Se ativado, as discussões privadas (DPs) serão excluídas permanentemente do banco de dados quando o último usuário sair. Caso contrário, a DP será apenas ocultada (soft delete).
```

Se ativado, as <del>Discussões</del><ins>discussões</ins> <del>Privadas</del><ins>privadas (DPs)</ins> serão excluídas permanentemente do banco de dados quando o último usuário sair. Caso contrário, a<del> Discussão</del> <del>Privada</del><ins>DP</ins> será <del>soft-excluída/ocultada.</del><ins>apenas ocultada (soft delete).</ins>

#### [`fof-byobu.admin.settings.enable-make-public-option`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.enable-make-public-option%22)

> Enable the "make public" ability

```diff
-Habilite a habilidade "tornar público"
+Ativar a opção "tornar pública"
```

<del>Habilite</del><ins>Ativar</ins> a <del>habilidade</del><ins>opção</ins> "tornar <del>público"</del><ins>pública"</ins>

#### [`fof-byobu.admin.settings.enable-make-public-option-help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.enable-make-public-option-help%22)

> Adds the ability for those with permission to remove all recipients, assign a new tag and make the discussion publically visible (accoring to the visibility settings of the chosen tag).

```diff
-Adiciona a capacidade para aqueles com permissão para remover todos os destinatários, atribuir uma nova tag e tornar a discussão publicamente visível (de acordo com as configurações de visibilidade da tag escolhida).
+Permite que quem tem permissão remova todos os destinatários, atribua uma nova tag e torne a discussão visível publicamente (de acordo com as configurações de visibilidade da tag escolhida).
```

<del>Adiciona a capacidade</del><ins>Permite</ins> <del>para</del><ins>que</ins> <del>aqueles</del><ins>quem</ins> <del>com</del><ins>tem</ins> permissão<del> para</del> <del>remover</del><ins>remova</ins> todos os destinatários, <del>atribuir</del><ins>atribua</ins> uma nova tag e <del>tornar</del><ins>torne</ins> a discussão<del> publicamente</del> visível<ins> publicamente</ins> (de acordo com as configurações de visibilidade da tag escolhida).

#### [`fof-byobu.admin.settings.post-event-icon`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.post-event-icon%22)

> Byobu Post Events

```diff
-Eventos pós Byobu
+Eventos de Post do Byobu
```

Eventos <del>pós</del><ins>de Post do</ins> Byobu

#### [`fof-byobu.email.subject.private_discussion_added`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_added%22)

> \[Private Discussion\] {display\_name} added you to a private discussion

```diff
-[Display Privado] {display_name} adicionou você a uma discussão privada
+[Discussão Privada] {display_name} adicionou você a uma discussão privada
```

<del>\[Display</del><ins>\[Discussão</ins> <del>Privado\]</del><ins>Privada\]</ins> {display\_name} adicionou você a uma discussão privada

#### [`fof-byobu.email.subject.private_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_created%22)

> \[Private Discussion\] {display\_name} started a new private discussion with you

```diff
-[Display Private] {display_name} iniciou uma nova discussão privada com você
+[Discussão Privada] {display_name} iniciou uma nova discussão privada com você
```

<del>\[Display</del><ins>\[Discussão</ins> <del>Private\]</del><ins>Privada\]</ins> {display\_name} iniciou uma nova discussão privada com você

#### [`fof-byobu.email.subject.private_discussion_replied`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.email.subject.private_discussion_replied%22)

> \[Private Discussion\] {display\_name} posted in a private discussion

```diff
-[Display Private] {display_name} postou em uma discussão privada
+[Discussão Privada] {display_name} postou em uma discussão privada
```

<del>\[Display</del><ins>\[Discussão</ins> <del>Private\]</del><ins>Privada\]</ins> {display\_name} postou em uma discussão privada

#### [`fof-byobu.email.subject.recipient_removed`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.email.subject.recipient_removed%22)

> \[Private Discussion\] {display\_name} left the discussion

```diff
-[Display Privado] {display_name} saiu da discussão
+[Discussão Privada] {display_name} saiu da discussão
```

<del>\[Display</del><ins>\[Discussão</ins> <del>Privado\]</del><ins>Privada\]</ins> {display\_name} saiu da discussão

#### [`fof-byobu.forum.buttons.edit_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.buttons.edit_recipients%22)

> Edit Recipients

```diff
-Editar destinatários
+Editar Destinatários
```

Editar <del>destinatários</del><ins>Destinatários</ins>

#### [`fof-byobu.forum.buttons.send_pd`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.buttons.send_pd%22)

> Send {username} a message

```diff
-Envie uma mensagem para {username}
+Enviar mensagem a {username}
```

<del>Envie uma</del><ins>Enviar</ins> mensagem <del>para</del><ins>a</ins> {username}

#### [`fof-byobu.forum.composer_private_discussion.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.composer_private_discussion.submit_button%22)

> Post Private Discussion

```diff
-Postar discussão privada
+Postar Discussão Privada
```

Postar <del>discussão</del><ins>Discussão</ins> <del>privada</del><ins>Privada</ins>

#### [`fof-byobu.forum.composer_private_discussion.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.composer_private_discussion.title_placeholder%22)

> Private Discussion Title

```diff
-Título da discussão privada
+Título da Discussão Privada
```

Título da <del>discussão</del><ins>Discussão</ins> <del>privada</del><ins>Privada</ins>

#### [`fof-byobu.forum.confirm.make_public`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.confirm.make_public%22)

> Are you sure you want to remove the recipients and make this discussion visible to anyone who can view the assigned tag?

```diff
-Tem certeza de que deseja remover os destinatários e tornar esta discussão visível para qualquer pessoa que possa visualizar a tag atribuída?
+Tem certeza de que deseja remover os destinatários e tornar esta discussão visível para qualquer pessoa que possa ver a tag atribuída?
```

Tem certeza de que deseja remover os destinatários e tornar esta discussão visível para qualquer pessoa que possa <del>visualizar</del><ins>ver</ins> a tag atribuída?

#### [`fof-byobu.forum.input.search_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.input.search_recipients%22)

> Search recipient by typing first three characters...

```diff
-Pesquisar destinatário digitando os três primeiros caracteres...
+Buscar destinatário digitando os três primeiros caracteres...
```

<del>Pesquisar</del><ins>Buscar</ins> destinatário digitando os três primeiros caracteres...

#### [`fof-byobu.forum.modal.labels.search_field`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.modal.labels.search_field%22)

> Search for user

```diff
-Pesquisar usuário
+Buscar usuário
```

<del>Pesquisar</del><ins>Buscar</ins> usuário

#### [`fof-byobu.forum.nav.start_button`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.nav.start_button%22)

> Discuss Privately

```diff
-Discutir em particular
+Discutir em Particular
```

Discutir em <del>particular</del><ins>Particular</ins>

#### [`fof-byobu.forum.notifications.pd_added_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_added_label%22)

> Someone adds me to an existing private discussion

```diff
-Alguém me adicionou a uma discussão privada existente
+Alguém me adiciona a uma discussão privada existente
```

Alguém me <del>adicionou</del><ins>adiciona</ins> a uma discussão privada existente

#### [`fof-byobu.forum.notifications.pd_reply_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_reply_label%22)

> Someone posts in a private discussion I'm a recipient of

```diff
-Alguém publica em uma discussão privada da qual sou um destinatário
+Alguém posta em uma discussão privada da qual sou destinatário
```

Alguém <del>publica</del><ins>posta</ins> em uma discussão privada da qual sou<del> um</del> destinatário

#### [`fof-byobu.forum.notifications.pd_user_left_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.notifications.pd_user_left_label%22)

> A recipient user leaves a private discussion I'm a part of

```diff
-Um usuário destinatário deixa uma discussão privada da qual faço parte
+Um destinatário sai de uma discussão privada da qual faço parte
```

Um <del>usuário </del>destinatário <del>deixa</del><ins>sai de</ins> uma discussão privada da qual faço parte

#### [`fof-byobu.forum.search.headings.groups`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.search.headings.groups%22)

> Permission Groups

```diff
-Grupos de permissão
+Grupos de Permissão
```

Grupos de <del>permissão</del><ins>Permissão</ins>

#### [`fof-byobu.forum.user.byobu_link`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.user.byobu_link%22)

> Private Discussions

```diff
-Discussões privadas
+Discussões Privadas
```

Discussões <del>privadas</del><ins>Privadas</ins>

#### [`fof-byobu.forum.user.dropdown_label`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.user.dropdown_label%22)

> Private Discussions

```diff
-Discussões privadas
+Discussões Privadas
```

Discussões <del>privadas</del><ins>Privadas</ins>


### `fof-default-group`

#### [`fof-default-group.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-default-group/pt_BR/?q=context%3A%3D%22fof-default-group.admin.settings.info%22)

> Below you can select the group to assign a user when their account is activated.

```diff
-Abaixo, você pode selecionar o grupo para atribuir um usuário quando sua conta for ativada.
+Selecione abaixo o grupo a ser atribuído ao usuário quando a conta dele for ativada.
```

<del>Abaixo, você pode</del><ins>Selecione</ins> <del>selecionar</del><ins>abaixo</ins> o grupo <del>para</del><ins>a</ins> <del>atribuir</del><ins>ser</ins> <del>um</del><ins>atribuído ao</ins> usuário quando <del>sua</del><ins>a</ins> conta<ins> dele</ins> for ativada.


### `fof-discussion-templates`

#### [`fof-discussion-templates.admin.permissions.manage_all_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/pt_BR/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_all_reply_templates%22)

> Manage reply templates for all discussions

```diff
-Gerencie modelos de resposta para todas as discussões
+Gerenciar modelos de resposta de todas as discussões
```

<del>Gerencie</del><ins>Gerenciar</ins> modelos de resposta <del>para</del><ins>de</ins> todas as discussões

#### [`fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/pt_BR/?q=context%3A%3D%22fof-discussion-templates.admin.permissions.manage_own_discussion_reply_templates%22)

> Manage reply templates for their discussions

```diff
-Gerenciar modelos de resposta para suas discussões
+Gerenciar modelos de resposta das próprias discussões
```

Gerenciar modelos de resposta <del>para</del><ins>das</ins> <del>suas</del><ins>próprias</ins> discussões

#### [`fof-discussion-templates.admin.settings.append_template_on_tag_change_help`](https://weblate.rob006.net/translate/flarum2/fof-discussion-templates/pt_BR/?q=context%3A%3D%22fof-discussion-templates.admin.settings.append_template_on_tag_change_help%22)

> When tags are changed, should the new tag's template be appended even if the user has already started writing? Regardless of this setting, if tags are changed and the user has not made modifications, the template will be switched.

```diff
-Quando as tags são alteradas, o modelo da nova tag deve ser anexado mesmo que o usuário já tenha começado a escrever? Independentemente dessa configuração, se as tags forem alteradas e o usuário não tiver feito modificações, o template será trocado.
+Quando as tags são alteradas, o modelo da nova tag deve ser anexado mesmo que o usuário já tenha começado a escrever? Independentemente desta configuração, se as tags forem alteradas e o usuário não tiver feito modificações, o modelo será trocado.
```

Quando as tags são alteradas, o modelo da nova tag deve ser anexado mesmo que o usuário já tenha começado a escrever? Independentemente <del>dessa</del><ins>desta</ins> configuração, se as tags forem alteradas e o usuário não tiver feito modificações, o <del>template</del><ins>modelo</ins> será trocado.


### `fof-discussion-thumbnail`

#### [`fof-discussion-thumbnail.admin.settings.link_to_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-thumbnail/pt_BR/?q=context%3A%3D%22fof-discussion-thumbnail.admin.settings.link_to_discussion_label%22)

> Make discussion thumbnails link to discussion and not user

```diff
-Faça com que o link da miniatura (thumbnail) redirecione para a discussão e não para o usuário
+Fazer a miniatura da discussão levar à discussão, não ao usuário
```

<del>Faça com que o link</del><ins>Fazer</ins> <del>da</del><ins>a</ins> miniatura<del> (thumbnail)</del> <del>redirecione</del><ins>da</ins> <del>para</del><ins>discussão</ins> <del>a</del><ins>levar</ins> <del>discussão</del><ins>à</ins> <del>e</del><ins>discussão,</ins> não<del> para</del> <del>o</del><ins>ao</ins> usuário


### `fof-doorman`

#### [`fof-doorman.forum.sign_up.doorkey_required`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.forum.sign_up.doorkey_required%22)

> Please enter an invite code.

```diff
-Insira um código de convite.
+Digite um código de convite.
```

<del>Insira</del><ins>Digite</ins> um código de convite.

#### [`fof-doorman.forum.sign_up.invalid_doorkey`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.forum.sign_up.invalid_doorkey%22)

> The invite code your entered is invalid.

```diff
-O código de convite inserido é inválido.
+O código de convite digitado é inválido.
```

O código de convite <del>inserido</del><ins>digitado</ins> é inválido.


### `fof-follow-tags`

#### [`fof-follow-tags.admin.settings.following_page_default_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.following_page_default_label%22)

> Default Following Page Filtering

```diff
-Filtros da página padrão Seguindo
+Filtro Padrão da Página Seguindo
```

<del>Filtros</del><ins>Filtro</ins> <del>da</del><ins>Padrão</ins> <del>página</del><ins>da</ins> <del>padrão</del><ins>Página</ins> Seguindo

#### [`fof-follow-tags.forum.index.unfollow_tag_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.index.unfollow_tag_button%22)

> Stop Following

```diff
-Parar de Seguir
+Deixar de Seguir
```

<del>Parar</del><ins>Deixar</ins> de Seguir

#### [`fof-follow-tags.forum.settings.notify_new_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_discussion_label%22)

> Someone creates a discussion in a tag I'm following

```diff
-Alguém criar uma discussão em uma tag que eu sigo
+Alguém cria uma discussão em uma tag que estou seguindo
```

Alguém <del>criar</del><ins>cria</ins> uma discussão em uma tag que <del>eu</del><ins>estou</ins> <del>sigo</del><ins>seguindo</ins>

#### [`fof-follow-tags.forum.settings.notify_new_discussion_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_discussion_tag_label%22)

> Someone re-tags a discussion to a tag I'm following

```diff
-Alguém atualizar a tag de uma discussão para uma tag que eu sigo
+Alguém muda a tag de uma discussão para uma tag que estou seguindo
```

Alguém <del>atualizar</del><ins>muda</ins> a tag de uma discussão para uma tag que <del>eu</del><ins>estou</ins> <del>sigo</del><ins>seguindo</ins>

#### [`fof-follow-tags.forum.settings.notify_new_post_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.settings.notify_new_post_label%22)

> Someone posts in a tag I'm following

```diff
-Alguém postar em uma tag que eu sigo
+Alguém posta em uma tag que estou seguindo
```

Alguém <del>postar</del><ins>posta</ins> em uma tag que <del>eu</del><ins>estou</ins> <del>sigo</del><ins>seguindo</ins>

#### [`fof-follow-tags.forum.sub_controls.following_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.following_text%22)

> Be notified of all new discussions.

```diff
-Ser notificado de todas novas discussões.
+Seja notificado de todas as novas discussões.
```

<del>Ser</del><ins>Seja</ins> notificado de todas<ins> as</ins> novas discussões.

#### [`fof-follow-tags.forum.sub_controls.hiding_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.hiding_text%22)

> Hide discussions from All Discussions page.

```diff
-Esconder discussões da página Todas Discussões.
+Ocultar discussões da página Todas as Discussões.
```

<del>Esconder</del><ins>Ocultar</ins> discussões da página Todas<ins> as</ins> Discussões.

#### [`fof-follow-tags.forum.sub_controls.ignoring_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.ignoring_text%22)

> Never be notified.

```diff
-Nunca ser notificado.
+Nunca seja notificado.
```

Nunca <del>ser</del><ins>seja</ins> notificado.

#### [`fof-follow-tags.forum.sub_controls.lurking_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.lurking_text%22)

> Be notified of all new discussions and replies.

```diff
-Ser notificado de todas novas discussões e respostas.
+Seja notificado de todas as novas discussões e respostas.
```

<del>Ser</del><ins>Seja</ins> notificado de todas<ins> as</ins> novas discussões e respostas.

#### [`fof-follow-tags.forum.sub_controls.not_following_text`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.not_following_text%22)

> Be notified only when @mentioned.

```diff
-Ser notificado apenas quando @mencionado.
+Seja notificado apenas quando @mencionado.
```

<del>Ser</del><ins>Seja</ins> notificado apenas quando @mencionado.

#### [`fof-follow-tags.forum.sub_controls.notify_alert_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.notify_alert_tooltip%22)

> Get a forum notification when there are new discussions or posts

```diff
-Receba uma notificação no fórum quando houver novas discussões ou posts
+Receber uma notificação no fórum quando houver novas discussões ou posts
```

<del>Receba</del><ins>Receber</ins> uma notificação no fórum quando houver novas discussões ou posts

#### [`fof-follow-tags.forum.sub_controls.notify_email_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.notify_email_tooltip%22)

> Get an email when there are new discussions or posts

```diff
-Receber um email quando houver novas discussões ou posts
+Receber um e-mail quando houver novas discussões ou posts
```

Receber um <del>email</del><ins>e-mail</ins> quando houver novas discussões ou posts

#### [`fof-follow-tags.ref.hiding`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.ref.hiding%22)

> Hiding

```diff
-Escondendo
+Ocultando
```


### `fof-formatting`

#### [`fof-formatting.admin.plugins.Autoimage`](https://weblate.rob006.net/translate/flarum2/fof-formatting/pt_BR/?q=context%3A%3D%22fof-formatting.admin.plugins.Autoimage%22)

> Convert image URLs into actual images

```diff
-Converta URLs de imagem em imagens reais
+Converter URLs de imagem em imagens reais
```

<del>Converta</del><ins>Converter</ins> URLs de imagem em imagens reais

#### [`fof-formatting.admin.plugins.Autovideo`](https://weblate.rob006.net/translate/flarum2/fof-formatting/pt_BR/?q=context%3A%3D%22fof-formatting.admin.plugins.Autovideo%22)

> Convert video URLs into playable videos

```diff
-Converta URLs de vídeo em vídeos reproduzíveis
+Converter URLs de vídeo em vídeos reproduzíveis
```

<del>Converta</del><ins>Converter</ins> URLs de vídeo em vídeos reproduzíveis

#### [`fof-formatting.admin.plugins.FancyPants`](https://weblate.rob006.net/translate/flarum2/fof-formatting/pt_BR/?q=context%3A%3D%22fof-formatting.admin.plugins.FancyPants%22)

> Use fancy typography

```diff
-Use tipografia sofisticada
+Usar tipografia sofisticada
```

<del>Use</del><ins>Usar</ins> tipografia sofisticada

#### [`fof-formatting.admin.plugins.TaskLists`](https://weblate.rob006.net/translate/flarum2/fof-formatting/pt_BR/?q=context%3A%3D%22fof-formatting.admin.plugins.TaskLists%22)

> GitHub/GitLab flavored task lists

```diff
-Listas de tarefas do GitHub/GitLab
+Listas de tarefas no estilo GitHub/GitLab
```

Listas de tarefas <del>do</del><ins>no estilo</ins> GitHub/GitLab


### `fof-forum-statistics-widget`

#### [`fof-forum-statistics-widget.admin.permissions.view_discussions_count_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.permissions.view_discussions_count_label%22)

> View forum statistics widget discussions count

```diff
-Exibir a contagem de discussões no widget de estatísticas do fórum
+Ver a contagem de discussões no widget de estatísticas
```

<del>Exibir</del><ins>Ver</ins> a contagem de discussões no widget de estatísticas<del> do fórum</del>

#### [`fof-forum-statistics-widget.admin.permissions.view_lastest_member_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.permissions.view_lastest_member_label%22)

> View forum statistics widget latest member

```diff
-Exibir o último membro no widget de estatísticas do fórum
+Ver o último membro no widget de estatísticas
```

<del>Exibir</del><ins>Ver</ins> o último membro no widget de estatísticas<del> do fórum</del>

#### [`fof-forum-statistics-widget.admin.permissions.view_posts_count_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.permissions.view_posts_count_label%22)

> View forum statistics widget posts count

```diff
-Exibir a contagem de postagens no widget de estatísticas do fórum
+Ver a contagem de posts no widget de estatísticas
```

<del>Exibir</del><ins>Ver</ins> a contagem de <del>postagens</del><ins>posts</ins> no widget de estatísticas<del> do fórum</del>

#### [`fof-forum-statistics-widget.admin.permissions.view_users_count_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.permissions.view_users_count_label%22)

> View forum statistics widget users count

```diff
-Exibir a contagem de usuários no widget de estatísticas do fórum
+Ver a contagem de usuários no widget de estatísticas
```

<del>Exibir</del><ins>Ver</ins> a contagem de usuários no widget de estatísticas<del> do fórum</del>


### `fof-gamification`

#### [`core.forum.index_sort.hot_button`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22core.forum.index_sort.hot_button%22)

> Trending

```diff
-Tendência
+Em alta
```

#### [`fof-gamification.admin.page.alt_votes.icon_name`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.alt_votes.icon_name%22)

> Alt layout icon name

```diff
-Nome do ícone do layout alternativo
+Ícone do layout alternativo
```

<del>Nome do ícone</del><ins>Ícone</ins> do layout alternativo

#### [`fof-gamification.admin.page.convert.button`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.convert.button%22)

> Convert likes to upvotes

```diff
-Converter likes para upvotes
+Converter curtidas em votos positivos
```

Converter <del>likes</del><ins>curtidas</ins> <del>para</del><ins>em</ins> <del>upvotes</del><ins>votos positivos</ins>

#### [`fof-gamification.admin.page.convert.converted`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.convert.converted%22)

> Successfully converted all {number} likes

```diff
-Todas as {number} curtidas foram convertidas com sucesso
+Todas as {number} curtidas foram convertidas
```

Todas as {number} curtidas foram convertidas<del> com sucesso</del>

#### [`fof-gamification.admin.page.groups.add`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.groups.add%22)

> Add new rule

```diff
-Adicionar nova regra
+Adicionar regra
```

Adicionar <del>nova </del>regra

#### [`fof-gamification.admin.page.groups.column.maxPoints`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.groups.column.maxPoints%22)

> Maximum points (inclusive)

```diff
-Máximo de pontos (inclusive)
+Pontos máximos (inclusive)
```

<del>Máximo de</del><ins>Pontos</ins> <del>pontos</del><ins>máximos</ins> (inclusive)

#### [`fof-gamification.admin.page.groups.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.groups.help%22)

> The selected groups will be automatically added or removed as needed when the number of points of a user changes. If you made changes to the configuration, you should run the &lt;code&gt;php flarum fof:gamification:assign-groups&lt;/code&gt; command to update existing users. If you wish to delete a rule and remove all users from the group, set both minimum and maximum values to an empty string, save the settings and run the command line command. Finally you can delete the rule entirely from the settings.
>

```diff
-Os grupos selecionados serão automaticamente adicionados ou removidos conforme necessário quando o número de pontos de um usuário mudar. Se você fez alterações na configuração, execute o comando <code>php flarum fof:gamification:assign-groups</code> para atualizar os usuários existentes. Se você deseja excluir uma regra e remover todos os usuários do grupo, defina os valores mínimo e máximo para uma string vazia, salve as configurações e execute o comando de linha de comando. Por fim, você pode excluir a regra totalmente das configurações.
+Os grupos selecionados serão adicionados ou removidos automaticamente, conforme necessário, quando o número de pontos de um usuário mudar. Se você alterou a configuração, execute o comando <code>php flarum fof:gamification:assign-groups</code> para atualizar os usuários existentes. Para excluir uma regra e remover todos os usuários do grupo, deixe os valores mínimo e máximo vazios, salve as configurações e execute o comando. Por fim, você pode excluir a regra das configurações.

```

Os grupos selecionados serão <del>automaticamente </del>adicionados ou removidos<ins> automaticamente,</ins> conforme <del>necessário</del><ins>necessário,</ins> quando o número de pontos de um usuário mudar. Se você<del> fez</del> <del>alterações</del><ins>alterou</ins> <del>na</del><ins>a</ins> configuração, execute o comando &lt;code&gt;php flarum fof:gamification:assign-groups&lt;/code&gt; para atualizar os usuários existentes.<del> Se você</del> <del>deseja</del><ins>Para</ins> excluir uma regra e remover todos os usuários do grupo, <del>defina</del><ins>deixe</ins> os valores mínimo e máximo<del> para uma string</del> <del>vazia,</del><ins>vazios,</ins> salve as configurações e execute o<del> comando de linha de</del> comando. Por fim, você pode excluir a regra<del> totalmente</del> das configurações.<br />

#### [`fof-gamification.admin.page.rankings.blocked.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.rankings.blocked.help%22)

> These users will not be shown on the ranking page. Usernames should be separated by a comma followed by a space.

```diff
-Esses usuários não serão mostrados na página de classificação. Os nomes de usuário devem ser separados por uma vírgula seguida de um espaço.
+Estes usuários não serão mostrados na página de ranking. Os nomes de usuário devem ser separados por uma vírgula seguida de um espaço.
```

<del>Esses</del><ins>Estes</ins> usuários não serão mostrados na página de <del>classificação.</del><ins>ranking.</ins> Os nomes de usuário devem ser separados por uma vírgula seguida de um espaço.

#### [`fof-gamification.admin.page.rankings.blocked.title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.rankings.blocked.title%22)

> Ignored Users

```diff
-Usuários ignorados
+Usuários Ignorados
```

Usuários <del>ignorados</del><ins>Ignorados</ins>

#### [`fof-gamification.admin.page.rankings.custom_image_1`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.rankings.custom_image_1%22)

> 1st place image

```diff
-Imagem em 1º lugar
+Imagem do 1º lugar
```

Imagem <del>em</del><ins>do</ins> 1º lugar

#### [`fof-gamification.admin.page.rankings.custom_image_2`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.rankings.custom_image_2%22)

> 2nd place image

```diff
-Imagem em 2º lugar
+Imagem do 2º lugar
```

Imagem <del>em</del><ins>do</ins> 2º lugar

#### [`fof-gamification.admin.page.rankings.custom_image_3`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.rankings.custom_image_3%22)

> 3rd place image

```diff
-Imagem em 3º lugar
+Imagem do 3º lugar
```

Imagem <del>em</del><ins>do</ins> 3º lugar

#### [`fof-gamification.admin.page.rankings.title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.rankings.title%22)

> Rankings Page

```diff
-Página de classificação
+Página de Ranking
```

Página de <del>classificação</del><ins>Ranking</ins>

#### [`fof-gamification.admin.page.ranks.help.help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.ranks.help.help%22)

> Input the required number of upvotes, the name of the rank, and the hex color of the rank

```diff
-Insira o número necessário de votos positivos, o nome da classificação e a cor hexadecimal da classificação
+Insira o número necessário de votos positivos, o nome do nível e a cor hexadecimal do nível
```

Insira o número necessário de votos positivos, o nome <del>da</del><ins>do</ins> <del>classificação</del><ins>nível</ins> e a cor hexadecimal <del>da</del><ins>do</ins> <del>classificação</del><ins>nível</ins>

#### [`fof-gamification.admin.page.ranks.number_title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.ranks.number_title%22)

> How many rank badges should be shown?

```diff
-Quantos emblemas de classificação devem ser mostrados?
+Quantos emblemas de nível mostrar?
```

Quantos emblemas de <del>classificação devem ser</del><ins>nível</ins> <del>mostrados?</del><ins>mostrar?</ins>

#### [`fof-gamification.admin.page.ranks.ranks`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.ranks.ranks%22)

> Custom ranks

```diff
-Classificações personalizadas
+Níveis personalizados
```

#### [`fof-gamification.admin.page.ranks.title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.ranks.title%22)

> Ranks

```diff
-Classificações
+Níveis
```

#### [`fof-gamification.admin.page.votes.allow_self_votes`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.allow_self_votes%22)

> Users may vote on their own posts

```diff
-Os usuários podem votar em suas próprias postagens
+Usuários podem votar nos próprios posts
```

<del>Os usuários</del><ins>Usuários</ins> podem votar<del> em</del> <del>suas</del><ins>nos</ins> <del>próprias</del><ins>próprios</ins> <del>postagens</del><ins>posts</ins>

#### [`fof-gamification.admin.page.votes.alternate_layout`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.alternate_layout%22)

> Use alternate voting layout on discussions list

```diff
-Use o layout de votação alternativo na lista de discussões
+Usar o layout de votação alternativo na lista de discussões
```

<del>Use</del><ins>Usar</ins> o layout de votação alternativo na lista de discussões

#### [`fof-gamification.admin.page.votes.alternate_post_layout`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.alternate_post_layout%22)

> Use alternate voting layout on posts

```diff
-Use o layout de votação alternativo nas postagens
+Usar o layout de votação alternativo nos posts
```

<del>Use</del><ins>Usar</ins> o layout de votação alternativo <del>nas</del><ins>nos</ins> <del>postagens</del><ins>posts</ins>

#### [`fof-gamification.admin.page.votes.auto_upvote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.auto_upvote%22)

> Auto upvote posts when posted

```diff
-Auto upvote posts quando postados
+Voto positivo automático ao postar
```

#### [`fof-gamification.admin.page.votes.discussion_page`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.discussion_page%22)

> Show total votes of original post on discussions list

```diff
-Mostrar o total de votos da postagem original na lista de discussões
+Mostrar o total de votos do post original na lista de discussões
```

Mostrar o total de votos <del>da</del><ins>do</ins> <del>postagem</del><ins>post</ins> original na lista de discussões

#### [`fof-gamification.admin.page.votes.first_post_only`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.first_post_only%22)

> Only allow up/down votes in the first post in a discussion

```diff
-Permitir apenas votos para cima/para baixo na primeira postagem de uma discussão
+Permitir votos apenas no primeiro post de uma discussão
```

Permitir <del>apenas </del>votos<del> para cima/para</del> <del>baixo</del><ins>apenas</ins> <del>na</del><ins>no</ins> <del>primeira</del><ins>primeiro</ins> <del>postagem</del><ins>post</ins> de uma discussão

#### [`fof-gamification.admin.page.votes.icon_help`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.icon_help%22)

> Input any Font-Awesome icon that is suffixed with -up and -down. Examples: arrow, thumbs, chevron

```diff
-Insira qualquer ícone Font-Awesome com o sufixo -up e -down. Exemplos: seta, polegar, chevron
+Insira qualquer ícone Font-Awesome com os sufixos -up e -down. Exemplos: arrow, thumbs, chevron
```

Insira qualquer ícone Font-Awesome com <del>o</del><ins>os</ins> <del>sufixo</del><ins>sufixos</ins> -up e -down. Exemplos: <del>seta,</del><ins>arrow,</ins> <del>polegar,</del><ins>thumbs,</ins> chevron

#### [`fof-gamification.admin.page.votes.icon_name`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.icon_name%22)

> Upvote/downvote icon

```diff
-Ícone de upvote/downvote
+Ícone de voto positivo/negativo
```

Ícone de <del>upvote/downvote</del><ins>voto positivo/negativo</ins>

#### [`fof-gamification.admin.page.votes.rate_limit`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.rate_limit%22)

> Enforce a vote rate limit (10 seconds)

```diff
-Aplicar um limite de taxa de votação (10 segundos)
+Aplicar limite de frequência de votos (10 segundos)
```

Aplicar <del>um </del>limite de <del>taxa</del><ins>frequência</ins> de <del>votação</del><ins>votos</ins> (10 segundos)

#### [`fof-gamification.admin.page.votes.vote_color`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.page.votes.vote_color%22)

> Voted color

```diff
-Cor votada
+Cor ao votar
```

Cor <del>votada</del><ins>ao votar</ins>

#### [`fof-gamification.admin.permissions.downvote_notifications`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.permissions.downvote_notifications%22)

> Receive notifications on downvote

```diff
-Receba notificações sobre o downvote
+Receber notificações de votos negativos
```

<del>Receba</del><ins>Receber</ins> notificações <del>sobre</del><ins>de</ins> <del>o</del><ins>votos</ins> <del>downvote</del><ins>negativos</ins>

#### [`fof-gamification.admin.permissions.see_ranking_page`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.permissions.see_ranking_page%22)

> See ranking page

```diff
-Ver página de classificação
+Ver a página de ranking
```

Ver <ins>a </ins>página de <del>classificação</del><ins>ranking</ins>

#### [`fof-gamification.admin.permissions.see_votes_label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.permissions.see_votes_label%22)

> See up/down vote count

```diff
-Ver contagem de votos para cima/para baixo
+Ver a contagem de votos
```

Ver <ins>a </ins>contagem de votos<del> para cima/para baixo</del>

#### [`fof-gamification.admin.permissions.upvote_notifications`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.permissions.upvote_notifications%22)

> Receive notifications on upvote

```diff
-Receba notificações sobre o upvote
+Receber notificações de votos positivos
```

<del>Receba</del><ins>Receber</ins> notificações <del>sobre</del><ins>de</ins> <del>o</del><ins>votos</ins> <del>upvote</del><ins>positivos</ins>

#### [`fof-gamification.admin.permissions.vote_label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.admin.permissions.vote_label%22)

> Upvote/Downvote posts

```diff
-Aprovar/Reprovar postagens
+Votar em posts
```

#### [`fof-gamification.email.body.postVoted`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.email.body.postVoted%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just voted on your post in {discussion\_title}.
>
> View it here: {discussion\_url}
>

```diff
-Hey {recipient_display_name},
+Olá {recipient_display_name},

-{actor_display_name} acabei de votar no seu post em {discussion_title}.
+{actor_display_name} acabou de votar no seu post em {discussion_title}.

 Veja aqui: {discussion_url}

```

<del>Hey</del><ins>Olá</ins> {recipient\_display\_name},<br /><br />{actor\_display\_name} <del>acabei</del><ins>acabou</ins> de votar no seu post em {discussion\_title}.<br /><br />Veja aqui: {discussion\_url}<br />

#### [`fof-gamification.email.subject.postVoted`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.email.subject.postVoted%22)

> Your post was voted on by {display\_name}

```diff
-Sua publicação foi votada por {display_name}
+Seu post recebeu um voto de {display_name}
```

<del>Sua</del><ins>Seu</ins> <del>publicação</del><ins>post</ins> <del>foi</del><ins>recebeu</ins> <del>votada</del><ins>um</ins> <del>por</del><ins>voto de</ins> {display\_name}

#### [`fof-gamification.forum.mod_item`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.mod_item%22)

> View Voters

```diff
-Ver eleitores
+Ver Quem Votou
```

Ver <del>eleitores</del><ins>Quem Votou</ins>

#### [`fof-gamification.forum.modal.downvotes_label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.modal.downvotes_label%22)

> Downvoters:

```diff
-Desaprovadores:
+Votos negativos:
```

#### [`fof-gamification.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.modal.title%22)

> Voters

```diff
-Eleitores
+Quem votou
```

#### [`fof-gamification.forum.modal.upvotes_label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.modal.upvotes_label%22)

> Upvoters:

```diff
-Apoiadores:
+Votos positivos:
```

#### [`fof-gamification.forum.notification.downvote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.notification.downvote%22)

> {username} downvoted your post

```diff
-{username} votou negativamente em sua postagem
+{username} deu voto negativo no seu post
```

{username} <del>votou</del><ins>deu</ins> <del>negativamente</del><ins>voto</ins> <del>em</del><ins>negativo</ins> <del>sua</del><ins>no</ins> <del>postagem</del><ins>seu post</ins>

#### [`fof-gamification.forum.notification.prefrences.vote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.notification.prefrences.vote%22)

> When one of my posts is up/down voted

```diff
-Quando um dos meus posts é votado para cima/para baixo
+Alguém vota em um dos meus posts
```

<del>Quando</del><ins>Alguém vota em</ins> um dos meus posts<del> é votado para cima/para baixo</del>

#### [`fof-gamification.forum.notification.upvote`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.notification.upvote%22)

> {username} upvoted your post

```diff
-{username} votou positivamente em sua postagem
+{username} deu voto positivo no seu post
```

{username} <del>votou</del><ins>deu</ins> <del>positivamente</del><ins>voto</ins> <del>em</del><ins>positivo</ins> <del>sua</del><ins>no</ins> <del>postagem</del><ins>seu post</ins>

#### [`fof-gamification.forum.post.downvote_button`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.post.downvote_button%22)

> Downvote post

```diff
-Reprovar postagem
+Dar voto negativo
```

#### [`fof-gamification.forum.post.upvote_button`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.post.upvote_button%22)

> Upvote post

```diff
-Aprovar postagem
+Dar voto positivo
```

#### [`fof-gamification.forum.ranking.rank`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.ranking.rank%22)

> Place

```diff
-Classificação
+Posição
```

#### [`fof-gamification.forum.vote_title`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.vote_title%22)

> Show Who Voted

```diff
-Mostrar quem votou
+Mostrar Quem Votou
```

Mostrar <del>quem</del><ins>Quem</ins> <del>votou</del><ins>Votou</ins>

#### [`fof-gamification.forum.voters.label`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.voters.label%22)

> Voters

```diff
-Eleitores
+Quem votou
```

#### [`fof-gamification.forum.voters.label_none`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.voters.label_none%22)

> No voters

```diff
-Não eleitores
+Ninguém votou
```

#### [`fof-gamification.forum.voters.none`](https://weblate.rob006.net/translate/flarum2/fof-gamification/pt_BR/?q=context%3A%3D%22fof-gamification.forum.voters.none%22)

> No voters yet

```diff
-Ainda não há eleitores
+Ninguém votou ainda
```


### `fof-links`

#### [`fof-links.ref.create_link`](https://weblate.rob006.net/translate/flarum2/fof-links/pt_BR/?q=context%3A%3D%22fof-links.ref.create_link%22)

> Create Link

```diff
-Criar link
+Criar Link
```

Criar <del>link</del><ins>Link</ins>


### `fof-moderator-notes`

#### [`fof-moderator-notes.admin.permissions.createnotes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.admin.permissions.createnotes%22)

> Create moderator notes

```diff
-Criar notas do moderador
+Criar notas de moderador
```

Criar notas <del>do</del><ins>de</ins> moderador

#### [`fof-moderator-notes.admin.permissions.deletenotes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.admin.permissions.deletenotes%22)

> Delete moderator notes

```diff
-Apagar notas do moderador
+Excluir notas de moderador
```

<del>Apagar</del><ins>Excluir</ins> notas <del>do</del><ins>de</ins> moderador

#### [`fof-moderator-notes.admin.permissions.viewnotes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.admin.permissions.viewnotes%22)

> View moderator notes

```diff
-Ver notas do moderador
+Ver notas de moderador
```

Ver notas <del>do</del><ins>de</ins> moderador

#### [`fof-moderator-notes.forum.moderatorNotes.confirm`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.confirm%22)

> Are you sure you want to delete this note?

```diff
-Você tem certeza que quer apagar essa nota?
+Tem certeza de que deseja excluir esta nota?
```

<del>Você tem</del><ins>Tem</ins> certeza<ins> de</ins> que <del>quer</del><ins>deseja</ins> <del>apagar</del><ins>excluir</ins> <del>essa</del><ins>esta</ins> nota?

#### [`fof-moderator-notes.forum.moderatorNotes.delete`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.delete%22)

> Delete

```diff
-Apagar
+Excluir
```

#### [`fof-moderator-notes.forum.moderatorNotes.dismiss_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.dismiss_button%22)

> Done

```diff
-Feito
+Pronto
```

#### [`fof-moderator-notes.forum.moderatorNotes.input_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.input_heading%22)

> Enter your notes for &lt;strong&gt;{username}&lt;/strong&gt;, (markdown is supported)

```diff
-Insira suas notas para <strong>{username}</strong>, (a redução é suportada)
+Digite suas notas para <strong>{username}</strong> (markdown é suportado)
```

<del>Insira</del><ins>Digite</ins> suas notas para<del> &lt;strong&gt;{username}&lt;/strong&gt;,</del> <del>(a</del><ins>&lt;strong&gt;{username}&lt;/strong&gt;</ins> <del>redução</del><ins>(markdown</ins> é <del>suportada)</del><ins>suportado)</ins>

#### [`fof-moderator-notes.forum.user.notes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.forum.user.notes%22)

> Moderator Notes

```diff
-Notas de moderador
+Notas de Moderador
```

Notas de <del>moderador</del><ins>Moderador</ins>


### `fof-moderator-warnings`

#### [`fof-moderator-warnings.admin.permissions.delete_warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.admin.permissions.delete_warnings%22)

> Permanently delete moderator warnings

```diff
-Excluir avisos do moderador permanentemente
+Excluir advertências de moderador permanentemente
```

Excluir <del>avisos</del><ins>advertências</ins> <del>do</del><ins>de</ins> moderador permanentemente

#### [`fof-moderator-warnings.admin.permissions.manage_warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.admin.permissions.manage_warnings%22)

> Create and remove moderator warnings

```diff
-Criar e remover avisos do moderador
+Criar e remover advertências de moderador
```

Criar e remover <del>avisos</del><ins>advertências</ins> <del>do</del><ins>de</ins> moderador

#### [`fof-moderator-warnings.admin.permissions.view_warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.admin.permissions.view_warnings%22)

> View moderator warnings

```diff
-Ver avisos do moderador
+Ver advertências de moderador
```

Ver <del>avisos</del><ins>advertências</ins> <del>do</del><ins>de</ins> moderador

#### [`fof-moderator-warnings.emails.post_warned.body`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.body%22)

> Hey {warnee\_display\_name}!
>
> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}} in {discussion\_title}
>
> The following reason was given:
>
> \---
>
> {public\_comment}
>

```diff
-Hey {warnee_display_name}!
+Olá {warnee_display_name}!

-{warner_display_name} te avisou com {strikes, plural, one {# strike} other {# strikes}} no {discussion_title}
+{warner_display_name} advertiu você com {strikes, plural, one {# strike} other {# strikes}} em {discussion_title}

 Foi dado o seguinte motivo:

 ---

 {public_comment}

```

<del>Hey</del><ins>Olá</ins> {warnee\_display\_name}!<br /><br />{warner\_display\_name} <del>te</del><ins>advertiu</ins> <del>avisou</del><ins>você</ins> com {strikes, plural, one {# strike} other {# strikes}} <del>no</del><ins>em</ins> {discussion\_title}<br /><br />Foi dado o seguinte motivo:<br /><br />---<br /><br />{public\_comment}<br />

#### [`fof-moderator-warnings.emails.post_warned.subject`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.emails.post_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}} in {discussion\_title}

```diff
-{warner_display_name} te avisou com {strikes, plural, one {# strike} other {#strikes}} em {discussion_title}
+{warner_display_name} advertiu você com {strikes, plural, one {# strike} other {# strikes}} em {discussion_title}
```

{warner\_display\_name} <del>te</del><ins>advertiu</ins> <del>avisou</del><ins>você</ins> com {strikes, plural, one {# strike} other <del>{#strikes}}</del><ins>{# strikes}}</ins> em {discussion\_title}

#### [`fof-moderator-warnings.emails.user_warned.body`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.body%22)

> Hey {warnee\_display\_name}!
>
> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}
>
> The following reason was given:
>
> \---
>
> {public\_comment}
>

```diff
-Hey {warnee_display_name}!
+Olá {warnee_display_name}!

-{warner_display_name} te avisou com {strikes, plural, one {# strike} other {# strikes}}
+{warner_display_name} advertiu você com {strikes, plural, one {# strike} other {# strikes}}

 Foi dado o seguinte motivo:

 ---

 {public_comment}

```

<del>Hey</del><ins>Olá</ins> {warnee\_display\_name}!<br /><br />{warner\_display\_name} <del>te</del><ins>advertiu</ins> <del>avisou</del><ins>você</ins> com {strikes, plural, one {# strike} other {# strikes}}<br /><br />Foi dado o seguinte motivo:<br /><br />---<br /><br />{public\_comment}<br />

#### [`fof-moderator-warnings.emails.user_warned.subject`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.emails.user_warned.subject%22)

> {warner\_display\_name} warned you with {strikes, plural, one {# strike} other {# strikes}}

```diff
-{warner_display_name} te avisou com {strikes, plural, one {# strike} other {# strikes}}
+{warner_display_name} advertiu você com {strikes, plural, one {# strike} other {# strikes}}
```

{warner\_display\_name} <del>te</del><ins>advertiu</ins> <del>avisou</del><ins>você</ins> com {strikes, plural, one {# strike} other {# strikes}}

#### [`fof-moderator-warnings.forum.notifications.warning_no_strikes_text`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_no_strikes_text%22)

> You were warned by {mod\_username} (no strikes)

```diff
-Te avisavam por {mod_username} (no strikes)
+{mod_username} advertiu você (sem strikes)
```

<del>Te avisavam</del><ins>{mod\_username}</ins> <del>por</del><ins>advertiu</ins> <del>{mod\_username}</del><ins>você</ins> <del>(no</del><ins>(sem</ins> strikes)

#### [`fof-moderator-warnings.forum.notifications.warning_text`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.notifications.warning_text%22)

> {strikes, plural, one {You were warned with # strike by {mod\_username}} other {You were warned with # strikes by {mod\_username}}}

```diff
-{strikes, plural, one {Te avisavam com # strike by {mod_username}} other {Te avisavam com # strikes por {mod_username}}}
+{strikes, plural, one {{mod_username} advertiu você com # strike} other {{mod_username} advertiu você com # strikes}}
```

{strikes, plural, one <del>{Te</del><ins>{{mod\_username}</ins> <del>avisavam</del><ins>advertiu você</ins> com #<del> strike by</del> <del>{mod\_username}}</del><ins>strike}</ins> other <del>{Te</del><ins>{{mod\_username}</ins> <del>avisavam</del><ins>advertiu você</ins> com #<del> strikes por</del> <del>{mod\_username}}}</del><ins>strikes}}</ins>

#### [`fof-moderator-warnings.forum.post.warning`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.post.warning%22)

> {strikes, plural, one {Warned with # strike by {mod\_username}} other {Warned with # strikes by {mod\_username}}}

```diff
-{strikes, plural, one {Avisava com # strike por {mod_username}} other {Avisava com # strikes por {mod_username}}}
+{strikes, plural, one {Advertência com # strike por {mod_username}} other {Advertência com # strikes por {mod_username}}}
```

{strikes, plural, one <del>{Avisava</del><ins>{Advertência</ins> com # strike por {mod\_username}} other <del>{Avisava</del><ins>{Advertência</ins> com # strikes por {mod\_username}}}

#### [`fof-moderator-warnings.forum.post.warning_no_strikes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.post.warning_no_strikes%22)

> Warned with no strikes by {mod\_username}

```diff
-Avisava sem strikes por {mod_username}
+Advertência sem strikes por {mod_username}
```

<del>Avisava</del><ins>Advertência</ins> sem strikes por {mod\_username}

#### [`fof-moderator-warnings.forum.post_controls.warning_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.post_controls.warning_button%22)

> Warn User

```diff
-Avisar o usuário
+Advertir Usuário
```

#### [`fof-moderator-warnings.forum.settings.warning_notification_label`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.settings.warning_notification_label%22)

> A moderator warns me

```diff
-Um moderador me avisa
+Um moderador me adverte
```

Um moderador me <del>avisa</del><ins>adverte</ins>

#### [`fof-moderator-warnings.forum.validation.invalid_strike_count`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.validation.invalid_strike_count%22)

> The number of strikes must be an integer between 0 and 5.

```diff
-O número de avisos deve ser um número inteiro entre 0 e 5.
+O número de strikes deve ser um inteiro entre 0 e 5.
```

O número de <del>avisos</del><ins>strikes</ins> deve ser um<del> número</del> inteiro entre 0 e 5.

#### [`fof-moderator-warnings.forum.warning_controls.delete_forever_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_controls.delete_forever_button%22)

> Permanently Delete

```diff
-Apagar permanentemente
+Excluir Permanentemente
```

#### [`fof-moderator-warnings.forum.warning_list.add_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.add_button%22)

> New Warning

```diff
-Novo aviso
+Nova Advertência
```

#### [`fof-moderator-warnings.forum.warning_list.no_warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.no_warnings%22)

> It looks like there are no warnings here.

```diff
-Parece que não há avisos aqui.
+Parece que não há advertências aqui.
```

Parece que não há <del>avisos</del><ins>advertências</ins> aqui.

#### [`fof-moderator-warnings.forum.warning_list.warnings`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings%22)

> {strikes, plural, one {Moderator Warnings: # Strike Received} other {Moderator Warnings: # Strikes Received}}

```diff
-{strikes, plural, one {Avisos de Moderação: # Strike Recebido} other {Avisos de Moderação: # Strikes Recebidos}}
+{strikes, plural, one {Advertências de Moderador: # Strike Recebido} other {Advertências de Moderador: # Strikes Recebidos}}
```

{strikes, plural, one <del>{Avisos</del><ins>{Advertências</ins> de <del>Moderação:</del><ins>Moderador:</ins> # Strike Recebido} other <del>{Avisos</del><ins>{Advertências</ins> de <del>Moderação:</del><ins>Moderador:</ins> # Strikes Recebidos}}

#### [`fof-moderator-warnings.forum.warning_list.warnings_no_strikes`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list.warnings_no_strikes%22)

> Moderator Warnings: No Strikes Received

```diff
-Avisos do moderador: nenhum aviso recebido
+Advertências de Moderador: Nenhum Strike Recebido
```

#### [`fof-moderator-warnings.forum.warning_list_item.linked_post`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.linked_post%22)

> Linked Post

```diff
-Postagem vinculada
+Post Vinculado
```

#### [`fof-moderator-warnings.forum.warning_list_item.private_comment`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.private_comment%22)

> Moderator-Visible Comments

```diff
-Comentários visíveis do moderador
+Comentários Visíveis aos Moderadores
```

Comentários <del>visíveis</del><ins>Visíveis</ins> <del>do</del><ins>aos</ins> <del>moderador</del><ins>Moderadores</ins>

#### [`fof-moderator-warnings.forum.warning_list_item.public_comment`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_list_item.public_comment%22)

> Warning

```diff
-Aviso
+Advertência
```

#### [`fof-moderator-warnings.forum.warning_modal.heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.heading%22)

> Warn &lt;strong&gt;{username}&lt;/strong&gt;

```diff
-Aviso <strong>{username}</strong>
+Advertir <strong>{username}</strong>
```

<del>Aviso</del><ins>Advertir</ins> &lt;strong&gt;{username}&lt;/strong&gt;

#### [`fof-moderator-warnings.forum.warning_modal.private_comment_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.private_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will ONLY be visible to other moderators.

```diff
-Por que <strong>{username}</strong> está recebendo esses avisos? Esses comentários APENAS serão visíveis para outros moderadores.
+Por que <strong>{username}</strong> está recebendo estas advertências? Estes comentários ficarão visíveis APENAS para outros moderadores.
```

Por que &lt;strong&gt;{username}&lt;/strong&gt; está recebendo <del>esses</del><ins>estas</ins> <del>avisos?</del><ins>advertências?</ins> <del>Esses</del><ins>Estes</ins> comentários<del> APENAS</del> <del>serão</del><ins>ficarão</ins> visíveis<ins> APENAS</ins> para outros moderadores.

#### [`fof-moderator-warnings.forum.warning_modal.public_comment_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.public_comment_heading%22)

> Why is &lt;strong&gt;{username}&lt;/strong&gt; receiving these warnings? These comments will be visible to the user and other moderators.

```diff
-Por que <strong>{username}</strong> está recebendo esses avisos? Esses comentários serão visíveis para o usuário e outros moderadores.
+Por que <strong>{username}</strong> está recebendo estas advertências? Estes comentários ficarão visíveis para o usuário e outros moderadores.
```

Por que &lt;strong&gt;{username}&lt;/strong&gt; está recebendo <del>esses</del><ins>estas</ins> <del>avisos?</del><ins>advertências?</ins> <del>Esses</del><ins>Estes</ins> comentários <del>serão</del><ins>ficarão</ins> visíveis para o usuário e outros moderadores.

#### [`fof-moderator-warnings.forum.warning_modal.strikes_heading`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.strikes_heading%22)

> How many strikes should be applied?

```diff
-Quantas strikes devem ser aplicadas?
+Quantos strikes devem ser aplicados?
```

<del>Quantas</del><ins>Quantos</ins> strikes devem ser <del>aplicadas?</del><ins>aplicados?</ins>

#### [`fof-moderator-warnings.forum.warning_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-moderator-warnings/pt_BR/?q=context%3A%3D%22fof-moderator-warnings.forum.warning_modal.submit_button%22)

> Save warning

```diff
-Salvar aviso
+Salvar advertência
```

Salvar <del>aviso</del><ins>advertência</ins>


### `fof-oauth`

#### [`fof-oauth.admin.configure_button_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.configure_button_label%22)

> Configure with FoF OAuth

```diff
-Configurar com FoF OAuth
+Configurar com o FoF OAuth
```

Configurar com <ins>o </ins>FoF OAuth

#### [`fof-oauth.admin.settings.only_icons_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.only_icons_label%22)

> Only show the Log In Button icons (alternative layout)

```diff
-Mostrar apenas os ícones do botão de login (layout alternativo)
+Mostrar apenas os ícones dos botões de login (layout alternativo)
```

Mostrar apenas os ícones <del>do</del><ins>dos</ins> <del>botão</del><ins>botões</ins> de login (layout alternativo)

#### [`fof-oauth.admin.settings.providers.callback_url_text`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.callback_url_text%22)

> If necessary, set the callback URL to {url}.

```diff
-Se necessário, defina o URL de retorno de chamada como {url}.
+Se necessário, defina a URL de callback como {url}.
```

Se necessário, defina <del>o</del><ins>a</ins> URL<del> de retorno</del> de <del>chamada</del><ins>callback</ins> como {url}.

#### [`fof-oauth.admin.settings.providers.discord.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.discord.description%22)

> Create an app at {link}. Add the redirect URL in the OAuth2 tab.

```diff
-Crie um aplicativo em {link}. Adicione o URL de redirecionamento na guia OAuth2.
+Crie um aplicativo em {link}. Adicione a URL de redirecionamento na aba OAuth2.
```

Crie um aplicativo em {link}. Adicione <del>o</del><ins>a</ins> URL de redirecionamento na <del>guia</del><ins>aba</ins> OAuth2.

#### [`fof-oauth.admin.settings.providers.gitlab.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.gitlab.description%22)

> Create an application at {link}. Give the application the &lt;code&gt;read\_user&lt;/code&gt; scope.

```diff
-Crie um aplicativo em {link}. Dê ao aplicativo o escopo de <code>read_user</code>.
+Crie um aplicativo em {link}. Dê ao aplicativo o escopo <code>read_user</code>.
```

Crie um aplicativo em {link}. Dê ao aplicativo o escopo <del>de </del>&lt;code&gt;read\_user&lt;/code&gt;.

#### [`fof-oauth.admin.settings.providers.gitlab.domain_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.gitlab.domain_label%22)

> GitLab Domain

```diff
-Domínio GitLab
+Domínio do GitLab
```

Domínio <ins>do </ins>GitLab

#### [`fof-oauth.admin.settings.providers.google.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.google.description%22)

> Create an application at {link}.

```diff
-Criar uma aplicação em {link}.
+Crie um aplicativo em {link}.
```

<del>Criar</del><ins>Crie</ins> <del>uma</del><ins>um</ins> <del>aplicação</del><ins>aplicativo</ins> em {link}.

#### [`fof-oauth.admin.settings.providers.linkedin.description`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.linkedin.description%22)

> Create an application at {link}.

```diff
-Criar uma aplicação em {link}.
+Crie um aplicativo em {link}.
```

<del>Criar</del><ins>Crie</ins> <del>uma</del><ins>um</ins> <del>aplicação</del><ins>aplicativo</ins> em {link}.

#### [`fof-oauth.admin.settings_accessibility_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings_accessibility_label%22)

> {name} settings

```diff
-{name} configurações
+Configurações de {name}
```

#### [`fof-oauth.forum.error.bad_verification_code`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.error.bad_verification_code%22)

> Invalid or expired verification token. Please try again.

```diff
-Token de verificação inválido ou expirado. Por favor, tente novamente.
+Token de verificação inválido ou expirado. Tente novamente.
```

Token de verificação inválido ou expirado. <del>Por favor, tente</del><ins>Tente</ins> novamente.

#### [`fof-oauth.forum.error.invalid_state`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.error.invalid_state%22)

> Invalid state. Please try again.

```diff
-Estado inválido. Por favor, tente novamente.
+Estado inválido. Tente novamente.
```

Estado inválido. <del>Por favor, tente</del><ins>Tente</ins> novamente.

#### [`fof-oauth.forum.log_in.with_button`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.log_in.with_button%22)

> Log In with {provider}

```diff
-Logar com {provider}
+Entrar com {provider}
```

<del>Logar</del><ins>Entrar</ins> com {provider}

#### [`fof-oauth.forum.signup.username_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.signup.username_help%22)

> Please choose a username to be known by here

```diff
-Escolha um nome de usuário para ser conhecido aqui
+Escolha o nome de usuário que você usará aqui
```

Escolha <del>um</del><ins>o</ins> nome de usuário <del>para</del><ins>que</ins> <del>ser</del><ins>você</ins> <del>conhecido</del><ins>usará</ins> aqui

#### [`fof-oauth.forum.unlink`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.unlink%22)

> Remove link

```diff
-Remover
+Remover vínculo
```

Remover<ins> vínculo</ins>

#### [`fof-oauth.forum.user.settings.linked-account.identifier-label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.identifier-label%22)

> {provider} ID

```diff
-{provider} ID
+ID do {provider}
```

<del>{provider} </del>ID<ins> do {provider}</ins>

#### [`fof-oauth.forum.user.settings.linked-account.label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.label%22)

> Linked accounts

```diff
-Contas conectadas
+Contas vinculadas
```

Contas <del>conectadas</del><ins>vinculadas</ins>

#### [`fof-oauth.forum.user.settings.linked-account.last-used-label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.last-used-label%22)

> Last used

```diff
-Usado por último
+Último uso
```

#### [`fof-oauth.forum.user.settings.linked-account.link-created-label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.link-created-label%22)

> Link created

```diff
-Conta conectada
+Vínculo criado
```

#### [`fof-oauth.forum.user.settings.linked-account.orphaned-account`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.orphaned-account%22)

> You have signed in through this provider previously, but this forum has disabled sign-in with this method since.

```diff
-Você já fez login por meio desse provedor anteriormente, mas este fórum desativou o login com esse método desde então.
+Você já entrou por este provedor antes, mas desde então este fórum desativou o login por esse método.
```

Você já <del>fez login</del><ins>entrou</ins> por<del> meio</del> <del>desse</del><ins>este</ins> provedor <del>anteriormente,</del><ins>antes,</ins> mas<ins> desde então</ins> este fórum desativou o login <del>com</del><ins>por</ins> esse<del> método desde</del> <del>então.</del><ins>método.</ins>

#### [`fof-oauth.forum.user.settings.linked-account.unlink-confirm`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.unlink-confirm%22)

> Are you sure you want to remove the link with {provider}? You will no longer be able to sign in to this forum unless you re-authenticate in the future.

```diff
-Tem certeza de que deseja remover o link com {provider}? Você não poderá mais entrar neste fórum, a menos que faça uma nova autenticação no futuro.
+Tem certeza de que deseja remover o vínculo com {provider}? Você não poderá mais entrar neste fórum, a menos que se autentique novamente no futuro.
```

Tem certeza de que deseja remover o <del>link</del><ins>vínculo</ins> com {provider}? Você não poderá mais entrar neste fórum, a menos que<del> faça</del> <del>uma</del><ins>se</ins> <del>nova</del><ins>autentique</ins> <del>autenticação</del><ins>novamente</ins> no futuro.


### `fof-pages`

#### [`fof-pages.admin.badges.restricted`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.admin.badges.restricted%22)

> Restricted

```diff
-Restrito
+Restrita
```

#### [`fof-pages.admin.edit_page.delete_page_button`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_button%22)

> Delete page

```diff
-Apagar página
+Excluir página
```

<del>Apagar</del><ins>Excluir</ins> página

#### [`fof-pages.admin.edit_page.delete_page_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.admin.edit_page.delete_page_confirmation%22)

> Are you sure you want to delete this page?

```diff
-Tem certeza que deseja apagar essa página?
+Tem certeza de que deseja excluir esta página?
```

Tem certeza <ins>de </ins>que deseja <del>apagar</del><ins>excluir</ins> <del>essa</del><ins>esta</ins> página?

#### [`fof-pages.admin.edit_page.html_label`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.admin.edit_page.html_label%22)

> Enable HTML

```diff
-Habilitar HTML
+Ativar HTML
```

<del>Habilitar</del><ins>Ativar</ins> HTML

#### [`fof-pages.admin.edit_page.restricted_label`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.admin.edit_page.restricted_label%22)

> Restrict access (configure who can access in the Permissions tab)

```diff
-Restringir o acesso (configure quem pode acessar na guia Permissões)
+Restringir o acesso (configure quem pode acessar na aba Permissões)
```

Restringir o acesso (configure quem pode acessar na <del>guia</del><ins>aba</ins> Permissões)

#### [`fof-pages.ref.content`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.ref.content%22)

> Content

```diff
-Contente
+Conteúdo
```

#### [`fof-pages.ref.slug`](https://weblate.rob006.net/translate/flarum2/fof-pages/pt_BR/?q=context%3A%3D%22fof-pages.ref.slug%22)

> Slug

```diff
-Lesma
+Slug
```


### `fof-polls`

#### [`fof-polls.admin.permissions.self_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.self_edit%22)

> Edit created polls (requires post edit permission)

```diff
-Permitir que os usuários editem suas próprias enquetes
+Editar as enquetes criadas (requer permissão de editar posts)
```

#### [`fof-polls.admin.permissions.start`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.start%22)

> Start a poll

```diff
-Iniciar uma enquete
+Iniciar enquete
```

Iniciar <del>uma </del>enquete

#### [`fof-polls.admin.permissions.vote`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.vote%22)

> Vote on polls

```diff
-Vote nas enquetes
+Votar em enquetes
```

<del>Vote</del><ins>Votar</ins> <del>nas</del><ins>em</ins> enquetes

#### [`fof-polls.admin.settings.enable_global_polls_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.enable_global_polls_help%22)

> Global polls are not tied to a specific post, and may be accessed from a dedicated polls page.

```diff
-Enquetes globais não estão vinculadas a uma postagem específica e podem ser acessadas a partir de uma página dedicada de enquetes.
+Enquetes globais não estão vinculadas a um post específico e podem ser acessadas em uma página própria de enquetes.
```

Enquetes globais não estão vinculadas a <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins> <del>específica</del><ins>específico</ins> e podem ser acessadas<del> a partir</del> <del>de</del><ins>em</ins> uma página <del>dedicada</del><ins>própria</ins> de enquetes.

#### [`fof-polls.admin.settings.general.heading`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.general.heading%22)

> General Settings

```diff
-Ajustes Gerais
+Configurações Gerais
```

<del>Ajustes</del><ins>Configurações</ins> Gerais

#### [`fof-polls.admin.settings.general.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.general.help%22)

> These settings control the basic features of the Polls extension.

```diff
-Essas configurações controlam os recursos básicos da extensão de Enquetes.
+Essas configurações controlam os recursos básicos da extensão de enquetes.
```

Essas configurações controlam os recursos básicos da extensão de <del>Enquetes.</del><ins>enquetes.</ins>

#### [`fof-polls.admin.settings.global_polls.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.global_polls.help%22)

> These settings control the global polls feature.

```diff
-Essas configurações controlam o recurso global de enquetes.
+Essas configurações controlam o recurso de enquetes globais.
```

Essas configurações controlam o recurso <del>global </del>de <del>enquetes.</del><ins>enquetes globais.</ins>

#### [`fof-polls.forum.composer_discussion.add_poll`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.composer_discussion.add_poll%22)

> =&gt; fof-polls.forum.moderation.add

```diff
-Adicionar enquete
+=> fof-polls.forum.moderation.add
```

#### [`fof-polls.forum.days_remaining`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.days_remaining%22)

> Poll ends {time}.

```diff
-Enquete termina em {time}.
+Enquete termina {time}.
```

Enquete termina <del>em </del>{time}.

#### [`fof-polls.forum.modal.add_option_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.add_option_label%22)

> Add an Option

```diff
-Adicionar uma opção
+Adicionar Opção
```

Adicionar <del>uma opção</del><ins>Opção</ins>

#### [`fof-polls.forum.modal.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.add_title%22)

> Add a Poll

```diff
-Adicionar enquete
+Adicionar Enquete
```

Adicionar <del>enquete</del><ins>Enquete</ins>

#### [`fof-polls.forum.modal.date_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.date_placeholder%22)

> Poll end date (Optional)

```diff
-Data de término da enquete (opcional)
+Data final da enquete (Opcional)
```

Data <del>de término</del><ins>final</ins> da enquete <del>(opcional)</del><ins>(Opcional)</ins>

#### [`fof-polls.forum.modal.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.edit_title%22)

> Edit Poll

```diff
-Editar enquete
+Editar Enquete
```

Editar <del>enquete</del><ins>Enquete</ins>

#### [`fof-polls.forum.modal.image_option_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.image_option_placeholder%22)

> Image URL (optional)

```diff
-URL da imagem (opcional)
+URL da Imagem (opcional)
```

URL da <del>imagem</del><ins>Imagem</ins> (opcional)

#### [`fof-polls.forum.modal.no_voters`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.no_voters%22)

> No Votes

```diff
-Sem votos
+Sem Votos
```

Sem <del>votos</del><ins>Votos</ins>

#### [`fof-polls.forum.modal.public_poll_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.public_poll_label%22)

> Allow people to see who voted

```diff
-Permitir que as pessoas vejam quem votou
+Permitir ver quem votou
```

Permitir <del>que as pessoas vejam</del><ins>ver</ins> quem votou

#### [`fof-polls.forum.moderation.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.moderation.delete%22)

> Remove Poll

```diff
-Remover enquete
+Remover Enquete
```

Remover <del>enquete</del><ins>Enquete</ins>

#### [`fof-polls.forum.moderation.edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.moderation.edit%22)

> Edit Poll

```diff
-Editar enquete
+Editar Enquete
```

Editar <del>enquete</del><ins>Enquete</ins>

#### [`fof-polls.forum.poll.cannot_start_poll_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll.cannot_start_poll_button%22)

> Cannot Start Poll

```diff
-Não é possível iniciar a enquete
+Impossível Iniciar Enquete
```

#### [`fof-polls.forum.poll.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll.submit_button%22)

> Vote

```diff
-Voto
+Votar
```

#### [`fof-polls.forum.polls_count`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_count%22)

> {count, plural, one { {count} vote} other {{count} votes}}

```diff
-{count, plural, one { {count} voto} other {{count} votos}}
+{count, plural, one {# voto} other {# votos}}
```

{count, plural, one <del>{ {count}</del><ins>{#</ins> voto} other <del>{{count}</del><ins>{#</ins> votos}}

#### [`fof-polls.forum.public_poll`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.public_poll%22)

> View voters

```diff
-Veja quem votou
+Ver quem votou
```

<del>Veja</del><ins>Ver</ins> quem votou

#### [`fof-polls.forum.tooltip.votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.tooltip.votes%22)

> {count, plural, one {# vote} other {# votes}}

```diff
-{count, plural, one {# vote} other {# votes} }
+{count, plural, one {# voto} other {# votos}}
```

{count, plural, one {# <del>vote}</del><ins>voto}</ins> other {#<del> votes}</del> <del>}</del><ins>votos}}</ins>

#### [`fof-polls.forum.votes_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.votes_modal.title%22)

> Voters

```diff
-Veja quem votou
+Votantes
```


### `fof-reactions`

#### [`fof-reactions.admin.page.convert.converted`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.convert.converted%22)

> Successfully converted all {number} likes

```diff
-Todas as {number} curtidas foram convertidas com sucesso
+Todas as {number} curtidas foram convertidas
```

Todas as {number} curtidas foram convertidas<del> com sucesso</del>

#### [`fof-reactions.admin.page.reactions.Helptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.reactions.Helptext%22)

> Input the name (identifier) of the emoji or font-awesome icon and select which type you would like.

```diff
-Entre o nome (identificador) do emoji ou ícone font-awesome e selecione qual tipo você deseja.
+Digite o nome (identificador) do emoji ou ícone font-awesome e selecione o tipo desejado.
```

<del>Entre</del><ins>Digite</ins> o nome (identificador) do emoji ou ícone font-awesome e selecione <del>qual</del><ins>o</ins> tipo<del> você</del> <del>deseja.</del><ins>desejado.</ins>

#### [`fof-reactions.admin.page.settings.integrations.gamification.downvoteHelptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.gamification.downvoteHelptext%22)

> Enter the identifier of the reaction you would like to automatically convert into an downvote

```diff
-Entre o identificador da reação que você gostaria de converter automaticamente em um voto negativo
+Digite o identificador da reação que deseja converter automaticamente em voto negativo
```

<del>Entre</del><ins>Digite</ins> o identificador da reação que<del> você gostaria</del> <del>de</del><ins>deseja</ins> converter automaticamente em<del> um</del> voto negativo

#### [`fof-reactions.admin.page.settings.integrations.gamification.legend`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.gamification.legend%22)

> Gamification

```diff
-Gameficação
+Gamificação
```

#### [`fof-reactions.admin.page.settings.integrations.gamification.upvoteHelptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.gamification.upvoteHelptext%22)

> Enter the identifier of the reaction you would like to automatically convert into an upvote

```diff
-Entre o identificador da reação que você gostaria de converter automaticamente em um voto positivo
+Digite o identificador da reação que deseja converter automaticamente em voto positivo
```

<del>Entre</del><ins>Digite</ins> o identificador da reação que<del> você gostaria</del> <del>de</del><ins>deseja</ins> converter automaticamente em<del> um</del> voto positivo

#### [`fof-reactions.admin.page.settings.integrations.likes.Helptext`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.likes.Helptext%22)

> Enter the identifier of the reaction you would like to automatically convert into a like

```diff
-Entre o identificador da reação que você gostaria de converter automaticamente em uma curtida
+Digite o identificador da reação que deseja converter automaticamente em curtida
```

<del>Entre</del><ins>Digite</ins> o identificador da reação que<del> você gostaria</del> <del>de</del><ins>deseja</ins> converter automaticamente em<del> uma</del> curtida

#### [`fof-reactions.admin.page.settings.integrations.warning`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.integrations.warning%22)

> The same reaction &lt;strong&gt;cannot&lt;/strong&gt; be converted to a like &lt;strong&gt;and&lt;/strong&gt; an upvote

```diff
-A mesma reação <strong>não</strong> pode ser convertida em um like <strong>e</strong> em um voto positivo
+A mesma reação <strong>não</strong> pode ser convertida em uma curtida <strong>e</strong> em um voto positivo
```

A mesma reação &lt;strong&gt;não&lt;/strong&gt; pode ser convertida em <del>um</del><ins>uma</ins> <del>like</del><ins>curtida</ins> &lt;strong&gt;e&lt;/strong&gt; em um voto positivo

#### [`fof-reactions.admin.page.settings.react_own_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.react_own_posts_help%22)

> When enabled, subject to permission, users may react to their own posts on the forum. To prevent users reacting on their own posts, disable this setting.

```diff
-Quando ativado, sujeito à permissão, os usuários podem reagir às suas próprias postagens no fórum. Para evitar que os usuários reajam em suas próprias postagens, desative essa configuração.
+Quando ativado, sujeito à permissão, os usuários podem reagir aos próprios posts no fórum. Para impedir que os usuários reajam aos próprios posts, desative esta configuração.
```

Quando ativado, sujeito à permissão, os usuários podem reagir <del>às suas</del><ins>aos</ins> <del>próprias</del><ins>próprios</ins> <del>postagens</del><ins>posts</ins> no fórum. Para <del>evitar</del><ins>impedir</ins> que os usuários reajam<del> em</del> <del>suas</del><ins>aos</ins> <del>próprias</del><ins>próprios</ins> <del>postagens,</del><ins>posts,</ins> desative <del>essa</del><ins>esta</ins> configuração.

#### [`fof-reactions.admin.page.settings.react_own_posts_label`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.react_own_posts_label%22)

> Users may react to their own posts,

```diff
-Usuários podem reagir às suas próprias postagens
+Usuários podem reagir aos próprios posts
```

Usuários podem reagir <del>às suas</del><ins>aos</ins> <del>próprias</del><ins>próprios</ins> <del>postagens</del><ins>posts</ins>

#### [`fof-reactions.admin.permissions.see_reactions_label`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.permissions.see_reactions_label%22)

> See who reacted on posts

```diff
-Veja quem reagiu a posts
+Ver quem reagiu aos posts
```

<del>Veja</del><ins>Ver</ins> quem reagiu <del>a</del><ins>aos</ins> posts

#### [`fof-reactions.forum.disabled-reaction`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.forum.disabled-reaction%22)

> You can't use this reaction right now, please refresh the page

```diff
-Você não pode usar esta reação neste momento, por favor atualize a página
+Você não pode usar esta reação agora, atualize a página
```

Você não pode usar esta reação <del>neste momento, por favor</del><ins>agora,</ins> atualize a página

#### [`fof-reactions.forum.settings.notify_post_reacted_label`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.forum.settings.notify_post_reacted_label%22)

> Someone reacts to one of my posts

```diff
-Alguém reagiu a um dos meus posts
+Alguém reage a um dos meus posts
```

Alguém <del>reagiu</del><ins>reage</ins> a um dos meus posts


### `fof-recaptcha`

#### [`fof-recaptcha.admin.permissions.post_without_captcha`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.permissions.post_without_captcha%22)

> Create posts and discussions without captcha

```diff
-Crie postagens e discussões sem captcha
+Criar posts e discussões sem captcha
```

<del>Crie</del><ins>Criar</ins> <del>postagens</del><ins>posts</ins> e discussões sem captcha

#### [`fof-recaptcha.admin.settings.type_label`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.settings.type_label%22)

> reCAPTCHA Type

```diff
-Tipo reCAPTCHA
+Tipo de reCAPTCHA
```

Tipo <ins>de </ins>reCAPTCHA


### `fof-sitemap`

#### [`fof-sitemap.admin.settings.exclude_users`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_users%22)

> Exclude all user profiles from sitemap

```diff
-Excluir todos os perfis de usuário do mapa do site (sitemap)
+Excluir todos os perfis de usuário do sitemap
```

Excluir todos os perfis de usuário do <del>mapa do site (sitemap)</del><ins>sitemap</ins>

#### [`fof-sitemap.admin.settings.exclude_users_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_users_help%22)

> By default any user visible to guests will be indexed

```diff
-Por padrão, qualquer usuário visível para visitantes será indexado
+Por padrão, qualquer usuário visível para convidados será indexado
```

Por padrão, qualquer usuário visível para <del>visitantes</del><ins>convidados</ins> será indexado

#### [`fof-sitemap.admin.settings.frequency.hourly`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.frequency.hourly%22)

> Hourly

```diff
-De hora em hora
+A cada hora
```

<del>De hora</del><ins>A</ins> <del>em</del><ins>cada</ins> hora

#### [`fof-sitemap.admin.settings.frequency_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.frequency_label%22)

> How often should the scheduler re-build the cached sitemap?

```diff
-Com que frequência o agendador deve recriar o mapa do site em cache?
+Com que frequência o agendador deve reconstruir o sitemap em cache?
```

Com que frequência o agendador deve <del>recriar</del><ins>reconstruir</ins> o<del> mapa do</del> <del>site</del><ins>sitemap</ins> em cache?

#### [`fof-sitemap.admin.settings.mode_help_large`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_large%22)

> 50\.000 is the technical limit for sitemap files. If you have more entries to store, use the following option!

```diff
-50.000 é o limite técnico para arquivos de mapa do site (sitemap). Se você tiver mais entradas para armazenar, use a seguinte opção!
+50.000 é o limite técnico para arquivos de sitemap. Se você tiver mais entradas para armazenar, use a opção a seguir!
```

50\.000 é o limite técnico para arquivos de <del>mapa do site (sitemap).</del><ins>sitemap.</ins> Se você tiver mais entradas para armazenar, use a <del>seguinte</del><ins>opção</ins> <del>opção!</del><ins>a seguir!</ins>

#### [`fof-sitemap.admin.settings.mode_help_multi`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_multi%22)

> Best for larger forums, starting at 10.000 items. Mult part, compressed sitemap files will be generated and stored in the /public folder

```diff
-Melhor para fóruns maiores, a partir de 10.000 itens. Vários arquivos compactados de mapa do site serão gerados e armazenados na pasta /public
+Melhor para fóruns maiores, a partir de 10.000 itens. Arquivos de sitemap compactados, em várias partes, serão gerados e armazenados na pasta /public
```

Melhor para fóruns maiores, a partir de 10.000 itens. <del>Vários</del><ins>Arquivos</ins> <del>arquivos</del><ins>de</ins> <del>compactados</del><ins>sitemap</ins> <del>de</del><ins>compactados,</ins> <del>mapa</del><ins>em</ins> <del>do</del><ins>várias</ins> <del>site</del><ins>partes,</ins> serão gerados e armazenados na pasta /public

#### [`fof-sitemap.admin.settings.mode_help_multi_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_multi_label%22)

> Multi-file Mode

```diff
-Modo Multi-arquivo
+Modo Multiarquivo
```

Modo <del>Multi-arquivo</del><ins>Multiarquivo</ins>

#### [`fof-sitemap.admin.settings.mode_help_runtime`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_runtime%22)

> For small forums, most likely on shared hosting environments, with discussions, users, tags and pages summed up being less than 10.000 items. The sitemap is generated on the fly at each request.

```diff
-Para fóruns pequenos, provavelmente em ambientes de hospedagem compartilhada, com discussões, usuários, tags e páginas somadas em menos de 10.000 itens. O mapa do site (sitemap) é gerado em tempo real a cada solicitação.
+Para fóruns pequenos, provavelmente em hospedagem compartilhada, com discussões, usuários, tags e páginas somando menos de 10.000 itens. O sitemap é gerado em tempo real a cada requisição.
```

Para fóruns pequenos, provavelmente em <del>ambientes de </del>hospedagem compartilhada, com discussões, usuários, tags e páginas<del> somadas</del> <del>em</del><ins>somando</ins> menos de 10.000 itens. O<del> mapa do site</del> <del>(sitemap)</del><ins>sitemap</ins> é gerado em tempo real a cada <del>solicitação.</del><ins>requisição.</ins>

#### [`fof-sitemap.admin.settings.mode_help_runtime_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_runtime_label%22)

> Runtime Mode

```diff
-Modo de Execução (Runtime)
+Modo Runtime
```

Modo <del>de Execução (Runtime)</del><ins>Runtime</ins>

#### [`fof-sitemap.admin.settings.mode_help_schedule`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_schedule%22)

> The following modes add their tasks to the Flarum schedule.

```diff
-Os modos seguintes adicionam suas tarefas ao cronograma do Flarum.
+Os modos a seguir adicionam suas tarefas ao agendador do Flarum.
```

Os modos <del>seguintes</del><ins>a seguir</ins> adicionam suas tarefas ao <del>cronograma</del><ins>agendador</ins> do Flarum.

#### [`fof-sitemap.admin.settings.mode_help_schedule_setup`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_help_schedule_setup%22)

> Without the Flarum scheduler correctly setup, the following modes will not run. Refer here &lt;a&gt;for more information&lt;/a&gt;.

```diff
-Sem a configuração correta do agendador Flarum, os seguintes modos não serão executados. Consulte aqui <a>para mais informações</a>.
+Sem o agendador do Flarum configurado corretamente, os modos a seguir não serão executados. Consulte aqui <a>para mais informações</a>.
```

Sem <del>a configuração</del><ins>o</ins> <del>correta</del><ins>agendador</ins> do <del>agendador</del><ins>Flarum</ins> <del>Flarum,</del><ins>configurado</ins> <del>os</del><ins>corretamente,</ins> <del>seguintes</del><ins>os</ins> modos<ins> a seguir</ins> não serão executados. Consulte aqui &lt;a&gt;para mais informações&lt;/a&gt;.

#### [`fof-sitemap.admin.settings.mode_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.mode_label%22)

> Operation mode

```diff
-Modo de Operação
+Modo de operação
```

Modo de <del>Operação</del><ins>operação</ins>

#### [`fof-sitemap.admin.settings.modes.multi_file`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.modes.multi_file%22)

> Multi file

```diff
-Multi arquivo
+Multiarquivo
```

#### [`fof-sitemap.admin.settings.modes.runtime`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.modes.runtime%22)

> Runtime

```diff
-Execução
+Runtime
```


### `fof-socialprofile`

#### [`fof-socialprofile.admin.permissions.editAny`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.admin.permissions.editAny%22)

> Edit any social profile

```diff
-Edite qualquer perfil social
+Editar qualquer perfil social
```

<del>Edite</del><ins>Editar</ins> qualquer perfil social

#### [`fof-socialprofile.admin.settings.allow_external_favicons_label`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.admin.settings.allow_external_favicons_label%22)

> Allow external website icons (uses external provider's favicon API)

```diff
-Permitir ícones de sites externos (usa a API favicon do DuckDuckGo)
+Permitir ícones de sites externos (usa a API de favicon de um provedor externo)
```

Permitir ícones de sites externos (usa a API <ins>de </ins>favicon <del>do</del><ins>de</ins> <del>DuckDuckGo)</del><ins>um provedor externo)</ins>

#### [`fof-socialprofile.forum.edit.add`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.forum.edit.add%22)

> Add buttons to your social media

```diff
-Adicione botões às suas redes sociais
+Adicione botões para suas redes sociais
```

Adicione botões <del>às</del><ins>para</ins> suas redes sociais

#### [`fof-socialprofile.forum.edit.delete`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.forum.edit.delete%22)

> Delete

```diff
-Apagar
+Excluir
```

#### [`fof-socialprofile.forum.edit.deletetitle`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.forum.edit.deletetitle%22)

> Delete Button

```diff
-Botão Apagar
+Excluir Botão
```

#### [`fof-socialprofile.forum.edit.edit`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.forum.edit.edit%22)

> Edit your social media buttons

```diff
-Edite seus botões de mídia social
+Edite seus botões de redes sociais
```

Edite seus botões de <del>mídia</del><ins>redes</ins> <del>social</del><ins>sociais</ins>

#### [`fof-socialprofile.forum.edit.headtitle`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.forum.edit.headtitle%22)

> Edit Buttons

```diff
-Botões de Edição
+Editar Botões
```

#### [`fof-socialprofile.forum.edit.save_disabled_fetching_favicons`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.forum.edit.save_disabled_fetching_favicons%22)

> One or more icons are being fetched. Please wait.

```diff
-Um ou mais ícones estão sendo buscados. Por favor aguarde.
+Um ou mais ícones estão sendo obtidos. Aguarde.
```

Um ou mais ícones estão sendo <del>buscados. Por favor</del><ins>obtidos.</ins> <del>aguarde.</del><ins>Aguarde.</ins>


### `fof-split`

#### [`fof-split.admin.permissions.split_discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-split/pt_BR/?q=context%3A%3D%22fof-split.admin.permissions.split_discussion_label%22)

> Split posts from discussions

```diff
-Dividir postagens de discussões
+Dividir posts de discussões
```

Dividir <del>postagens</del><ins>posts</ins> de discussões

#### [`fof-split.forum.post.was_split_from`](https://weblate.rob006.net/translate/flarum2/fof-split/pt_BR/?q=context%3A%3D%22fof-split.forum.post.was_split_from%22)

> {count, plural, one {{count} post was split from {target}.} other {{count} posts were split from {target}.}}

```diff
-{count, plural, one {{count} postagem foi dividida de {target}.} other {{count} postagens foram divididas de {target}.}}
+{count, plural, one {# post foi dividido de {target}.} other {# posts foram divididos de {target}.}}
```

{count, plural, one <del>{{count}</del><ins>{#</ins> <del>postagem</del><ins>post</ins> foi <del>dividida</del><ins>dividido</ins> de {target}.} other <del>{{count}</del><ins>{#</ins> <del>postagens</del><ins>posts</ins> foram <del>divididas</del><ins>divididos</ins> de {target}.}}

#### [`fof-split.forum.post.was_split_to`](https://weblate.rob006.net/translate/flarum2/fof-split/pt_BR/?q=context%3A%3D%22fof-split.forum.post.was_split_to%22)

> {count, plural, one {{count} post was split to {target}.} other {{count} posts were split to {target}.}}

```diff
-{count, plural, one {{count} postagem foi dividida para {target}.} other {{count} postagens foram divididas para {target}.}}
+{count, plural, one {# post foi dividido para {target}.} other {# posts foram divididos para {target}.}}
```

{count, plural, one <del>{{count}</del><ins>{#</ins> <del>postagem</del><ins>post</ins> foi <del>dividida</del><ins>dividido</ins> para {target}.} other <del>{{count}</del><ins>{#</ins> <del>postagens</del><ins>posts</ins> foram <del>divididas</del><ins>divididos</ins> para {target}.}}

#### [`fof-split.forum.split.from`](https://weblate.rob006.net/translate/flarum2/fof-split/pt_BR/?q=context%3A%3D%22fof-split.forum.split.from%22)

> Split from here

```diff
-Dividir apartir daqui
+Dividir a partir daqui
```

Dividir <del>apartir</del><ins>a partir</ins> daqui


### `fof-subscribed`

#### [`fof-subscribed.admin.permission.subscribe_to_discussion_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_discussion_created%22)

> Allowed to receive notification upon new discussion

```diff
-Tem permissão para receber notificações sobre uma nova discussão
+Receber notificação de nova discussão
```

<del>Tem permissão para receber notificações</del><ins>Receber</ins> <del>sobre</del><ins>notificação</ins> <del>uma</del><ins>de</ins> nova discussão

#### [`fof-subscribed.admin.permission.subscribe_to_post_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_post_created%22)

> Allowed to receive notification upon new post or reply

```diff
-Tem permissão para receber notificação sobre nova postagem ou resposta
+Receber notificação de novo post ou resposta
```

<del>Tem permissão para receber</del><ins>Receber</ins> notificação <del>sobre</del><ins>de</ins> <del>nova</del><ins>novo</ins> <del>postagem</del><ins>post</ins> ou resposta

#### [`fof-subscribed.admin.permission.subscribe_to_post_flagged`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_post_flagged%22)

> Allowed to receive notification upon new flag

```diff
-Tem permissão para receber notificação sobre nova marcação
+Receber notificação de nova sinalização
```

<del>Tem permissão para receber</del><ins>Receber</ins> notificação <del>sobre</del><ins>de</ins> nova <del>marcação</del><ins>sinalização</ins>

#### [`fof-subscribed.admin.permission.subscribe_to_post_unapproved`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_post_unapproved%22)

> Allowed to receive notification upon new unapproved post

```diff
-Tem permissão para receber notificação sobre nova postagem não aprovada
+Receber notificação de novo post não aprovado
```

<del>Tem permissão para receber</del><ins>Receber</ins> notificação <del>sobre</del><ins>de</ins> <del>nova</del><ins>novo</ins> <del>postagem</del><ins>post</ins> não <del>aprovada</del><ins>aprovado</ins>

#### [`fof-subscribed.admin.permission.subscribe_to_user_created`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.admin.permission.subscribe_to_user_created%22)

> Allowed to receive notification upon new user

```diff
-Tem permissão para receber notificação sobre um novo usuário
+Receber notificação de novo usuário
```

<del>Tem permissão para receber</del><ins>Receber</ins> notificação<del> sobre</del> <del>um</del><ins>de</ins> novo usuário

#### [`fof-subscribed.email.body.newDiscussion`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.body.newDiscussion%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} started a new discussion: {discussion\_title}
>
> To view this new discussion, check out the following link:
> {discussion\_url}
>
> \---
>
> {post\_content}
>

```diff
 Olá {recipient_display_name},

 {actor_display_name} iniciou uma nova discussão: {discussion_title}

-Para ver esta nova discussão, confira o seguinte link:
+Para ver esta nova discussão, acesse o link a seguir:
 {discussion_url}

 ---

 {post_content}

```

Olá {recipient\_display\_name},<br /><br />{actor\_display\_name} iniciou uma nova discussão: {discussion\_title}<br /><br />Para ver esta nova discussão, <del>confira</del><ins>acesse</ins> o <del>seguinte</del><ins>link</ins> <del>link:</del><ins>a seguir:</ins><br />{discussion\_url}<br /><br />---<br /><br />{post\_content}<br />

#### [`fof-subscribed.email.body.newUser`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.body.newUser%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just joined {forum\_url}.
>
> To view this new user's profile, check out the following link:
> {user\_url}
>

```diff
 Olá {recipient_display_name},

-{actor_display_name} acabou de se inscrever em {forum_url}.
+{actor_display_name} acabou de se cadastrar em {forum_url}.

-Para ver o perfil deste novo usuário, confira o seguinte link:
+Para ver o perfil deste novo usuário, acesse o link a seguir:
 {user_url}

```

Olá {recipient\_display\_name},<br /><br />{actor\_display\_name} acabou de se <del>inscrever</del><ins>cadastrar</ins> em {forum\_url}.<br /><br />Para ver o perfil deste novo usuário, <del>confira</del><ins>acesse</ins> o <del>seguinte</del><ins>link</ins> <del>link:</del><ins>a seguir:</ins><br />{user\_url}<br />

#### [`fof-subscribed.email.body.postCreated`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.body.postCreated%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just created a new post in {discussion\_title}
>
> To view this new post, check out the following link:
> {post\_url}
>
> \---
>
> {post\_content}
>

```diff
 Olá {recipient_display_name},

-{actor_display_name} acabou de criar uma nova postagem em {discussion_title}
+{actor_display_name} acabou de criar um novo post em {discussion_title}

-Para ver este novo post, confira o seguinte link:
+Para ver este novo post, acesse o link a seguir:
 {post_url}

 ---

 {post_content}

```

Olá {recipient\_display\_name},<br /><br />{actor\_display\_name} acabou de criar <del>uma</del><ins>um</ins> <del>nova</del><ins>novo</ins> <del>postagem</del><ins>post</ins> em {discussion\_title}<br /><br />Para ver este novo post, <del>confira</del><ins>acesse</ins> o <del>seguinte</del><ins>link</ins> <del>link:</del><ins>a seguir:</ins><br />{post\_url}<br /><br />---<br /><br />{post\_content}<br />

#### [`fof-subscribed.email.body.postFlagged`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.body.postFlagged%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} just flagged a post in {discussion\_title}
>
> To view this post, check out the following link:
> {post\_url}
>

```diff
 Olá {recipient_display_name},

-{actor_display_name} acabou de marcar uma postagem em {discussion_title}
+{actor_display_name} acabou de sinalizar um post em {discussion_title}

-Para ver esta postagem, confira o link a seguir:
+Para ver este post, acesse o link a seguir:
 {post_url}

```

Olá {recipient\_display\_name},<br /><br />{actor\_display\_name} acabou de <del>marcar</del><ins>sinalizar</ins> <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins> em {discussion\_title}<br /><br />Para ver <del>esta</del><ins>este</ins> <del>postagem,</del><ins>post,</ins> <del>confira</del><ins>acesse</ins> o link a seguir:<br />{post\_url}<br />

#### [`fof-subscribed.email.body.postUnapproved`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.body.postUnapproved%22)

> Hey {recipient\_display\_name},
>
> {actor\_display\_name} created a post that wasn't automatically approved in {discussion\_title}
>
> To view this new post, check out the following link:
> {post\_url}
>
> \---
>
> {post\_content}
>

```diff
 Olá {recipient_display_name},

-{actor_display_name} criou uma postagem que não foi aprovada automaticamente em {discussion_title}
+{actor_display_name} criou um post que não foi aprovado automaticamente em {discussion_title}

-Para ver este novo post, confira o seguinte link:
+Para ver este novo post, acesse o link a seguir:
 {post_url}

 ---

 {post_content}

```

Olá {recipient\_display\_name},<br /><br />{actor\_display\_name} criou <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins> que não foi <del>aprovada</del><ins>aprovado</ins> automaticamente em {discussion\_title}<br /><br />Para ver este novo post, <del>confira</del><ins>acesse</ins> o <del>seguinte</del><ins>link</ins> <del>link:</del><ins>a seguir:</ins><br />{post\_url}<br /><br />---<br /><br />{post\_content}<br />

#### [`fof-subscribed.email.subject.newDiscussion`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.subject.newDiscussion%22)

> \[Subscribed \| New Discussion\] {title}

```diff
-[Inscrito | Nova discussão] {title}
+[Inscrição | Nova Discussão] {title}
```

<del>\[Inscrito</del><ins>\[Inscrição</ins> \| Nova <del>discussão\]</del><ins>Discussão\]</ins> {title}

#### [`fof-subscribed.email.subject.newUser`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.subject.newUser%22)

> \[Subscribed \| New User\] {username}

```diff
-[Inscrito | Novo usuário] {username}
+[Inscrição | Novo Usuário] {username}
```

<del>\[Inscrito</del><ins>\[Inscrição</ins> \| Novo <del>usuário\]</del><ins>Usuário\]</ins> {username}

#### [`fof-subscribed.email.subject.postCreated`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.subject.postCreated%22)

> \[Subscribed \| New Post\] {username} wrote a new post in {title}

```diff
-[Inscrito | Nova postagem] {username} escreveu uma nova postagem em {title}
+[Inscrição | Novo Post] {username} escreveu um novo post em {title}
```

<del>\[Inscrito</del><ins>\[Inscrição</ins> \| <del>Nova</del><ins>Novo</ins> <del>postagem\]</del><ins>Post\]</ins> {username} escreveu <del>uma</del><ins>um</ins> <del>nova</del><ins>novo</ins> <del>postagem</del><ins>post</ins> em {title}

#### [`fof-subscribed.email.subject.postFlagged`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.subject.postFlagged%22)

> \[Subscribed \| New Flag\] {username} flagged a post in {title}

```diff
-[Inscrito | Nova Marcação] {username} marcou uma postagem em {title}
+[Inscrição | Nova Sinalização] {username} sinalizou um post em {title}
```

<del>\[Inscrito</del><ins>\[Inscrição</ins> \| Nova <del>Marcação\]</del><ins>Sinalização\]</ins> {username} <del>marcou</del><ins>sinalizou</ins> <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins> em {title}

#### [`fof-subscribed.email.subject.postUnapproved`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.email.subject.postUnapproved%22)

> \[Subscribed \| Unapproved\] {username} posted in {title}

```diff
-[Inscrito | Não aprovado] {username} postado em {title}
+[Inscrição | Não Aprovado] {username} postou em {title}
```

<del>\[Inscrito</del><ins>\[Inscrição</ins> \| Não <del>aprovado\]</del><ins>Aprovado\]</ins> {username} <del>postado</del><ins>postou</ins> em {title}

#### [`fof-subscribed.forum.notifications.post_created_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.notifications.post_created_text%22)

> {username} wrote a new post

```diff
-{username} escreveu uma nova postagem
+{username} escreveu um novo post
```

{username} escreveu <del>uma</del><ins>um</ins> <del>nova</del><ins>novo</ins> <del>postagem</del><ins>post</ins>

#### [`fof-subscribed.forum.notifications.post_flagged_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.notifications.post_flagged_text%22)

> {username} flagged a post

```diff
-{username} marcou uma postagem
+{username} sinalizou um post
```

{username} <del>marcou</del><ins>sinalizou</ins> <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins>

#### [`fof-subscribed.forum.notifications.post_unapproved_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.notifications.post_unapproved_text%22)

> {username} created a post that requires approval

```diff
-{username} criou uma postagem que requer aprovação
+{username} criou um post que requer aprovação
```

{username} criou <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins> que requer aprovação

#### [`fof-subscribed.forum.notifications.user_created_text`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.notifications.user_created_text%22)

> {username} has just signed up

```diff
-{username} acabou de se inscrever
+{username} acabou de se cadastrar
```

{username} acabou de se <del>inscrever</del><ins>cadastrar</ins>

#### [`fof-subscribed.forum.settings.defaults_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.settings.defaults_label%22)

> Set "{setting}" enabled by default

```diff
-Definir "{setting}" ativado por padrão
+Ativar "{setting}" por padrão
```

<del>Definir</del><ins>Ativar</ins> "{setting}"<del> ativado</del> por padrão

#### [`fof-subscribed.forum.settings.notify_post_created_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_post_created_label%22)

> Someone creates a new post or reply

```diff
-Alguém cria uma nova postagem ou resposta
+Alguém cria um novo post ou resposta
```

Alguém cria <del>uma</del><ins>um</ins> <del>nova</del><ins>novo</ins> <del>postagem</del><ins>post</ins> ou resposta

#### [`fof-subscribed.forum.settings.notify_post_flagged_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_post_flagged_label%22)

> Someone creates a new flag on a post

```diff
-Alguém cria uma nova marcação em uma postagem
+Alguém cria uma nova sinalização em um post
```

Alguém cria uma nova <del>marcação</del><ins>sinalização</ins> em <del>uma</del><ins>um</ins> <del>postagem</del><ins>post</ins>

#### [`fof-subscribed.forum.settings.notify_post_unapproved_label`](https://weblate.rob006.net/translate/flarum2/fof-subscribed/pt_BR/?q=context%3A%3D%22fof-subscribed.forum.settings.notify_post_unapproved_label%22)

> A created post needs approval

```diff
-Uma postagem criada precisa de aprovação
+Um post criado precisa de aprovação
```

<del>Uma</del><ins>Um</ins> <del>postagem</del><ins>post</ins> <del>criada</del><ins>criado</ins> precisa de aprovação


### `fof-terms`

#### [`fof-terms.admin.buttons.delete-policy`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.buttons.delete-policy%22)

> Delete Policy

```diff
-Deletar Política
+Excluir Política
```

<del>Deletar</del><ins>Excluir</ins> Política

#### [`fof-terms.admin.permissions.export-policies`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.permissions.export-policies%22)

> Export all users and policies data

```diff
-Exporte todos os dados de usuários e políticas
+Exportar todos os dados de usuários e políticas
```

<del>Exporte</del><ins>Exportar</ins> todos os dados de usuários e políticas

#### [`fof-terms.admin.permissions.see-user-policies-state`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.permissions.see-user-policies-state%22)

> See the user policies state

```diff
-Veja o estado das políticas do usuário
+Ver o estado das políticas do usuário
```

<del>Veja</del><ins>Ver</ins> o estado das políticas do usuário

#### [`fof-terms.admin.policies.export-url`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.export-url%22)

> Export URL

```diff
-Exportar URL
+URL de Exportação
```

<del>Exportar </del>URL<ins> de Exportação</ins>

#### [`fof-terms.admin.policies.export-url-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.export-url-help%22)

> Any user with permission "Export all policies data" can access those URLs to download the list of users who accepted this policy. You can find more details about the available options on the &lt;a&gt;extension wiki&lt;/a&gt;.
>

```diff
-Qualquer usuário com permissão "Exportar todos os dados de políticas" pode acessar esses URLs para baixar a lista de usuários que aceitaram esta política. Você pode encontrar mais detalhes sobre as opções disponíveis no <a>wiki da extensão</a>.
+Qualquer usuário com a permissão "Exportar todos os dados de usuários e políticas" pode acessar essas URLs para baixar a lista de usuários que aceitaram esta política. Você encontra mais detalhes sobre as opções disponíveis na <a>wiki da extensão</a>.

```

Qualquer usuário com <ins>a </ins>permissão "Exportar todos os dados de<ins> usuários e</ins> políticas" pode acessar <del>esses</del><ins>essas</ins> URLs para baixar a lista de usuários que aceitaram esta política. Você<del> pode</del> <del>encontrar</del><ins>encontra</ins> mais detalhes sobre as opções disponíveis <del>no</del><ins>na</ins> &lt;a&gt;wiki da extensão&lt;/a&gt;.<br />

#### [`fof-terms.admin.policies.terms-updated-at-placeholder`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.terms-updated-at-placeholder%22)

> YYYY-MM-DD (hh:mm:ss)

```diff
-DD-MM-YYYY (hh:mm:ss)
+AAAA-MM-DD (hh:mm:ss)
```

<del>DD-MM-YYYY</del><ins>AAAA-MM-DD</ins> (hh:mm:ss)

#### [`fof-terms.admin.policies.update-message`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.update-message%22)

> Update Message

```diff
-Atualizar Mensagem
+Mensagem de Atualização
```

<del>Atualizar </del>Mensagem<ins> de Atualização</ins>

#### [`fof-terms.admin.policies.url-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.url-help%22)

> The URL to the page where you can read the terms. Will open in a new tab when clicked.

```diff
-O URL para a página onde você pode ler os termos. Abrirá em uma nova aba quando clicado.
+A URL da página onde é possível ler os termos. Abrirá em uma nova aba ao ser clicada.
```

<del>O</del><ins>A</ins> URL<del> para</del> <del>a</del><ins>da</ins> página onde <del>você</del><ins>é</ins> <del>pode</del><ins>possível</ins> ler os termos. Abrirá em uma nova aba <del>quando</del><ins>ao</ins> <del>clicado.</del><ins>ser clicada.</ins>

#### [`fof-terms.admin.settings.field.date-format-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.settings.field.date-format-help%22)

> You can use any valid &lt;a&gt;Day.js&lt;/a&gt; format. Leave field empty for default.

```diff
-Você pode usar qualquer formato <a>Day.js</a> válido. Deixe o campo vazio por padrão.
+Você pode usar qualquer formato <a>Day.js</a> válido. Deixe o campo vazio para usar o padrão.
```

Você pode usar qualquer formato &lt;a&gt;Day.js&lt;/a&gt; válido. Deixe o campo vazio <del>por</del><ins>para usar o</ins> padrão.

#### [`fof-terms.admin.settings.field.signup-legal-text`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.settings.field.signup-legal-text%22)

> Additional text on signup form

```diff
-Texto adicional no formulário de inscrição
+Texto adicional no formulário de cadastro
```

Texto adicional no formulário de <del>inscrição</del><ins>cadastro</ins>

#### [`fof-terms.forum.accept-modal.accept`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.accept-modal.accept%22)

> Confirm

```diff
-Confirme
+Confirmar
```

#### [`fof-terms.forum.accept-modal.i-accept`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.accept-modal.i-accept%22)

> I accept the new &lt;a&gt;{policy}&lt;/a&gt;

```diff
-Aceito a nova <a>{policy}</a>
+Aceito a nova versão de <a>{policy}</a>
```

Aceito a nova <ins>versão de </ins>&lt;a&gt;{policy}&lt;/a&gt;

#### [`fof-terms.forum.signup.must-accept`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.signup.must-accept%22)

> The {policy} must be accepted.

```diff
-{policy} deve ser aceita.
+É obrigatório aceitar {policy}.
```

#### [`fof-terms.forum.state-modal.title`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.state-modal.title%22)

> Terms accept state for user {username}

```diff
-O estado de aceite dos termos do usuário {username}
+Estado de aceite dos termos do usuário {username}
```

<del>O estado</del><ins>Estado</ins> de aceite dos termos do usuário {username}


### `fof-upload`

#### [`fof-upload.admin.help_texts.client_extension`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.client_extension%22)

> By default Upload will choose a safe file extension based on the MIME type.
> For some file types based around ZIP or binary data this can result in generic extensions being used instead of the expected one.
> Here you can enter a comma-separated list of file extensions that will be kept verbatim.
>

```diff
-Por padrão, o Upload escolherá uma extensão de arquivo segura com base no tipo MIME.
-Para alguns tipos de arquivo baseados em ZIP ou dados binários, isso pode resultar no uso de extensões genéricas em vez da esperada.
-Aqui você pode inserir uma lista separada por vírgulas de extensões de arquivo que serão mantidas na íntegra.
+Por padrão, o Upload escolhe uma extensão de arquivo segura com base no tipo MIME.
+Para alguns tipos de arquivo baseados em ZIP ou em dados binários, isso pode resultar no uso de extensões genéricas em vez da esperada.
+Aqui você pode informar uma lista de extensões de arquivo, separadas por vírgula, que serão mantidas como estão.

```

Por padrão, o Upload <del>escolherá</del><ins>escolhe</ins> uma extensão de arquivo segura com base no tipo MIME.<br />Para alguns tipos de arquivo baseados em ZIP ou<ins> em</ins> dados binários, isso pode resultar no uso de extensões genéricas em vez da esperada.<br />Aqui você pode <del>inserir</del><ins>informar</ins> uma lista<del> separada por vírgulas</del> de extensões de <del>arquivo</del><ins>arquivo, separadas por vírgula,</ins> que serão mantidas <del>na</del><ins>como</ins> <del>íntegra.</del><ins>estão.</ins><br />

#### [`fof-upload.admin.help_texts.composer_buttons`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.composer_buttons%22)

> By default both the media manager button and upload button are visible. You can also choose to display only one button.
>

```diff
-Por padrão, o botão do gerenciador de mídia e o botão de upload estão visíveis. Você também pode optar por exibir apenas um botão.
+Por padrão, o botão do gerenciador de mídia e o botão de upload ficam visíveis. Você também pode optar por exibir apenas um deles.

```

Por padrão, o botão do gerenciador de mídia e o botão de upload <del>estão</del><ins>ficam</ins> visíveis. Você também pode optar por exibir apenas um <del>botão.</del><ins>deles.</ins><br />

#### [`fof-upload.admin.help_texts.disable-download-logging`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.disable-download-logging%22)

> Disable logging every download made by users of your forum. Keeping it enabled allows you to view the number of downloads and other metrics in the nearby future.
>

```diff
-Desative o registro de todos os downloads feitos por usuários do seu fórum. Mantê-lo ativado permite visualizar o número de downloads e outras métricas no futuro próximo.
+Desativa o registro de cada download feito pelos usuários do fórum. Mantê-lo ativado permitirá ver o número de downloads e outras métricas em um futuro próximo.

```

<del>Desative</del><ins>Desativa</ins> o registro de<del> todos</del> <del>os</del><ins>cada</ins> <del>downloads</del><ins>download</ins> <del>feitos</del><ins>feito</ins> <del>por</del><ins>pelos</ins> usuários do<del> seu</del> fórum. Mantê-lo ativado <del>permite</del><ins>permitirá</ins> <del>visualizar</del><ins>ver</ins> o número de downloads e outras métricas <del>no</del><ins>em um</ins> futuro próximo.<br />

#### [`fof-upload.admin.help_texts.disable-hotlink-protection`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.disable-hotlink-protection%22)

> Hotlink protection prevents opening downloads from other sites. Current method requires a csrf token and post id.
>

```diff
-A proteção de Hotlink impede a abertura de downloads de outros sites. O método atual requer um token csrf e um ID de postagem.
+A proteção de hotlink impede a abertura de downloads a partir de outros sites. O método atual requer um token csrf e o ID do post.

```

A proteção de <del>Hotlink</del><ins>hotlink</ins> impede a abertura de downloads<ins> a partir</ins> de outros sites. O método atual requer um token csrf e <del>um</del><ins>o</ins> ID <del>de</del><ins>do</ins> <del>postagem.</del><ins>post.</ins><br />

#### [`fof-upload.admin.help_texts.download_templates`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.download_templates%22)

> Download templates are how uploads are shown on your forum, eg like previews, buttons. Currently available:
>

```diff
-Os modelos de download são como os uploads são mostrados em seu fórum, por exemplo, como visualizações, botões. Disponível atualmente:
+Os modelos de download definem como os uploads são mostrados no fórum, ex.: como prévias ou botões. Disponíveis atualmente:

```

Os modelos de download <del>são</del><ins>definem</ins> como os uploads são mostrados<del> em</del> <del>seu</del><ins>no</ins> fórum,<del> por</del> <del>exemplo,</del><ins>ex.:</ins> como <del>visualizações,</del><ins>prévias ou</ins> botões. <del>Disponível</del><ins>Disponíveis</ins> atualmente:<br />

#### [`fof-upload.admin.help_texts.resize`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.resize%22)

> Choose whether you want to resize your images before they get uploaded. You can choose a maximum width and height, in pixels. The resizing process keeps the aspect ratio of the images.
>

```diff
-Escolha se deseja redimensionar suas imagens antes de serem carregadas. Você pode escolher uma largura e altura máximas, em pixels. O processo de redimensionamento mantém a proporção das imagens.
+Escolha se deseja redimensionar suas imagens antes de serem enviadas. Você pode escolher uma largura e uma altura máximas, em pixels. O redimensionamento mantém a proporção das imagens.

```

Escolha se deseja redimensionar suas imagens antes de serem <del>carregadas.</del><ins>enviadas.</ins> Você pode escolher uma largura e<ins> uma</ins> altura máximas, em pixels. O<del> processo de</del> redimensionamento mantém a proporção das imagens.<br />

#### [`fof-upload.admin.help_texts.watermark`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.help_texts.watermark%22)

> Choose whether images will have a watermark added during upload. Watermarks are added to non-gifs based on your preferences below.
>

```diff
-Escolha se as imagens terão uma marca d'água adicionada durante o upload. As marcas d'água são adicionadas a não-gifs com base nas suas preferências abaixo.
+Escolha se as imagens receberão uma marca d'água durante o upload. As marcas d'água são adicionadas a imagens que não sejam GIF, com base nas preferências abaixo.

```

Escolha se as imagens <del>terão</del><ins>receberão</ins> uma marca d'água<del> adicionada</del> durante o upload. As marcas d'água são adicionadas a <del>não-gifs</del><ins>imagens que não sejam GIF,</ins> com base nas<del> suas</del> preferências abaixo.<br />

#### [`fof-upload.admin.inspect-mime.description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.inspect-mime.description%22)

> FoF Upload uses the &lt;a&gt;PHP Mime Detector&lt;/a&gt; library for common MIME types and PHP Fileinfo as a fallback.
> The MIME value returned by Fileinfo can be different from server to server!
>

```diff
-O FoF Upload usa a biblioteca <a>PHP Mime Detector</a> para tipos MIME comuns e PHP Fileinfo como um substituto.
-O valor MIME retornado por Fileinfo pode ser diferente de servidor para servidor!
+O FoF Upload usa a biblioteca <a>PHP Mime Detector</a> para tipos MIME comuns e o PHP Fileinfo como fallback.
+O valor MIME retornado pelo Fileinfo pode variar de servidor para servidor!

```

O FoF Upload usa a biblioteca &lt;a&gt;PHP Mime Detector&lt;/a&gt; para tipos MIME comuns e <ins>o </ins>PHP Fileinfo como<del> um</del> <del>substituto.</del><ins>fallback.</ins><br />O valor MIME retornado <del>por</del><ins>pelo</ins> Fileinfo pode<del> ser</del> <del>diferente</del><ins>variar</ins> de servidor para servidor!<br />

#### [`fof-upload.admin.inspect-mime.guessed-extension`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.inspect-mime.guessed-extension%22)

> Default file extension (if original is not whitelisted)

```diff
-Extensão de arquivo padrão (se o original não estiver na lista de permissões)
+Extensão de arquivo padrão (se a original não for permitida)
```

Extensão de arquivo padrão (se <del>o</del><ins>a</ins> original não<del> estiver na lista</del> <del>de</del><ins>for</ins> <del>permissões)</del><ins>permitida)</ins>

#### [`fof-upload.admin.inspect-mime.laravel-validation`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.inspect-mime.laravel-validation%22)

> Laravel File Validation

```diff
-Validação do arquivo Laravel
+Validação de Arquivo do Laravel
```

Validação <del>do</del><ins>de</ins> <del>arquivo</del><ins>Arquivo do</ins> Laravel

#### [`fof-upload.admin.inspect-mime.mime-detector`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.inspect-mime.mime-detector%22)

> Mime Detector (primary)

```diff
-Detector MIME (primário)
+Mime Detector (primário)
```

<del>Detector</del><ins>Mime</ins> <del>MIME</del><ins>Detector</ins> (primário)

#### [`fof-upload.admin.inspect-mime.mime-fileinfo`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.inspect-mime.mime-fileinfo%22)

> PHP Fileinfo (fallback)

```diff
-PHP Fileinfo (retorno)
+PHP Fileinfo (fallback)
```

PHP Fileinfo <del>(retorno)</del><ins>(fallback)</ins>

#### [`fof-upload.admin.inspect-mime.no-file-selected`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.inspect-mime.no-file-selected%22)

> No file

```diff
-Nenhum arquivo
+Sem arquivo
```

<del>Nenhum</del><ins>Sem</ins> arquivo

#### [`fof-upload.admin.labels.aws-s3.acl`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.aws-s3.acl%22)

> Access Control List (ACL)

```diff
-Lista de controle de acesso (ACL)
+Lista de Controle de Acesso (ACL)
```

Lista de <del>controle</del><ins>Controle</ins> de <del>acesso</del><ins>Acesso</ins> (ACL)

#### [`fof-upload.admin.labels.client_extension.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.client_extension.title%22)

> User-provided file extensions

```diff
-Extensões de arquivo fornecidas pelo usuário
+Extensões informadas pelo usuário
```

Extensões <del>de arquivo fornecidas</del><ins>informadas</ins> pelo usuário

#### [`fof-upload.admin.labels.composer_buttons.options.media-btn`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.composer_buttons.options.media-btn%22)

> Media manager button only

```diff
-Apenas botão do gerenciador de mídia
+Só o botão do gerenciador de mídia
```

<del>Apenas</del><ins>Só o</ins> botão do gerenciador de mídia

#### [`fof-upload.admin.labels.composer_buttons.options.upload-btn`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.composer_buttons.options.upload-btn%22)

> Upload button only

```diff
-Apenas botão de upload
+Só o botão de upload
```

<del>Apenas</del><ins>Só o</ins> botão de upload

#### [`fof-upload.admin.labels.composer_buttons.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.composer_buttons.title%22)

> Composer buttons

```diff
-Botões do Composer
+Botões do editor
```

Botões do <del>Composer</del><ins>editor</ins>

#### [`fof-upload.admin.labels.disable-download-logging.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.disable-download-logging.title%22)

> Disable logging downloads

```diff
-Desativar logging de downloads
+Desativar o registro de downloads
```

Desativar <del>logging</del><ins>o registro</ins> de downloads

#### [`fof-upload.admin.labels.imgur.client_id`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.imgur.client_id%22)

> Imgur client ID

```diff
-ID do cliente Imgur
+ID de cliente do Imgur
```

ID <del>do</del><ins>de</ins> cliente<ins> do</ins> Imgur

#### [`fof-upload.admin.labels.imgur.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.imgur.title%22)

> Imgur image storage settings

```diff
-Configurações de armazenamento de imagens Imgur
+Configurações do armazenamento Imgur
```

Configurações <del>de</del><ins>do</ins> armazenamento<del> de imagens</del> Imgur

#### [`fof-upload.admin.labels.inspect-mime`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.inspect-mime%22)

> Test file MIME type

```diff
-Tipo MIME do arquivo de teste
+Testar MIME do arquivo
```

<del>Tipo</del><ins>Testar</ins> MIME do arquivo<del> de teste</del>

#### [`fof-upload.admin.labels.local.cdn_url`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.local.cdn_url%22)

> Content Delivery URL (prefixes files)

```diff
-URL de entrega de conteúdo (arquivos de prefixos)
+URL de Entrega de Conteúdo (prefixo dos arquivos)
```

URL de <del>entrega</del><ins>Entrega</ins> de <del>conteúdo</del><ins>Conteúdo</ins> <del>(arquivos</del><ins>(prefixo</ins> <del>de</del><ins>dos</ins> <del>prefixos)</del><ins>arquivos)</ins>

#### [`fof-upload.admin.labels.qiniu.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.qiniu.title%22)

> Qiniu storage settings

```diff
-Configurações de armazenamento Qiniu
+Configurações do armazenamento Qiniu
```

Configurações <del>de</del><ins>do</ins> armazenamento Qiniu

#### [`fof-upload.admin.labels.resize.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.resize.title%22)

> Image resize

```diff
-Redimensionamento da imagem
+Redimensionar imagens
```

#### [`fof-upload.admin.labels.watermark.file`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.watermark.file%22)

> Upload your watermark image

```diff
-Carregue sua imagem watermark
+Envie sua imagem de marca d'água
```

<del>Carregue</del><ins>Envie</ins> sua imagem <del>watermark</del><ins>de marca d'água</ins>

#### [`fof-upload.admin.labels.watermark.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.watermark.title%22)

> Watermark images

```diff
-Imagens de marca d'água
+Marca d'água em imagens
```

#### [`fof-upload.admin.labels.watermark.toggle`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.watermark.toggle%22)

> Watermark images

```diff
-Imagens de marca d'água
+Aplicar marca d'água
```

<del>Imagens de</del><ins>Aplicar</ins> marca d'água

#### [`fof-upload.admin.templates.bbcode-image`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.bbcode-image%22)

> BBCode image template

```diff
-Modelo de imagem BBCode
+Modelo de imagem em BBCode
```

Modelo de imagem <ins>em </ins>BBCode

#### [`fof-upload.admin.templates.bbcode-image_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.bbcode-image_description%22)

> Shows the complete image in-line using BBCode. &lt;strong&gt;You must have flarum/bbcode installed and enabled for this to work.&lt;/strong&gt; No download functionality, no statistics are gathered and hotlink protection is ignored.
>

```diff
-Mostra a imagem completa em linha usando BBCode. <strong>Você deve ter o flarum/bbcode instalado e habilitado para que isso funcione.</strong> Nenhuma funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.
+Mostra a imagem completa no próprio post usando BBCode. <strong>É preciso ter o flarum/bbcode instalado e ativado para que isso funcione.</strong> Sem funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.

```

Mostra a imagem completa <del>em</del><ins>no</ins> <del>linha</del><ins>próprio post</ins> usando BBCode. <del>&lt;strong&gt;Você</del><ins>&lt;strong&gt;É</ins> <del>deve</del><ins>preciso</ins> ter o flarum/bbcode instalado e <del>habilitado</del><ins>ativado</ins> para que isso funcione.&lt;/strong&gt; <del>Nenhuma</del><ins>Sem</ins> funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.<br />

#### [`fof-upload.admin.templates.file`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.file%22)

> Default file download template

```diff
-Modelo de download de arquivo padrão
+Modelo padrão de download de arquivo
```

Modelo <ins>padrão </ins>de download de arquivo<del> padrão</del>

#### [`fof-upload.admin.templates.file_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.file_description%22)

> Shows the file name and some general information. Proxies downloads through php, allowing for statistics gathering and hotlink protection.
>

```diff
-Mostra o nome do arquivo e algumas informações gerais. Proxies de downloads através de php, permitindo coleta de estatísticas e proteção de hotlinks.
+Mostra o nome do arquivo e algumas informações gerais. Os downloads passam pelo PHP, permitindo a coleta de estatísticas e a proteção de hotlink.

```

Mostra o nome do arquivo e algumas informações gerais. <del>Proxies de</del><ins>Os</ins> downloads <del>através</del><ins>passam</ins> <del>de</del><ins>pelo</ins> <del>php,</del><ins>PHP,</ins> permitindo<ins> a</ins> coleta de estatísticas e<ins> a</ins> proteção de <del>hotlinks.</del><ins>hotlink.</ins><br />

#### [`fof-upload.admin.templates.image`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.image%22)

> Default image download template

```diff
-Modelo de download de imagem padrão
+Modelo padrão de download de imagem
```

Modelo <ins>padrão </ins>de download de imagem<del> padrão</del>

#### [`fof-upload.admin.templates.image-preview`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.image-preview%22)

> Complete image preview template

```diff
-Modelo de visualização de imagem completo
+Modelo de prévia da imagem completa
```

Modelo de <del>visualização</del><ins>prévia</ins> <del>de</del><ins>da</ins> imagem <del>completo</del><ins>completa</ins>

#### [`fof-upload.admin.templates.image-preview_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.image-preview_description%22)

> Shows the complete image in-line. No download functionality, no statistics are gathered and hotlink protection is ignored.
>

```diff
-Mostra a imagem completa em linha. Nenhuma funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.
+Mostra a imagem completa no próprio post. Sem funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.

```

Mostra a imagem completa <del>em</del><ins>no</ins> <del>linha.</del><ins>próprio</ins> <del>Nenhuma</del><ins>post. Sem</ins> funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.<br />

#### [`fof-upload.admin.templates.image_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.image_description%22)

> Shows a thumbnail of the image and proxies download through php. Allowing statistics to be gathered and hotlink protection.
>

```diff
-Mostra uma miniatura da imagem e download de proxies através do php. Permitindo a coleta de estatísticas e proteção de hotlink.
+Mostra uma miniatura da imagem, e o download passa pelo PHP, permitindo a coleta de estatísticas e a proteção de hotlink.

```

Mostra uma miniatura da <del>imagem</del><ins>imagem,</ins> e<del> download</del> <del>de</del><ins>o</ins> <del>proxies</del><ins>download</ins> <del>através</del><ins>passa</ins> <del>do</del><ins>pelo</ins> <del>php.</del><ins>PHP,</ins> <del>Permitindo</del><ins>permitindo</ins> a coleta de estatísticas e<ins> a</ins> proteção de hotlink.<br />

#### [`fof-upload.admin.templates.just-url_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.just-url_description%22)

> Inserts just the URL. Rendering can be handled by other extensions with auto-link ability. No download functionality, no statistics are gathered and hotlink protection is ignored.
>

```diff
-Insere apenas o URL. A renderização pode ser feita por outras extensões com capacidade de link automático. Nenhuma funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.
+Insere apenas a URL. A renderização pode ficar a cargo de outras extensões com link automático. Sem funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.

```

Insere apenas <del>o</del><ins>a</ins> URL. A renderização pode <del>ser</del><ins>ficar</ins> <del>feita</del><ins>a</ins> <del>por</del><ins>cargo de</ins> outras extensões com<del> capacidade de</del> link automático. <del>Nenhuma</del><ins>Sem</ins> funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.<br />

#### [`fof-upload.admin.templates.markdown-image`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.markdown-image%22)

> Markdown image template

```diff
-Modelo de imagem Markdown
+Modelo de imagem em Markdown
```

Modelo de imagem <ins>em </ins>Markdown

#### [`fof-upload.admin.templates.markdown-image_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.markdown-image_description%22)

> Shows the complete image in-line using Markdown. &lt;strong&gt;You must have flarum/markdown installed and enabled for this to work.&lt;/strong&gt; No download functionality, no statistics are gathered and hotlink protection is ignored.
>

```diff
-Mostra a imagem completa em linha usando Markdown. <strong>Você deve ter o flarum/markdown instalado e habilitado para que isso funcione.</strong> Nenhuma funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.
+Mostra a imagem completa no próprio post usando Markdown. <strong>É preciso ter o flarum/markdown instalado e ativado para que isso funcione.</strong> Sem funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.

```

Mostra a imagem completa <del>em</del><ins>no</ins> <del>linha</del><ins>próprio post</ins> usando Markdown. <del>&lt;strong&gt;Você</del><ins>&lt;strong&gt;É</ins> <del>deve</del><ins>preciso</ins> ter o flarum/markdown instalado e <del>habilitado</del><ins>ativado</ins> para que isso funcione.&lt;/strong&gt; <del>Nenhuma</del><ins>Sem</ins> funcionalidade de download, nenhuma estatística é coletada e a proteção de hotlink é ignorada.<br />

#### [`fof-upload.admin.templates.text-preview`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.text-preview%22)

> Text preview

```diff
-Visualização de texto
+Prévia de texto
```

<del>Visualização</del><ins>Prévia</ins> de texto

#### [`fof-upload.admin.templates.text-preview_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.templates.text-preview_description%22)

> Inserts a preview (first 5 lines) of the text file, with an option to expand to reveal the full contents of the file.
>

```diff
-Insere uma visualização (primeiras 5 linhas) do arquivo de texto, com a opção de expandir para revelar todo o conteúdo do arquivo.
+Insere uma prévia (primeiras 5 linhas) do arquivo de texto, com a opção de expandir para revelar todo o conteúdo do arquivo.

```

Insere uma <del>visualização</del><ins>prévia</ins> (primeiras 5 linhas) do arquivo de texto, com a opção de expandir para revelar todo o conteúdo do arquivo.<br />

#### [`fof-upload.admin.upload_methods.aws-s3`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.upload_methods.aws-s3%22)

> S3 or Compatible

```diff
-S3/Compatível
+S3 ou Compatível
```

#### [`fof-upload.api.upload_errors.forbidden_type`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.forbidden_type%22)

> Uploading files of this type is not allowed.

```diff
-O upload de arquivos deste tipo não é permitido.
+O envio de arquivos deste tipo não é permitido.
```

O <del>upload</del><ins>envio</ins> de arquivos deste tipo não é permitido.

#### [`fof-upload.forum.buttons.user_uploads`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.buttons.user_uploads%22)

> User uploads

```diff
-Upload do usuário
+Uploads do usuário
```

<del>Upload</del><ins>Uploads</ins> do usuário

#### [`fof-upload.forum.media_manager`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.media_manager%22)

> Media manager

```diff
-Gerente de mídia
+Gerenciador de mídia
```

<del>Gerente</del><ins>Gerenciador</ins> de mídia

#### [`fof-upload.forum.states.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.states.loading%22)

> Uploading

```diff
-Realizando Upload
+Enviando
```

#### [`fof-upload.forum.text_preview.collapse`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.text_preview.collapse%22)

> Collapse preview

```diff
-Recolher visualização
+Recolher prévia
```

Recolher <del>visualização</del><ins>prévia</ins>

#### [`fof-upload.forum.text_preview.error`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.text_preview.error%22)

> Error previewing file. It may have been deleted, or the provided file ID is invalid.
>

```diff
-Erro ao visualizar o arquivo. Ele pode ter sido excluído ou o ID do arquivo fornecido é inválido.
+Erro ao gerar a prévia do arquivo. Ele pode ter sido excluído ou o ID de arquivo informado é inválido.

```

Erro ao <del>visualizar</del><ins>gerar</ins> <del>o</del><ins>a prévia do</ins> arquivo. Ele pode ter sido excluído ou o ID <del>do</del><ins>de</ins> arquivo <del>fornecido</del><ins>informado</ins> é inválido.<br />

#### [`fof-upload.forum.text_preview.expand`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.text_preview.expand%22)

> Expand preview

```diff
-Expandir visualização
+Expandir prévia
```

Expandir <del>visualização</del><ins>prévia</ins>

#### [`fof-upload.forum.text_preview.no_snippet`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.text_preview.no_snippet%22)

> &lt;no preview snippet available&gt;

```diff
-<nenhum snippet de visualização disponível>
+<nenhum trecho de prévia disponível>
```

&lt;nenhum <del>snippet</del><ins>trecho</ins> de <del>visualização</del><ins>prévia</ins> disponível&gt;

#### [`fof-upload.forum.text_preview.no_snippet_preview`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.text_preview.no_snippet_preview%22)

> &lt;preview will appear here after posting&gt;

```diff
-<visualização aparecerá aqui após a postagem>
+<prévia aparecerá aqui após postar>
```

<del>&lt;visualização</del><ins>&lt;prévia</ins> aparecerá aqui após<del> a</del> <del>postagem&gt;</del><ins>postar&gt;</ins>

#### [`fof-upload.forum.validation.max_size`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.validation.max_size%22)

> Uploads over {max} kb are not accepted.

```diff
-Carregamentos acima de {max} kb não são aceitos.
+Uploads acima de {max} kb não são aceitos.
```

<del>Carregamentos</del><ins>Uploads</ins> acima de {max} kb não são aceitos.


### `fof-user-bio`

#### [`fof-user-bio.admin.permission.editAny`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.admin.permission.editAny%22)

> Edit any bio

```diff
-Edite qualquer bio
+Editar qualquer bio
```

<del>Edite</del><ins>Editar</ins> qualquer bio

#### [`fof-user-bio.forum.userbioPlaceholderOtherUser`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.forum.userbioPlaceholderOtherUser%22)

> Write a bio for {username}

```diff
-Escreva uma biografia para {username}
+Escreva uma bio para {username}
```

Escreva uma <del>biografia</del><ins>bio</ins> para {username}


### `fof-user-directory`

#### [`fof-user-directory.admin.permissions.view_user_directory`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.admin.permissions.view_user_directory%22)

> View user directory

```diff
-Ver Diretório de Usuários
+Ver o diretório de usuários
```

Ver <del>Diretório</del><ins>o diretório</ins> de <del>Usuários</del><ins>usuários</ins>

#### [`fof-user-directory.admin.settings.default-sort`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.admin.settings.default-sort%22)

> Default sort

```diff
-Classificação Padrão
+Ordenação padrão
```

#### [`fof-user-directory.admin.settings.disable-global-search-source`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.admin.settings.disable-global-search-source%22)

> Do not add User Directory to the Flarum global search field

```diff
-Não adicione o diretório de usuários ao campo de pesquisa global do Flarum
+Não adicionar o Diretório de Usuários ao campo de busca global do Flarum
```

Não <del>adicione</del><ins>adicionar</ins> o <del>diretório</del><ins>Diretório</ins> de <del>usuários</del><ins>Usuários</ins> ao campo de <del>pesquisa</del><ins>busca</ins> global do Flarum

#### [`fof-user-directory.admin.settings.link`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.admin.settings.link%22)

> Add link on homepage for users able to see the directory

```diff
-Adicionar link na página inicial para usuários autorizados de ver o diretório
+Adicionar link na página inicial para usuários que podem ver o diretório
```

Adicionar link na página inicial para usuários <del>autorizados</del><ins>que</ins> <del>de</del><ins>podem</ins> ver o diretório

#### [`fof-user-directory.admin.settings.use-small-cards`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.admin.settings.use-small-cards%22)

> Use small user cards

```diff
-Use cartões de usuário pequenos
+Usar cartões de usuário pequenos
```

<del>Use</del><ins>Usar</ins> cartões de usuário pequenos

#### [`fof-user-directory.forum.page.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.forum.page.empty_text%22)

> We could not find any user matching your search.

```diff
-Não foi possível encontrar nenhum usuário que corresponda à sua pesquisa.
+Não encontramos nenhum usuário para a sua busca.
```

Não <del>foi possível encontrar</del><ins>encontramos</ins> nenhum usuário<del> que</del> <del>corresponda</del><ins>para</ins> <del>à</del><ins>a</ins> sua <del>pesquisa.</del><ins>busca.</ins>

#### [`fof-user-directory.forum.page.usercard.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.forum.page.usercard.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
-{count, plural, one { {count} discussão} other {{count} discussões}}
+{count, plural, one {# discussão} other {# discussões}}
```

{count, plural, one <del>{ {count}</del><ins>{#</ins> discussão} other <del>{{count}</del><ins>{#</ins> discussões}}

#### [`fof-user-directory.forum.page.usercard.post-count`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.forum.page.usercard.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
-{count, plural, one { {count} postagem} other {{count} postagens}}
+{count, plural, one {# post} other {# posts}}
```

{count, plural, one <del>{ {count}</del><ins>{#</ins> <del>postagem}</del><ins>post}</ins> other <del>{{count}</del><ins>{#</ins> <del>postagens}}</del><ins>posts}}</ins>

#### [`fof-user-directory.forum.search.field.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.forum.search.field.placeholder%22)

> Search all users

```diff
-Pesquisar todos os usuários
+Buscar todos os usuários
```

<del>Pesquisar</del><ins>Buscar</ins> todos os usuários

#### [`fof-user-directory.forum.search.users_heading`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.forum.search.users_heading%22)

> Search all users for "{query}"

```diff
-Pesquise todos os usuários por "{query}"
+Buscar "{query}" em todos os usuários
```

<del>Pesquise</del><ins>Buscar "{query}" em</ins> todos os usuários<del> por "{query}"</del>

#### [`fof-user-directory.lib.sort.least_discussions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.least_discussions%22)

> Least discussions

```diff
-Menos Discussões
+Menos discussões
```

Menos <del>Discussões</del><ins>discussões</ins>

#### [`fof-user-directory.lib.sort.most_discussions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.most_discussions%22)

> Most discussions

```diff
-Mais Discussões
+Mais discussões
```

Mais <del>Discussões</del><ins>discussões</ins>

#### [`fof-user-directory.lib.sort.newest`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.newest%22)

> Newest

```diff
-Mais Recente
+Mais novos
```

Mais <del>Recente</del><ins>novos</ins>

#### [`fof-user-directory.lib.sort.not_specified`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.not_specified%22)

> Use Flarum default

```diff
-Usar padrão Flarum
+Usar o padrão do Flarum
```

Usar <ins>o </ins>padrão<ins> do</ins> Flarum

#### [`fof-user-directory.lib.sort.oldest`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.oldest%22)

> Oldest

```diff
-Mais Antigo
+Mais antigos
```

Mais <del>Antigo</del><ins>antigos</ins>

#### [`fof-user-directory.lib.sort.username_az`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.username_az%22)

> Username (a-z)

```diff
-Usuário (a-z)
+Nome de usuário (a-z)
```

<del>Usuário</del><ins>Nome de usuário</ins> (a-z)

#### [`fof-user-directory.lib.sort.username_za`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.username_za%22)

> Username (z-a)

```diff
-Usuário (z-a)
+Nome de usuário (z-a)
```

<del>Usuário</del><ins>Nome de usuário</ins> (z-a)


### `validation`

#### [`validation.attributes.name_plural`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.attributes.name_plural%22)

> plural name

```diff
-nome plural
+nome no plural
```

nome <ins>no </ins>plural

#### [`validation.attributes.name_singular`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.attributes.name_singular%22)

> singular name

```diff
-nome singular
+nome no singular
```

nome <ins>no </ins>singular

#### [`validation.exists`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.exists%22)

> The selected :attribute is invalid.

```diff
-O :attribute selecionado ja existe.
+O valor selecionado para :attribute é inválido.
```

O <del>:attribute</del><ins>valor</ins> selecionado <del>ja</del><ins>para</ins> <del>existe.</del><ins>:attribute é inválido.</ins>

#### [`validation.filled`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.filled%22)

> The :attribute field must have a value.

```diff
-O campo :attribute é exigido.
+O campo :attribute deve ter um valor.
```

O campo :attribute <del>é</del><ins>deve</ins> <del>exigido.</del><ins>ter um valor.</ins>

#### [`validation.in`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.in%22)

> The selected :attribute is invalid.

```diff
-O :attribute selecionado é inválido.
+O valor selecionado para :attribute é inválido.
```

O <del>:attribute</del><ins>valor</ins> selecionado<ins> para :attribute</ins> é inválido.

#### [`validation.not_in`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.not_in%22)

> The selected :attribute is invalid.

```diff
-O :attribute selecionado é inválido.
+O valor selecionado para :attribute é inválido.
```

O <del>:attribute</del><ins>valor</ins> selecionado<ins> para :attribute</ins> é inválido.

#### [`validation.required`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required%22)

> The :attribute field is required.

```diff
-O campo :attribute é exigido.
+O campo :attribute é obrigatório.
```

O campo :attribute é <del>exigido.</del><ins>obrigatório.</ins>

#### [`validation.required_if`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required_if%22)

> The :attribute field is required when :other is :value.

```diff
-O campo :attribute é exigido quando :other é :value.
+O campo :attribute é obrigatório quando :other for :value.
```

O campo :attribute é <del>exigido</del><ins>obrigatório</ins> quando :other <del>é</del><ins>for</ins> :value.

#### [`validation.required_unless`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required_unless%22)

> The :attribute field is required unless :other is in :values.

```diff
-O campo :attribute é obrigatório a menos que :other esteja em :values.
+O campo :attribute é obrigatório, a menos que :other esteja em :values.
```

O campo :attribute é <del>obrigatório</del><ins>obrigatório,</ins> a menos que :other esteja em :values.

#### [`validation.required_with`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required_with%22)

> The :attribute field is required when :values is present.

```diff
-O campo :attribute é exigido quando :values está presente.
+O campo :attribute é obrigatório quando :values estiver presente.
```

O campo :attribute é <del>exigido</del><ins>obrigatório</ins> quando :values <del>está</del><ins>estiver</ins> presente.

#### [`validation.required_with_all`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required_with_all%22)

> The :attribute field is required when :values are present.

```diff
-O campo :attribute é exigido quando :values está presente.
+O campo :attribute é obrigatório quando :values estiverem presentes.
```

O campo :attribute é <del>exigido</del><ins>obrigatório</ins> quando :values <del>está</del><ins>estiverem</ins> <del>presente.</del><ins>presentes.</ins>

#### [`validation.required_without`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required_without%22)

> The :attribute field is required when :values is not present.

```diff
-O campo :attribute é exigido quando :values não está presente.
+O campo :attribute é obrigatório quando :values não estiver presente.
```

O campo :attribute é <del>exigido</del><ins>obrigatório</ins> quando :values não <del>está</del><ins>estiver</ins> presente.

#### [`validation.required_without_all`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.required_without_all%22)

> The :attribute field is required when none of :values are present.

```diff
-O campo :attribute é exigido quando nenhum dos :values está presente.
+O campo :attribute é obrigatório quando nenhum de :values estiver presente.
```

O campo :attribute é <del>exigido</del><ins>obrigatório</ins> quando nenhum <del>dos</del><ins>de</ins> :values <del>está</del><ins>estiver</ins> presente.

#### [`validation.unique`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.unique%22)

> The :attribute has already been taken.

```diff
-O :attribute já existe.
+O valor de :attribute já está em uso.
```

O <ins>valor de </ins>:attribute já <del>existe.</del><ins>está em uso.</ins>

#### [`validation.uploaded`](https://weblate.rob006.net/translate/flarum2/validation/pt_BR/?q=context%3A%3D%22validation.uploaded%22)

> The :attribute failed to upload.

```diff
-O :attribute falhou ao fazer upload.
+Falha no upload de :attribute.
```


## Missing translations

These strings are translated only in `pt_BR`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `pt_BR`.


### `core` (missing)

#### [`core.admin.announcements.about`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.about%22)

> Latest news and announcements pulled from the official Flarum community at discuss.flarum.org.

```diff
+Últimas notícias e anúncios extraídos da comunidade oficial do Flarum em discuss.flarum.org.
```

#### [`core.admin.announcements.comments_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.comments_label%22)

> {count, plural, one {# comment} other {# comments}}

```diff
+{count, plural, one {# comentário} other {# comentários}}
```

#### [`core.admin.announcements.description`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.description%22)

> Latest news and announcements from the Flarum Team.

```diff
+Últimas notícias e anúncios da equipe Flarum.
```

#### [`core.admin.announcements.empty`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.empty%22)

> No announcements found.

```diff
+Nenhum anúncio encontrado.
```

#### [`core.admin.announcements.hide`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.hide%22)

> Hide announcements

```diff
+Ocultar anúncios
```

#### [`core.admin.announcements.load_error`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.load_error%22)

> Could not load announcements. Please try again later.

```diff
+Não foi possível carregar os anúncios. Tente novamente mais tarde.
```

#### [`core.admin.announcements.read_more`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.read_more%22)

> Read more

```diff
+Ler mais
```

#### [`core.admin.announcements.refresh`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.refresh%22)

> Refresh announcements

```diff
+Atualizar anúncios
```

#### [`core.admin.announcements.retry`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.retry%22)

> Try again

```diff
+Tentar novamente
```

#### [`core.admin.announcements.show`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.show%22)

> Show announcements

```diff
+Mostrar anúncios
```

#### [`core.admin.announcements.title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.title%22)

> Announcements

```diff
+Anúncios
```

#### [`core.admin.announcements.view_all`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.announcements.view_all%22)

> View all on discuss.flarum.org

```diff
+Ver todos em discuss.flarum.org
```

#### [`core.admin.basics.abandoned_extensions_heading`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_heading%22)

> Abandoned Extensions

```diff
+Extensões Abandonadas
```

#### [`core.admin.basics.abandoned_extensions_notify_admins_label`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_notify_admins_label%22)

> Email admins when a newly abandoned extension is detected during the weekly check

```diff
+Notificar admins por e-mail quando uma extensão recém-abandonada for detectada na verificação semanal
```

#### [`core.admin.basics.abandoned_extensions_sync_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_button%22)

> Check Now

```diff
+Verificar Agora
```

#### [`core.admin.basics.abandoned_extensions_sync_error`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_error%22)

> Failed to fetch the abandoned extensions list. Please try again later.

```diff
+Falha ao buscar a lista de extensões abandonadas. Tente novamente mais tarde.
```

#### [`core.admin.basics.abandoned_extensions_sync_success`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_sync_success%22)

> Abandoned extensions list updated. {count} matching installed extension(s) found.

```diff
+Lista de extensões abandonadas atualizada. Extensões instaladas na lista: {count}.
```

#### [`core.admin.basics.abandoned_extensions_text`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.basics.abandoned_extensions_text%22)

> Flarum maintains a &lt;a&gt;community list of abandoned extensions&lt;/a&gt;. When an installed extension appears on the list, it will be flagged in the admin panel.

```diff
+O Flarum mantém uma <a>lista comunitária de extensões abandonadas</a>. Quando uma extensão instalada aparece na lista, ela é sinalizada no painel admin.
```

#### [`core.admin.dashboard.info_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.info_button%22)

> System Info

```diff
+Info do Sistema
```

#### [`core.admin.dashboard.info_modal.copy_button`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_button%22)

> Copy to Clipboard

```diff
+Copiar
```

#### [`core.admin.dashboard.info_modal.copy_error`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_error%22)

> Failed to copy to clipboard

```diff
+Falha ao copiar
```

#### [`core.admin.dashboard.info_modal.copy_success`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.info_modal.copy_success%22)

> System information copied to clipboard

```diff
+Informações do sistema copiadas
```

#### [`core.admin.dashboard.info_modal.title`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.dashboard.info_modal.title%22)

> System Information

```diff
+Informações do Sistema
```

#### [`core.admin.extension.abandoned_no_replacement`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.abandoned_no_replacement%22)

> This extension is no longer maintained by its author and may not receive updates.

```diff
+Esta extensão não é mais mantida pelo autor e pode não receber atualizações.
```

#### [`core.admin.extension.abandoned_with_replacement`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.abandoned_with_replacement%22)

> This extension has been replaced by {replacement}. Consider migrating to the replacement package.

```diff
+Esta extensão foi substituída por {replacement}. Considere migrar para o pacote substituto.
```

#### [`core.admin.extension.deprecated`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.deprecated%22)

> Deprecated

```diff
+Obsoleta
```

#### [`core.admin.extension.replaced`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.extension.replaced%22)

> Replaced

```diff
+Substituída
```

#### [`core.admin.nav.categories.forum-widget`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.admin.nav.categories.forum-widget%22)

> Forum Widgets

```diff
+Widgets do Fórum
```

#### [`core.email.abandoned_extensions.subject`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.email.abandoned_extensions.subject%22)

> Action required: abandoned extension(s) detected

```diff
+Ação necessária: extensão(ões) abandonada(s) detectada(s)
```

#### [`core.lib.connection_restored_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.connection_restored_message%22)

> Your connection has been restored.

```diff
+Sua conexão foi restabelecida.
```

#### [`core.lib.error.network_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.network_message%22)

> Something seems to be wrong with your connection. Please check your network and try again.

```diff
+Parece haver algo errado com sua conexão. Verifique sua rede e tente novamente.
```

#### [`core.lib.error.offline_message`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.lib.error.offline_message%22)

> You appear to be offline. Please check your connection and try again.

```diff
+Você parece estar offline. Verifique sua conexão e tente novamente.
```

#### [`core.views.error.method_not_allowed`](https://weblate.rob006.net/translate/flarum2/core/pt_BR/?q=context%3A%3D%22core.views.error.method_not_allowed%22)

> This page does not support that request method.

```diff
+Esta página não suporta esse método de requisição.
```


### `flarum-audit` (missing)

#### [`flarum-audit.admin.header.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.header.title%22)

> Audit

```diff
+Auditoria
```

#### [`flarum-audit.admin.limitedSettings.configure`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.configure%22)

> Configure

```diff
+Configurar
```

#### [`flarum-audit.admin.limitedSettings.introduction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.introduction%22)

> Configure what users with the limited access permissions can see

```diff
+Configure o que os usuários com a permissão de acesso limitado podem ver
```

#### [`flarum-audit.admin.limitedSettings.requiresExtension`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.requiresExtension%22)

> Requires extension {extension}

```diff
+Requer a extensão {extension}
```

#### [`flarum-audit.admin.limitedSettings.title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.limitedSettings.title%22)

> Limited access settings

```diff
+Configurações de acesso limitado
```

#### [`flarum-audit.admin.permissions.view`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.permissions.view%22)

> View audit log

```diff
+Ver log de auditoria
```

#### [`flarum-audit.admin.permissions.viewLimited`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.permissions.viewLimited%22)

> View limited audit log

```diff
+Ver log de auditoria limitado
```

#### [`flarum-audit.admin.settings.limitedIpAddress`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.admin.settings.limitedIpAddress%22)

> View IP Address

```diff
+Ver Endereço IP
```

#### [`flarum-audit.forum.link.actor-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.link.actor-audit%22)

> Audit log (user as actor)

```diff
+Log de auditoria (usuário como autor)
```

#### [`flarum-audit.forum.link.all-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.link.all-audit%22)

> Audit log

```diff
+Log de auditoria
```

#### [`flarum-audit.forum.link.discussion-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.link.discussion-audit%22)

> Audit log

```diff
+Log de auditoria
```

#### [`flarum-audit.forum.link.user-audit`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.link.user-audit%22)

> Audit log (account edits)

```diff
+Log de auditoria (edições da conta)
```

#### [`flarum-audit.forum.modal.actor-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.modal.actor-title%22)

> Actor Audit Log

```diff
+Log de Auditoria do Autor
```

#### [`flarum-audit.forum.modal.all-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.modal.all-title%22)

> Audit Log

```diff
+Log de Auditoria
```

#### [`flarum-audit.forum.modal.discussion-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.modal.discussion-title%22)

> Discussion Audit Log

```diff
+Log de Auditoria da Discussão
```

#### [`flarum-audit.forum.modal.user-title`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.forum.modal.user-title%22)

> User Audit Log

```diff
+Log de Auditoria do Usuário
```

#### [`flarum-audit.lib.browser.audit_log_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.audit_log_cleared%22)

> Cleared {deleted\_count} entries from the audit logs

```diff
+Limpou {deleted_count} entradas dos logs de auditoria
```

#### [`flarum-audit.lib.browser.cache_cleared`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.cache_cleared%22)

> Manually cleared the cache

```diff
+Limpou o cache manualmente
```

#### [`flarum-audit.lib.browser.client.access_token`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.client.access_token%22)

> Access token

```diff
+Token de acesso
```

#### [`flarum-audit.lib.browser.client.api_key`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.client.api_key%22)

> API key

```diff
+Chave de API
```

#### [`flarum-audit.lib.browser.client.cli`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.client.cli%22)

> Command line

```diff
+Linha de comando
```

#### [`flarum-audit.lib.browser.client.session`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.client.session%22)

> Web session

```diff
+Sessão web
```

#### [`flarum-audit.lib.browser.client.unknown`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.client.unknown%22)

> Unknown client

```diff
+Cliente desconhecido
```

#### [`flarum-audit.lib.browser.controls.filterAction`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterAction%22)

> Show logs of the same action

```diff
+Mostrar logs da mesma ação
```

#### [`flarum-audit.lib.browser.controls.filterActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterActor%22)

> Show logs by this actor

```diff
+Mostrar logs deste autor
```

#### [`flarum-audit.lib.browser.controls.filterClient`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterClient%22)

> Show logs by this client type

```diff
+Mostrar logs deste tipo de cliente
```

#### [`flarum-audit.lib.browser.controls.filterDiscussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterDiscussion%22)

> Show logs affecting the same discussion

```diff
+Mostrar logs que afetam a mesma discussão
```

#### [`flarum-audit.lib.browser.controls.filterIp`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterIp%22)

> Show logs by this IP

```diff
+Mostrar logs deste IP
```

#### [`flarum-audit.lib.browser.controls.filterUser`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.filterUser%22)

> Show logs affecting the same user

```diff
+Mostrar logs que afetam o mesmo usuário
```

#### [`flarum-audit.lib.browser.controls.hideRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.hideRaw%22)

> Hide raw log

```diff
+Ocultar log bruto
```

#### [`flarum-audit.lib.browser.controls.showRaw`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.controls.showRaw%22)

> Show raw log

```diff
+Mostrar log bruto
```

#### [`flarum-audit.lib.browser.deletedResource.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.discussion%22)

> Discussion #{id}

```diff
+Discussão #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.group`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.group%22)

> Group #{id}

```diff
+Grupo #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.post%22)

> Post #{id}

```diff
+Post #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.tag`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.tag%22)

> Tag #{id}

```diff
+Tag #{id}
```

#### [`flarum-audit.lib.browser.deletedResource.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.deletedResource.user%22)

> User #{id}

```diff
+Usuário #{id}
```

#### [`flarum-audit.lib.browser.discussion.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.created%22)

> Started discussion {discussion}

```diff
+Iniciou a discussão {discussion}
```

#### [`flarum-audit.lib.browser.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.deleted%22)

> Deleted discussion {discussion}

```diff
+Excluiu a discussão {discussion}
```

#### [`flarum-audit.lib.browser.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.hidden%22)

> Hid discussion {discussion}

```diff
+Ocultou a discussão {discussion}
```

#### [`flarum-audit.lib.browser.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.renamed%22)

> Renamed discussion from {old\_title} to {new\_title}

```diff
+Renomeou a discussão de {old_title} para {new_title}
```

#### [`flarum-audit.lib.browser.discussion.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.restored%22)

> Restored discussion {discussion}

```diff
+Restaurou a discussão {discussion}
```

#### [`flarum-audit.lib.browser.empty`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.empty%22)

> No results

```diff
+Sem resultados
```

#### [`flarum-audit.lib.browser.extension.disabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.extension.disabled%22)

> Disabled extension {package}

```diff
+Desativou a extensão {package}
```

#### [`flarum-audit.lib.browser.extension.enabled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.extension.enabled%22)

> Enabled extension {package}

```diff
+Ativou a extensão {package}
```

#### [`flarum-audit.lib.browser.extension.uninstalled`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.extension.uninstalled%22)

> Uninstalled extension {package}

```diff
+Desinstalou a extensão {package}
```

#### [`flarum-audit.lib.browser.filterApply`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filterApply%22)

> Apply

```diff
+Aplicar
```

#### [`flarum-audit.lib.browser.filterClear`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filterClear%22)

> Clear filter

```diff
+Limpar filtro
```

#### [`flarum-audit.lib.browser.filterPlaceholder`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filterPlaceholder%22)

> Filter logs

```diff
+Filtrar logs
```

#### [`flarum-audit.lib.browser.filters.action`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filters.action%22)

> The type of action, e.g. action:post.created.

```diff
+O tipo de ação, ex.: action:post.created.
```

#### [`flarum-audit.lib.browser.filters.actor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filters.actor%22)

> Who performed the action. Use actor:guest for system or unauthenticated actions.

```diff
+Quem executou a ação. Use actor:guest para ações do sistema ou não autenticadas.
```

#### [`flarum-audit.lib.browser.filters.client`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filters.client%22)

> How the request was made.

```diff
+Como a requisição foi feita.
```

#### [`flarum-audit.lib.browser.filters.discussion`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filters.discussion%22)

> Actions affecting a specific discussion, by ID.

```diff
+Ações que afetam uma discussão específica, pelo ID.
```

#### [`flarum-audit.lib.browser.filters.ip`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filters.ip%22)

> The IP address the action came from.

```diff
+O endereço IP de origem da ação.
```

#### [`flarum-audit.lib.browser.filters.user`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filters.user%22)

> The user the action affected, by username.

```diff
+O usuário afetado pela ação, pelo nome de usuário.
```

#### [`flarum-audit.lib.browser.filtersHint`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.filtersHint%22)

> Filters:

```diff
+Filtros:
```

#### [`flarum-audit.lib.browser.genericResource.comment`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.comment%22)

> Comment

```diff
+Comentário
```

#### [`flarum-audit.lib.browser.genericResource.post`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.genericResource.post%22)

> Post

```diff
+Post
```

#### [`flarum-audit.lib.browser.help.multiple`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.help.multiple%22)

> Combine values with commas to match any of them, e.g. action:post.created,post.deleted

```diff
+Combine valores com vírgulas para corresponder a qualquer um deles, ex.: action:post.created,post.deleted
```

#### [`flarum-audit.lib.browser.help.negate`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.help.negate%22)

> Prefix a filter with a minus to exclude matches, e.g. -client:cli

```diff
+Prefixe um filtro com um sinal de menos para excluir correspondências, ex.: -client:cli
```

#### [`flarum-audit.lib.browser.help.toggle`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.help.toggle%22)

> Search help

```diff
+Ajuda da busca
```

#### [`flarum-audit.lib.browser.loadMore`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.loadMore%22)

> Load more

```diff
+Carregar mais
```

#### [`flarum-audit.lib.browser.noReason`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.noReason%22)

> (no reason)

```diff
+(sem motivo)
```

#### [`flarum-audit.lib.browser.noValue`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.noValue%22)

> (no value)

```diff
+(sem valor)
```

#### [`flarum-audit.lib.browser.permissionGroup.everyone`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.everyone%22)

> =&gt; core.admin.permissions\_controls.everyone\_button

```diff
+=> core.admin.permissions_controls.everyone_button
```

#### [`flarum-audit.lib.browser.permissionGroup.members`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.permissionGroup.members%22)

> =&gt; core.admin.permissions\_controls.members\_button

```diff
+=> core.admin.permissions_controls.members_button
```

#### [`flarum-audit.lib.browser.permission_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.permission_changed%22)

> Edited permission {permission} from {old\_groups} to {new\_groups}

```diff
+Editou a permissão {permission} de {old_groups} para {new_groups}
```

#### [`flarum-audit.lib.browser.post.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.post.created%22)

> Created a {post} in {discussion}

```diff
+Criou um {post} em {discussion}
```

#### [`flarum-audit.lib.browser.post.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.post.deleted%22)

> Deleted {postuser}'s {post} in {discussion}

```diff
+Excluiu o {post} de {postuser} em {discussion}
```

#### [`flarum-audit.lib.browser.post.hidden`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.post.hidden%22)

> Hid {postuser}'s {post} in {discussion}

```diff
+Ocultou o {post} de {postuser} em {discussion}
```

#### [`flarum-audit.lib.browser.post.restored`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.post.restored%22)

> Restored {postuser}'s {post} in {discussion}

```diff
+Restaurou o {post} de {postuser} em {discussion}
```

#### [`flarum-audit.lib.browser.post.revised`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.post.revised%22)

> Revised {postuser}'s {post} in {discussion}

```diff
+Revisou o {post} de {postuser} em {discussion}
```

#### [`flarum-audit.lib.browser.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.refresh%22)

> Refresh

```diff
+Atualizar
```

#### [`flarum-audit.lib.browser.setting_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed%22)

> Edited setting {key}

```diff
+Editou a configuração {key}
```

#### [`flarum-audit.lib.browser.setting_changed_with_values`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.setting_changed_with_values%22)

> Edited setting {key} from {old\_value} to {new\_value}

```diff
+Editou a configuração {key} de {old_value} para {new_value}
```

#### [`flarum-audit.lib.browser.user.activated`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated%22)

> Activated {username}'s account manually

```diff
+Ativou a conta de {username} manualmente
```

#### [`flarum-audit.lib.browser.user.activated_with_email`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.activated_with_email%22)

> Activated {username}'s account via confirmation link

```diff
+Ativou a conta de {username} pelo link de confirmação
```

#### [`flarum-audit.lib.browser.user.avatar_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_changed%22)

> Changed {username}'s avatar

```diff
+Alterou o avatar de {username}
```

#### [`flarum-audit.lib.browser.user.avatar_removed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.avatar_removed%22)

> Removed {username}'s avatar

```diff
+Removeu o avatar de {username}
```

#### [`flarum-audit.lib.browser.user.created`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.created%22)

> Created {username}'s account

```diff
+Criou a conta de {username}
```

#### [`flarum-audit.lib.browser.user.deleted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.deleted%22)

> Deleted {username}

```diff
+Excluiu {username}
```

#### [`flarum-audit.lib.browser.user.email_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_change_requested%22)

> Requested to change {username}'s email to {new\_email}

```diff
+Solicitou a alteração do e-mail de {username} para {new_email}
```

#### [`flarum-audit.lib.browser.user.email_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.email_changed%22)

> Changed {username}'s email from {old\_email} to {new\_email}

```diff
+Alterou o e-mail de {username} de {old_email} para {new_email}
```

#### [`flarum-audit.lib.browser.user.groups_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.groups_changed%22)

> Changed {username}'s groups from {old\_groups} to {new\_groups}

```diff
+Alterou os grupos de {username} de {old_groups} para {new_groups}
```

#### [`flarum-audit.lib.browser.user.logged_in`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in%22)

> Logged in {username} account

```diff
+Entrou na conta de {username}
```

#### [`flarum-audit.lib.browser.user.logged_in_with_provider`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_in_with_provider%22)

> Logged in {username} account using {provider}

```diff
+Entrou na conta de {username} usando {provider}
```

#### [`flarum-audit.lib.browser.user.logged_out`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.logged_out%22)

> Logged out {username} account

```diff
+Saiu da conta de {username}
```

#### [`flarum-audit.lib.browser.user.password_change_requested`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_change_requested%22)

> Requested to change {username}'s password

```diff
+Solicitou a alteração da senha de {username}
```

#### [`flarum-audit.lib.browser.user.password_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_changed%22)

> Changed {username}'s password

```diff
+Alterou a senha de {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted%22)

> Requested a password reset for {username}

```diff
+Solicitou a redefinição de senha de {username}
```

#### [`flarum-audit.lib.browser.user.password_reset_attempted_unmatched`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.password_reset_attempted_unmatched%22)

> Requested a password reset for {email} (no matching account)

```diff
+Solicitou a redefinição de senha de {email} (nenhuma conta correspondente)
```

#### [`flarum-audit.lib.browser.user.provider_connected`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.provider_connected%22)

> Connected provider {provider} to {username} account

```diff
+Conectou o provedor {provider} à conta de {username}
```

#### [`flarum-audit.lib.browser.user.username_changed`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.username_changed%22)

> Changed {username}'s username from {old\_username} to {new\_username}

```diff
+Alterou o nome de usuário de {username} de {old_username} para {new_username}
```

#### [`flarum-audit.lib.browser.withoutActor`](https://weblate.rob006.net/translate/flarum2/flarum-audit/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.withoutActor%22)

> =&gt; core.group.guest

```diff
+=> core.group.guest
```


### `flarum-extension-manager` (missing)

#### [`flarum-extension-manager.admin.auth_config.add_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_label%22)

> New authentication method

```diff
+Novo método de autenticação
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.host_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.host_label%22)

> Host

```diff
+Host
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.submit_button%22)

> Submit

```diff
+Enviar
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.token_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.token_label%22)

> Token

```diff
+Token
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.type_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.type_label%22)

> Type

```diff
+Tipo
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.unchanged_token_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.unchanged_token_placeholder%22)

> (unchanged)

```diff
+(inalterado)
```

#### [`flarum-extension-manager.admin.auth_config.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_confirmation%22)

> Are you sure you want to delete this authentication method?

```diff
+Tem certeza de que deseja excluir este método de autenticação?
```

#### [`flarum-extension-manager.admin.auth_config.delete_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_label%22)

> Delete authentication method

```diff
+Excluir método de autenticação
```

#### [`flarum-extension-manager.admin.auth_config.edit_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.edit_label%22)

> Edit authentication method

```diff
+Editar método de autenticação
```

#### [`flarum-extension-manager.admin.auth_config.fields.host`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.fields.host%22)

> Host

```diff
+Host
```

#### [`flarum-extension-manager.admin.auth_config.fields.token`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.fields.token%22)

> Token

```diff
+Token
```

#### [`flarum-extension-manager.admin.auth_config.no_auth_methods_configured`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.no_auth_methods_configured%22)

> No authentication methods configured. This is an optional advanced feature to allow installing from private repositories.

```diff
+Nenhum método de autenticação configurado. Este é um recurso avançado opcional para permitir a instalação de repositórios privados.
```

#### [`flarum-extension-manager.admin.auth_config.remove_button_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.remove_button_label%22)

> Remove authentication method

```diff
+Remover método de autenticação
```

#### [`flarum-extension-manager.admin.auth_config.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.title%22)

> Authentication Methods

```diff
+Métodos de Autenticação
```

#### [`flarum-extension-manager.admin.auth_config.types.bearer`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.bearer%22)

> HTTP Bearer

```diff
+HTTP Bearer
```

#### [`flarum-extension-manager.admin.auth_config.types.github-oauth`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.github-oauth%22)

> GitHub OAuth

```diff
+GitHub OAuth
```

#### [`flarum-extension-manager.admin.auth_config.types.gitlab-oauth`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.gitlab-oauth%22)

> GitLab OAuth

```diff
+GitLab OAuth
```

#### [`flarum-extension-manager.admin.auth_config.types.gitlab-token`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.gitlab-token%22)

> GitLab Token

```diff
+GitLab Token
```

#### [`flarum-extension-manager.admin.composer.add_repository_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.add_repository_label%22)

> Add Repository

```diff
+Adicionar Repositório
```

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
+Tem certeza de que deseja excluir este repositório? Todas as extensões instaladas a partir deste repositório serão removidas.
```

#### [`flarum-extension-manager.admin.composer.delete_repository_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_label%22)

> Delete repository

```diff
+Excluir repositório
```

#### [`flarum-extension-manager.admin.composer.edit_repository_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.edit_repository_label%22)

> Edit repository

```diff
+Editar repositório
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.help%22)

> The type of packages allowed to be installed. Do not change this unless you know what you are doing.

```diff
+O tipo de pacotes permitidos para instalação. Não altere isso a menos que saiba o que está fazendo.
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.label%22)

> Minimum Stability

```diff
+Estabilidade Mínima
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.alpha`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.alpha%22)

> Alpha

```diff
+Alpha
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.beta`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.beta%22)

> Beta

```diff
+Beta
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.dev`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.dev%22)

> Dev

```diff
+Dev
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.rc`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.rc%22)

> Release Candidate

```diff
+Release Candidate
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.stable`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.stable%22)

> Stable (Recommended)

```diff
+Stable (Recomendado)
```

#### [`flarum-extension-manager.admin.composer.repositories.add_modal.name_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.add_modal.name_label%22)

> Name

```diff
+Nome
```

#### [`flarum-extension-manager.admin.composer.repositories.add_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.add_modal.submit_button%22)

> Submit

```diff
+Enviar
```

#### [`flarum-extension-manager.admin.composer.repositories.add_modal.type_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.add_modal.type_label%22)

> Type

```diff
+Tipo
```

#### [`flarum-extension-manager.admin.composer.repositories.add_modal.url`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.add_modal.url%22)

> URL

```diff
+URL
```

#### [`flarum-extension-manager.admin.composer.repositories.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.help%22)

> Add additional repositories to install packages from. This is an advanced feature, do not add repositories that are not trusted, as they can be used to execute malicious code on your server.
>

```diff
+Adicione repositórios adicionais para instalar pacotes. Este é um recurso avançado, não adicione repositórios não confiáveis, pois eles podem ser usados para executar código malicioso em seu servidor.
+
```

#### [`flarum-extension-manager.admin.composer.repositories.label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.label%22)

> Repositories

```diff
+Repositórios
```

#### [`flarum-extension-manager.admin.composer.repositories.types.composer`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.composer%22)

> composer

```diff
+composer
```

#### [`flarum-extension-manager.admin.composer.repositories.types.path`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.path%22)

> path

```diff
+path
```

#### [`flarum-extension-manager.admin.composer.repositories.types.vcs`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.vcs%22)

> vcs

```diff
+vcs
```

#### [`flarum-extension-manager.admin.composer.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.composer.title%22)

> Composer

```diff
+Composer
```

#### [`flarum-extension-manager.admin.exceptions.composer_command_failure`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.composer_command_failure%22)

> Failed to execute. Check the composer logs in storage/logs/composer.

```diff
+Falha na execução. Verifique os logs do composer em storage/logs/composer.
```

#### [`flarum-extension-manager.admin.exceptions.extension_already_installed`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.extension_already_installed%22)

> Extension is already installed.

```diff
+A extensão já está instalada.
```

#### [`flarum-extension-manager.admin.exceptions.extension_not_directly_dependency`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.extension_not_directly_dependency%22)

> Extension is installed as a dependency of another extension, it cannot be directly removed.

```diff
+A extensão está instalada como dependência de outra extensão e não pode ser removida diretamente.
```

#### [`flarum-extension-manager.admin.exceptions.extension_not_installed`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.extension_not_installed%22)

> Extension not found.

```diff
+Extensão não encontrada.
```

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extension_incompatible_with_instance`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extension_incompatible_with_instance%22)

> The extension is most likely incompatible with your current Flarum instance.

```diff
+A extensão provavelmente é incompatível com sua instância atual do Flarum.
```

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extension_not_found`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extension_not_found%22)

> The extension was not found or does not exist.

```diff
+A extensão não foi encontrada ou não existe.
```

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major%22)

> Some installed extensions are not compatible with the newest major release. Please wait until the extensions are updated to be compatible by the authors, or remove them before proceeding.
>

```diff
+Algumas extensões instaladas não são compatíveis com a nova versão major. Aguarde até que os autores atualizem as extensões para serem compatíveis, ou remova-as antes de prosseguir.
+
```

#### [`flarum-extension-manager.admin.extensions.check_why_it_failed_updating`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.check_why_it_failed_updating%22)

> Show why it did not update to the latest.

```diff
+Mostrar por que não atualizou para a mais recente.
```

#### [`flarum-extension-manager.admin.extensions.install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install%22)

> Install a new extension

```diff
+Instalar uma nova extensão
```

#### [`flarum-extension-manager.admin.extensions.proceed`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.proceed%22)

> Proceed

```diff
+Prosseguir
```

#### [`flarum-extension-manager.admin.extensions.remove`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.remove%22)

> Uninstall

```diff
+Desinstalar
```

#### [`flarum-extension-manager.admin.extensions.successful_install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.successful_install%22)

> {extension} was installed successfully, redirecting..

```diff
+{extension} foi instalada com sucesso, redirecionando..
```

#### [`flarum-extension-manager.admin.extensions.successful_remove`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.successful_remove%22)

> Extension removed successfully.

```diff
+Extensão removida com sucesso.
```

#### [`flarum-extension-manager.admin.extensions.successful_update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.successful_update%22)

> {extension} was updated successfully, redirecting..

```diff
+{extension} foi atualizada com sucesso, redirecionando..
```

#### [`flarum-extension-manager.admin.extensions.update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.update%22)

> Update

```diff
+Atualizar
```

#### [`flarum-extension-manager.admin.extensions.update_hard_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.update_hard_label%22)

> Hard update

```diff
+Atualização forçada
```

#### [`flarum-extension-manager.admin.extensions.update_soft_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.update_soft_label%22)

> Soft update

```diff
+Atualização leve
```

#### [`flarum-extension-manager.admin.file_permissions`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.file_permissions%22)

> The extension manager requires read and write permissions on the following files and directories: composer.json, composer.lock, vendor, storage, storage/.composer
>

```diff
+O gerenciador de extensões requer permissões de leitura e escrita nos seguintes arquivos e diretórios: composer.json, composer.lock, vendor, storage, storage/.composer
+
```

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
+Atualizações major do Flarum não são compatíveis com versões anteriores, ou seja, algumas das extensões instaladas e modificações feitas manualmente podem não funcionar com esta nova versão. Faça um backup do banco de dados e dos arquivos antes de prosseguir.
+
```

#### [`flarum-extension-manager.admin.major_updater.dry_run`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run%22)

> Dry Run

```diff
+Simulação
```

#### [`flarum-extension-manager.admin.major_updater.dry_run_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run_help%22)

> A dry run emulates the update to see if your current setup can safely update, this does not mean that your manual made custom modifications will work in the newer version.

```diff
+Uma simulação emula a atualização para ver se sua configuração atual pode ser atualizada com segurança. Isso não significa que suas modificações personalizadas funcionarão na nova versão.
```

#### [`flarum-extension-manager.admin.major_updater.failure.desc`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.failure.desc%22)

> The last major update failed, some installed extensions are not compatible with the new major release.

```diff
+A última atualização major falhou; algumas extensões instaladas não são compatíveis com a nova versão major.
```

#### [`flarum-extension-manager.admin.major_updater.failure.why`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.failure.why%22)

> Find out more

```diff
+Saiba mais
```

#### [`flarum-extension-manager.admin.major_updater.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.title%22)

> Flarum {version} Major Update Available

```diff
+Atualização Major do Flarum {version} Disponível
```

#### [`flarum-extension-manager.admin.major_updater.update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.update%22)

> Update

```diff
+Atualizar
```

#### [`flarum-extension-manager.admin.sections.queue.columns.details`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.details%22)

> Details

```diff
+Detalhes
```

#### [`flarum-extension-manager.admin.sections.queue.columns.elapsed_time`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.elapsed_time%22)

> Completed in

```diff
+Concluída em
```

#### [`flarum-extension-manager.admin.sections.queue.columns.operation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.operation%22)

> Operation

```diff
+Operação
```

#### [`flarum-extension-manager.admin.sections.queue.columns.package`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.package%22)

> Package

```diff
+Pacote
```

#### [`flarum-extension-manager.admin.sections.queue.columns.peak_memory_used`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.peak_memory_used%22)

> Peak Memory Usage

```diff
+Pico de Memória
```

#### [`flarum-extension-manager.admin.sections.queue.columns.status`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.status%22)

> Status

```diff
+Status
```

#### [`flarum-extension-manager.admin.sections.queue.none`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.none%22)

> There are no tasks yet.

```diff
+Ainda não há tarefas.
```

#### [`flarum-extension-manager.admin.sections.queue.operations.extension_install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.extension_install%22)

> Install extension

```diff
+Instalar extensão
```

#### [`flarum-extension-manager.admin.sections.queue.operations.extension_remove`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.extension_remove%22)

> Remove extension

```diff
+Remover extensão
```

#### [`flarum-extension-manager.admin.sections.queue.operations.extension_update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.extension_update%22)

> Update extension

```diff
+Atualizar extensão
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_check`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_check%22)

> Check for updates

```diff
+Verificar atualizações
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_global`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_global%22)

> Update all software packages

```diff
+Atualizar todos os pacotes
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_major`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_major%22)

> Major update

```diff
+Atualização major
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_minor`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_minor%22)

> Minor update

```diff
+Atualização minor
```

#### [`flarum-extension-manager.admin.sections.queue.operations.why_not`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.why_not%22)

> Analyze why a package cannot be updated

```diff
+Analisar por que um pacote não pode ser atualizado
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.cause_unknown`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.cause_unknown%22)

> Unknown

```diff
+Desconhecida
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.command`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.command%22)

> Composer Command

```diff
+Comando do Composer
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.guessed_cause`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.guessed_cause%22)

> Cause

```diff
+Causa
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.output`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.output%22)

> Output

```diff
+Saída
```

#### [`flarum-extension-manager.admin.sections.queue.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.refresh%22)

> Refresh tasks list

```diff
+Atualizar lista de tarefas
```

#### [`flarum-extension-manager.admin.sections.queue.statuses.failure`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.statuses.failure%22)

> Failed

```diff
+Falhou
```

#### [`flarum-extension-manager.admin.sections.queue.statuses.pending`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.statuses.pending%22)

> Pending

```diff
+Pendente
```

#### [`flarum-extension-manager.admin.sections.queue.statuses.running`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.statuses.running%22)

> Running

```diff
+Executando
```

#### [`flarum-extension-manager.admin.sections.queue.statuses.success`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.statuses.success%22)

> Success

```diff
+Sucesso
```

#### [`flarum-extension-manager.admin.sections.queue.task_just_started`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.task_just_started%22)

> Task just started

```diff
+Tarefa iniciada agora
```

#### [`flarum-extension-manager.admin.sections.queue.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.title%22)

> Queue

```diff
+Fila
```

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
+Tenha cuidado com quem você dá acesso à área administrativa; o gerenciador de extensões pode ser usado por agentes maliciosos para instalar pacotes que levem a brechas de segurança.
```

#### [`flarum-extension-manager.admin.settings.debug_mode_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.settings.debug_mode_warning%22)

> You are running in debug mode, the extension manager cannot properly install and update local development packages. Please use the command line interface instead for such purposes.

```diff
+Você está executando em modo debug; o gerenciador de extensões não consegue instalar e atualizar pacotes de desenvolvimento local corretamente. Use a interface de linha de comando para essa finalidade.
```

#### [`flarum-extension-manager.admin.settings.queue_jobs`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.settings.queue_jobs%22)

> Run operations in the background queue

```diff
+Executar operações na fila em segundo plano
```

#### [`flarum-extension-manager.admin.settings.task_retention_days`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.settings.task_retention_days%22)

> Task retention days

```diff
+Dias de retenção de tarefas
```

#### [`flarum-extension-manager.admin.settings.task_retention_days_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.settings.task_retention_days_help%22)

> The number of days to keep completed tasks in the database. Tasks older than this will be deleted. Set to 0 to keep all tasks.
>

```diff
+O número de dias para manter tarefas concluídas no banco de dados. Tarefas mais antigas que isso serão excluídas. Defina 0 para manter todas as tarefas.
+
```

#### [`flarum-extension-manager.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.settings.title%22)

> =&gt; core.ref.settings

```diff
+=> core.ref.settings
```

#### [`flarum-extension-manager.admin.update_successful`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.update_successful%22)

> Flarum successfully updated.

```diff
+Flarum atualizado com sucesso.
```

#### [`flarum-extension-manager.admin.updater.check_for_updates`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.check_for_updates%22)

> Check for updates

```diff
+Verificar atualizações
```

#### [`flarum-extension-manager.admin.updater.flarum`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.flarum%22)

> Flarum Core

```diff
+Flarum Core
```

#### [`flarum-extension-manager.admin.updater.global_update_successful`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.global_update_successful%22)

> Successfully updated all packages.

```diff
+Todos os pacotes foram atualizados.
```

#### [`flarum-extension-manager.admin.updater.last_update_checked_at`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.last_update_checked_at%22)

> Last Update Check: 

```diff
+Última Verificação: 
```

#### [`flarum-extension-manager.admin.updater.run_global_update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.run_global_update%22)

> Run Global Update

```diff
+Executar Atualização Global
```

#### [`flarum-extension-manager.admin.updater.updater_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_help%22)

> Runs a check for new extension and Flarum updates.

```diff
+Verifica novas atualizações de extensões e do Flarum.
```

#### [`flarum-extension-manager.admin.updater.updater_title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_title%22)

> Updates

```diff
+Atualizações
```

#### [`flarum-extension-manager.admin.why_not_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/pt_BR/?q=context%3A%3D%22flarum-extension-manager.admin.why_not_modal.title%22)

> Why Won't it Update

```diff
+Por que Não Atualiza
```


### `flarum-gdpr` (missing)

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.column`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.column%22)

> Column

```diff
+Coluna
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.extension`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.extension%22)

> Extension

```diff
+Extensão
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.no`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.no%22)

> No

```diff
+Não
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.nullable`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.nullable%22)

> Nullable

```diff
+Anulável
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii%22)

> PII

```diff
+PII
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip%22)

> This column is considered personally identifiable information and will be redacted in anonymized contexts (e.g. anonymized event payloads).

```diff
+Esta coluna é considerada informação pessoal identificável e será omitida em contextos anonimizados (ex.: payloads de eventos anonimizados).
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export%22)

> Redacted on export

```diff
+Omitido na exportação
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip%22)

> This column's value is blanked (set to null) when generating a user data export. The column still appears in the export with a null value.

```diff
+O valor desta coluna é esvaziado (definido como nulo) ao gerar uma exportação dos dados do usuário. A coluna ainda aparece na exportação com valor nulo.
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.type`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.type%22)

> Type

```diff
+Tipo
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.yes`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.yes%22)

> Yes

```diff
+Sim
```

#### [`flarum-gdpr.forum.process_erasure.confirmed_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.confirmed_at%22)

> Confirmed: {date}

```diff
+Confirmada: {date}
```

#### [`flarum-gdpr.forum.process_erasure.eligible_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.eligible_at%22)

> Eligible for auto-processing: {date}

```diff
+Elegível para processamento automático: {date}
```

#### [`flarum-gdpr.forum.process_erasure.requested_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.requested_at%22)

> Requested: {date}

```diff
+Solicitada: {date}
```

#### [`flarum-gdpr.lib.data.default_user_action`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.default_user_action%22)

> No action, handled by default user table data handling.

```diff
+Sem ação, coberto pelo tratamento padrão da tabela de usuários.
```


### `flarum-likes` (missing)

#### [`flarum-likes.forum.post_likes.load_more_button`](https://weblate.rob006.net/translate/flarum2/flarum-likes/pt_BR/?q=context%3A%3D%22flarum-likes.forum.post_likes.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
+=> core.ref.load_more
```


### `flarum-mentions` (missing)

#### [`flarum-mentions.forum.mentioned_by.load_more_button`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.mentioned_by.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
+=> core.ref.load_more
```

#### [`flarum-mentions.forum.mentioned_by.title`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.mentioned_by.title%22)

> Replies to this post

```diff
+Respostas a este post
```

#### [`flarum-mentions.forum.post.mentioned_by_more_text`](https://weblate.rob006.net/translate/flarum2/flarum-mentions/pt_BR/?q=context%3A%3D%22flarum-mentions.forum.post.mentioned_by_more_text%22)

> {count} more replies.

```diff
+Mais {count} respostas.
```


### `flarum-sticky` (missing)

#### [`flarum-sticky.admin.settings.pin_sticky_on_all_discussions_label`](https://weblate.rob006.net/translate/flarum2/flarum-sticky/pt_BR/?q=context%3A%3D%22flarum-sticky.admin.settings.pin_sticky_on_all_discussions_label%22)

> Pin stickied discussions on the All Discussions page

```diff
+Manter discussões fixadas no topo da página Todas as Discussões
```


### `flarum-tags` (missing)

#### [`flarum-tags.admin.settings.button_text`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.settings.button_text%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
+=> flarum-tags.ref.choose_tags
```

#### [`flarum-tags.admin.tags.edit_tag_label`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.admin.tags.edit_tag_label%22)

> Edit Tag {tag}

```diff
+Editar Tag {tag}
```

#### [`flarum-tags.lib.tag_selection_modal.bypass_requirements`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.bypass_requirements%22)

> Bypass tag requirements

```diff
+Ignorar requisitos de tags
```

#### [`flarum-tags.lib.tag_selection_modal.choose_primary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_primary_placeholder%22)

> {count, plural, one {Choose a primary tag} other {Choose # primary tags}}

```diff
+{count, plural, one {Escolha uma tag primária} other {Escolha # tags primárias}}
```

#### [`flarum-tags.lib.tag_selection_modal.choose_secondary_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_secondary_placeholder%22)

> =&gt; flarum-tags.ref.choose\_tags\_placeholder

```diff
+=> flarum-tags.ref.choose_tags_placeholder
```

#### [`flarum-tags.lib.tag_selection_modal.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.choose_tags_placeholder%22)

> =&gt; flarum-tags.ref.choose\_tags\_placeholder

```diff
+=> flarum-tags.ref.choose_tags_placeholder
```

#### [`flarum-tags.lib.tag_selection_modal.submit_button`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.submit_button%22)

> =&gt; core.ref.okay

```diff
+=> core.ref.okay
```

#### [`flarum-tags.lib.tag_selection_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.lib.tag_selection_modal.title%22)

> =&gt; flarum-tags.ref.choose\_tags

```diff
+=> flarum-tags.ref.choose_tags
```

#### [`flarum-tags.ref.choose_tags`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.ref.choose_tags%22)

> Choose Tags

```diff
+Escolher Tags
```

#### [`flarum-tags.ref.choose_tags_placeholder`](https://weblate.rob006.net/translate/flarum2/flarum-tags/pt_BR/?q=context%3A%3D%22flarum-tags.ref.choose_tags_placeholder%22)

> {count, plural, one {Choose 1 more tag} other {Choose # more tags}}

```diff
+{count, plural, one {Escolha mais 1 tag} other {Escolha mais # tags}}
```


### `fof-amazon-affiliation` (missing)

#### [`fof-amazon-affiliation.admin.settings.field.keep-existing-tag`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.keep-existing-tag%22)

> Keep Amazon Affiliate Tags from original links instead of replacing

```diff
+Manter as tags de afiliado da Amazon dos links originais em vez de substituí-las
```

#### [`fof-amazon-affiliation.admin.settings.field.keep-existing-tag-help`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.keep-existing-tag-help%22)

> By default any existing tag in the original url is replaced by the tag you define below.

```diff
+Por padrão, qualquer tag existente na URL original é substituída pela tag que você definir abaixo.
```

#### [`fof-amazon-affiliation.admin.settings.field.remove-tag-if-unhandled`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.remove-tag-if-unhandled%22)

> Remove Amazon Affiliate Tags on Amazon links that aren't covered

```diff
+Remover as tags de afiliado da Amazon em links da Amazon não cobertos
```

#### [`fof-amazon-affiliation.admin.settings.field.remove-tag-if-unhandled-help`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.remove-tag-if-unhandled-help%22)

> By default links that aren't covered are left as-it, including their tag if any.

```diff
+Por padrão, links não cobertos são mantidos como estão, inclusive com a tag, se houver.
```

#### [`fof-amazon-affiliation.admin.settings.field.tag`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.tag%22)

> {name} (amazon.{domain})

```diff
+{name} (amazon.{domain})
```

#### [`fof-amazon-affiliation.admin.settings.field.tag-placeholder`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.field.tag-placeholder%22)

> Leave empty to not cover those links

```diff
+Deixe em branco para não cobrir esses links
```

#### [`fof-amazon-affiliation.admin.settings.title.modal`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.title.modal%22)

> Amazon Affiliation Settings

```diff
+Configurações de Afiliação Amazon
```

#### [`fof-amazon-affiliation.admin.settings.title.tags`](https://weblate.rob006.net/translate/flarum2/fof-amazon-affiliation/pt_BR/?q=context%3A%3D%22fof-amazon-affiliation.admin.settings.title.tags%22)

> Affiliate Tags

```diff
+Tags de Afiliado
```


### `fof-analytics` (missing)

#### [`fof-analytics.admin.matomo-widget.title`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.matomo-widget.title%22)

> Matomo

```diff
+Matomo
```

#### [`fof-analytics.admin.popup.field.googleGTMCode`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.googleGTMCode%22)

> GTM code ID (optional)

```diff
+ID do código GTM (opcional)
```

#### [`fof-analytics.admin.popup.field.googleTrackingCode`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.googleTrackingCode%22)

> Tracking Code ID

```diff
+ID de Rastreamento
```

#### [`fof-analytics.admin.popup.field.optTrackingCode`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.optTrackingCode%22)

> Optimize Tracking Code (optional)

```diff
+Código de Rastreamento do Optimize (opcional)
```

#### [`fof-analytics.admin.popup.field.piwikAliasUrl`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikAliasUrl%22)

> Alias URL

```diff
+URL de Alias
```

#### [`fof-analytics.admin.popup.field.piwikAuthToken`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikAuthToken%22)

> Authentication Token

```diff
+Token de Autenticação
```

#### [`fof-analytics.admin.popup.field.piwikHideAliasUrl`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikHideAliasUrl%22)

> In the "Outlinks" report, hide clicks to known alias URLs

```diff
+No relatório "Links de saída", ocultar cliques em URLs de alias conhecidas
```

#### [`fof-analytics.admin.popup.field.piwikPrependDomain`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikPrependDomain%22)

> Prepend the site domain to the page title when tracking

```diff
+Prefixar o título da página com o domínio do site ao rastrear
```

#### [`fof-analytics.admin.popup.field.piwikSiteId`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikSiteId%22)

> Site ID

```diff
+ID do Site
```

#### [`fof-analytics.admin.popup.field.piwikTrackAccounts`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikTrackAccounts%22)

> Track individual user accounts

```diff
+Rastrear contas de usuário individuais
```

#### [`fof-analytics.admin.popup.field.piwikTrackSubdomain`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikTrackSubdomain%22)

> Track visitors across all subdomains of Flarum

```diff
+Rastrear visitantes em todos os subdomínios do Flarum
```

#### [`fof-analytics.admin.popup.field.piwikUrl`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.piwikUrl%22)

> Matomo domain or URL

```diff
+Domínio ou URL do Matomo
```

#### [`fof-analytics.admin.popup.field.statusGoogle`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.statusGoogle%22)

> Enable Google Analytics (UA/GA4)

```diff
+Ativar Google Analytics (UA/GA4)
```

#### [`fof-analytics.admin.popup.field.statusPiwik`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.field.statusPiwik%22)

> Enable Matomo

```diff
+Ativar Matomo
```

#### [`fof-analytics.admin.popup.placeholder.piwikAuthToken`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.placeholder.piwikAuthToken%22)

> Fill this token to enable a Matomo stats widget in the admin panel.
> You can find it in Settings &gt; Personal &gt; API Authentication Token.
>

```diff
+Preencha este token para ativar um widget de estatísticas do Matomo no painel admin.
+Você o encontra em Configurações > Pessoal > Token de Autenticação da API.
+
```

#### [`fof-analytics.admin.popup.section.googleAnalytics`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.section.googleAnalytics%22)

> Google Analytics

```diff
+Google Analytics
```

#### [`fof-analytics.admin.popup.section.piwik`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.section.piwik%22)

> Matomo

```diff
+Matomo
```

#### [`fof-analytics.admin.popup.trackAccounts.email`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.trackAccounts.email%22)

> Track by email

```diff
+Rastrear por e-mail
```

#### [`fof-analytics.admin.popup.trackAccounts.none`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.trackAccounts.none%22)

> Do not track

```diff
+Não rastrear
```

#### [`fof-analytics.admin.popup.trackAccounts.username`](https://weblate.rob006.net/translate/flarum2/fof-analytics/pt_BR/?q=context%3A%3D%22fof-analytics.admin.popup.trackAccounts.username%22)

> Track by username

```diff
+Rastrear por nome de usuário
```


### `fof-anti-spam` (missing)

#### [`flarum-audit.lib.browser.registration.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.registration.blocked%22)

> Blocked registration for {username} ({email}) from {ip}

```diff
+Bloqueou o cadastro de {username} ({email}) vindo de {ip}
```

#### [`flarum-audit.lib.browser.user.marked_as_spammer`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.user.marked_as_spammer%22)

> Marked {username} as a spammer

```diff
+Marcou {username} como spammer
```

#### [`fof-anti-spam.admin.blocked_registrations.attempted-at`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.attempted-at%22)

> Attempted at

```diff
+Tentativa em
```

#### [`fof-anti-spam.admin.blocked_registrations.button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.button%22)

> Blocked Registrations

```diff
+Cadastros Bloqueados
```

#### [`fof-anti-spam.admin.blocked_registrations.delete_entry`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.delete_entry%22)

> Delete entry

```diff
+Excluir entrada
```

#### [`fof-anti-spam.admin.blocked_registrations.email`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.email%22)

> Email Address

```diff
+Endereço de E-mail
```

#### [`fof-anti-spam.admin.blocked_registrations.help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.help%22)

> This page shows all registrations that have been blocked by the StopForumSpam service. You can view the details of each registration, and if you wish, you can delete the record from the database.
>

```diff
+Esta página mostra todos os cadastros bloqueados pelo serviço StopForumSpam. Você pode ver os detalhes de cada cadastro e, se quiser, excluir o registro do banco de dados.
+
```

#### [`fof-anti-spam.admin.blocked_registrations.ip`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.ip%22)

> IP Address

```diff
+Endereço IP
```

#### [`fof-anti-spam.admin.blocked_registrations.login-provider`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.login-provider%22)

> Login Provider

```diff
+Provedor de Login
```

#### [`fof-anti-spam.admin.blocked_registrations.login-provider-data`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.login-provider-data%22)

> Login Provider Data

```diff
+Dados do Provedor de Login
```

#### [`fof-anti-spam.admin.blocked_registrations.no-records`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.no-records%22)

> No blocked registrations found.

```diff
+Nenhum cadastro bloqueado encontrado.
```

#### [`fof-anti-spam.admin.blocked_registrations.sfs-data`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.sfs-data%22)

> StopForumSpam Data

```diff
+Dados do StopForumSpam
```

#### [`fof-anti-spam.admin.blocked_registrations.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.title%22)

> Blocked Registrations

```diff
+Cadastros Bloqueados
```

#### [`fof-anti-spam.admin.blocked_registrations.username`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.blocked_registrations.username%22)

> Username

```diff
+Nome de usuário
```

#### [`fof-anti-spam.admin.permissions.spamblock_users_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.permissions.spamblock_users_label%22)

> Mark user as spammer

```diff
+Marcar usuário como spammer
```

#### [`fof-anti-spam.admin.settings.button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.button%22)

> Settings

```diff
+Configurações
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be soft deleted instead.

```diff
+Isso excluirá permanentemente todas as discussões iniciadas por este usuário. Quando desativado, as discussões serão apenas ocultadas.
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_discussions_label%22)

> Delete discussions

```diff
+Excluir discussões
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_posts_help%22)

> This will permanently delete all posts made by this user. When disabled, posts will be soft deleted instead.

```diff
+Isso excluirá permanentemente todos os posts feitos por este usuário. Quando desativado, os posts serão apenas ocultados.
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_posts_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_posts_label%22)

> Delete posts

```diff
+Excluir posts
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_user_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_user_help%22)

> This will permanently delete the user. When disabled, the user will be suspended instead.

```diff
+Isso excluirá o usuário permanentemente. Quando desativado, o usuário será suspenso.
```

#### [`fof-anti-spam.admin.settings.default-actions.delete_user_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.delete_user_label%22)

> Delete user

```diff
+Excluir usuário
```

#### [`fof-anti-spam.admin.settings.default-actions.heading`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.heading%22)

> Default moderation actions

```diff
+Ações de moderação padrão
```

#### [`fof-anti-spam.admin.settings.default-actions.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.introduction%22)

> When a user is marked as a spammer, moderators are able to choose from various actions on how to deal with the particular use case. These settings allow you to pre-set the actions you'll normally take, to speed up the process, but also allowing for variations as needed.

```diff
+Quando um usuário é marcado como spammer, os moderadores podem escolher entre várias ações para lidar com cada caso. Estas configurações permitem predefinir as ações que você costuma tomar, para agilizar o processo, sem impedir variações quando necessário.
```

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_help%22)

> This will move all discussions started by this user to the tag(s) you specified. Clear the tag selection to leave discussions in their original tag(s). Has no effect if the 'Delete discussions' option is enabled.

```diff
+Isso moverá todas as discussões iniciadas por este usuário para a(s) tag(s) especificada(s). Limpe a seleção de tags para manter as discussões nas tags originais. Não tem efeito se a opção "Excluir discussões" estiver ativada.
```

#### [`fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.default-actions.move_discussions_to_tags_label%22)

> Move discussions to tag(s)

```diff
+Mover discussões para tag(s)
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_instructions_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_instructions_text%22)

> &lt;register&gt;Sign up for StopForumSpam&lt;/register&gt;. Then you will need to &lt;key&gt;obtain an API key&lt;/key&gt;.

```diff
+<register>Cadastre-se no StopForumSpam</register>. Depois, você precisará <key>obter uma chave de API</key>.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_label%22)

> API Key

```diff
+Chave de API
```

#### [`fof-anti-spam.admin.settings.stopforumspam.api_key_text`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.api_key_text%22)

> You have the option to report spammers to StopForumSpam in order to keep the greater forum community spam free.

```diff
+Você tem a opção de denunciar spammers ao StopForumSpam para ajudar a manter toda a comunidade de fóruns livre de spam.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.confidence_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.confidence_help%22)

> The confidence score is a reasonably good indicator that the field under test would result in unwanted activity. Set your confidence level as a percentage. If the field is equal or above this figure, the registration will be blocked, regardless on the 'frequency' test above.

```diff
+A pontuação de confiança é um indicador razoavelmente bom de que o campo testado resultaria em atividade indesejada. Defina seu nível de confiança como uma porcentagem. Se o campo for igual ou superior a esse valor, o cadastro será bloqueado, independentemente do teste de "frequência" acima.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.confidence_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.confidence_label%22)

> Confidence

```diff
+Confiança
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_hash_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_hash_help%22)

> Pass a MD5 hash of the email address should you wish to not pass the email address itself. This method bypasses all blacklists, normalisation and obfuscation bypass checks.

```diff
+Envia um hash MD5 do endereço de e-mail caso você não queira enviar o próprio endereço. Este método ignora todas as verificações de lista de bloqueio, normalização e contorno de ofuscação.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_hash_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_hash_label%22)

> Use hashed email address

```diff
+Usar hash do endereço de e-mail
```

#### [`fof-anti-spam.admin.settings.stopforumspam.email_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.email_label%22)

> Email Spam Check

```diff
+Verificação de Spam por E-mail
```

#### [`fof-anti-spam.admin.settings.stopforumspam.frequency_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.frequency_help%22)

> The number of spam reports between all enabled checks that will trip the spam filter.
> Ex: If the email has 1 hit, and the ip has 2 hits, there will be 3 hits in total. If the threshold is set to 3 or less we will prevent the registration.
>

```diff
+O número de denúncias de spam, somando todas as verificações ativadas, que acionará o filtro de spam.
+Ex.: se o e-mail tiver 1 ocorrência e o IP tiver 2, haverá 3 ocorrências no total. Se o limite for 3 ou menos, o cadastro será impedido.
+
```

#### [`fof-anti-spam.admin.settings.stopforumspam.frequency_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.frequency_label%22)

> Threshold

```diff
+Limite
```

#### [`fof-anti-spam.admin.settings.stopforumspam.introduction`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.introduction%22)

> Checks new user registrations against the &lt;a&gt;StopForumSpam&lt;/a&gt; database. If either the &lt;code&gt;confidence&lt;/code&gt; or &lt;code&gt;frequency&lt;/code&gt; thresholds are reached, the user is prevented from completing their registration on your forum.
>
> SSO register via &lt;code&gt;fof/oauth&lt;/code&gt; and &lt;code&gt;fof/passport&lt;/code&gt; is also supported. Other SSO providers should work, but are untested.
>

```diff
+Verifica os novos cadastros de usuários no banco de dados do <a>StopForumSpam</a>. Se o limite de <code>confidence</code> ou de <code>frequency</code> for atingido, o usuário é impedido de concluir o cadastro no seu fórum.
+
+O cadastro por SSO via <code>fof/oauth</code> e <code>fof/passport</code> também é compatível. Outros provedores de SSO devem funcionar, mas não foram testados.
+
```

#### [`fof-anti-spam.admin.settings.stopforumspam.ip_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.ip_label%22)

> IP Address Spam Check

```diff
+Verificação de Spam por Endereço IP
```

#### [`fof-anti-spam.admin.settings.stopforumspam.region_closest_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.region_closest_label%22)

> Closest

```diff
+Mais próximo
```

#### [`fof-anti-spam.admin.settings.stopforumspam.region_europe_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.region_europe_label%22)

> Europe

```diff
+Europa
```

#### [`fof-anti-spam.admin.settings.stopforumspam.region_us_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.region_us_label%22)

> United States

```diff
+Estados Unidos
```

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_help%22)

> By default we will direct the lookup to the closest regional server in order to provide the fastest response. Should you wish to restrict traffic to a specific region, such as for compliance with company or country privacy regulations, then you can force a connection to a specific region.

```diff
+Por padrão, a consulta é direcionada ao servidor regional mais próximo para obter a resposta mais rápida. Se quiser restringir o tráfego a uma região específica, por exemplo para cumprir regras de privacidade da empresa ou do país, você pode forçar a conexão a uma região específica.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.regional_endpoint_label%22)

> Geographic Access

```diff
+Acesso Geográfico
```

#### [`fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_help%22)

> When a registration is blocked by the Lookup Registrations feature, we will report the attempt back to StopForumSpam, so that the spammers activity can be better confirmed. Requires a StopForumSpam API key to be set (see below).

```diff
+Quando um cadastro for bloqueado pelo recurso "Consultar cadastros", a tentativa será denunciada ao StopForumSpam, para que a atividade do spammer seja melhor confirmada. Requer uma chave de API do StopForumSpam definida (veja abaixo).
```

#### [`fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.report_blocked_registrations_label%22)

> Report blocked registrations

```diff
+Denunciar cadastros bloqueados
```

#### [`fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_help%22)

> If enabled, we will check the StopForumSpam database when a new user registers on your forum. If the user is found (username, IP address, email) and that data point is enabled along with the SFS confidence level reaching your defined level, they will be prevented from completing their registration.

```diff
+Se ativado, consultaremos o banco de dados do StopForumSpam quando um novo usuário se cadastrar no seu fórum. Se o usuário for encontrado (nome de usuário, endereço IP, e-mail), esse dado estiver ativado e o nível de confiança do SFS atingir o nível definido por você, ele será impedido de concluir o cadastro.
```

#### [`fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.sfs_lookup_label%22)

> Lookup registrations

```diff
+Consultar cadastros
```

#### [`fof-anti-spam.admin.settings.stopforumspam.username_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.admin.settings.stopforumspam.username_label%22)

> Username Spam Check

```diff
+Verificação de Spam por Nome de Usuário
```

#### [`fof-anti-spam.forum.message.stopforumspam.blocked`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.message.stopforumspam.blocked%22)

> Details of your registration have been found in a spam prevention database, therefore your registration has been blocked.

```diff
+Dados do seu cadastro foram encontrados em um banco de dados de prevenção de spam, por isso seu cadastro foi bloqueado.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_help%22)

> This will permanently delete all discussions started by this user. When disabled, discussions will be hidden instead.

```diff
+Isso excluirá permanentemente todas as discussões iniciadas por este usuário. Quando desativado, as discussões serão apenas ocultadas.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_discussions_label%22)

> Delete discussions

```diff
+Excluir discussões
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_posts_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_posts_help%22)

> This will permanently delete all posts (comments, replies, etc) made by this user. When disabled, posts will be hidden instead.

```diff
+Isso excluirá permanentemente todos os posts (comentários, respostas etc.) feitos por este usuário. Quando desativado, os posts serão apenas ocultados.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_posts_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_posts_label%22)

> Delete posts

```diff
+Excluir posts
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_user_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_user_help%22)

> This will permanently delete the user. When disabled, the user will be suspended instead.

```diff
+Isso excluirá o usuário permanentemente. Quando desativado, o usuário será suspenso.
```

#### [`fof-anti-spam.forum.spammer_modal.hard_delete_user_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.hard_delete_user_label%22)

> Delete user

```diff
+Excluir usuário
```

#### [`fof-anti-spam.forum.spammer_modal.intro`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.intro%22)

> When marking a user as a spammer, several actions will be taken, which depends on the extensions available on your forum.

```diff
+Ao marcar um usuário como spammer, várias ações serão executadas, dependendo das extensões disponíveis no seu fórum.
```

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_help%22)

> This will move all discussions started by this user to the tag you specified in the forum settings. When disabled, discussions will be left in their current tags.

```diff
+Isso moverá todas as discussões iniciadas por este usuário para a tag especificada nas configurações do fórum. Quando desativado, as discussões permanecerão nas tags atuais.
```

#### [`fof-anti-spam.forum.spammer_modal.move_discussions_tag_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.move_discussions_tag_label%22)

> Move discussions to quarantined tag

```diff
+Mover discussões para a tag de quarentena
```

#### [`fof-anti-spam.forum.spammer_modal.process_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.process_button%22)

> Process

```diff
+Processar
```

#### [`fof-anti-spam.forum.spammer_modal.report_to_sfs_help`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.report_to_sfs_help%22)

> This will report the user's basic details (username, email, IP address) to StopForumSpam. This will help prevent the user from registering on other forums that use the StopForumSpam service.

```diff
+Isso enviará os dados básicos do usuário (nome de usuário, e-mail, endereço IP) ao StopForumSpam. Isso ajudará a impedir que o usuário se cadastre em outros fóruns que usam o serviço StopForumSpam.
```

#### [`fof-anti-spam.forum.spammer_modal.report_to_sfs_label`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.report_to_sfs_label%22)

> Report to StopForumSpam

```diff
+Denunciar ao StopForumSpam
```

#### [`fof-anti-spam.forum.spammer_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.spammer_modal.title%22)

> Mark {username} as a spammer

```diff
+Marcar {username} como spammer
```

#### [`fof-anti-spam.forum.user_controls.spammer_button`](https://weblate.rob006.net/translate/flarum2/fof-anti-spam/pt_BR/?q=context%3A%3D%22fof-anti-spam.forum.user_controls.spammer_button%22)

> Spammer

```diff
+Spammer
```


### `fof-author-change` (missing)

#### [`fof-author-change.admin.permissions.edit-date`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-date%22)

> Update discussion and post date

```diff
+Alterar a data de discussões e posts
```

#### [`fof-author-change.admin.permissions.edit-user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.admin.permissions.edit-user%22)

> Update discussion and post author

```diff
+Alterar o autor de discussões e posts
```

#### [`fof-author-change.forum.controls.edit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.controls.edit%22)

> Edit Author and Date

```diff
+Editar Autor e Data
```

#### [`fof-author-change.forum.modal.cancel`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-author-change.forum.modal.created_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.created_at%22)

> Creation time

```diff
+Data de criação
```

#### [`fof-author-change.forum.modal.edited_at`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.edited_at%22)

> Edit time

```diff
+Data de edição
```

#### [`fof-author-change.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.submit%22)

> Save

```diff
+Salvar
```

#### [`fof-author-change.forum.modal.sync-impossible`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.sync-impossible%22)

> Cannot find first post. Try scrolling to the start of the discussion.

```diff
+Não foi possível encontrar o primeiro post. Tente rolar até o início da discussão.
```

#### [`fof-author-change.forum.modal.sync-with-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-discussion%22)

> Sync with discussion

```diff
+Sincronizar com a discussão
```

#### [`fof-author-change.forum.modal.sync-with-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.sync-with-post%22)

> Sync with first post

```diff
+Sincronizar com o primeiro post
```

#### [`fof-author-change.forum.modal.title-discussion`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.title-discussion%22)

> Edit Discussion Author and Date

```diff
+Editar Autor e Data da Discussão
```

#### [`fof-author-change.forum.modal.title-post`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.title-post%22)

> Edit Post Author and Date

```diff
+Editar Autor e Data do Post
```

#### [`fof-author-change.forum.modal.user`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.modal.user%22)

> Author

```diff
+Autor
```

#### [`fof-author-change.forum.search.no-results`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.search.no-results%22)

> No results

```diff
+Sem resultados
```

#### [`fof-author-change.forum.search.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.search.placeholder%22)

> Search users

```diff
+Buscar usuários
```

#### [`fof-author-change.forum.search.type-more`](https://weblate.rob006.net/translate/flarum2/fof-author-change/pt_BR/?q=context%3A%3D%22fof-author-change.forum.search.type-more%22)

> Type 3 characters to search database

```diff
+Digite 3 caracteres para buscar no banco de dados
```


### `fof-badges` (missing)

#### [`fof-badges.admin.actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.actions%22)

> Actions on Badge Earned

```diff
+Ações ao Conquistar o Emblema
```

#### [`fof-badges.admin.active`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.active%22)

> Active

```diff
+Ativo
```

#### [`fof-badges.admin.add_to_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.add_to_group%22)

> Add user to group

```diff
+Adicionar usuário ao grupo
```

#### [`fof-badges.admin.add_to_group_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.add_to_group_help%22)

> Automatically add the user to this group when they earn the badge.

```diff
+Adiciona o usuário automaticamente a este grupo quando ele conquista o emblema.
```

#### [`fof-badges.admin.appearance`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.appearance%22)

> Appearance

```diff
+Aparência
```

#### [`fof-badges.admin.assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.assign%22)

> Assign

```diff
+Atribuir
```

#### [`fof-badges.admin.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.assign_badge%22)

> Assign: {badge}

```diff
+Atribuir: {badge}
```

#### [`fof-badges.admin.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.assign_reason%22)

> Reason (optional)

```diff
+Motivo (opcional)
```

#### [`fof-badges.admin.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Este motivo ficará visível no emblema do usuário.
```

#### [`fof-badges.admin.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+Por que este emblema está sendo concedido?
```

#### [`fof-badges.admin.automatic`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.automatic%22)

> Automatic

```diff
+Automático
```

#### [`fof-badges.admin.background_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.background_color%22)

> Background Color

```diff
+Cor de Fundo
```

#### [`fof-badges.admin.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+Emblema "{badge}" atribuído a {username}!
```

#### [`fof-badges.admin.badge_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_category%22)

> Category

```diff
+Categoria
```

#### [`fof-badges.admin.badge_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_count%22)

> {count, plural, one {# badge} other {# badges}}

```diff
+{count, plural, one {# emblema} other {# emblemas}}
```

#### [`fof-badges.admin.badge_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_description%22)

> Description

```diff
+Descrição
```

#### [`fof-badges.admin.badge_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_description_placeholder%22)

> Describe how to earn this badge...

```diff
+Descreva como conquistar este emblema...
```

#### [`fof-badges.admin.badge_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_name%22)

> Name

```diff
+Nome
```

#### [`fof-badges.admin.badge_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_name_placeholder%22)

> e.g., "100 Posts Master"

```diff
+ex.: "Mestre dos 100 Posts"
```

#### [`fof-badges.admin.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_revoked%22)

> Badge "{badge}" has been revoked from {username}.

```diff
+O emblema "{badge}" foi revogado de {username}.
```

#### [`fof-badges.admin.badge_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_slug%22)

> Slug

```diff
+Slug
```

#### [`fof-badges.admin.badge_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_slug_help%22)

> URL-friendly identifier. Auto-generated from name if left empty.

```diff
+Identificador amigável para URL. Gerado a partir do nome se ficar vazio.
```

#### [`fof-badges.admin.badge_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.badge_slug_placeholder%22)

> e.g., "100-posts-master"

```diff
+ex.: "mestre-dos-100-posts"
```

#### [`fof-badges.admin.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.admin.category_description`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_description%22)

> Description

```diff
+Descrição
```

#### [`fof-badges.admin.category_description_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_description_placeholder%22)

> Describe this category of badges...

```diff
+Descreva esta categoria de emblemas...
```

#### [`fof-badges.admin.category_enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_enabled%22)

> Enabled

```diff
+Ativada
```

#### [`fof-badges.admin.category_enabled_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_enabled_help%22)

> Disabled categories and their badges won't appear in the badge list.

```diff
+Categorias desativadas e seus emblemas não aparecem na lista de emblemas.
```

#### [`fof-badges.admin.category_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_name%22)

> Name

```diff
+Nome
```

#### [`fof-badges.admin.category_name_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_name_placeholder%22)

> e.g., "Achievement Badges"

```diff
+ex.: "Emblemas de Conquistas"
```

#### [`fof-badges.admin.category_slug`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_slug%22)

> Slug

```diff
+Slug
```

#### [`fof-badges.admin.category_slug_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_slug_help%22)

> URL-friendly identifier for the category.

```diff
+Identificador amigável para URL da categoria.
```

#### [`fof-badges.admin.category_slug_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.category_slug_placeholder%22)

> e.g., "achievements"

```diff
+ex.: "conquistas"
```

#### [`fof-badges.admin.clear_selection`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.clear_selection%22)

> Clear selection

```diff
+Limpar seleção
```

#### [`fof-badges.admin.create_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.create_badge%22)

> Create Badge

```diff
+Criar Emblema
```

#### [`fof-badges.admin.create_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.create_category%22)

> Create Category

```diff
+Criar Categoria
```

#### [`fof-badges.admin.delete`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.delete%22)

> Delete

```diff
+Excluir
```

#### [`fof-badges.admin.delete_badge_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.delete_badge_confirm%22)

> Are you sure you want to delete the badge "{name}"? This will also remove it from all users who have earned it.

```diff
+Tem certeza de que deseja excluir o emblema "{name}"? Isso também o removerá de todos os usuários que o conquistaram.
```

#### [`fof-badges.admin.delete_category_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm%22)

> Are you sure you want to delete the category "{name}"?

```diff
+Tem certeza de que deseja excluir a categoria "{name}"?
```

#### [`fof-badges.admin.delete_category_confirm_with_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.delete_category_confirm_with_badges%22)

> Are you sure you want to delete the category "{name}"? {count, plural, one {# badge} other {# badges}} will become uncategorized.

```diff
+Tem certeza de que deseja excluir a categoria "{name}"? {count, plural, one {# emblema ficará} other {# emblemas ficarão}} sem categoria.
```

#### [`fof-badges.admin.disabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.disabled%22)

> Disabled

```diff
+Desativado
```

#### [`fof-badges.admin.earned_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.earned_count%22)

> {count} earned

```diff
+Conquistado por {count}
```

#### [`fof-badges.admin.edit`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.edit%22)

> Edit

```diff
+Editar
```

#### [`fof-badges.admin.edit_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.edit_badge%22)

> Edit Badge

```diff
+Editar Emblema
```

#### [`fof-badges.admin.edit_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.edit_category%22)

> Edit Category

```diff
+Editar Categoria
```

#### [`fof-badges.admin.enabled`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.enabled%22)

> Enabled

```diff
+Ativado
```

#### [`fof-badges.admin.granted_by_system`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.granted_by_system%22)

> System

```diff
+Sistema
```

#### [`fof-badges.admin.headers.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.badges%22)

> Badges

```diff
+Emblemas
```

#### [`fof-badges.admin.headers.description`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.description%22)

> Description

```diff
+Descrição
```

#### [`fof-badges.admin.headers.earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.earned%22)

> Earned

```diff
+Conquistas
```

#### [`fof-badges.admin.headers.icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.icon%22)

> Icon

```diff
+Ícone
```

#### [`fof-badges.admin.headers.name`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.name%22)

> Name

```diff
+Nome
```

#### [`fof-badges.admin.headers.order`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.order%22)

> Order

```diff
+Ordem
```

#### [`fof-badges.admin.headers.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.rarity%22)

> Rarity

```diff
+Raridade
```

#### [`fof-badges.admin.headers.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.status%22)

> Status

```diff
+Status
```

#### [`fof-badges.admin.headers.type`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.headers.type%22)

> Type

```diff
+Tipo
```

#### [`fof-badges.admin.icon_color`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.icon_color%22)

> Icon Color

```diff
+Cor do Ícone
```

#### [`fof-badges.admin.icon_picker.collapse`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.icon_picker.collapse%22)

> Hide icon picker

```diff
+Ocultar seletor de ícones
```

#### [`fof-badges.admin.icon_picker.expand`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.icon_picker.expand%22)

> Show icon picker

```diff
+Mostrar seletor de ícones
```

#### [`fof-badges.admin.icon_picker.hint`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.icon_picker.hint%22)

> Click an icon to select, or type a Font Awesome class name above.

```diff
+Clique em um ícone para selecionar ou digite acima o nome de uma classe do Font Awesome.
```

#### [`fof-badges.admin.inactive`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.inactive%22)

> Inactive

```diff
+Inativo
```

#### [`fof-badges.admin.install_defaults`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.install_defaults%22)

> Install Default Badges

```diff
+Instalar Emblemas Padrão
```

#### [`fof-badges.admin.install_defaults_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.install_defaults_error%22)

> Failed to install default badges.

```diff
+Falha ao instalar os emblemas padrão.
```

#### [`fof-badges.admin.install_defaults_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.install_defaults_success%22)

> Default badges installed successfully!

```diff
+Emblemas padrão instalados com sucesso!
```

#### [`fof-badges.admin.is_active`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.is_active%22)

> Active

```diff
+Ativo
```

#### [`fof-badges.admin.is_active_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.is_active_help%22)

> Inactive badges won't be automatically awarded to users.

```diff
+Emblemas inativos não serão concedidos automaticamente aos usuários.
```

#### [`fof-badges.admin.is_visible`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.is_visible%22)

> Visible in badge list

```diff
+Visível na lista de emblemas
```

#### [`fof-badges.admin.is_visible_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.is_visible_help%22)

> Hidden badges won't appear in the public badge list but users can still earn them.

```diff
+Emblemas ocultos não aparecem na lista pública de emblemas, mas os usuários ainda podem conquistá-los.
```

#### [`fof-badges.admin.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.manual%22)

> Manual

```diff
+Manual
```

#### [`fof-badges.admin.metrics.best_answers_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.best_answers_received%22)

> Best Answers Received

```diff
+Melhores Respostas Recebidas
```

#### [`fof-badges.admin.metrics.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.discussion_count%22)

> Discussions Started

```diff
+Discussões Iniciadas
```

#### [`fof-badges.admin.metrics.downvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_given%22)

> Downvotes Given

```diff
+Votos Negativos Dados
```

#### [`fof-badges.admin.metrics.downvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.downvotes_received%22)

> Downvotes Received

```diff
+Votos Negativos Recebidos
```

#### [`fof-badges.admin.metrics.edit_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.edit_count%22)

> Posts Edited

```diff
+Posts Editados
```

#### [`fof-badges.admin.metrics.files_uploaded`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.files_uploaded%22)

> Files Uploaded

```diff
+Arquivos Enviados
```

#### [`fof-badges.admin.metrics.has_avatar`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.has_avatar%22)

> Has Avatar

```diff
+Tem Avatar
```

#### [`fof-badges.admin.metrics.has_bio`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.has_bio%22)

> Has Bio

```diff
+Tem Bio
```

#### [`fof-badges.admin.metrics.has_nickname`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.has_nickname%22)

> Has Nickname

```diff
+Tem Apelido
```

#### [`fof-badges.admin.metrics.likes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.likes_given%22)

> Likes Given

```diff
+Curtidas Dadas
```

#### [`fof-badges.admin.metrics.likes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.likes_received%22)

> Likes Received

```diff
+Curtidas Recebidas
```

#### [`fof-badges.admin.metrics.member_days`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.member_days%22)

> Days as Member

```diff
+Dias como Membro
```

#### [`fof-badges.admin.metrics.polls_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.polls_created%22)

> Polls Created

```diff
+Enquetes Criadas
```

#### [`fof-badges.admin.metrics.polls_voted`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.polls_voted%22)

> Polls Voted

```diff
+Enquetes Votadas
```

#### [`fof-badges.admin.metrics.post_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.post_count%22)

> Post Count

```diff
+Total de Posts
```

#### [`fof-badges.admin.metrics.private_discussions_created`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.private_discussions_created%22)

> Private Discussions Created

```diff
+Discussões Privadas Criadas
```

#### [`fof-badges.admin.metrics.reactions_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_given%22)

> Reactions Given

```diff
+Reações Dadas
```

#### [`fof-badges.admin.metrics.reactions_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.reactions_received%22)

> Reactions Received

```diff
+Reações Recebidas
```

#### [`fof-badges.admin.metrics.tag_posts`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.tag_posts%22)

> Posts in Tag

```diff
+Posts na Tag
```

#### [`fof-badges.admin.metrics.upvotes_given`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_given%22)

> Upvotes Given

```diff
+Votos Positivos Dados
```

#### [`fof-badges.admin.metrics.upvotes_received`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.metrics.upvotes_received%22)

> Upvotes Received

```diff
+Votos Positivos Recebidos
```

#### [`fof-badges.admin.move_down`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.move_down%22)

> Move down

```diff
+Mover para baixo
```

#### [`fof-badges.admin.move_up`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.move_up%22)

> Move up

```diff
+Mover para cima
```

#### [`fof-badges.admin.next`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.next%22)

> Next

```diff
+Próximo
```

#### [`fof-badges.admin.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_badges%22)

> No badges yet. Create your first badge!

```diff
+Nenhum emblema ainda. Crie seu primeiro emblema!
```

#### [`fof-badges.admin.no_categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_categories%22)

> No categories yet. Create your first category!

```diff
+Nenhuma categoria ainda. Crie sua primeira categoria!
```

#### [`fof-badges.admin.no_category`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_category%22)

> No category

```diff
+Sem categoria
```

#### [`fof-badges.admin.no_group`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_group%22)

> Don't add to group

```diff
+Não adicionar a grupo
```

#### [`fof-badges.admin.no_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_holders%22)

> No one has earned this badge yet.

```diff
+Ninguém conquistou este emblema ainda.
```

#### [`fof-badges.admin.no_holders_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_holders_found%22)

> No holders found matching your search.

```diff
+Nenhum detentor encontrado para sua busca.
```

#### [`fof-badges.admin.no_users_found`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.no_users_found%22)

> No users found

```diff
+Nenhum usuário encontrado
```

#### [`fof-badges.admin.permissions.give_manually`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.permissions.give_manually%22)

> Manually assign badges

```diff
+Atribuir emblemas manualmente
```

#### [`fof-badges.admin.permissions.moderate`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.permissions.moderate%22)

> Manage badges

```diff
+Gerenciar emblemas
```

#### [`fof-badges.admin.permissions.view_list`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.permissions.view_list%22)

> View badge list

```diff
+Ver a lista de emblemas
```

#### [`fof-badges.admin.permissions.view_user_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.permissions.view_user_badges%22)

> View user badges

```diff
+Ver os emblemas dos usuários
```

#### [`fof-badges.admin.preview`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.preview%22)

> Preview

```diff
+Prévia
```

#### [`fof-badges.admin.previous`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.previous%22)

> Previous

```diff
+Anterior
```

#### [`fof-badges.admin.rarity`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.rarity%22)

> {percent}% rarity

```diff
+{percent}% de raridade
```

#### [`fof-badges.admin.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate%22)

> Recalculate

```diff
+Recalcular
```

#### [`fof-badges.admin.recalculate_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_confirm%22)

> This will recalculate all automatic badges for all users. The process will run in the background. Continue?

```diff
+Isso recalculará todos os emblemas automáticos de todos os usuários. O processo rodará em segundo plano. Continuar?
```

#### [`fof-badges.admin.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Falha ao recalcular os emblemas. Tente novamente.
```

#### [`fof-badges.admin.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_success%22)

> Recalculation complete! Awarded: {awarded}, Revoked: {revoked}, Users processed: {users}

```diff
+Recálculo concluído! Concedidos: {awarded}, Revogados: {revoked}, Usuários processados: {users}
```

#### [`fof-badges.admin.recalculate_tab.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.all_badges%22)

> All automatic badges

```diff
+Todos os emblemas automáticos
```

#### [`fof-badges.admin.recalculate_tab.badge_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_help%22)

> Select a specific badge or recalculate all automatic badges.

```diff
+Selecione um emblema específico ou recalcule todos os emblemas automáticos.
```

#### [`fof-badges.admin.recalculate_tab.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badge_label%22)

> Badge to recalculate

```diff
+Emblema a recalcular
```

#### [`fof-badges.admin.recalculate_tab.badges_to_check`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.badges_to_check%22)

> Badges to check

```diff
+Emblemas a verificar
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_help%22)

> Number of users to process per job. Smaller chunks are more reliable but take longer overall.

```diff
+Número de usuários processados por job. Lotes menores são mais confiáveis, mas demoram mais no total.
```

#### [`fof-badges.admin.recalculate_tab.chunk_size_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.chunk_size_label%22)

> Chunk size

```diff
+Tamanho do lote
```

#### [`fof-badges.admin.recalculate_tab.default`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.default%22)

> default

```diff
+padrão
```

#### [`fof-badges.admin.recalculate_tab.estimated_chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.estimated_chunks%22)

> Estimated chunks

```diff
+Lotes estimados
```

#### [`fof-badges.admin.recalculate_tab.info`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.info%22)

> Recalculation processes users in chunks to avoid queue timeouts. Each chunk runs as a separate background job.

```diff
+O recálculo processa os usuários em lotes para evitar timeouts da fila. Cada lote roda como um job separado em segundo plano.
```

#### [`fof-badges.admin.recalculate_tab.jobs_empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_empty%22)

> No recalculation jobs yet.

```diff
+Nenhum job de recálculo ainda.
```

#### [`fof-badges.admin.recalculate_tab.jobs_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.jobs_title%22)

> Job History

```diff
+Histórico de Jobs
```

#### [`fof-badges.admin.recalculate_tab.no_automatic_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_automatic_badges%22)

> No automatic badges configured. Create a badge with trigger conditions first.

```diff
+Nenhum emblema automático configurado. Crie primeiro um emblema com condições de gatilho.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_help%22)

> If enabled, users who no longer meet the criteria will keep their badges.

```diff
+Se ativado, os usuários que não atendem mais aos critérios manterão seus emblemas.
```

#### [`fof-badges.admin.recalculate_tab.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.no_revoke_label%22)

> Don't revoke existing badges

```diff
+Não revogar emblemas existentes
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_help%22)

> If enabled, badge actions (like adding to a group) will be re-applied to users who already have the badge. Useful when you've added new actions to an existing badge.

```diff
+Se ativado, as ações do emblema (como adicionar a um grupo) serão reaplicadas aos usuários que já têm o emblema. Útil quando você adicionou novas ações a um emblema existente.
```

#### [`fof-badges.admin.recalculate_tab.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.reapply_actions_label%22)

> Re-apply actions to existing badge holders

```diff
+Reaplicar ações a quem já tem o emblema
```

#### [`fof-badges.admin.recalculate_tab.show_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.show_more%22)

> Show {count} more

```diff
+Mostrar mais {count}
```

#### [`fof-badges.admin.recalculate_tab.start`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.start%22)

> Start Recalculation

```diff
+Iniciar Recálculo
```

#### [`fof-badges.admin.recalculate_tab.sync_counts`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts%22)

> Sync Badge Counts

```diff
+Sincronizar Contagens
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_error%22)

> Failed to sync badge counts.

```diff
+Falha ao sincronizar as contagens de emblemas.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_info%22)

> Recalculate the "earned count" for all badges based on actual user\_badges records. Use this if counts become incorrect after recalculation.

```diff
+Recalcula a "contagem de conquistas" de todos os emblemas com base nos registros reais de user_badges. Use se as contagens ficarem incorretas após o recálculo.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_success%22)

> Badge counts synced! {corrected} of {total} badges were corrected.

```diff
+Contagens sincronizadas! {corrected} de {total} emblemas foram corrigidos.
```

#### [`fof-badges.admin.recalculate_tab.sync_counts_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.sync_counts_title%22)

> Sync Badge Counts

```diff
+Sincronizar Contagens de Emblemas
```

#### [`fof-badges.admin.recalculate_tab.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.title%22)

> Start Recalculation

```diff
+Iniciar Recálculo
```

#### [`fof-badges.admin.recalculate_tab.total_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculate_tab.total_users%22)

> Total users

```diff
+Total de usuários
```

#### [`fof-badges.admin.recalculation.already_running`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.already_running%22)

> A badge recalculation is already in progress.

```diff
+Já há um recálculo de emblemas em andamento.
```

#### [`fof-badges.admin.recalculation.auto_refresh_off`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_off%22)

> Auto-refresh

```diff
+Autoatualização
```

#### [`fof-badges.admin.recalculation.auto_refresh_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.auto_refresh_on%22)

> Auto-refresh is on

```diff
+Autoatualização ativada
```

#### [`fof-badges.admin.recalculation.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.admin.recalculation.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_confirm%22)

> Are you sure you want to cancel the recalculation? Progress will be lost.

```diff
+Tem certeza de que deseja cancelar o recálculo? O progresso será perdido.
```

#### [`fof-badges.admin.recalculation.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.cancel_error%22)

> Failed to cancel recalculation.

```diff
+Falha ao cancelar o recálculo.
```

#### [`fof-badges.admin.recalculation.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.cancelled%22)

> Recalculation cancelled

```diff
+Recálculo cancelado
```

#### [`fof-badges.admin.recalculation.chunks`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.chunks%22)

> Chunks: {processed} / {total}

```diff
+Lotes: {processed} / {total}
```

#### [`fof-badges.admin.recalculation.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.completed%22)

> Recalculation completed!

```diff
+Recálculo concluído!
```

#### [`fof-badges.admin.recalculation.dismiss`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.dismiss%22)

> Dismiss

```diff
+Dispensar
```

#### [`fof-badges.admin.recalculation.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.failed%22)

> Recalculation failed

```diff
+Falha no recálculo
```

#### [`fof-badges.admin.recalculation.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.pending%22)

> Preparing recalculation...

```diff
+Preparando o recálculo...
```

#### [`fof-badges.admin.recalculation.progress`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.progress%22)

> {processed} / {total} evaluations ({percentage}%)

```diff
+{processed} / {total} avaliações ({percentage}%)
```

#### [`fof-badges.admin.recalculation.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.running%22)

> Recalculating badges...

```diff
+Recalculando emblemas...
```

#### [`fof-badges.admin.recalculation.started`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.started%22)

> Badge recalculation started. This will run in the background.

```diff
+Recálculo de emblemas iniciado. Ele rodará em segundo plano.
```

#### [`fof-badges.admin.recalculation.stats`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation.stats%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Concedidos: {awarded} | Revogados: {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.button`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.button%22)

> Jobs

```diff
+Jobs
```

#### [`fof-badges.admin.recalculation_jobs.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.admin.recalculation_jobs.cancel_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancel_error%22)

> Failed to cancel job.

```diff
+Falha ao cancelar o job.
```

#### [`fof-badges.admin.recalculation_jobs.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.cancelled%22)

> Job cancelled successfully.

```diff
+Job cancelado com sucesso.
```

#### [`fof-badges.admin.recalculation_jobs.empty`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.empty%22)

> No recalculation jobs found.

```diff
+Nenhum job de recálculo encontrado.
```

#### [`fof-badges.admin.recalculation_jobs.force_cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.force_cancel%22)

> Force Cancel

```diff
+Forçar Cancelamento
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed%22)

> Mark as Failed

```diff
+Marcar como Falha
```

#### [`fof-badges.admin.recalculation_jobs.mark_failed_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.mark_failed_error%22)

> Failed to mark job as failed.

```diff
+Falha ao marcar o job como falha.
```

#### [`fof-badges.admin.recalculation_jobs.marked_failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.marked_failed%22)

> Job marked as failed.

```diff
+Job marcado como falha.
```

#### [`fof-badges.admin.recalculation_jobs.results`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.results%22)

> Awarded: {awarded} \| Revoked: {revoked}

```diff
+Concedidos: {awarded} | Revogados: {revoked}
```

#### [`fof-badges.admin.recalculation_jobs.status.cancelled`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.cancelled%22)

> Cancelled

```diff
+Cancelado
```

#### [`fof-badges.admin.recalculation_jobs.status.completed`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.completed%22)

> Completed

```diff
+Concluído
```

#### [`fof-badges.admin.recalculation_jobs.status.failed`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.failed%22)

> Failed

```diff
+Falhou
```

#### [`fof-badges.admin.recalculation_jobs.status.pending`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.pending%22)

> Pending

```diff
+Pendente
```

#### [`fof-badges.admin.recalculation_jobs.status.running`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.status.running%22)

> Running

```diff
+Em execução
```

#### [`fof-badges.admin.recalculation_jobs.stuck`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.stuck%22)

> Stuck

```diff
+Travado
```

#### [`fof-badges.admin.recalculation_jobs.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.title%22)

> Recalculation Jobs

```diff
+Jobs de Recálculo
```

#### [`fof-badges.admin.recalculation_jobs.users`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.recalculation_jobs.users%22)

> {processed} / {total} evaluations

```diff
+{processed} / {total} avaliações
```

#### [`fof-badges.admin.revoke`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.revoke%22)

> Revoke

```diff
+Revogar
```

#### [`fof-badges.admin.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from {username}?

```diff
+Tem certeza de que deseja revogar o emblema "{badge}" de {username}?
```

#### [`fof-badges.admin.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.revoke_error%22)

> Failed to revoke badge.

```diff
+Falha ao revogar o emblema.
```

#### [`fof-badges.admin.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.save%22)

> Save

```diff
+Salvar
```

#### [`fof-badges.admin.search_holders_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.search_holders_placeholder%22)

> Search holders...

```diff
+Buscar detentores...
```

#### [`fof-badges.admin.search_user_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.search_user_placeholder%22)

> Search by username or display name...

```diff
+Buscar por nome de usuário ou de exibição...
```

#### [`fof-badges.admin.select_user`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.select_user%22)

> Select User

```diff
+Selecionar Usuário
```

#### [`fof-badges.admin.send_notification`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.send_notification%22)

> Send notification to user

```diff
+Enviar notificação ao usuário
```

#### [`fof-badges.admin.settings.display_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.display_title%22)

> Display Settings

```diff
+Configurações de Exibição
```

#### [`fof-badges.admin.settings.integrations_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.integrations_help%22)

> Badge metrics that depend on other extensions. Install the extension to unlock the corresponding metrics.

```diff
+Métricas de emblemas que dependem de outras extensões. Instale a extensão para liberar as métricas correspondentes.
```

#### [`fof-badges.admin.settings.integrations_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.integrations_title%22)

> Extension Integrations

```diff
+Integrações com Extensões
```

#### [`fof-badges.admin.settings.new_badge_highlight`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight%22)

> Show "NEW" tag on recently earned badges

```diff
+Mostrar a tag "NOVO" em emblemas recém-conquistados
```

#### [`fof-badges.admin.settings.new_badge_highlight_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.new_badge_highlight_help%22)

> Displays a "NEW" tag on badges earned within the last 7 days.

```diff
+Exibe uma tag "NOVO" nos emblemas conquistados nos últimos 7 dias.
```

#### [`fof-badges.admin.settings.post_badge_display_limit`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit%22)

> Post badge display limit

```diff
+Limite de emblemas nos posts
```

#### [`fof-badges.admin.settings.post_badge_display_limit_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.post_badge_display_limit_help%22)

> Maximum number of badges to show under posts. Set to 0 to disable.

```diff
+Número máximo de emblemas mostrados abaixo dos posts. Defina 0 para desativar.
```

#### [`fof-badges.admin.settings.primary_badge_display`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display%22)

> Primary badge display

```diff
+Exibição do emblema principal
```

#### [`fof-badges.admin.settings.primary_badge_display_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_display_help%22)

> How the user's primary badge appears next to their username.

```diff
+Como o emblema principal do usuário aparece ao lado do nome de usuário.
```

#### [`fof-badges.admin.settings.primary_badge_hidden`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_hidden%22)

> Hidden

```diff
+Oculto
```

#### [`fof-badges.admin.settings.primary_badge_icon`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon%22)

> Icon only

```diff
+Apenas ícone
```

#### [`fof-badges.admin.settings.primary_badge_icon_name`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.primary_badge_icon_name%22)

> Icon and name

```diff
+Ícone e nome
```

#### [`fof-badges.admin.settings.save`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.save%22)

> Save Settings

```diff
+Salvar Configurações
```

#### [`fof-badges.admin.settings.save_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.save_error%22)

> Failed to save settings.

```diff
+Falha ao salvar as configurações.
```

#### [`fof-badges.admin.settings.saved`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.saved%22)

> Settings saved successfully.

```diff
+Configurações salvas com sucesso.
```

#### [`fof-badges.admin.settings.show_badges_on_user_card`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card%22)

> Show badges on user card

```diff
+Mostrar emblemas no cartão do usuário
```

#### [`fof-badges.admin.settings.show_badges_on_user_card_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.settings.show_badges_on_user_card_help%22)

> Display the user's favorite or rarest badge on user cards and profile pages.

```diff
+Exibe o emblema favorito ou o mais raro do usuário nos cartões de usuário e nas páginas de perfil.
```

#### [`fof-badges.admin.showing_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.showing_holders%22)

> Showing {from}-{to} of {total}

```diff
+Mostrando {from}-{to} de {total}
```

#### [`fof-badges.admin.status`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.status%22)

> Status

```diff
+Status
```

#### [`fof-badges.admin.tab_assign`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.tab_assign%22)

> Assign

```diff
+Atribuir
```

#### [`fof-badges.admin.tab_holders`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.tab_holders%22)

> Holders ({count})

```diff
+Detentores ({count})
```

#### [`fof-badges.admin.tabs.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.tabs.badges%22)

> Badges

```diff
+Emblemas
```

#### [`fof-badges.admin.tabs.categories`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.tabs.categories%22)

> Categories

```diff
+Categorias
```

#### [`fof-badges.admin.tabs.recalculation`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.tabs.recalculation%22)

> Recalculation

```diff
+Recálculo
```

#### [`fof-badges.admin.tabs.settings`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.tabs.settings%22)

> Settings

```diff
+Configurações
```

#### [`fof-badges.admin.trigger_builder.add_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.add_condition%22)

> Add Condition

```diff
+Adicionar Condição
```

#### [`fof-badges.admin.trigger_builder.and`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and%22)

> ALL must match (AND)

```diff
+TODAS devem ser atendidas (E)
```

#### [`fof-badges.admin.trigger_builder.and_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.and_help%22)

> User must meet all conditions simultaneously to earn this badge.

```diff
+O usuário deve atender a todas as condições ao mesmo tempo para conquistar este emblema.
```

#### [`fof-badges.admin.trigger_builder.date_end`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_end%22)

> End Date

```diff
+Data Final
```

#### [`fof-badges.admin.trigger_builder.date_range_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_range_help%22)

> Only count activity within this date range. Useful for event badges.

```diff
+Conta apenas a atividade dentro deste período. Útil para emblemas de eventos.
```

#### [`fof-badges.admin.trigger_builder.date_start`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.date_start%22)

> Start Date

```diff
+Data Inicial
```

#### [`fof-badges.admin.trigger_builder.loading_tags`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.loading_tags%22)

> Loading tags...

```diff
+Carregando tags...
```

#### [`fof-badges.admin.trigger_builder.logic`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.logic%22)

> When multiple conditions

```diff
+Com várias condições
```

#### [`fof-badges.admin.trigger_builder.no_conditions_info`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.no_conditions_info%22)

> No conditions set. This badge can only be assigned manually by moderators.

```diff
+Nenhuma condição definida. Este emblema só pode ser atribuído manualmente por moderadores.
```

#### [`fof-badges.admin.trigger_builder.or`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or%22)

> ANY must match (OR)

```diff
+QUALQUER uma basta (OU)
```

#### [`fof-badges.admin.trigger_builder.or_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.or_help%22)

> User must meet at least one condition to earn this badge.

```diff
+O usuário deve atender a pelo menos uma condição para conquistar este emblema.
```

#### [`fof-badges.admin.trigger_builder.remove_condition`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.remove_condition%22)

> Remove condition

```diff
+Remover condição
```

#### [`fof-badges.admin.trigger_builder.select_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.select_tag%22)

> Select a tag...

```diff
+Selecione uma tag...
```

#### [`fof-badges.admin.trigger_builder.tag_filter`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter%22)

> Tag Filter

```diff
+Filtro de Tag
```

#### [`fof-badges.admin.trigger_builder.tag_filter_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.tag_filter_help%22)

> Required when using "Posts in Tag" metric.

```diff
+Obrigatório ao usar a métrica "Posts na Tag".
```

#### [`fof-badges.admin.trigger_builder.use_date_range`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_builder.use_date_range%22)

> Limit to date range

```diff
+Limitar a um período
```

#### [`fof-badges.admin.trigger_config`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_config%22)

> Automatic Trigger

```diff
+Gatilho Automático
```

#### [`fof-badges.admin.trigger_config_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.trigger_config_help%22)

> Configure conditions for automatic badge awarding. Leave empty for manual-only badges.

```diff
+Configure as condições para a concessão automática do emblema. Deixe vazio para emblemas apenas manuais.
```

#### [`fof-badges.admin.uncategorized`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.uncategorized%22)

> Uncategorized

```diff
+Sem categoria
```

#### [`fof-badges.admin.validation.tag_required`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.admin.validation.tag_required%22)

> You must select a tag when using the "Posts in Tag" metric.

```diff
+Você deve selecionar uma tag ao usar a métrica "Posts na Tag".
```

#### [`fof-badges.forum.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.all_badges%22)

> All Badges

```diff
+Todos os Emblemas
```

#### [`fof-badges.forum.badges_subtitle`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.badges_subtitle%22)

> Earn badges by participating in the community!

```diff
+Conquiste emblemas participando da comunidade!
```

#### [`fof-badges.forum.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.badges_title%22)

> Badges

```diff
+Emblemas
```

#### [`fof-badges.forum.earned_by`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.earned_by%22)

> {count, plural, one {# user} other {# users}}

```diff
+{count, plural, one {# usuário} other {# usuários}}
```

#### [`fof-badges.forum.earned_users`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.earned_users%22)

> Earned By

```diff
+Conquistado Por
```

#### [`fof-badges.forum.loading`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.loading%22)

> Loading...

```diff
+Carregando...
```

#### [`fof-badges.forum.more_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.more_users_earned%22)

> And more users...

```diff
+E mais usuários...
```

#### [`fof-badges.forum.my_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.my_badges%22)

> My Badges

```diff
+Meus Emblemas
```

#### [`fof-badges.forum.nav.badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.nav.badges%22)

> Badges

```diff
+Emblemas
```

#### [`fof-badges.forum.new_tag`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.new_tag%22)

> NEW

```diff
+NOVO
```

#### [`fof-badges.forum.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.no_badges%22)

> No badges available yet.

```diff
+Nenhum emblema disponível ainda.
```

#### [`fof-badges.forum.no_users_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.no_users_earned%22)

> No one has earned this badge yet. Be the first!

```diff
+Ninguém conquistou este emblema ainda. Seja o primeiro!
```

#### [`fof-badges.forum.notification.a_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.notification.a_badge%22)

> a badge

```diff
+um emblema
```

#### [`fof-badges.forum.notification.badge_earned`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.notification.badge_earned%22)

> You earned {badge}

```diff
+Você conquistou {badge}
```

#### [`fof-badges.forum.other_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.other_badges%22)

> Other Badges

```diff
+Outros Emblemas
```

#### [`fof-badges.forum.owned_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.owned_badge%22)

> You own this badge

```diff
+Você tem este emblema
```

#### [`fof-badges.forum.toggle_category_dropdown`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.toggle_category_dropdown%22)

> Toggle category dropdown

```diff
+Alternar menu de categorias
```

#### [`fof-badges.forum.user.assign_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.assign_badge%22)

> Assign Badge

```diff
+Atribuir Emblema
```

#### [`fof-badges.forum.user.assign_badge_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.assign_badge_title%22)

> Assign Badge to {username}

```diff
+Atribuir Emblema a {username}
```

#### [`fof-badges.forum.user.assign_button`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.assign_button%22)

> Assign Badge

```diff
+Atribuir Emblema
```

#### [`fof-badges.forum.user.assign_reason`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.assign_reason%22)

> Reason (optional)

```diff
+Motivo (opcional)
```

#### [`fof-badges.forum.user.assign_reason_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_help%22)

> This reason will be visible on the user's badge.

```diff
+Este motivo ficará visível no emblema do usuário.
```

#### [`fof-badges.forum.user.assign_reason_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.assign_reason_placeholder%22)

> Why is this badge being awarded?

```diff
+Por que este emblema está sendo concedido?
```

#### [`fof-badges.forum.user.badge_actions`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.badge_actions%22)

> Badge actions

```diff
+Ações do emblema
```

#### [`fof-badges.forum.user.badge_assigned`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.badge_assigned%22)

> Badge "{badge}" assigned to {username}!

```diff
+Emblema "{badge}" atribuído a {username}!
```

#### [`fof-badges.forum.user.badge_revoked`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.badge_revoked%22)

> Badge "{badge}" has been revoked.

```diff
+O emblema "{badge}" foi revogado.
```

#### [`fof-badges.forum.user.badges_count`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.badges_count%22)

> {count, plural, one {# Badge} other {# Badges}}

```diff
+{count, plural, one {# Emblema} other {# Emblemas}}
```

#### [`fof-badges.forum.user.badges_tab`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.badges_tab%22)

> Badges

```diff
+Emblemas
```

#### [`fof-badges.forum.user.badges_title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.badges_title%22)

> {username}'s Badges

```diff
+Emblemas de {username}
```

#### [`fof-badges.forum.user.cancel`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.cancel%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-badges.forum.user.earned_on`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.earned_on%22)

> Earned {date}

```diff
+Conquistado {date}
```

#### [`fof-badges.forum.user.favorite_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.favorite_badge%22)

> Favorite badge

```diff
+Emblema favorito
```

#### [`fof-badges.forum.user.hidden_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.hidden_badge%22)

> Hidden from profile

```diff
+Oculto no perfil
```

#### [`fof-badges.forum.user.hide_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.hide_badge%22)

> Hide from profile

```diff
+Ocultar do perfil
```

#### [`fof-badges.forum.user.load_more`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.load_more%22)

> Load More

```diff
+Carregar Mais
```

#### [`fof-badges.forum.user.manually_awarded`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.manually_awarded%22)

> Manually awarded

```diff
+Concedido manualmente
```

#### [`fof-badges.forum.user.no_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.no_badges%22)

> This user hasn't earned any badges yet.

```diff
+Este usuário ainda não conquistou nenhum emblema.
```

#### [`fof-badges.forum.user.no_badges_available`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.no_badges_available%22)

> No badges available.

```diff
+Nenhum emblema disponível.
```

#### [`fof-badges.forum.user.recalculate`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate%22)

> Recalculate Badges

```diff
+Recalcular Emblemas
```

#### [`fof-badges.forum.user.recalculate_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_error%22)

> Failed to recalculate badges. Please try again.

```diff
+Falha ao recalcular os emblemas. Tente novamente.
```

#### [`fof-badges.forum.user.recalculate_modal.all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.all_badges%22)

> All automatic badges

```diff
+Todos os emblemas automáticos
```

#### [`fof-badges.forum.user.recalculate_modal.badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.badge_label%22)

> Badge to recalculate

```diff
+Emblema a recalcular
```

#### [`fof-badges.forum.user.recalculate_modal.manual`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.manual%22)

> manual

```diff
+manual
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_help%22)

> If enabled, the user will keep badges even if they no longer meet the criteria.

```diff
+Se ativado, o usuário manterá os emblemas mesmo que não atenda mais aos critérios.
```

#### [`fof-badges.forum.user.recalculate_modal.no_revoke_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.no_revoke_label%22)

> Don't revoke existing badges

```diff
+Não revogar emblemas existentes
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_help`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_help%22)

> Re-apply badge actions (like adding to a group) if the user already has the badge.

```diff
+Reaplica as ações do emblema (como adicionar a um grupo) se o usuário já tiver o emblema.
```

#### [`fof-badges.forum.user.recalculate_modal.reapply_actions_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.reapply_actions_label%22)

> Re-apply actions to existing badges

```diff
+Reaplicar ações a emblemas existentes
```

#### [`fof-badges.forum.user.recalculate_modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.submit%22)

> Recalculate

```diff
+Recalcular
```

#### [`fof-badges.forum.user.recalculate_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_modal.title%22)

> Recalculate Badges

```diff
+Recalcular Emblemas
```

#### [`fof-badges.forum.user.recalculate_reapplied`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_reapplied%22)

> Actions re-applied for {reapplied} badges

```diff
+Ações reaplicadas para {reapplied} emblemas
```

#### [`fof-badges.forum.user.recalculate_success`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.recalculate_success%22)

> Badges recalculated! Awarded: {awarded}, Revoked: {revoked}, Re-applied: {reapplied}

```diff
+Emblemas recalculados! Concedidos: {awarded}, Revogados: {revoked}, Reaplicados: {reapplied}
```

#### [`fof-badges.forum.user.remove_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.remove_favorite%22)

> Remove favorite

```diff
+Remover favorito
```

#### [`fof-badges.forum.user.revoke_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.revoke_badge%22)

> Revoke badge

```diff
+Revogar emblema
```

#### [`fof-badges.forum.user.revoke_confirm`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.revoke_confirm%22)

> Are you sure you want to revoke the "{badge}" badge from this user?

```diff
+Tem certeza de que deseja revogar o emblema "{badge}" deste usuário?
```

#### [`fof-badges.forum.user.revoke_error`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.revoke_error%22)

> Failed to revoke badge.

```diff
+Falha ao revogar o emblema.
```

#### [`fof-badges.forum.user.select_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.select_badge%22)

> Select a badge...

```diff
+Selecione um emblema...
```

#### [`fof-badges.forum.user.select_badge_label`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.select_badge_label%22)

> Select Badge

```diff
+Selecionar Emblema
```

#### [`fof-badges.forum.user.set_favorite`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.set_favorite%22)

> Set as favorite

```diff
+Definir como favorito
```

#### [`fof-badges.forum.user.show_badge`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.show_badge%22)

> Show on profile

```diff
+Mostrar no perfil
```

#### [`fof-badges.forum.user.view_all_badges`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.forum.user.view_all_badges%22)

> View all badges

```diff
+Ver todos os emblemas
```

#### [`fof-badges.lib.rarity_common`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.lib.rarity_common%22)

> Common

```diff
+Comum
```

#### [`fof-badges.lib.rarity_epic`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.lib.rarity_epic%22)

> Epic

```diff
+Épico
```

#### [`fof-badges.lib.rarity_explain`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.lib.rarity_explain%22)

> {percent}% of users have this badge

```diff
+{percent}% dos usuários têm este emblema
```

#### [`fof-badges.lib.rarity_legendary`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.lib.rarity_legendary%22)

> Legendary

```diff
+Lendário
```

#### [`fof-badges.lib.rarity_rare`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.lib.rarity_rare%22)

> Rare

```diff
+Raro
```

#### [`fof-badges.lib.rarity_uncommon`](https://weblate.rob006.net/translate/flarum2/fof-badges/pt_BR/?q=context%3A%3D%22fof-badges.lib.rarity_uncommon%22)

> Uncommon

```diff
+Incomum
```


### `fof-ban-ips` (missing)

#### [`flarum-gdpr.lib.data.bannedipdata.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.bannedipdata.anonymize_description%22)

> Any IP addresses linked to the user are decoupled, but the IP itself will remain banned, along with the reason. Ensure no PII data is stored in the 'reason' field.

```diff
+Os endereços IP vinculados ao usuário são desvinculados, mas o IP em si continuará banido, junto com o motivo. Certifique-se de que nenhum dado PII seja armazenado no campo "motivo".
```

#### [`flarum-gdpr.lib.data.bannedipdata.export_description`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.bannedipdata.export_description%22)

> If an IP ban record is associated with a user (i.e. the user was banned by IP), the user's IP address will be included in the export, along with the reason for the ban and the creation date.

```diff
+Se um registro de banimento de IP estiver associado a um usuário (ou seja, o usuário foi banido por IP), o endereço IP do usuário será incluído na exportação, junto com o motivo do banimento e a data de criação.
```

#### [`fof-ban-ips.admin.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.empty_text%22)

> No banned IPs found.

```diff
+Nenhum IP banido encontrado.
```

#### [`fof-ban-ips.admin.modal.ban_ip_no_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.modal.ban_ip_no_users%22)

> No one will be banned

```diff
+Ninguém será banido
```

#### [`fof-ban-ips.admin.modal.update_title`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.modal.update_title%22)

> Update Banned IP

```diff
+Atualizar IP Banido
```

#### [`fof-ban-ips.admin.page.address_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.page.address_label%22)

> =&gt; fof-ban-ips.ref.address\_label

```diff
+=> fof-ban-ips.ref.address_label
```

#### [`fof-ban-ips.admin.page.create_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.page.create_button%22)

> =&gt; fof-ban-ips.ref.ban\_ip\_button

```diff
+=> fof-ban-ips.ref.ban_ip_button
```

#### [`fof-ban-ips.admin.page.creator_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.page.creator_label%22)

> Creator

```diff
+Criado por
```

#### [`fof-ban-ips.admin.page.date_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.page.date_label%22)

> Date

```diff
+Data
```

#### [`fof-ban-ips.admin.page.reason_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.page.reason_label%22)

> =&gt; fof-ban-ips.ref.reason\_label

```diff
+=> fof-ban-ips.ref.reason_label
```

#### [`fof-ban-ips.admin.page.user_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.page.user_label%22)

> User

```diff
+Usuário
```

#### [`fof-ban-ips.admin.permissions.ban_ip_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.permissions.ban_ip_label%22)

> =&gt; fof-ban-ips.ref.ban\_ip\_addresses

```diff
+=> fof-ban-ips.ref.ban_ip_addresses
```

#### [`fof-ban-ips.admin.permissions.view_banned_ip_list_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.admin.permissions.view_banned_ip_list_label%22)

> View banned IP address list

```diff
+Ver a lista de endereços IP banidos
```

#### [`fof-ban-ips.error.banned_ip_message`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.error.banned_ip_message%22)

> Authorization failed.

```diff
+Falha na autorização.
```

#### [`fof-ban-ips.error.no_ips_found_message`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.error.no_ips_found_message%22)

> No IP(s) found for user.

```diff
+Nenhum IP encontrado para o usuário.
```

#### [`fof-ban-ips.forum.ban_ip_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.ban_ip_button%22)

> =&gt; fof-ban-ips.ref.ban\_ip\_button

```diff
+=> fof-ban-ips.ref.ban_ip_button
```

#### [`fof-ban-ips.forum.modal.ban_ip_no_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.modal.ban_ip_no_users%22)

> No one else will be banned

```diff
+Ninguém mais será banido
```

#### [`fof-ban-ips.forum.modal.ban_options_all_ip`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.modal.ban_options_all_ip%22)

> Ban all IPs used by &lt;i&gt;{username}&lt;/i&gt;

```diff
+Banir todos os IPs usados por <i>{username}</i>
```

#### [`fof-ban-ips.forum.modal.ban_options_only_ip`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.modal.ban_options_only_ip%22)

> Only ban current IP (&lt;code&gt;{ip}&lt;/code&gt;)

```diff
+Banir apenas o IP atual (<code>{ip}</code>)
```

#### [`fof-ban-ips.forum.unban_ip_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.unban_ip_button%22)

> =&gt; fof-ban-ips.ref.unban\_ip\_button

```diff
+=> fof-ban-ips.ref.unban_ip_button
```

#### [`fof-ban-ips.forum.user_controls.ban_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.user_controls.ban_button%22)

> =&gt; fof-ban-ips.ref.ban\_label

```diff
+=> fof-ban-ips.ref.ban_label
```

#### [`fof-ban-ips.forum.user_controls.unban_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.forum.user_controls.unban_button%22)

> =&gt; fof-ban-ips.ref.unban\_label

```diff
+=> fof-ban-ips.ref.unban_label
```

#### [`fof-ban-ips.lib.modal.address_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.address_label%22)

> =&gt; fof-ban-ips.ref.address\_label

```diff
+=> fof-ban-ips.ref.address_label
```

#### [`fof-ban-ips.lib.modal.ban_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.ban_button%22)

> =&gt; fof-ban-ips.ref.ban\_label

```diff
+=> fof-ban-ips.ref.ban_label
```

#### [`fof-ban-ips.lib.modal.ban_ip_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.ban_ip_confirmation%22)

> Are you sure you want to block this IP address from use on the forum? This will block users with this IP address(es) from logging in and registering.

```diff
+Tem certeza de que deseja bloquear o uso deste endereço IP no fórum? Isso impedirá que usuários com este(s) endereço(s) IP entrem e se cadastrem.
```

#### [`fof-ban-ips.lib.modal.ban_ip_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.ban_ip_users%22)

> {count, plural, one {User {users} will be banned} other {Users {users} will be banned}}

```diff
+{count, plural, one {O usuário {users} será banido} other {Os usuários {users} serão banidos}}
```

#### [`fof-ban-ips.lib.modal.check_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.check_button%22)

> Check

```diff
+Verificar
```

#### [`fof-ban-ips.lib.modal.reason_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.reason_label%22)

> =&gt; fof-ban-ips.ref.reason\_label

```diff
+=> fof-ban-ips.ref.reason_label
```

#### [`fof-ban-ips.lib.modal.save_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.save_button%22)

> Save

```diff
+Salvar
```

#### [`fof-ban-ips.lib.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.title%22)

> =&gt; fof-ban-ips.ref.ban\_ip\_addresses

```diff
+=> fof-ban-ips.ref.ban_ip_addresses
```

#### [`fof-ban-ips.lib.modal.unban_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_button%22)

> =&gt; fof-ban-ips.ref.unban\_label

```diff
+=> fof-ban-ips.ref.unban_label
```

#### [`fof-ban-ips.lib.modal.unban_ip_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_ip_confirmation%22)

> Are you sure you want to unban this user and all other users not banned by other IPs?

```diff
+Tem certeza de que deseja desbanir este usuário e todos os outros usuários não banidos por outros IPs?
```

#### [`fof-ban-ips.lib.modal.unban_ip_no_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_ip_no_users%22)

> No one else will be unbanned

```diff
+Ninguém mais será desbanido
```

#### [`fof-ban-ips.lib.modal.unban_ip_users`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_ip_users%22)

> {count, plural, one {User {users} will be unbanned} other {Users {users} will be unbanned}}

```diff
+{count, plural, one {O usuário {users} será desbanido} other {Os usuários {users} serão desbanidos}}
```

#### [`fof-ban-ips.lib.modal.unban_options_all_ip`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_options_all_ip%22)

> Unban all IPs used by &lt;i&gt;{username}&lt;/i&gt;

```diff
+Desbanir todos os IPs usados por <i>{username}</i>
```

#### [`fof-ban-ips.lib.modal.unban_options_only_ip`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_options_only_ip%22)

> Only unban current IP (&lt;code&gt;{ip}&lt;/code&gt;)

```diff
+Desbanir apenas o IP atual (<code>{ip}</code>)
```

#### [`fof-ban-ips.lib.modal.unban_title`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unban_title%22)

> =&gt; fof-ban-ips.ref.unban\_ip\_addresses

```diff
+=> fof-ban-ips.ref.unban_ip_addresses
```

#### [`fof-ban-ips.lib.modal.unbanned_ips`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.lib.modal.unbanned_ips%22)

> Unbanned &lt;code&gt;{ips}&lt;/code&gt;.

```diff
+Desbanido(s): <code>{ips}</code>.
```

#### [`fof-ban-ips.ref.address_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.ref.address_label%22)

> IP Address

```diff
+Endereço IP
```

#### [`fof-ban-ips.ref.ban_ip_addresses`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.ref.ban_ip_addresses%22)

> Ban IP(s)

```diff
+Banir IP(s)
```

#### [`fof-ban-ips.ref.ban_ip_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.ref.ban_ip_button%22)

> Ban IP

```diff
+Banir IP
```

#### [`fof-ban-ips.ref.reason_label`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.ref.reason_label%22)

> Reason

```diff
+Motivo
```

#### [`fof-ban-ips.ref.unban_ip_addresses`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.ref.unban_ip_addresses%22)

> Unban IP(s)

```diff
+Desbanir IP(s)
```

#### [`fof-ban-ips.ref.unban_ip_button`](https://weblate.rob006.net/translate/flarum2/fof-ban-ips/pt_BR/?q=context%3A%3D%22fof-ban-ips.ref.unban_ip_button%22)

> Unban IP

```diff
+Desbanir IP
```


### `fof-best-answer` (missing)

#### [`flarum-audit.lib.browser.discussion.best_answer_set`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_set%22)

> Set {post} as best answer in {discussion}

```diff
+Definiu o {post} como melhor resposta em {discussion}
```

#### [`flarum-audit.lib.browser.discussion.best_answer_unset`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.discussion.best_answer_unset%22)

> Unset best answer for {post} in {discussion}

```diff
+Removeu a melhor resposta do {post} em {discussion}
```

#### [`fof-best-answer.admin.permissions.allow_select_own_post`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.permissions.allow_select_own_post%22)

> Select own post as Best Answer

```diff
+Selecionar o próprio post como melhor resposta
```

#### [`fof-best-answer.admin.settings.discussion_sidebar_jump_button`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.discussion_sidebar_jump_button%22)

> Display jump to Best Answer button in discussion sidebar

```diff
+Mostrar o botão de ir para a melhor resposta na barra lateral da discussão
```

#### [`fof-best-answer.admin.settings.discussion_sidebar_jump_button_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.discussion_sidebar_jump_button_help%22)

> Adds a button to the discussion sidebar which jumps to the Best Answer in the stream of posts.

```diff
+Adiciona à barra lateral da discussão um botão que leva à melhor resposta na sequência de posts.
```

#### [`fof-best-answer.admin.settings.enabled_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.enabled_tags_help%22)

> Select which tags, if any, to enable Best Answers for. These tags will become "Q&amp;A" formatted tags, and will have the ability to set Best Answers.

```diff
+Selecione em quais tags, se houver, ativar a melhor resposta. Essas tags passarão a ter o formato de "Perguntas e Respostas" e permitirão definir melhores respostas.
```

#### [`fof-best-answer.admin.settings.enabled_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.enabled_tags_label%22)

> Enabled Tags

```diff
+Tags Ativadas
```

#### [`fof-best-answer.admin.settings.label.tags`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.label.tags%22)

> Best Answer Tags

```diff
+Tags de Melhor Resposta
```

#### [`fof-best-answer.admin.settings.remind_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.remind_tags_help%22)

> Select which tags, if any, to send reminders for. Reminders will only be sent for discussions with these tags.

```diff
+Selecione para quais tags, se houver, enviar lembretes. Os lembretes só serão enviados para discussões com essas tags.
```

#### [`fof-best-answer.admin.settings.remind_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.remind_tags_label%22)

> Reminder Tags

```diff
+Tags com Lembrete
```

#### [`fof-best-answer.admin.settings.select_best_answer_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_tags_help%22)

> Select which tags, if any, to add to discussions when a Best Answer is set. Only secondary tags are allowed. These tags will be removed if the Best Answer is removed.

```diff
+Selecione quais tags, se houver, adicionar às discussões quando uma melhor resposta for definida. Apenas tags secundárias são permitidas. Essas tags serão removidas se a melhor resposta for removida.
```

#### [`fof-best-answer.admin.settings.select_best_answer_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.select_best_answer_tags_label%22)

> Tags for discussions with Best Answers

```diff
+Tags para discussões com melhor resposta
```

#### [`fof-best-answer.admin.settings.show_max_lines_help`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.show_max_lines_help%22)

> Set to 0 to disable. If a post is longer than the configured amount of lines, it will be truncated in the post preview with a fade out effect.

```diff
+Defina 0 para desativar. Se um post tiver mais linhas que o configurado, ele será truncado na prévia do post com um efeito de esmaecimento.
```

#### [`fof-best-answer.admin.settings.show_max_lines_label`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.show_max_lines_label%22)

> Max lines to show in post preview

```diff
+Máximo de linhas na prévia do post
```

#### [`fof-best-answer.admin.settings.tags_info`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.admin.settings.tags_info%22)

> When a tag is Best Answer enabled, assign permissions to each user group that may set answers (own discussion, any discussion). Permissions may be assigned globally (for any Best Answer anabled tag), or on a per tag basis.
>

```diff
+Quando uma tag tiver a melhor resposta ativada, atribua permissões a cada grupo de usuários que poderá definir respostas (própria discussão, qualquer discussão). As permissões podem ser atribuídas globalmente (para qualquer tag com melhor resposta ativada) ou por tag.
+
```

#### [`fof-best-answer.forum.discussion.jump_to_best_answer_button`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-best-answer.forum.discussion.jump_to_best_answer_button%22)

> View Best Answer

```diff
+Ver Melhor Resposta
```

#### [`fof-user-directory.lib.sort.least_best_answers`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.least_best_answers%22)

> Least best answers

```diff
+Menos melhores respostas
```

#### [`fof-user-directory.lib.sort.most_best_answers`](https://weblate.rob006.net/translate/flarum2/fof-best-answer/pt_BR/?q=context%3A%3D%22fof-user-directory.lib.sort.most_best_answers%22)

> Most best answers

```diff
+Mais melhores respostas
```


### `fof-blog` (missing)

#### [`fof-blog.forum.article_settings.fields.highlight.helper_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.highlight.helper_text%22)

> Give this post a big image on the blog overview page.

```diff
+Dá a este post uma imagem grande na página de visão geral do blog.
```

#### [`fof-blog.forum.article_settings.fields.highlight.title`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.highlight.title%22)

> Highlighted post

```diff
+Post em destaque
```

#### [`fof-blog.forum.article_settings.fields.image.helper_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.image.helper_text%22)

> Best image resolution for social media: 1200x630

```diff
+Melhor resolução de imagem para redes sociais: 1200x630
```

#### [`fof-blog.forum.article_settings.fields.image.title`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.image.title%22)

> Article image

```diff
+Imagem do artigo
```

#### [`fof-blog.forum.article_settings.fields.summary.helper_text`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.summary.helper_text%22)

> This summary will be visible on the blog overview page and will be used for SEO purposes.

```diff
+Este resumo ficará visível na página de visão geral do blog e será usado para fins de SEO.
```

#### [`fof-blog.forum.article_settings.fields.summary.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.summary.placeholder%22)

> Please enter a summary

```diff
+Digite um resumo
```

#### [`fof-blog.forum.article_settings.fields.summary.title`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.fields.summary.title%22)

> Article summary

```diff
+Resumo do artigo
```

#### [`fof-blog.forum.article_settings.title`](https://weblate.rob006.net/translate/flarum2/fof-blog/pt_BR/?q=context%3A%3D%22fof-blog.forum.article_settings.title%22)

> Blog post settings

```diff
+Configurações do post do blog
```


### `fof-bookmarks` (missing)

#### [`fof-bookmarks.admin.settings.independent_button`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.independent_button%22)

> Show the discussion bookmark control in the sidebar

```diff
+Mostrar o controle de favoritos da discussão na barra lateral
```

#### [`fof-bookmarks.admin.settings.independent_button_help`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.independent_button_help%22)

> When off, the control appears in the discussion dropdown menu instead.

```diff
+Quando desativado, o controle aparece no menu suspenso da discussão.
```

#### [`fof-bookmarks.admin.settings.post_button_position`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position%22)

> Post bookmark button position

```diff
+Posição do botão de favoritar posts
```

#### [`fof-bookmarks.admin.settings.post_button_position_actions`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position_actions%22)

> Below post (quick actions)

```diff
+Abaixo do post (ações rápidas)
```

#### [`fof-bookmarks.admin.settings.post_button_position_header`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position_header%22)

> Above post (header)

```diff
+Acima do post (cabeçalho)
```

#### [`fof-bookmarks.admin.settings.post_button_position_menu`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_button_position_menu%22)

> In post menu (three dots)

```diff
+No menu do post (três pontos)
```

#### [`fof-bookmarks.admin.settings.post_header_badge`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_header_badge%22)

> Label bookmarked posts

```diff
+Rotular posts favoritados
```

#### [`fof-bookmarks.admin.settings.post_header_badge_help`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.admin.settings.post_header_badge_help%22)

> Shows a label above a bookmarked post. Only applies when the button is not in the header.

```diff
+Mostra um rótulo acima de um post favoritado. Só se aplica quando o botão não está no cabeçalho.
```

#### [`fof-bookmarks.forum.alert.added`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.alert.added%22)

> Bookmark added!

```diff
+Favorito adicionado!
```

#### [`fof-bookmarks.forum.alert.removed`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.alert.removed%22)

> Bookmark removed!

```diff
+Favorito removido!
```

#### [`fof-bookmarks.forum.alert.show_bookmarks`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.alert.show_bookmarks%22)

> Go to bookmarks

```diff
+Ir para os favoritos
```

#### [`fof-bookmarks.forum.badge`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.badge%22)

> Bookmarked

```diff
+Nos favoritos
```

#### [`fof-bookmarks.forum.dropdownButton.add`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.dropdownButton.add%22)

> Add to bookmarks

```diff
+Adicionar aos favoritos
```

#### [`fof-bookmarks.forum.dropdownButton.remove`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.dropdownButton.remove%22)

> Remove from bookmarks

```diff
+Remover dos favoritos
```

#### [`fof-bookmarks.forum.independentButton.add`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.independentButton.add%22)

> Bookmark

```diff
+Favoritar
```

#### [`fof-bookmarks.forum.independentButton.remove`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.independentButton.remove%22)

> Bookmarked

```diff
+Nos favoritos
```

#### [`fof-bookmarks.forum.page.link`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.page.link%22)

> Bookmarks

```diff
+Favoritos
```

#### [`fof-bookmarks.forum.page.tab.discussions`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.page.tab.discussions%22)

> Discussions

```diff
+Discussões
```

#### [`fof-bookmarks.forum.page.tab.posts`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.page.tab.posts%22)

> Posts

```diff
+Posts
```

#### [`fof-bookmarks.forum.page.title`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.page.title%22)

> Bookmarks

```diff
+Favoritos
```

#### [`fof-bookmarks.forum.postButton.add`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.postButton.add%22)

> Bookmark

```diff
+Favoritar
```

#### [`fof-bookmarks.forum.postButton.remove`](https://weblate.rob006.net/translate/flarum2/fof-bookmarks/pt_BR/?q=context%3A%3D%22fof-bookmarks.forum.postButton.remove%22)

> Bookmarked

```diff
+Nos favoritos
```


### `fof-byobu` (missing)

#### [`fof-byobu.admin.permission.add_more_than_two_user_recipients`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.permission.add_more_than_two_user_recipients%22)

> Add more than 2 user recipients to private discussion

```diff
+Adicionar mais de 2 usuários destinatários a uma discussão privada
```

#### [`fof-byobu.admin.settings.hide_from_all_discussions_page`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.hide_from_all_discussions_page%22)

> Hide PDs from "All Discussions" page

```diff
+Ocultar DPs da página "Todas as Discussões"
```

#### [`fof-byobu.admin.settings.hide_from_all_discussions_page_help`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.admin.settings.hide_from_all_discussions_page_help%22)

> Private discussions will only be accessible from the "Private Discussions" page or the user profile

```diff
+As discussões privadas só poderão ser acessadas pela página "Discussões Privadas" ou pelo perfil do usuário
```

#### [`fof-byobu.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-byobu/pt_BR/?q=context%3A%3D%22fof-byobu.forum.hero.title%22)

> =&gt; fof-byobu.forum.nav.nav\_item

```diff
+=> fof-byobu.forum.nav.nav_item
```


### `fof-categories` (missing)

#### [`fof-categories.admin.basics.categories_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.basics.categories_label%22)

> Categories

```diff
+Categorias
```

#### [`fof-categories.admin.headings.child_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.headings.child_display%22)

> Child Category Display

```diff
+Exibição da Categoria Filha
```

#### [`fof-categories.admin.headings.layout`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.headings.layout%22)

> Layout

```diff
+Layout
```

#### [`fof-categories.admin.headings.nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.headings.nav%22)

> Navigation

```diff
+Navegação
```

#### [`fof-categories.admin.headings.parent_display`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.headings.parent_display%22)

> Parent Category Display

```diff
+Exibição da Categoria Pai
```

#### [`fof-categories.admin.headings.performance`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.headings.performance%22)

> Performance

```diff
+Desempenho
```

#### [`fof-categories.admin.help.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.help.child_bare_icon%22)

> Should icons on child categories be displayed without a circular background?

```diff
+Os ícones das categorias filhas devem ser exibidos sem fundo circular?
```

#### [`fof-categories.admin.help.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.help.full_page_desktop%22)

> Should the sidebar nav menu be collapsed to a row (like on the traditional tags page)? This will also hide widgets (such as Friends of Flarum Forum Statistics) from the categories page navbar.

```diff
+O menu de navegação lateral deve ser recolhido em uma linha (como na página de tags tradicional)? Isso também ocultará widgets (como o Friends of Flarum Forum Statistics) da barra de navegação da página de categorias.
```

#### [`fof-categories.admin.help.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.help.small_forum_optimized%22)

> This will give more accurate discussion/post counts, but will slow medium and large forums dramatically.

```diff
+Isso dará contagens de discussões/posts mais precisas, mas deixará fóruns médios e grandes drasticamente mais lentos.
```

#### [`fof-categories.admin.labels.child_bare_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.child_bare_icon%22)

> Bare child icons?

```diff
+Ícones das filhas sem fundo?
```

#### [`fof-categories.admin.labels.compact_mobile_mode`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.compact_mobile_mode%22)

> Compact mobile mode

```diff
+Modo móvel compacto
```

#### [`fof-categories.admin.labels.full_page_desktop`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.full_page_desktop%22)

> Full page desktop?

```diff
+Página inteira no desktop?
```

#### [`fof-categories.admin.labels.keep_tags_nav`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.keep_tags_nav%22)

> Keep the tags page link in the nav sidebar?

```diff
+Manter o link da página de tags na barra lateral de navegação?
```

#### [`fof-categories.admin.labels.parent_remove_description`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_description%22)

> Hide descriptions for top-level tags?

```diff
+Ocultar descrições das tags de nível superior?
```

#### [`fof-categories.admin.labels.parent_remove_icon`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_icon%22)

> Hide icons for top-level tags?

```diff
+Ocultar ícones das tags de nível superior?
```

#### [`fof-categories.admin.labels.parent_remove_last_discussion`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_last_discussion%22)

> Hide most recent discussions for top-level tags?

```diff
+Ocultar as discussões mais recentes das tags de nível superior?
```

#### [`fof-categories.admin.labels.parent_remove_stats`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.parent_remove_stats%22)

> Hide stats for top-level tags?

```diff
+Ocultar estatísticas das tags de nível superior?
```

#### [`fof-categories.admin.labels.small_forum_optimized`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.labels.small_forum_optimized%22)

> Optimize for small forums?

```diff
+Otimizar para fóruns pequenos?
```

#### [`fof-categories.admin.title`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.admin.title%22)

> Categories Settings

```diff
+Configurações de Categorias
```

#### [`fof-categories.forum.all_categories.meta_description_text`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.all_categories.meta_description_text%22)

> All Categories

```diff
+Todas as Categorias
```

#### [`fof-categories.forum.all_categories.meta_title_text`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.all_categories.meta_title_text%22)

> =&gt; fof-categories.ref.categories

```diff
+=> fof-categories.ref.categories
```

#### [`fof-categories.forum.header.back_to_categories_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.header.back_to_categories_tooltip%22)

> Back to Categories

```diff
+Voltar para Categorias
```

#### [`fof-categories.forum.index.categories_link`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.index.categories_link%22)

> =&gt; fof-categories.ref.categories

```diff
+=> fof-categories.ref.categories
```

#### [`fof-categories.forum.last_discussion_widget.no_discussions`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.last_discussion_widget.no_discussions%22)

> No Discussions (Yet!)

```diff
+Sem Discussões (Ainda!)
```

#### [`fof-categories.forum.stat-widgets.discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.stat-widgets.discussion_label%22)

> Discussions

```diff
+Discussões
```

#### [`fof-categories.forum.stat-widgets.post_label`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.forum.stat-widgets.post_label%22)

> Posts

```diff
+Posts
```

#### [`fof-categories.ref.categories`](https://weblate.rob006.net/translate/flarum2/fof-categories/pt_BR/?q=context%3A%3D%22fof-categories.ref.categories%22)

> Categories

```diff
+Categorias
```


### `fof-checklist` (missing)

#### [`fof-checklist.admin.settings.cross_out_completed_items`](https://weblate.rob006.net/translate/flarum2/fof-checklist/pt_BR/?q=context%3A%3D%22fof-checklist.admin.settings.cross_out_completed_items%22)

> Cross out completed checklist items?

```diff
+Riscar os itens concluídos da checklist?
```

#### [`fof-checklist.lib.composer.checklist_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-checklist/pt_BR/?q=context%3A%3D%22fof-checklist.lib.composer.checklist_tooltip%22)

> Toggle Checklist

```diff
+Alternar Checklist
```


### `fof-clockwork` (missing)

#### [`fof-clockwork.admin.dashboard.button_label`](https://weblate.rob006.net/translate/flarum2/fof-clockwork/pt_BR/?q=context%3A%3D%22fof-clockwork.admin.dashboard.button_label%22)

> Open Clockwork

```diff
+Abrir Clockwork
```


### `fof-cookie-consent` (missing)

#### [`fof-cookie-consent.admin.settings.backgroundColor`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.backgroundColor%22)

> Background

```diff
+Fundo
```

#### [`fof-cookie-consent.admin.settings.buttonBackgroundColor`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.buttonBackgroundColor%22)

> Background

```diff
+Fundo
```

#### [`fof-cookie-consent.admin.settings.buttonTextColor`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.buttonTextColor%22)

> Text

```diff
+Texto
```

#### [`fof-cookie-consent.admin.settings.configuration_title`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.configuration_title%22)

> Configuration Options

```diff
+Opções de Configuração
```

#### [`fof-cookie-consent.admin.settings.learnMoreLinkUrl`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.learnMoreLinkUrl%22)

> Link

```diff
+Link
```

#### [`fof-cookie-consent.admin.settings.textColor`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.textColor%22)

> Text

```diff
+Texto
```

#### [`fof-cookie-consent.admin.settings.theme_popup_title`](https://weblate.rob006.net/translate/flarum2/fof-cookie-consent/pt_BR/?q=context%3A%3D%22fof-cookie-consent.admin.settings.theme_popup_title%22)

> Popup Colors

```diff
+Cores do Popup
```


### `fof-default-user-preferences` (missing)

#### [`fof-default-user-preferences.admin.settings.discloseOnline`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.discloseOnline%22)

> Disclose Online

```diff
+Revelar Status Online
```

#### [`fof-default-user-preferences.admin.settings.discloseOnline-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.discloseOnline-help%22)

> When enabled, new users will allow others to see when they are online. Admins and other users with permission will still be able to see online status regardless of this setting.

```diff
+Quando ativado, os novos usuários permitirão que outros vejam quando estão online. Administradores e outros usuários com permissão ainda poderão ver o status online, independentemente desta configuração.
```

#### [`fof-default-user-preferences.admin.settings.followAfterReply`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply%22)

> Follow after reply

```diff
+Seguir após responder
```

#### [`fof-default-user-preferences.admin.settings.followAfterReply-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.followAfterReply-help%22)

> When enabled, new users will automatically follow discussions they reply to or comment on.

```diff
+Quando ativado, os novos usuários seguirão automaticamente as discussões em que responderem ou comentarem.
```

#### [`fof-default-user-preferences.admin.settings.groupMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.groupMentioned%22)

> Group mentioned email

```diff
+E-mail de grupo mencionado
```

#### [`fof-default-user-preferences.admin.settings.indexProfile`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.indexProfile%22)

> Index Profile

```diff
+Indexar Perfil
```

#### [`fof-default-user-preferences.admin.settings.indexProfile-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.indexProfile-help%22)

> When enabled, new users will allow search engines to index their profile page, unless blocked by other site or extension settings.

```diff
+Quando ativado, os novos usuários permitirão que mecanismos de busca indexem sua página de perfil, a menos que isso seja bloqueado por outras configurações do site ou de extensões.
```

#### [`fof-default-user-preferences.admin.settings.postMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned%22)

> Post mentioned email

```diff
+E-mail de post mencionado
```

#### [`fof-default-user-preferences.admin.settings.postMentioned-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.postMentioned-help%22)

> When enabled, new users will automatically opt into receiving an email notification when one of their posts is mentioned.

```diff
+Quando ativado, os novos usuários optarão automaticamente por receber uma notificação por e-mail quando um de seus posts for mencionado.
```

#### [`fof-default-user-preferences.admin.settings.userMentioned`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned%22)

> User mentioned email

```diff
+E-mail de usuário mencionado
```

#### [`fof-default-user-preferences.admin.settings.userMentioned-help`](https://weblate.rob006.net/translate/flarum2/fof-default-user-preferences/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.userMentioned-help%22)

> When enabled, new users will automatically opt into receiving an email notification when they are @mentioned.

```diff
+Quando ativado, os novos usuários optarão automaticamente por receber uma notificação por e-mail quando forem @mencionados.
```


### `fof-discussion-views` (missing)

#### [`fof-discussion-views.admin.permissions.reset_views_label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/pt_BR/?q=context%3A%3D%22fof-discussion-views.admin.permissions.reset_views_label%22)

> Set discussion views

```diff
+Definir visualizações de discussões
```

#### [`fof-discussion-views.admin.settings.ignore_crawlers`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/pt_BR/?q=context%3A%3D%22fof-discussion-views.admin.settings.ignore_crawlers%22)

> Ignore crawler visits

```diff
+Ignorar visitas de rastreadores
```

#### [`fof-discussion-views.forum.discussion_controls.resetviews_button`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/pt_BR/?q=context%3A%3D%22fof-discussion-views.forum.discussion_controls.resetviews_button%22)

> Set view count

```diff
+Definir visualizações
```

#### [`fof-discussion-views.forum.modal_resetviews.label`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/pt_BR/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.label%22)

> Set to view count

```diff
+Definir visualizações para
```

#### [`fof-discussion-views.forum.modal_resetviews.submit`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/pt_BR/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.submit%22)

> Submit

```diff
+Enviar
```

#### [`fof-discussion-views.forum.modal_resetviews.title`](https://weblate.rob006.net/translate/flarum2/fof-discussion-views/pt_BR/?q=context%3A%3D%22fof-discussion-views.forum.modal_resetviews.title%22)

> Reset discussion view count

```diff
+Redefinir visualizações da discussão
```


### `fof-doorman` (missing)

#### [`fof-doorman.admin.list.columns.activates_user`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.activates_user%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.label

```diff
+=> fof-doorman.admin.ref.fields.activates_user.label
```

#### [`fof-doorman.admin.list.columns.created_by`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.created_by%22)

> Created By

```diff
+Criado por
```

#### [`fof-doorman.admin.list.columns.group`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.group%22)

> =&gt; fof-doorman.admin.ref.fields.group.label

```diff
+=> fof-doorman.admin.ref.fields.group.label
```

#### [`fof-doorman.admin.list.columns.id`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.id%22)

> ID

```diff
+ID
```

#### [`fof-doorman.admin.list.columns.key`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.key%22)

> =&gt; fof-doorman.admin.ref.fields.key.label

```diff
+=> fof-doorman.admin.ref.fields.key.label
```

#### [`fof-doorman.admin.list.columns.manage`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.manage%22)

> Manage

```diff
+Gerenciar
```

#### [`fof-doorman.admin.list.columns.max_uses`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.max_uses%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.label

```diff
+=> fof-doorman.admin.ref.fields.max_uses.label
```

#### [`fof-doorman.admin.list.columns.uses`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.columns.uses%22)

> Uses

```diff
+Usos
```

#### [`fof-doorman.admin.list.content.delete`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.delete%22)

> Are you sure you want to delete the invite code "{key}"?

```diff
+Tem certeza de que deseja excluir o código de convite "{key}"?
```

#### [`fof-doorman.admin.list.content.invalid_column`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.invalid_column%22)

> =&gt; core.admin.users.grid.invalid\_column\_content

```diff
+=> core.admin.users.grid.invalid_column_content
```

#### [`fof-doorman.admin.list.content.no_created_by`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.no_created_by%22)

> Unknown User

```diff
+Usuário Desconhecido
```

#### [`fof-doorman.admin.list.content.no_group`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.no_group%22)

> =&gt; core.admin.users.grid.columns.group\_badges.no\_badges

```diff
+=> core.admin.users.grid.columns.group_badges.no_badges
```

#### [`fof-doorman.admin.list.content.uses.total_uses`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.uses.total_uses%22)

> {totalUses, plural, one {Used {totalUses} time} other {Used {totalUses} times}}

```diff
+{totalUses, plural, one {Usado # vez} other {Usado # vezes}}
```

#### [`fof-doorman.admin.list.content.uses.used_times`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.uses.used_times%22)

> {remaining, plural, =0 {Unlimited uses} one {{remainingUses} use left} other {{remainingUses} uses left}}

```diff
+{remaining, plural, =0 {Usos ilimitados} one {{remainingUses} uso restante} other {{remainingUses} usos restantes}}
```

#### [`fof-doorman.admin.list.content.warning`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.list.content.warning%22)

> This invite code has been used its max number of times.

```diff
+Este código de convite já foi usado o número máximo de vezes.
```

#### [`fof-doorman.admin.modals.create_doorkey.activates_user.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.activates_user.help%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.help

```diff
+=> fof-doorman.admin.ref.fields.activates_user.help
```

#### [`fof-doorman.admin.modals.create_doorkey.activates_user.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.activates_user.label%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.label

```diff
+=> fof-doorman.admin.ref.fields.activates_user.label
```

#### [`fof-doorman.admin.modals.create_doorkey.group.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.group.help%22)

> =&gt; fof-doorman.admin.ref.fields.group.help

```diff
+=> fof-doorman.admin.ref.fields.group.help
```

#### [`fof-doorman.admin.modals.create_doorkey.group.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.group.label%22)

> =&gt; fof-doorman.admin.ref.fields.group.label

```diff
+=> fof-doorman.admin.ref.fields.group.label
```

#### [`fof-doorman.admin.modals.create_doorkey.key.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.key.help%22)

> =&gt; fof-doorman.admin.ref.fields.key.help

```diff
+=> fof-doorman.admin.ref.fields.key.help
```

#### [`fof-doorman.admin.modals.create_doorkey.key.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.key.label%22)

> =&gt; fof-doorman.admin.ref.fields.key.label

```diff
+=> fof-doorman.admin.ref.fields.key.label
```

#### [`fof-doorman.admin.modals.create_doorkey.max_uses.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.max_uses.help%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.help

```diff
+=> fof-doorman.admin.ref.fields.max_uses.help
```

#### [`fof-doorman.admin.modals.create_doorkey.max_uses.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.max_uses.label%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.label

```diff
+=> fof-doorman.admin.ref.fields.max_uses.label
```

#### [`fof-doorman.admin.modals.create_doorkey.submit_and_create_another_button`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.submit_and_create_another_button%22)

> Create and add another

```diff
+Criar e adicionar outro
```

#### [`fof-doorman.admin.modals.create_doorkey.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.submit_button%22)

> Create Invite Code

```diff
+Criar Código de Convite
```

#### [`fof-doorman.admin.modals.create_doorkey.title`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.create_doorkey.title%22)

> Create new Invite Code

```diff
+Criar novo código de convite
```

#### [`fof-doorman.admin.modals.edit_doorkey.activates_user.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.activates_user.help%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.help

```diff
+=> fof-doorman.admin.ref.fields.activates_user.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.activates_user.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.activates_user.label%22)

> =&gt; fof-doorman.admin.ref.fields.activates\_user.label

```diff
+=> fof-doorman.admin.ref.fields.activates_user.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.group.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.group.help%22)

> =&gt; fof-doorman.admin.ref.fields.group.help

```diff
+=> fof-doorman.admin.ref.fields.group.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.group.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.group.label%22)

> =&gt; fof-doorman.admin.ref.fields.group.label

```diff
+=> fof-doorman.admin.ref.fields.group.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.key.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.key.help%22)

> =&gt; fof-doorman.admin.ref.fields.key.help

```diff
+=> fof-doorman.admin.ref.fields.key.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.key.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.key.label%22)

> =&gt; fof-doorman.admin.ref.fields.key.label

```diff
+=> fof-doorman.admin.ref.fields.key.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.max_uses.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.max_uses.help%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.help

```diff
+=> fof-doorman.admin.ref.fields.max_uses.help
```

#### [`fof-doorman.admin.modals.edit_doorkey.max_uses.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.max_uses.label%22)

> =&gt; fof-doorman.admin.ref.fields.max\_uses.label

```diff
+=> fof-doorman.admin.ref.fields.max_uses.label
```

#### [`fof-doorman.admin.modals.edit_doorkey.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.submit_button%22)

> Save Changes

```diff
+Salvar Alterações
```

#### [`fof-doorman.admin.modals.edit_doorkey.title`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.edit_doorkey.title%22)

> Edit Invite Code

```diff
+Editar Código de Convite
```

#### [`fof-doorman.admin.modals.send_invites.group`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.group%22)

> Sending invites for {group} group

```diff
+Enviando convites para o grupo {group}
```

#### [`fof-doorman.admin.modals.send_invites.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.help%22)

> Accepts a comma, space, or comma-space seperated list. Type an individual email or paste a list then press space to add it/them.

```diff
+Aceita uma lista separada por vírgula, espaço ou vírgula e espaço. Digite um e-mail individual ou cole uma lista e pressione espaço para adicionar.
```

#### [`fof-doorman.admin.modals.send_invites.invalid_emails`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.invalid_emails%22)

> The following email(s) are invalid: {emails}

```diff
+E-mail(s) inválido(s): {emails}
```

#### [`fof-doorman.admin.modals.send_invites.max_use_conflict`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.max_use_conflict%22)

> The number of emails exceeds the max number of uses for this code.

```diff
+O número de e-mails excede o máximo de usos deste código.
```

#### [`fof-doorman.admin.modals.send_invites.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.placeholder%22)

> Enter emails here

```diff
+Digite os e-mails aqui
```

#### [`fof-doorman.admin.modals.send_invites.send`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.send%22)

> Send Emails

```diff
+Enviar E-mails
```

#### [`fof-doorman.admin.modals.send_invites.success`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.success%22)

> Emails successfully sent

```diff
+E-mails enviados com sucesso
```

#### [`fof-doorman.admin.modals.send_invites.title`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.modals.send_invites.title%22)

> Send Invite Codes

```diff
+Enviar Códigos de Convite
```

#### [`fof-doorman.admin.ref.fields.activates_user.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.activates_user.help%22)

> Automatically activates the user when they register.

```diff
+Ativa o usuário automaticamente quando ele se cadastra.
```

#### [`fof-doorman.admin.ref.fields.activates_user.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.activates_user.label%22)

> Activates User

```diff
+Ativa o Usuário
```

#### [`fof-doorman.admin.ref.fields.group.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.group.help%22)

> The group the user will be added to when registering using the invite code.

```diff
+O grupo ao qual o usuário será adicionado ao se cadastrar com o código de convite.
```

#### [`fof-doorman.admin.ref.fields.group.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.group.label%22)

> Group

```diff
+Grupo
```

#### [`fof-doorman.admin.ref.fields.key.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.key.help%22)

> Code the user will type in when registering.

```diff
+Código que o usuário digitará ao se cadastrar.
```

#### [`fof-doorman.admin.ref.fields.key.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.key.label%22)

> Key

```diff
+Chave
```

#### [`fof-doorman.admin.ref.fields.max_uses.help`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.max_uses.help%22)

> The max number of times the code can be used. Set to 0 for unlimited uses

```diff
+O número máximo de vezes que o código pode ser usado. Defina 0 para usos ilimitados
```

#### [`fof-doorman.admin.ref.fields.max_uses.label`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.ref.fields.max_uses.label%22)

> Max Uses

```diff
+Máximo de Usos
```

#### [`fof-doorman.admin.settings.create_doorkey_button`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.settings.create_doorkey_button%22)

> Create Invite Code

```diff
+Criar Código de Convite
```

#### [`fof-doorman.admin.settings.optional_usage`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.settings.optional_usage%22)

> Make invite code optional when signing up

```diff
+Tornar o código de convite opcional no cadastro
```

#### [`fof-doorman.admin.settings.search`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.settings.search%22)

> Search doorkeys

```diff
+Buscar códigos de convite
```

#### [`fof-doorman.admin.settings.total_doorkeys`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.admin.settings.total_doorkeys%22)

> Total doorkeys: {count}

```diff
+Total de códigos: {count}
```

#### [`fof-doorman.email.subject`](https://weblate.rob006.net/translate/flarum2/fof-doorman/pt_BR/?q=context%3A%3D%22fof-doorman.email.subject%22)

> Invite to Join

```diff
+Convite para Participar
```


### `fof-drafts` (missing)

#### [`flarum-gdpr.lib.data.drafts.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.drafts.delete_description%22)

> Delete all drafts created by the user.

```diff
+Exclui todos os rascunhos criados pelo usuário.
```

#### [`flarum-gdpr.lib.data.drafts.export_description`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.drafts.export_description%22)

> All drafts created by the user.

```diff
+Todos os rascunhos criados pelo usuário.
```

#### [`fof-drafts.admin.permissions.schedule`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.admin.permissions.schedule%22)

> Schedule drafts

```diff
+Agendar rascunhos
```

#### [`fof-drafts.admin.permissions.start`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.admin.permissions.start%22)

> Create drafts

```diff
+Criar rascunhos
```

#### [`fof-drafts.admin.settings.enable_scheduled_drafts`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.admin.settings.enable_scheduled_drafts%22)

> Enable Scheduled Drafts

```diff
+Ativar Rascunhos Agendados
```

#### [`fof-drafts.admin.settings.schedule_log_output`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.admin.settings.schedule_log_output%22)

> Append scheduler output to log storage

```diff
+Anexar a saída do agendador aos logs
```

#### [`fof-drafts.admin.settings.schedule_on_one_server`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.admin.settings.schedule_on_one_server%22)

> Use 'onOneServer()' directive for the task scheduler (requires Redis/Memcache)

```diff
+Usar a diretiva 'onOneServer()' no agendador de tarefas (requer Redis/Memcache)
```

#### [`fof-drafts.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.admin.settings.title%22)

> FoF Drafts

```diff
+FoF Drafts
```

#### [`fof-drafts.console.scheduled_drafts_disabled`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.console.scheduled_drafts_disabled%22)

> Scheduled drafts are currently disabled in settings.

```diff
+Os rascunhos agendados estão desativados nas configurações.
```

#### [`fof-drafts.forum.composer.discard_empty_draft_alert`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.composer.discard_empty_draft_alert%22)

> Discard empty draft?

```diff
+Descartar o rascunho vazio?
```

#### [`fof-drafts.forum.composer.exit_alert`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.composer.exit_alert%22)

> Discard changes to draft?

```diff
+Descartar alterações do rascunho?
```

#### [`fof-drafts.forum.composer.saved`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.composer.saved%22)

> Saved!

```diff
+Salvo!
```

#### [`fof-drafts.forum.composer.saving`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.composer.saving%22)

> Saving...

```diff
+Salvando...
```

#### [`fof-drafts.forum.composer.title`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.composer.title%22)

> Save Draft

```diff
+Salvar Rascunho
```

#### [`fof-drafts.forum.dropdown.alert`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.alert%22)

> Are you sure you want to delete your draft?

```diff
+Tem certeza de que deseja excluir seu rascunho?
```

#### [`fof-drafts.forum.dropdown.delete_all_alert`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.delete_all_alert%22)

> Are you sure you want to delete all your drafts?

```diff
+Tem certeza de que deseja excluir todos os seus rascunhos?
```

#### [`fof-drafts.forum.dropdown.delete_all_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.delete_all_button%22)

> Delete all drafts

```diff
+Excluir todos os rascunhos
```

#### [`fof-drafts.forum.dropdown.delete_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.delete_button%22)

> Delete draft

```diff
+Excluir rascunho
```

#### [`fof-drafts.forum.dropdown.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.empty_text%22)

> You haven't saved any drafts

```diff
+Você não salvou nenhum rascunho
```

#### [`fof-drafts.forum.dropdown.schedule_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.schedule_button%22)

> =&gt; fof-drafts.ref.schedule\_draft

```diff
+=> fof-drafts.ref.schedule_draft
```

#### [`fof-drafts.forum.dropdown.scheduled_icon_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.scheduled_icon_tooltip%22)

> Scheduled for {datetime}

```diff
+Agendado para {datetime}
```

#### [`fof-drafts.forum.dropdown.scheduled_icon_tooltip_formatter`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.scheduled_icon_tooltip_formatter%22)

> L \[at\] LT

```diff
+L [às] LT
```

#### [`fof-drafts.forum.dropdown.title`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.title%22)

> Drafts

```diff
+Rascunhos
```

#### [`fof-drafts.forum.dropdown.tooltip`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.dropdown.tooltip%22)

> =&gt; fof-drafts.forum.dropdown.title

```diff
+=> fof-drafts.forum.dropdown.title
```

#### [`fof-drafts.forum.schedule_draft_modal.reschedule_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.reschedule_button%22)

> Reschedule

```diff
+Reagendar
```

#### [`fof-drafts.forum.schedule_draft_modal.schedule_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.schedule_button%22)

> Schedule

```diff
+Agendar
```

#### [`fof-drafts.forum.schedule_draft_modal.schedule_time_preview`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.schedule_time_preview%22)

> This draft will be automatically published on &lt;b&gt;{datetime}&lt;/b&gt;.

```diff
+Este rascunho será publicado automaticamente em <b>{datetime}</b>.
```

#### [`fof-drafts.forum.schedule_draft_modal.schedule_time_preview_formatter`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.schedule_time_preview_formatter%22)

> LLLL

```diff
+LLLL
```

#### [`fof-drafts.forum.schedule_draft_modal.schedule_time_preview_invalid`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.schedule_time_preview_invalid%22)

> Invalid date and/or time

```diff
+Data e/ou hora inválida
```

#### [`fof-drafts.forum.schedule_draft_modal.scheduled_error`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.scheduled_error%22)

> Unable to schedule draft: {error}.

```diff
+Não foi possível agendar o rascunho: {error}.
```

#### [`fof-drafts.forum.schedule_draft_modal.scheduled_text`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.scheduled_text%22)

> Currently scheduled to post on {datetime}.

```diff
+Publicação agendada para {datetime}.
```

#### [`fof-drafts.forum.schedule_draft_modal.text`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.text%22)

> Schedule your draft to automatically post at a later time!

```diff
+Agende seu rascunho para ser publicado automaticamente mais tarde!
```

#### [`fof-drafts.forum.schedule_draft_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.title%22)

> =&gt; fof-drafts.ref.schedule\_draft

```diff
+=> fof-drafts.ref.schedule_draft
```

#### [`fof-drafts.forum.schedule_draft_modal.unschedule_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.unschedule_button%22)

> Unschedule

```diff
+Desagendar
```

#### [`fof-drafts.forum.schedule_draft_modal.unschedule_warning`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.schedule_draft_modal.unschedule_warning%22)

> Are you sure you want to unschedule this draft?

```diff
+Tem certeza de que deseja desagendar este rascunho?
```

#### [`fof-drafts.forum.user.settings.draft_autosave_interval_button`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.user.settings.draft_autosave_interval_button%22)

> Update Interval

```diff
+Atualizar Intervalo
```

#### [`fof-drafts.forum.user.settings.draft_autosave_interval_invalid`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.user.settings.draft_autosave_interval_invalid%22)

> The interval must be an integer greater than 4.

```diff
+O intervalo deve ser um número inteiro maior que 4.
```

#### [`fof-drafts.forum.user.settings.draft_autosave_interval_label`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.user.settings.draft_autosave_interval_label%22)

> Autosave Interval (seconds)

```diff
+Intervalo do Salvamento Automático (segundos)
```

#### [`fof-drafts.forum.user.settings.drafts_heading`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.forum.user.settings.drafts_heading%22)

> Drafts

```diff
+Rascunhos
```

#### [`fof-drafts.ref.schedule_draft`](https://weblate.rob006.net/translate/flarum2/fof-drafts/pt_BR/?q=context%3A%3D%22fof-drafts.ref.schedule_draft%22)

> Schedule draft

```diff
+Agendar rascunho
```


### `fof-filter` (missing)

#### [`fof-filter.admin.auto_merge_title`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.auto_merge_title%22)

> Auto merge

```diff
+Mesclagem automática
```

#### [`fof-filter.admin.bad_words_help`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.bad_words_help%22)

> Input text or words to filter, one per line. If the content of a user’s post contains a string you want to filter, it will be flagged for approval. Resistant against 133t.

```diff
+Digite os textos ou palavras a filtrar, um por linha. Se o conteúdo do post de um usuário contiver um termo que você queira filtrar, ele será sinalizado para aprovação. Resistente a 133t.
```

#### [`fof-filter.admin.cooldownLabel`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.cooldownLabel%22)

> Merge Post Cooldown

```diff
+Intervalo de Mesclagem de Posts
```

#### [`fof-filter.admin.countLabel`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.countLabel%22)

> Censor Tolorance

```diff
+Tolerância da Censura
```

#### [`fof-filter.admin.email.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.email.default_subject%22)

> Regarding Your Recent Post

```diff
+Sobre Seu Post Recente
```

#### [`fof-filter.admin.email.default_text`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.email.default_text%22)

> %USERNAME%,
>
> Thank you for posting! Unfortunately, your post was removed because it contained something we don't want to see on our forums.
>
> If you believe this was an error, you are in luck, each removed post is reviewed by our moderators. If they find that this was wrongfully removed, they will restore it.
>
> Thank you for your understanding.
>

```diff
+%USERNAME%,
+
+Obrigado por postar! Infelizmente, seu post foi removido porque continha algo que não queremos ver em nossos fóruns.
+
+Se você acredita que foi um engano, está com sorte: cada post removido é revisado pelos nossos moderadores. Se concluírem que a remoção foi indevida, eles o restaurarão.
+
+Obrigado pela compreensão.
+
```

#### [`fof-filter.admin.email_help`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.email_help%22)

> Body of flagged email. Accepts html or plaintext. You can use %USERNAME% to insert the username of the user whose post was flagged.
>

```diff
+Corpo do e-mail de sinalização. Aceita HTML ou texto simples. Use %USERNAME% para inserir o nome de usuário de quem teve o post sinalizado.
+
```

#### [`fof-filter.admin.filter_label`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.filter_label%22)

> Strings to filter

```diff
+Termos a filtrar
```

#### [`fof-filter.admin.help2`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.help2%22)

> Interval in minutes in which posts from the same user in the same discussion will be automatically merged.

```diff
+Intervalo em minutos em que posts do mesmo usuário na mesma discussão serão mesclados automaticamente.
```

#### [`fof-filter.admin.input.email_body`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.email_body%22)

> Body

```diff
+Corpo
```

#### [`fof-filter.admin.input.email_help`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.email_help%22)

> Leave empty to allow for translations to be used. You may use FoF Linguist to translate the email.

```diff
+Deixe vazio para permitir o uso de traduções. Você pode usar o FoF Linguist para traduzir o e-mail.
```

#### [`fof-filter.admin.input.email_label`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.email_label%22)

> Email Settings

```diff
+Configurações de E-mail
```

#### [`fof-filter.admin.input.email_subject`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.email_subject%22)

> Subject

```diff
+Assunto
```

#### [`fof-filter.admin.input.filter_title`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.filter_title%22)

> Strings to filter

```diff
+Termos a filtrar
```

#### [`fof-filter.admin.input.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.placeholder%22)

> Strings to be filtered

```diff
+Termos a serem filtrados
```

#### [`fof-filter.admin.input.switch.delete`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.switch.delete%22)

> Auto delete filtered posts

```diff
+Excluir posts filtrados automaticamente
```

#### [`fof-filter.admin.input.switch.email`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.switch.email%22)

> Email user when post is filtered

```diff
+Enviar e-mail ao usuário ao filtrar um post
```

#### [`fof-filter.admin.input.switch.merge`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.input.switch.merge%22)

> Auto merge double posts

```diff
+Mesclar posts duplos automaticamente
```

#### [`fof-filter.admin.nav.desc`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.nav.desc%22)

> Filter posts by words

```diff
+Filtrar posts por palavras
```

#### [`fof-filter.admin.nav.text`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.nav.text%22)

> Filter

```diff
+Filtro
```

#### [`fof-filter.admin.permission.bypass_filter_label`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.permission.bypass_filter_label%22)

> Bypass word filter(s)

```diff
+Ignorar filtro(s) de palavras
```

#### [`fof-filter.admin.title`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.admin.title%22)

> Filter

```diff
+Filtro
```

#### [`fof-filter.forum.flag_message`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.forum.flag_message%22)

> Contained blocked strings

```diff
+Continha termos bloqueados
```

#### [`fof-filter.forum.flagger_name`](https://weblate.rob006.net/translate/flarum2/fof-filter/pt_BR/?q=context%3A%3D%22fof-filter.forum.flagger_name%22)

> Auto Moderator

```diff
+Moderador Automático
```


### `fof-first-post-approval` (missing)

#### [`fof-first-post-approval.admin.permissions.bypass`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.permissions.bypass%22)

> Post without first post approval

```diff
+Postar sem aprovação do primeiro post
```

#### [`fof-first-post-approval.admin.settings.discussionCount`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.settings.discussionCount%22)

> Number of first discussions to require approval for

```diff
+Número de primeiras discussões que exigem aprovação
```

#### [`fof-first-post-approval.admin.settings.discussionCount_help`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.settings.discussionCount_help%22)

> Set to 0 to hold new discussions for approval based on the number of posts instead.

```diff
+Defina 0 para reter novas discussões para aprovação com base no número de posts.
```

#### [`fof-first-post-approval.admin.settings.postCount`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.settings.postCount%22)

> Number of first posts to require approval for

```diff
+Número de primeiros posts que exigem aprovação
```

#### [`fof-first-post-approval.admin.settings.postCount_help`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.settings.postCount_help%22)

> Once this many posts by a user have been approved, their posts are published immediately.

```diff
+Depois que esta quantidade de posts de um usuário for aprovada, os posts dele são publicados imediatamente.
```

#### [`fof-first-post-approval.admin.settings.restrictPrivateDiscussions`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.settings.restrictPrivateDiscussions%22)

> Prevent private discussions until approved

```diff
+Impedir discussões privadas até a aprovação
```

#### [`fof-first-post-approval.admin.settings.restrictPrivateDiscussions_help`](https://weblate.rob006.net/translate/flarum2/fof-first-post-approval/pt_BR/?q=context%3A%3D%22fof-first-post-approval.admin.settings.restrictPrivateDiscussions_help%22)

> Private discussions cannot be held for approval, so users still subject to first post approval are stopped from starting them. Turn this off to let them start private discussions freely.

```diff
+Discussões privadas não podem ser retidas para aprovação, então usuários ainda sujeitos à aprovação do primeiro post são impedidos de iniciá-las. Desative para deixá-los iniciar discussões privadas livremente.
```


### `fof-follow-tags` (missing)

#### [`flarum-gdpr.lib.data.tagsubscription.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.tagsubscription.anonymize_description%22)

> Removes the subscription of the user to the tag.

```diff
+Remove a inscrição do usuário na tag.
```

#### [`flarum-gdpr.lib.data.tagsubscription.export_description`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.tagsubscription.export_description%22)

> Exports details of the subscription level for a tag, if one exists.

```diff
+Exporta detalhes do nível de inscrição em uma tag, se houver.
```

#### [`fof-follow-tags.admin.basics.following_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.basics.following_label%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```

#### [`fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.all_discussions_on_following_page_for_guests_label%22)

> Show all discussions on the Following page for guests

```diff
+Mostrar todas as discussões na página Seguindo para convidados
```

#### [`fof-follow-tags.admin.settings.prompt_button_on_following_page_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_button_on_following_page_label%22)

> Show a "Choose tags to follow" button on the Following page

```diff
+Mostrar um botão "Escolher tags para seguir" na página Seguindo
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_help`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_help%22)

> Users who have not confirmed their choice yet will be shown a modal asking them to follow tags. The modal will keep coming back on each visit until they press "Continue to forum".
>

```diff
+Usuários que ainda não confirmaram a escolha verão um modal pedindo que sigam tags. O modal voltará a cada visita até que pressionem "Continuar para o fórum".
+
```

#### [`fof-follow-tags.admin.settings.prompt_new_users_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_new_users_label%22)

> Prompt new users to choose tags to follow

```diff
+Pedir aos novos usuários que escolham tags para seguir
```

#### [`fof-follow-tags.admin.settings.prompt_tag_ids_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_ids_label%22)

> Tags to offer

```diff
+Tags a oferecer
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_label%22)

> Tags to offer in the prompt

```diff
+Tags a oferecer no modal
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.all`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.all%22)

> All tags

```diff
+Todas as tags
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.list`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.list%22)

> Tags selected below

```diff
+Tags selecionadas abaixo
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primary%22)

> First-level primary tags

```diff
+Tags primárias de primeiro nível
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndChildren%22)

> All primary tags of any level

```diff
+Todas as tags primárias de qualquer nível
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.primaryAndSecondary%22)

> First-level primary tags and secondary tags

```diff
+Tags primárias de primeiro nível e tags secundárias
```

#### [`fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.admin.settings.prompt_tag_strategy_options.secondary%22)

> Only secondary tags

```diff
+Apenas tags secundárias
```

#### [`fof-follow-tags.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.hero.title%22)

> =&gt; flarum-subscriptions.forum.index.following\_link

```diff
+=> flarum-subscriptions.forum.index.following_link
```

#### [`fof-follow-tags.forum.prompt.choose_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.prompt.choose_button%22)

> Choose tags to follow

```diff
+Escolher tags para seguir
```

#### [`fof-follow-tags.forum.prompt.continue_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.prompt.continue_button%22)

> Continue to forum

```diff
+Continuar para o fórum
```

#### [`fof-follow-tags.forum.prompt.later_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.prompt.later_button%22)

> Remind me later

```diff
+Lembrar mais tarde
```

#### [`fof-follow-tags.forum.prompt.modal_title`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.prompt.modal_title%22)

> Choose tags to follow

```diff
+Escolher tags para seguir
```

#### [`fof-follow-tags.forum.sub_controls.header`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.header%22)

> Subscription for {tagName}

```diff
+Inscrição em {tagName}
```

#### [`fof-follow-tags.forum.sub_controls.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.submit_button%22)

> Confirm subscription

```diff
+Confirmar inscrição
```

#### [`fof-follow-tags.forum.sub_controls.subscription_label`](https://weblate.rob006.net/translate/flarum2/fof-follow-tags/pt_BR/?q=context%3A%3D%22fof-follow-tags.forum.sub_controls.subscription_label%22)

> Select your subscription level for {tagName}

```diff
+Selecione seu nível de inscrição em {tagName}
```


### `fof-forum-statistics-widget` (missing)

#### [`fof-forum-statistics-widget.admin.settings.cache_duration_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.cache_duration_help%22)

> Specify how long the stats for the widget should be cached for (in seconds). &lt;code&gt;0&lt;/code&gt; to disable caching (not recommended).

```diff
+Defina por quanto tempo as estatísticas do widget ficam em cache (em segundos). <code>0</code> desativa o cache (não recomendado).
```

#### [`fof-forum-statistics-widget.admin.settings.cache_duration_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.cache_duration_label%22)

> Cache Duration

```diff
+Duração do Cache
```

#### [`fof-forum-statistics-widget.admin.settings.classic_look_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.classic_look_help%22)

> Restore the original widget appearance used before the fof/forum-widgets-core integration.

```diff
+Restaura a aparência original do widget, usada antes da integração com fof/forum-widgets-core.
```

#### [`fof-forum-statistics-widget.admin.settings.classic_look_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.classic_look_label%22)

> Classic Look

```diff
+Visual Clássico
```

#### [`fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_help%22)

> If enabled, the stats cache will be flushed when a new user registers on the forum.

```diff
+Se ativado, o cache de estatísticas será limpo quando um novo usuário se cadastrar no fórum.
```

#### [`fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_label`](https://weblate.rob006.net/translate/flarum2/fof-forum-statistics-widget/pt_BR/?q=context%3A%3D%22fof-forum-statistics-widget.admin.settings.flush_cache_on_new_registration_label%22)

> Flush Stats Cache on New Registration

```diff
+Limpar Cache de Estatísticas em Novo Cadastro
```


### `fof-forum-stats-widget` (missing)

#### [`fof-forum-stats-widget.admin.settings.decimal_places.help`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/pt_BR/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.help%22)

> The number of decimal places to display for large numbers (0-2).

```diff
+O número de casas decimais a exibir em números grandes (0-2).
```

#### [`fof-forum-stats-widget.admin.settings.decimal_places.label`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/pt_BR/?q=context%3A%3D%22fof-forum-stats-widget.admin.settings.decimal_places.label%22)

> Decimal Places

```diff
+Casas Decimais
```

#### [`fof-forum-stats-widget.forum.widget.stats.comment_post_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/pt_BR/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.comment_post_count%22)

> Posts

```diff
+Posts
```

#### [`fof-forum-stats-widget.forum.widget.stats.discussion_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/pt_BR/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.discussion_count%22)

> Discussions

```diff
+Discussões
```

#### [`fof-forum-stats-widget.forum.widget.stats.user_count`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/pt_BR/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.stats.user_count%22)

> Users

```diff
+Usuários
```

#### [`fof-forum-stats-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-forum-stats-widget/pt_BR/?q=context%3A%3D%22fof-forum-stats-widget.forum.widget.title%22)

> Forum Stats

```diff
+Estatísticas do Fórum
```


### `fof-forum-widgets-core` (missing)

#### [`fof-forum-widgets-core.admin.cache_not_writable_warning`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/pt_BR/?q=context%3A%3D%22fof-forum-widgets-core.admin.cache_not_writable_warning%22)

> Cache is currently not writable, this will prevent certain widgets from working. Please fix your storage directory's permissions.

```diff
+O cache não está gravável no momento, o que impedirá certos widgets de funcionar. Corrija as permissões do seu diretório storage.
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/pt_BR/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load%22)

> Prefer loading all widgets data with initial page response.

```diff
+Preferir carregar todos os dados dos widgets com a resposta inicial da página.
```

#### [`fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help`](https://weblate.rob006.net/translate/flarum2/fof-forum-widgets-core/pt_BR/?q=context%3A%3D%22fof-forum-widgets-core.admin.settings.prefer_data_with_initial_load_help%22)

> Instead of loading widget data after initial page load by sending API requests, the data will be (when possible) loaded with the inital load.

```diff
+Em vez de carregar os dados dos widgets após o carregamento inicial da página por requisições à API, os dados serão (quando possível) carregados junto com o carregamento inicial.
```


### `fof-geoip` (missing)

#### [`fof-default-user-preferences.admin.settings.showIPCountry`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.showIPCountry%22)

> Show the flag of the country the user posts from

```diff
+Mostrar a bandeira do país de onde o usuário posta
```

#### [`fof-default-user-preferences.admin.settings.showIPCountry-help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-default-user-preferences.admin.settings.showIPCountry-help%22)

> This is based on their IP address at the time of posting. The country flag (if enabled) will be visible to all users. Admin users and moderators will see the IP address in the tooltip.

```diff
+Baseia-se no endereço IP no momento do post. A bandeira do país (se ativada) ficará visível para todos os usuários. Administradores e moderadores verão o endereço IP no tooltip.
```

#### [`fof-geoip.admin.permissions.see_country`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.permissions.see_country%22)

> Always display the country of the IP address

```diff
+Sempre ver o país do endereço IP
```

#### [`fof-geoip.admin.settings.access_key_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.access_key_label%22)

> Access Key

```diff
+Chave de Acesso
```

#### [`fof-geoip.admin.settings.allow_custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_help%22)

> When enabled, users can pick a country flag to display on their posts via their profile settings. A user-selected flag is shown to everyone and takes precedence over the IP-based flag. Requires "Show country flag for each post" to be enabled.

```diff
+Quando ativado, os usuários podem escolher uma bandeira de país para exibir em seus posts nas configurações do perfil. A bandeira escolhida pelo usuário é mostrada a todos e tem precedência sobre a bandeira baseada no IP. Requer que "Mostrar a bandeira do país em cada post" esteja ativado.
```

#### [`fof-geoip.admin.settings.allow_custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.allow_custom_flag_label%22)

> Allow users to choose a custom country flag

```diff
+Permitir que usuários escolham uma bandeira de país personalizada
```

#### [`fof-geoip.admin.settings.error_code_prefix`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.error_code_prefix%22)

> Code:

```diff
+Código:
```

#### [`fof-geoip.admin.settings.error_prefix`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.error_prefix%22)

> Error:

```diff
+Erro:
```

#### [`fof-geoip.admin.settings.general.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.general.heading%22)

> General Settings

```diff
+Configurações Gerais
```

#### [`fof-geoip.admin.settings.general.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.general.help%22)

> These settings control the general behavior of the extension.

```diff
+Estas configurações controlam o comportamento geral da extensão.
```

#### [`fof-geoip.admin.settings.providers.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.providers.heading%22)

> IP Lookup Service

```diff
+Serviço de Consulta de IP
```

#### [`fof-geoip.admin.settings.providers.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.providers.help%22)

> Choose a service to use for IP lookups. Some services have rate limits, so be sure to check the service's documentation for more information.

```diff
+Escolha um serviço para as consultas de IP. Alguns serviços têm limites de requisições, então consulte a documentação do serviço para mais informações.
```

#### [`fof-geoip.admin.settings.quota_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.quota_label%22)

> Lookup quota

```diff
+Cota de consultas
```

#### [`fof-geoip.admin.settings.raw_http_response_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.raw_http_response_label%22)

> Raw HTTP Response Body

```diff
+Corpo Bruto da Resposta HTTP
```

#### [`fof-geoip.admin.settings.request_options_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.request_options_label%22)

> Request Options

```diff
+Opções da Requisição
```

#### [`fof-geoip.admin.settings.request_url_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.request_url_label%22)

> Request URL

```diff
+URL da Requisição
```

#### [`fof-geoip.admin.settings.response_headers_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.response_headers_label%22)

> Response Headers

```diff
+Cabeçalhos da Resposta
```

#### [`fof-geoip.admin.settings.service_ipapi-pro_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi-pro_description%22)

> Use &lt;b&gt;https://members.ip-api.com/#pricing&lt;/b&gt;. Pro plan has unlimited usage.

```diff
+Use <b>https://members.ip-api.com/#pricing</b>. O plano Pro tem uso ilimitado.
```

#### [`fof-geoip.admin.settings.service_ipapi-pro_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi-pro_label%22)

> IP Api Pro

```diff
+IP Api Pro
```

#### [`fof-geoip.admin.settings.service_ipapi_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi_description%22)

> Use &lt;b&gt;http://ip-api.com&lt;/b&gt; to make up to 45 lookups per minute for free. If you make more, requests will be queued and looked up once the time window resets.

```diff
+Use <b>http://ip-api.com</b> para fazer até 45 consultas por minuto grátis. Se fizer mais, as requisições entrarão na fila e serão consultadas quando a janela de tempo reiniciar.
```

#### [`fof-geoip.admin.settings.service_ipapi_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipapi_label%22)

> IP Api

```diff
+IP Api
```

#### [`fof-geoip.admin.settings.service_ipdata_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipdata_description%22)

> Use &lt;b&gt;https://ipdata.co&lt;/b&gt; to make up to 1,500 lookups daily for free. Paid plans for higher usage limits are also available.

```diff
+Use <b>https://ipdata.co</b> para fazer até 1.500 consultas diárias grátis. Planos pagos com limites de uso maiores também estão disponíveis.
```

#### [`fof-geoip.admin.settings.service_ipdata_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipdata_label%22)

> IPData

```diff
+IPData
```

#### [`fof-geoip.admin.settings.service_ipinfo-lite_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipinfo-lite_description%22)

> Use &lt;b&gt;https://ipinfo.io&lt;/b&gt; to retrieve IP information without any rate limiting or restrictions. Requires registration for a free API key.

```diff
+Use <b>https://ipinfo.io</b> para obter informações de IP sem limite de requisições nem restrições. Requer cadastro para obter uma chave de API gratuita.
```

#### [`fof-geoip.admin.settings.service_ipinfo-lite_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipinfo-lite_label%22)

> IPInfo Lite

```diff
+IPInfo Lite
```

#### [`fof-geoip.admin.settings.service_iplocation_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_iplocation_description%22)

> Use &lt;b&gt;https://www.iplocation.net/&lt;/b&gt; to retrieve country and ISP data. Lookup rate limits are unknown.

```diff
+Use <b>https://www.iplocation.net/</b> para obter dados de país e provedor (ISP). Os limites de requisições são desconhecidos.
```

#### [`fof-geoip.admin.settings.service_iplocation_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_iplocation_label%22)

> IP Location

```diff
+IP Location
```

#### [`fof-geoip.admin.settings.service_ipsevenex_description`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipsevenex_description%22)

> Use &lt;b&gt;https://7x.ax&lt;/b&gt; to get a free API key for up to 20 requests per minute. Paid plans for higher usage limits are also available.

```diff
+Use <b>https://7x.ax</b> para obter uma chave de API gratuita para até 20 requisições por minuto. Planos pagos com limites de uso maiores também estão disponíveis.
```

#### [`fof-geoip.admin.settings.service_ipsevenex_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_ipsevenex_label%22)

> 7x Geolocation API

```diff
+7x Geolocation API
```

#### [`fof-geoip.admin.settings.service_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.service_label%22)

> Service

```diff
+Serviço
```

#### [`fof-geoip.admin.settings.show_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.show_flag_help%22)

> Without disclosing the IP address, show the country flag of the IP address of the post author, when the user opts in via their preferences.

```diff
+Sem revelar o endereço IP, mostra a bandeira do país do IP do autor do post, quando o usuário opta por isso nas preferências.
```

#### [`fof-geoip.admin.settings.show_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.show_flag_label%22)

> Show country flag for each post

```diff
+Mostrar a bandeira do país em cada post
```

#### [`fof-geoip.admin.settings.status_error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.status_error%22)

> ✗ Error

```diff
+✗ Erro
```

#### [`fof-geoip.admin.settings.status_success`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.status_success%22)

> ✓ Success

```diff
+✓ Sucesso
```

#### [`fof-geoip.admin.settings.status_unknown`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.status_unknown%22)

> Unknown

```diff
+Desconhecido
```

#### [`fof-geoip.admin.settings.test.heading`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test.heading%22)

> Test Service Configuration

```diff
+Testar Configuração do Serviço
```

#### [`fof-geoip.admin.settings.test.help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test.help%22)

> Test your IP lookup service configuration with a sample IP address. Make sure to save your settings first before testing.

```diff
+Teste a configuração do seu serviço de consulta de IP com um endereço IP de exemplo. Salve suas configurações antes de testar.
```

#### [`fof-geoip.admin.settings.test_button`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_button%22)

> Test Service

```diff
+Testar Serviço
```

#### [`fof-geoip.admin.settings.test_error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_error%22)

> An error occurred while testing the service.

```diff
+Ocorreu um erro ao testar o serviço.
```

#### [`fof-geoip.admin.settings.test_error_details_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_error_details_label%22)

> Error Details:

```diff
+Detalhes do Erro:
```

#### [`fof-geoip.admin.settings.test_http_status_code_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_http_status_code_label%22)

> HTTP Status Code:

```diff
+Código de Status HTTP:
```

#### [`fof-geoip.admin.settings.test_ip_required`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_ip_required%22)

> Please enter an IP address to test.

```diff
+Digite um endereço IP para testar.
```

#### [`fof-geoip.admin.settings.test_processed_service_response_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_processed_service_response_label%22)

> Processed Service Response:

```diff
+Resposta Processada do Serviço:
```

#### [`fof-geoip.admin.settings.test_response_time_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_response_time_label%22)

> Response Time:

```diff
+Tempo de Resposta:
```

#### [`fof-geoip.admin.settings.test_result_title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_result_title%22)

> Test Result

```diff
+Resultado do Teste
```

#### [`fof-geoip.admin.settings.test_service_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_help%22)

> Enter an IPv4 or IPv6 address to test your current service configuration.

```diff
+Digite um endereço IPv4 ou IPv6 para testar a configuração atual do serviço.
```

#### [`fof-geoip.admin.settings.test_service_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_label%22)

> Test IP Lookup Service

```diff
+Testar Serviço de Consulta de IP
```

#### [`fof-geoip.admin.settings.test_service_label_result`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_service_label_result%22)

> Service:

```diff
+Serviço:
```

#### [`fof-geoip.admin.settings.test_status_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_status_label%22)

> Status:

```diff
+Status:
```

#### [`fof-geoip.admin.settings.test_timestamp_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.test_timestamp_label%22)

> Timestamp:

```diff
+Data e hora:
```

#### [`fof-geoip.admin.settings.testing`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.admin.settings.testing%22)

> Testing...

```diff
+Testando...
```

#### [`fof-geoip.forum.user.settings.custom_flag_help`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_help%22)

> Choose a country flag to display on your posts. This flag is visible to everyone and is shown instead of the flag based on your IP address.

```diff
+Escolha uma bandeira de país para exibir em seus posts. Esta bandeira é visível para todos e é mostrada no lugar da bandeira baseada no seu endereço IP.
```

#### [`fof-geoip.forum.user.settings.custom_flag_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.forum.user.settings.custom_flag_label%22)

> Custom country flag

```diff
+Bandeira de país personalizada
```

#### [`fof-geoip.forum.user.settings.ip_country`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.forum.user.settings.ip_country%22)

> Show the flag of the country I post from, based on my IP address

```diff
+Mostrar a bandeira do país de onde posto, com base no meu endereço IP
```

#### [`fof-geoip.lib.alerts.ip_copied`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.alerts.ip_copied%22)

> Copied IP Address

```diff
+Endereço IP Copiado
```

#### [`fof-geoip.lib.copy_ip_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.copy_ip_label%22)

> Copy IP to clipboard

```diff
+Copiar IP para a área de transferência
```

#### [`fof-geoip.lib.custom_flag.none`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.custom_flag.none%22)

> No custom flag

```diff
+Sem bandeira personalizada
```

#### [`fof-geoip.lib.map_button_label`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_button_label%22)

> IP Info

```diff
+Info do IP
```

#### [`fof-geoip.lib.map_modal.as`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.as%22)

> ASN

```diff
+ASN
```

#### [`fof-geoip.lib.map_modal.error`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.error%22)

> Error

```diff
+Erro
```

#### [`fof-geoip.lib.map_modal.ip_address`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.ip_address%22)

> IP Address

```diff
+Endereço IP
```

#### [`fof-geoip.lib.map_modal.isp`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.isp%22)

> ISP

```diff
+Provedor
```

#### [`fof-geoip.lib.map_modal.mobile`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.mobile%22)

> Cellular network

```diff
+Rede móvel
```

#### [`fof-geoip.lib.map_modal.not_enough_data`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.not_enough_data%22)

> Not enough data to draw a map

```diff
+Dados insuficientes para desenhar um mapa
```

#### [`fof-geoip.lib.map_modal.organization`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.organization%22)

> Organization

```diff
+Organização
```

#### [`fof-geoip.lib.map_modal.threat_level`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_level%22)

> Threat Level

```diff
+Nível de Ameaça
```

#### [`fof-geoip.lib.map_modal.threat_types`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.threat_types%22)

> Threat Types

```diff
+Tipos de Ameaça
```

#### [`fof-geoip.lib.map_modal.title`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.title%22)

> IP Information

```diff
+Informações do IP
```

#### [`fof-geoip.lib.map_modal.zip_code`](https://weblate.rob006.net/translate/flarum2/fof-geoip/pt_BR/?q=context%3A%3D%22fof-geoip.lib.map_modal.zip_code%22)

> Zip Code

```diff
+Código Postal
```


### `fof-github-sponsors` (missing)

#### [`fof-github-sponsors.admin.account_types.organization`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.account_types.organization%22)

> Organization

```diff
+Organização
```

#### [`fof-github-sponsors.admin.account_types.user`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.account_types.user%22)

> User

```diff
+Usuário
```

#### [`fof-github-sponsors.admin.settings.account_type_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_help%22)

> Select whether you're tracking sponsors for a personal GitHub user account or an organization account.

```diff
+Selecione se você acompanha patrocinadores de uma conta pessoal de usuário do GitHub ou de uma conta de organização.
```

#### [`fof-github-sponsors.admin.settings.account_type_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.account_type_label%22)

> Account Type

```diff
+Tipo de Conta
```

#### [`fof-github-sponsors.admin.settings.api_token_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_help%22)

> Create a personal access token at &lt;a&gt;https://github.com/settings/tokens/new&lt;/a&gt; with the &lt;code&gt;user&lt;/code&gt; and &lt;code&gt;read:org&lt;/code&gt; scopes. This token is used to fetch your sponsor information from GitHub.

```diff
+Crie um token de acesso pessoal em <a>https://github.com/settings/tokens/new</a> com os escopos <code>user</code> e <code>read:org</code>. Este token é usado para buscar as informações dos seus patrocinadores no GitHub.
```

#### [`fof-github-sponsors.admin.settings.api_token_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.api_token_label%22)

> API Token

```diff
+Token de API
```

#### [`fof-github-sponsors.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_help%22)

> Select which Flarum user group sponsors should be added to. Users will be automatically added when they become sponsors and removed when they stop sponsoring.

```diff
+Selecione a qual grupo de usuários do Flarum os patrocinadores devem ser adicionados. Os usuários serão adicionados automaticamente quando se tornarem patrocinadores e removidos quando deixarem de patrocinar.
```

#### [`fof-github-sponsors.admin.settings.group_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.group_label%22)

> Group to Assign

```diff
+Grupo a Atribuir
```

#### [`fof-github-sponsors.admin.settings.login_help`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_help%22)

> Enter your GitHub username (for user accounts) or organization name (for organizations). This is the account whose sponsors will be synchronized.

```diff
+Digite seu nome de usuário do GitHub (para contas de usuário) ou o nome da organização (para organizações). Esta é a conta cujos patrocinadores serão sincronizados.
```

#### [`fof-github-sponsors.admin.settings.login_label`](https://weblate.rob006.net/translate/flarum2/fof-github-sponsors/pt_BR/?q=context%3A%3D%22fof-github-sponsors.admin.settings.login_label%22)

> Login

```diff
+Login
```


### `fof-horizon` (missing)

#### [`fof-horizon.admin.settings.trim_completed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_completed%22)

> Trim Completed Jobs

```diff
+Limpar Jobs Concluídos
```

#### [`fof-horizon.admin.settings.trim_completed_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_completed_help%22)

> This table is used to display completed jobs in the Horizon dashboard.
>

```diff
+Esta tabela é usada para exibir os jobs concluídos no dashboard do Horizon.
+
```

#### [`fof-horizon.admin.settings.trim_failed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_failed%22)

> Trim Failed Jobs

```diff
+Limpar Jobs com Falha
```

#### [`fof-horizon.admin.settings.trim_failed_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_failed_help%22)

> This table is used to display failed jobs in the Horizon dashboard.
>

```diff
+Esta tabela é usada para exibir os jobs com falha no dashboard do Horizon.
+
```

#### [`fof-horizon.admin.settings.trim_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_help%22)

> Here you can configure for how long (in minutes) you desire Horizon to
> persist the recent and failed jobs. Typically, recent jobs are kept
> for one hour while all failed jobs are stored for an entire week.
>

```diff
+Aqui você pode configurar por quanto tempo (em minutos) o Horizon deve
+manter os jobs recentes e os com falha. Normalmente, os jobs recentes são mantidos
+por uma hora, enquanto todos os jobs com falha são guardados por uma semana inteira.
+
```

#### [`fof-horizon.admin.settings.trim_monitored`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_monitored%22)

> Trim Monitored Jobs

```diff
+Limpar Jobs Monitorados
```

#### [`fof-horizon.admin.settings.trim_monitored_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_monitored_help%22)

> This table is used to display monitored jobs in the Horizon dashboard.
>

```diff
+Esta tabela é usada para exibir os jobs monitorados no dashboard do Horizon.
+
```

#### [`fof-horizon.admin.settings.trim_pending`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_pending%22)

> Trim Pending Jobs

```diff
+Limpar Jobs Pendentes
```

#### [`fof-horizon.admin.settings.trim_pending_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_pending_help%22)

> This table is used to display pending jobs in the Horizon dashboard.
>

```diff
+Esta tabela é usada para exibir os jobs pendentes no dashboard do Horizon.
+
```

#### [`fof-horizon.admin.settings.trim_recent`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_recent%22)

> Trim Recent Jobs

```diff
+Limpar Jobs Recentes
```

#### [`fof-horizon.admin.settings.trim_recent_failed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_recent_failed%22)

> Trim Recent Failed Jobs

```diff
+Limpar Jobs com Falha Recentes
```

#### [`fof-horizon.admin.settings.trim_recent_failed_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_recent_failed_help%22)

> This table is used to display recent failed jobs in the Horizon dashboard.
>

```diff
+Esta tabela é usada para exibir os jobs com falha recentes no dashboard do Horizon.
+
```

#### [`fof-horizon.admin.settings.trim_recent_help`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_recent_help%22)

> This table is used to display recent jobs in the Horizon dashboard.
>

```diff
+Esta tabela é usada para exibir os jobs recentes no dashboard do Horizon.
+
```

#### [`fof-horizon.admin.settings.trim_title`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.settings.trim_title%22)

> Trim Settings

```diff
+Configurações de Limpeza
```

#### [`fof-horizon.admin.stats.auto_refresh`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.auto_refresh%22)

> Auto Refresh

```diff
+Atualização Automática
```

#### [`fof-horizon.admin.stats.data.jobs-per-minute`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.data.jobs-per-minute%22)

> Jobs Per Minute

```diff
+Jobs por Minuto
```

#### [`fof-horizon.admin.stats.error.fetch_failed`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.error.fetch_failed%22)

> Unable to fetch Horizon statistics. Please check your Redis configuration.

```diff
+Não foi possível obter as estatísticas do Horizon. Verifique sua configuração do Redis.
```

#### [`fof-horizon.admin.stats.error.setup_docs`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.error.setup_docs%22)

> View Redis Setup Documentation

```diff
+Ver Documentação de Configuração do Redis
```

#### [`fof-horizon.admin.stats.error.title`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.error.title%22)

> Connection Error

```diff
+Erro de Conexão
```

#### [`fof-horizon.admin.stats.full_dashboard`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.full_dashboard%22)

> Horizon Dashboard

```diff
+Dashboard do Horizon
```

#### [`fof-horizon.admin.stats.health.critical`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.health.critical%22)

> Critical

```diff
+Crítica
```

#### [`fof-horizon.admin.stats.health.excellent`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.health.excellent%22)

> Excellent

```diff
+Excelente
```

#### [`fof-horizon.admin.stats.health.good`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.health.good%22)

> Good

```diff
+Boa
```

#### [`fof-horizon.admin.stats.health.poor`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.health.poor%22)

> Poor

```diff
+Ruim
```

#### [`fof-horizon.admin.stats.refresh`](https://weblate.rob006.net/translate/flarum2/fof-horizon/pt_BR/?q=context%3A%3D%22fof-horizon.admin.stats.refresh%22)

> Refresh

```diff
+Atualizar
```


### `fof-html-errors` (missing)

#### [`fof-html-errors.admin.settings.error.403`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/pt_BR/?q=context%3A%3D%22fof-html-errors.admin.settings.error.403%22)

> 403 Forbidden

```diff
+403 Proibido
```

#### [`fof-html-errors.admin.settings.error.404`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/pt_BR/?q=context%3A%3D%22fof-html-errors.admin.settings.error.404%22)

> 404 Not Found

```diff
+404 Não Encontrado
```

#### [`fof-html-errors.admin.settings.error.500`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/pt_BR/?q=context%3A%3D%22fof-html-errors.admin.settings.error.500%22)

> 500 Internal Server Error

```diff
+500 Erro Interno do Servidor
```

#### [`fof-html-errors.admin.settings.error.503`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/pt_BR/?q=context%3A%3D%22fof-html-errors.admin.settings.error.503%22)

> 503 Service Unavailable (Down For Maintenance)

```diff
+503 Serviço Indisponível (Em Manutenção)
```

#### [`fof-html-errors.admin.settings.placeholder.empty_for_default`](https://weblate.rob006.net/translate/flarum2/fof-html-errors/pt_BR/?q=context%3A%3D%22fof-html-errors.admin.settings.placeholder.empty_for_default%22)

> Leave empty for the default Flarum error page

```diff
+Deixe vazio para usar a página de erro padrão do Flarum
```


### `fof-ignore-users` (missing)

#### [`fof-ignore-users.admin.permissions.can_not_be_ignored_label`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.admin.permissions.can_not_be_ignored_label%22)

> Can not be ignored

```diff
+Não pode ser ignorado
```

#### [`fof-ignore-users.forum.badge.discussion_label`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.badge.discussion_label%22)

> Started by an ignored user

```diff
+Iniciada por um usuário ignorado
```

#### [`fof-ignore-users.forum.badge.user_label`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.badge.user_label%22)

> Ignored user

```diff
+Usuário ignorado
```

#### [`fof-ignore-users.forum.profile_link`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.profile_link%22)

> Ignored Users

```diff
+Usuários Ignorados
```

#### [`fof-ignore-users.forum.profile_page.no_ignored`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.profile_page.no_ignored%22)

> It looks like you're not ignoring anyone.

```diff
+Parece que você não está ignorando ninguém.
```

#### [`fof-ignore-users.forum.user_controls.ignore_button`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.user_controls.ignore_button%22)

> Ignore

```diff
+Ignorar
```

#### [`fof-ignore-users.forum.user_controls.ignore_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.user_controls.ignore_confirmation%22)

> Are you sure you want to ignore this user?

```diff
+Tem certeza de que deseja ignorar este usuário?
```

#### [`fof-ignore-users.forum.user_controls.unignore_button`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.user_controls.unignore_button%22)

> Unignore

```diff
+Deixar de ignorar
```

#### [`fof-ignore-users.forum.user_controls.unignore_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-ignore-users/pt_BR/?q=context%3A%3D%22fof-ignore-users.forum.user_controls.unignore_confirmation%22)

> Are you sure you want to unignore this user?

```diff
+Tem certeza de que deseja deixar de ignorar este usuário?
```


### `fof-impersonate` (missing)

#### [`fof-impersonate.admin.permissions.login`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.admin.permissions.login%22)

> Login as other users

```diff
+Entrar como outros usuários
```

#### [`fof-impersonate.admin.settings.require_reason`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.admin.settings.require_reason%22)

> Require a reason to be entered before proceeding to impersonate another user.

```diff
+Exigir que um motivo seja informado antes de entrar como outro usuário.
```

#### [`fof-impersonate.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.admin.settings.title%22)

> FoF Impersonate

```diff
+FoF Impersonate
```

#### [`fof-impersonate.lib.modal.impersonate_username`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.lib.modal.impersonate_username%22)

> Login as {username}

```diff
+Entrar como {username}
```

#### [`fof-impersonate.lib.modal.placeholder_optional`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.lib.modal.placeholder_optional%22)

> (Optional) Provide your reason for switching to this user

```diff
+(Opcional) Informe o motivo para entrar como este usuário
```

#### [`fof-impersonate.lib.modal.placeholder_required`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.lib.modal.placeholder_required%22)

> You must provide your reason for switching to this user before proceeding

```diff
+Você deve informar o motivo para entrar como este usuário antes de continuar
```

#### [`fof-impersonate.lib.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.lib.modal.title%22)

> Login as another user

```diff
+Entrar como outro usuário
```

#### [`fof-impersonate.lib.user_controls.impersonate_button`](https://weblate.rob006.net/translate/flarum2/fof-impersonate/pt_BR/?q=context%3A%3D%22fof-impersonate.lib.user_controls.impersonate_button%22)

> Login as user

```diff
+Entrar como usuário
```


### `fof-linguist` (missing)

#### [`fof-linguist.admin.buttons.apply`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.apply%22)

> Apply

```diff
+Aplicar
```

#### [`fof-linguist.admin.buttons.copy-original`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.copy-original%22)

> Copy original text

```diff
+Copiar texto original
```

#### [`fof-linguist.admin.buttons.delete-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-all%22)

> Delete all translations

```diff
+Excluir todas as traduções
```

#### [`fof-linguist.admin.buttons.delete-all-confirm`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-all-confirm%22)

> This will delete ALL of your {count} custom translations. Make sure you have exported or backed up everything you might have wanted to keep.
>

```diff
+Isso excluirá TODAS as suas {count} traduções personalizadas. Certifique-se de ter exportado ou feito backup de tudo o que queira manter.
+
```

#### [`fof-linguist.admin.buttons.delete-redundant`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-redundant%22)

> Delete redundant translations

```diff
+Excluir traduções redundantes
```

#### [`fof-linguist.admin.buttons.delete-redundant-confirm`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.delete-redundant-confirm%22)

> This will delete {count} translations that have identical original and custom values. This can be useful to clean up after a language pack update.
>

```diff
+Isso excluirá {count} traduções cujos valores original e personalizado são idênticos. Pode ser útil para fazer uma limpeza após a atualização de um pacote de idioma.
+
```

#### [`fof-linguist.admin.buttons.load-more`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.load-more%22)

> Load more

```diff
+Carregar mais
```

#### [`fof-linguist.admin.buttons.reset`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.buttons.reset%22)

> Restore original

```diff
+Restaurar original
```

#### [`fof-linguist.admin.clear-cache.button`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.clear-cache.button%22)

> Clear cache now

```diff
+Limpar cache agora
```

#### [`fof-linguist.admin.clear-cache.text`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.clear-cache.text%22)

> New translations have not yet been applied. Note: clearing the cache can momentarily slow down your forum.
>

```diff
+As novas traduções ainda não foram aplicadas. Nota: limpar o cache pode deixar seu fórum momentaneamente mais lento.
+
```

#### [`fof-linguist.admin.coverage.all-namespaces`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.all-namespaces%22)

> All

```diff
+Todos
```

#### [`fof-linguist.admin.coverage.apply-missing-filter`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.apply-missing-filter%22)

> Show matching missing translations

```diff
+Mostrar traduções ausentes correspondentes
```

#### [`fof-linguist.admin.coverage.column-options.locale`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.column-options.locale%22)

> By language

```diff
+Por idioma
```

#### [`fof-linguist.admin.coverage.column-options.namespace`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.column-options.namespace%22)

> By frontend

```diff
+Por frontend
```

#### [`fof-linguist.admin.coverage.columns.all-except-admin`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.all-except-admin%22)

> Forum and other frontends

```diff
+Fórum e outros frontends
```

#### [`fof-linguist.admin.coverage.columns.all-frontends`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.all-frontends%22)

> Show all frontends

```diff
+Mostrar todos os frontends
```

#### [`fof-linguist.admin.coverage.columns.namespace`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.namespace%22)

> Namespace

```diff
+Namespace
```

#### [`fof-linguist.admin.coverage.columns.total`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.columns.total%22)

> Total

```diff
+Total
```

#### [`fof-linguist.admin.coverage.count.details`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.count.details%22)

> {total} total / {original} original / {custom} custom

```diff
+{total} no total / {original} originais / {custom} personalizadas
```

#### [`fof-linguist.admin.coverage.count.percent`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.count.percent%22)

> {percent} %

```diff
+{percent} %
```

#### [`fof-linguist.admin.coverage.count.total`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.count.total%22)

> {translated} / {total}

```diff
+{translated} / {total}
```

#### [`fof-linguist.admin.coverage.total-options.count`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.total-options.count%22)

> Count

```diff
+Contagem
```

#### [`fof-linguist.admin.coverage.total-options.percent`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.coverage.total-options.percent%22)

> Percent

```diff
+Porcentagem
```

#### [`fof-linguist.admin.export.download`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.download%22)

> Download

```diff
+Baixar
```

#### [`fof-linguist.admin.export.include-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.include-all%22)

> Include translations defined for "All" languages

```diff
+Incluir traduções definidas para "Todos" os idiomas
```

#### [`fof-linguist.admin.export.include-originals`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.include-originals%22)

> Include original translations

```diff
+Incluir traduções originais
```

#### [`fof-linguist.admin.export.locale`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.locale%22)

> Locale

```diff
+Idioma
```

#### [`fof-linguist.admin.export.locale-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.locale-all%22)

> Pseudo-locale "All"

```diff
+Pseudoidioma "Todos"
```

#### [`fof-linguist.admin.export.namespace`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.namespace%22)

> Namespace

```diff
+Namespace
```

#### [`fof-linguist.admin.export.namespace-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.namespace-all%22)

> All

```diff
+Todos
```

#### [`fof-linguist.admin.export.output`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.output%22)

> Output

```diff
+Saída
```

#### [`fof-linguist.admin.export.output-empty`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.output-empty%22)

> Empty output

```diff
+Saída vazia
```

#### [`fof-linguist.admin.export.output-loading`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.output-loading%22)

> Loading output...

```diff
+Carregando saída...
```

#### [`fof-linguist.admin.export.title`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.title%22)

> Export

```diff
+Exportar
```

#### [`fof-linguist.admin.export.warning`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.export.warning%22)

> The export format uses Flarum's Yaml-based translation files and is designed to share translations between forums and with language pack maintainers. The format is not designed to move all translations to a new forum. Depending on your use case, copying the database directly might be a better idea.
>

```diff
+O formato de exportação usa os arquivos de tradução em YAML do Flarum e foi projetado para compartilhar traduções entre fóruns e com mantenedores de pacotes de idioma. O formato não foi projetado para mover todas as traduções para um novo fórum. Dependendo do seu caso de uso, copiar o banco de dados diretamente pode ser uma ideia melhor.
+
```

#### [`fof-linguist.admin.filters.for-extension`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.for-extension%22)

> For extension

```diff
+Para a extensão
```

#### [`fof-linguist.admin.filters.frontend`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.frontend%22)

> For frontend

```diff
+Para o frontend
```

#### [`fof-linguist.admin.filters.frontend-all-except-admin`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.frontend-all-except-admin%22)

> All except Admin

```diff
+Todos exceto Admin
```

#### [`fof-linguist.admin.filters.mass-edit`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.mass-edit%22)

> Mass edit

```diff
+Edição em massa
```

#### [`fof-linguist.admin.filters.missing`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.missing%22)

> Find missing translations

```diff
+Encontrar traduções ausentes
```

#### [`fof-linguist.admin.filters.missing-middle-label`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.missing-middle-label%22)

> translations in

```diff
+traduções em
```

#### [`fof-linguist.admin.filters.negation-options.with`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.negation-options.with%22)

> With

```diff
+Com
```

#### [`fof-linguist.admin.filters.negation-options.without`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.negation-options.without%22)

> Without

```diff
+Sem
```

#### [`fof-linguist.admin.filters.operation-options.and`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.operation-options.and%22)

> All of

```diff
+Todos estes
```

#### [`fof-linguist.admin.filters.operation-options.or`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.operation-options.or%22)

> Either of

```diff
+Qualquer um destes
```

#### [`fof-linguist.admin.filters.results`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.results%22)

> Showing {shown} of {total} matching translations

```diff
+Mostrando {shown} de {total} traduções correspondentes
```

#### [`fof-linguist.admin.filters.search`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.search%22)

> Search translation strings...

```diff
+Buscar strings de tradução...
```

#### [`fof-linguist.admin.filters.type-options.any`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.type-options.any%22)

> Original or Custom

```diff
+Originais ou Personalizadas
```

#### [`fof-linguist.admin.filters.type-options.original`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.type-options.original%22)

> Original

```diff
+Originais
```

#### [`fof-linguist.admin.filters.type-options.own`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.type-options.own%22)

> Custom

```diff
+Personalizadas
```

#### [`fof-linguist.admin.filters.with-own-translations`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.filters.with-own-translations%22)

> My translations

```diff
+Minhas traduções
```

#### [`fof-linguist.admin.import.input`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.input%22)

> Input

```diff
+Entrada
```

#### [`fof-linguist.admin.import.input-placeholder`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.input-placeholder%22)

> Drag and drop or paste a Yaml file here

```diff
+Arraste e solte ou cole um arquivo YAML aqui
```

#### [`fof-linguist.admin.import.locale`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.locale%22)

> Locale

```diff
+Idioma
```

#### [`fof-linguist.admin.import.locale-all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.locale-all%22)

> Pseudo-locale "All"

```diff
+Pseudoidioma "Todos"
```

#### [`fof-linguist.admin.import.override-existing`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.override-existing%22)

> Override my existing custom translations

```diff
+Substituir minhas traduções personalizadas existentes
```

#### [`fof-linguist.admin.import.results`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.results%22)

> The import is finished. {imported} strings have been imported and {identical} identical strings were skipped. The page will now refresh to show the new translations.
>

```diff
+A importação foi concluída. {imported} strings foram importadas e {identical} strings idênticas foram puladas. A página será recarregada agora para mostrar as novas traduções.
+
```

#### [`fof-linguist.admin.import.results-with-ignore`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.results-with-ignore%22)

> The import is finished. {imported} strings have been imported, {ignored} existing strings have been ignored and {identical} identical strings were skipped. The page will now refresh to show the new translations.
>

```diff
+A importação foi concluída. {imported} strings foram importadas, {ignored} strings existentes foram ignoradas e {identical} strings idênticas foram puladas. A página será recarregada agora para mostrar as novas traduções.
+
```

#### [`fof-linguist.admin.import.submit`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.submit%22)

> Import

```diff
+Importar
```

#### [`fof-linguist.admin.import.title`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.import.title%22)

> Import

```diff
+Importar
```

#### [`fof-linguist.admin.known-frontend.admin`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-frontend.admin%22)

> Admin

```diff
+Admin
```

#### [`fof-linguist.admin.known-frontend.api`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-frontend.api%22)

> API

```diff
+API
```

#### [`fof-linguist.admin.known-frontend.forum`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-frontend.forum%22)

> Forum

```diff
+Fórum
```

#### [`fof-linguist.admin.known-frontend.lib`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-frontend.lib%22)

> Lib (used on both Forum and Admin)

```diff
+Lib (usado no Fórum e no Admin)
```

#### [`fof-linguist.admin.known-frontend.ref`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-frontend.ref%22)

> Ref (re-used in other keys)

```diff
+Ref (reutilizado em outras chaves)
```

#### [`fof-linguist.admin.known-namespace.core`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-namespace.core%22)

> Flarum Core

```diff
+Flarum Core
```

#### [`fof-linguist.admin.known-namespace.validation`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.known-namespace.validation%22)

> Validation Errors

```diff
+Erros de Validação
```

#### [`fof-linguist.admin.locales.all`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.locales.all%22)

> All

```diff
+Todos
```

#### [`fof-linguist.admin.permissions.view_string_keys`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.permissions.view_string_keys%22)

> View translation string keys

```diff
+Ver chaves das strings de tradução
```

#### [`fof-linguist.admin.placeholder.all-locales`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.placeholder.all-locales%22)

> A text defined here will be shown in all languages

```diff
+Um texto definido aqui será mostrado em todos os idiomas
```

#### [`fof-linguist.admin.placeholder.hint`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.placeholder.hint%22)

> Original value:

```diff
+Valor original:
```

#### [`fof-linguist.admin.placeholder.not-translated`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.placeholder.not-translated%22)

> Not translated

```diff
+Não traduzido
```

#### [`fof-linguist.admin.tabs.coverage`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.tabs.coverage%22)

> Coverage

```diff
+Cobertura
```

#### [`fof-linguist.admin.tabs.export`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.tabs.export%22)

> Export

```diff
+Exportar
```

#### [`fof-linguist.admin.tabs.import`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.tabs.import%22)

> Import

```diff
+Importar
```

#### [`fof-linguist.admin.tabs.strings`](https://weblate.rob006.net/translate/flarum2/fof-linguist/pt_BR/?q=context%3A%3D%22fof-linguist.admin.tabs.strings%22)

> Translations

```diff
+Traduções
```


### `fof-links` (missing)

#### [`fof-links.admin.edit_link.icon_additional_text`](https://weblate.rob006.net/translate/flarum2/fof-links/pt_BR/?q=context%3A%3D%22fof-links.admin.edit_link.icon_additional_text%22)

> If you want to use a brand icon, the prefix is &lt;code&gt;fab fa-&lt;/code&gt; instead.

```diff
+Se quiser usar um ícone de marca, o prefixo é <code>fab fa-</code>.
```

#### [`fof-links.admin.settings.show_icons_only_on_tablet`](https://weblate.rob006.net/translate/flarum2/fof-links/pt_BR/?q=context%3A%3D%22fof-links.admin.settings.show_icons_only_on_tablet%22)

> Show icons only on tablet screens

```diff
+Mostrar apenas ícones em telas de tablet
```


### `fof-mailing` (missing)

#### [`fof-mailing.admin.permissions.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_all%22)

> Send emails to groups or all users

```diff
+Enviar e-mails a grupos ou a todos os usuários
```

#### [`fof-mailing.admin.permissions.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.admin.permissions.mail_individual%22)

> Send emails to individual users

```diff
+Enviar e-mails a usuários individuais
```

#### [`fof-mailing.api.no_recipients`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.api.no_recipients%22)

> No recipient were matched

```diff
+Nenhum destinatário encontrado
```

#### [`fof-mailing.email.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.email.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.links.mail_all`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.links.mail_all%22)

> Send Email

```diff
+Enviar E-mail
```

#### [`fof-mailing.forum.links.mail_individual`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.links.mail_individual%22)

> Email This User

```diff
+Enviar E-mail ao Usuário
```

#### [`fof-mailing.forum.modal_mail.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.default_subject%22)

> =&gt; fof-mailing.ref.default\_subject

```diff
+=> fof-mailing.ref.default_subject
```

#### [`fof-mailing.forum.modal_mail.message_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.message_label%22)

> Message

```diff
+Mensagem
```

#### [`fof-mailing.forum.modal_mail.recipients_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_label%22)

> Recipients

```diff
+Destinatários
```

#### [`fof-mailing.forum.modal_mail.recipients_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.recipients_placeholder%22)

> Add more recipients...

```diff
+Adicionar mais destinatários...
```

#### [`fof-mailing.forum.modal_mail.subject_label`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.subject_label%22)

> Subject

```diff
+Assunto
```

#### [`fof-mailing.forum.modal_mail.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.submit_button%22)

> Send

```diff
+Enviar
```

#### [`fof-mailing.forum.modal_mail.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_mail.title_text%22)

> Compose Mail

```diff
+Escrever E-mail
```

#### [`fof-mailing.forum.modal_sent.on_its_way`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_sent.on_its_way%22)

> High Five! Your mail is on its way to {recipientsCount} recipients!

```diff
+Toca aqui! Seu e-mail está a caminho de {recipientsCount} destinatários!
```

#### [`fof-mailing.forum.modal_sent.title_text`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.modal_sent.title_text%22)

> Mail Sent!

```diff
+E-mail Enviado!
```

#### [`fof-mailing.forum.recipient_kinds.email`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.email%22)

> Email

```diff
+E-mail
```

#### [`fof-mailing.forum.recipient_kinds.group`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.group%22)

> Group

```diff
+Grupo
```

#### [`fof-mailing.forum.recipient_kinds.user`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.forum.recipient_kinds.user%22)

> User

```diff
+Usuário
```

#### [`fof-mailing.ref.default_subject`](https://weblate.rob006.net/translate/flarum2/fof-mailing/pt_BR/?q=context%3A%3D%22fof-mailing.ref.default_subject%22)

> Message from forum administration

```diff
+Mensagem da administração do fórum
```


### `fof-mark-unread` (missing)

#### [`fof-mark-unread.admin.permissions.mark_unread_label`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/pt_BR/?q=context%3A%3D%22fof-mark-unread.admin.permissions.mark_unread_label%22)

> Mark discussions as unread

```diff
+Marcar discussões como não lidas
```

#### [`fof-mark-unread.forum.discussion_controls.mark_unread_button`](https://weblate.rob006.net/translate/flarum2/fof-mark-unread/pt_BR/?q=context%3A%3D%22fof-mark-unread.forum.discussion_controls.mark_unread_button%22)

> Mark as unread

```diff
+Marcar como não lida
```


### `fof-masquerade` (missing)

#### [`flarum-audit.lib.browser.masquerade.profile_updated`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22flarum-audit.lib.browser.masquerade.profile_updated%22)

> Updated {username}'s profile fields

```diff
+Atualizou os campos de perfil de {username}
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.anonymize_description%22)

> =&gt; flarum-gdpr.lib.data.masqueradeanswers.delete\_description

```diff
+=> flarum-gdpr.lib.data.masqueradeanswers.delete_description
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.delete_description%22)

> Removes all profile field answers from the user's account

```diff
+Remove todas as respostas de campos de perfil da conta do usuário
```

#### [`flarum-gdpr.lib.data.masqueradeanswers.export_description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.masqueradeanswers.export_description%22)

> Exports the user's profile field answers

```diff
+Exporta as respostas dos campos de perfil do usuário
```

#### [`fof-masquerade.admin.buttons.add-field`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.buttons.add-field%22)

> Create field

```diff
+Criar campo
```

#### [`fof-masquerade.admin.buttons.delete-field`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.buttons.delete-field%22)

> Delete field

```diff
+Excluir campo
```

#### [`fof-masquerade.admin.buttons.edit-field`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.buttons.edit-field%22)

> Save changes

```diff
+Salvar alterações
```

#### [`fof-masquerade.admin.fields.delete-confirmation`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.delete-confirmation%22)

> Are you sure you want to delete the field {field}? This cannot be undone.

```diff
+Tem certeza de que deseja excluir o campo {field}? Isso não pode ser desfeito.
```

#### [`fof-masquerade.admin.fields.description`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.description%22)

> Field description

```diff
+Descrição do campo
```

#### [`fof-masquerade.admin.fields.description-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.description-help%22)

> An optional description to explain the use/need of this field.
>

```diff
+Uma descrição opcional para explicar o uso/a necessidade deste campo.
+
```

#### [`fof-masquerade.admin.fields.edit`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.edit%22)

> Edit field {field}

```diff
+Editar campo {field}
```

#### [`fof-masquerade.admin.fields.force-user-to-completion`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.force-user-to-completion%22)

> Force user to complete profile

```diff
+Forçar o usuário a completar o perfil
```

#### [`fof-masquerade.admin.fields.icon`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.icon%22)

> Icon

```diff
+Ícone
```

#### [`fof-masquerade.admin.fields.icon-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.icon-help%22)

> Shows an icon in front of values entered by the user. For a reference of available icons, check the &lt;a&gt;FontAwesome website&lt;/a&gt;. Use icon names with the "fa-" prefix, like "fas fa-info".
>

```diff
+Mostra um ícone antes dos valores informados pelo usuário. Para ver os ícones disponíveis, consulte o <a>site do FontAwesome</a>. Use nomes de ícones com o prefixo "fa-", como "fas fa-info".
+
```

#### [`fof-masquerade.admin.fields.name`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.name%22)

> Field name

```diff
+Nome do campo
```

#### [`fof-masquerade.admin.fields.name-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.name-help%22)

> The publicly visible (non-translatable) field label.
>

```diff
+O rótulo do campo visível publicamente (não traduzível).
+
```

#### [`fof-masquerade.admin.fields.on_bio`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.on_bio%22)

> Show answer to this field in user bio

```diff
+Mostrar a resposta deste campo na bio do usuário
```

#### [`fof-masquerade.admin.fields.option-comma-warning`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.option-comma-warning%22)

> The label of an option cannot contain any comma (",").

```diff
+O rótulo de uma opção não pode conter vírgula (",").
```

#### [`fof-masquerade.admin.fields.option-new`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.option-new%22)

> New option

```diff
+Nova opção
```

#### [`fof-masquerade.admin.fields.options`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.options%22)

> Options

```diff
+Opções
```

#### [`fof-masquerade.admin.fields.required`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.required%22)

> Mark field obligatory

```diff
+Marcar campo como obrigatório
```

#### [`fof-masquerade.admin.fields.title`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.title%22)

> Fields

```diff
+Campos
```

#### [`fof-masquerade.admin.fields.type`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.type%22)

> Type

```diff
+Tipo
```

#### [`fof-masquerade.admin.fields.validation`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.validation%22)

> Validation

```diff
+Validação
```

#### [`fof-masquerade.admin.fields.validation-help`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.fields.validation-help%22)

> Check the supported &lt;a&gt;Laravel validation rules&lt;/a&gt;. Eg: "string\|min:5" or "url".
>

```diff
+Consulte as <a>regras de validação do Laravel</a> suportadas. Ex.: "string|min:5" ou "url".
+
```

#### [`fof-masquerade.admin.permissions.edit-others-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.permissions.edit-others-profile%22)

> Edit the profile of other users

```diff
+Editar o perfil de outros usuários
```

#### [`fof-masquerade.admin.permissions.have-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.permissions.have-profile%22)

> Have masquerade profile

```diff
+Ter perfil masquerade
```

#### [`fof-masquerade.admin.permissions.view-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.permissions.view-profile%22)

> View masquerade profile

```diff
+Ver perfil masquerade
```

#### [`fof-masquerade.admin.types.advanced`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.types.advanced%22)

> Advanced

```diff
+Avançado
```

#### [`fof-masquerade.admin.types.boolean`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.types.boolean%22)

> Checkbox

```diff
+Caixa de seleção
```

#### [`fof-masquerade.admin.types.email`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.types.email%22)

> Email

```diff
+E-mail
```

#### [`fof-masquerade.admin.types.select`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.types.select%22)

> Dropdown

```diff
+Menu suspenso
```

#### [`fof-masquerade.admin.types.url`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.admin.types.url%22)

> URL

```diff
+URL
```

#### [`fof-masquerade.forum.alerts.profile-completed`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.alerts.profile-completed%22)

> Profile completed! &lt;a&gt;Proceed to homepage&lt;/a&gt;

```diff
+Perfil completo! <a>Ir para a página inicial</a>
```

#### [`fof-masquerade.forum.alerts.profile-completion-required`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.alerts.profile-completion-required%22)

> Please complete the necessary profile fields below.
>

```diff
+Preencha os campos de perfil necessários abaixo.
+
```

#### [`fof-masquerade.forum.buttons.edit-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.buttons.edit-profile%22)

> Edit profile

```diff
+Editar perfil
```

#### [`fof-masquerade.forum.buttons.save-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.buttons.save-profile%22)

> Save

```diff
+Salvar
```

#### [`fof-masquerade.forum.buttons.view-profile`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.buttons.view-profile%22)

> View profile

```diff
+Ver perfil
```

#### [`fof-masquerade.forum.fields.boolean.no`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.fields.boolean.no%22)

> No

```diff
+Não
```

#### [`fof-masquerade.forum.fields.boolean.yes`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.fields.boolean.yes%22)

> Yes

```diff
+Sim
```

#### [`fof-masquerade.forum.fields.select.none-optional`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.fields.select.none-optional%22)

> No option selected (optional)

```diff
+Nenhuma opção selecionada (opcional)
```

#### [`fof-masquerade.forum.fields.select.none-required`](https://weblate.rob006.net/translate/flarum2/fof-masquerade/pt_BR/?q=context%3A%3D%22fof-masquerade.forum.fields.select.none-required%22)

> Please select an option (required)

```diff
+Selecione uma opção (obrigatório)
```


### `fof-merge-discussions` (missing)

#### [`fof-merge-discussions.admin.permissions.merge_discussions_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.admin.permissions.merge_discussions_label%22)

> Merge discussions

```diff
+Mesclar discussões
```

#### [`fof-merge-discussions.admin.settings.search_result_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_help%22)

> How many discussions should be returned when searching within the \`Merge Discussions\` modal.

```diff
+Quantas discussões devem ser retornadas ao buscar no modal `Mesclar Discussões`.
```

#### [`fof-merge-discussions.admin.settings.search_result_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.admin.settings.search_result_label%22)

> Merge Discussion Search Limit

```diff
+Limite de Busca ao Mesclar Discussões
```

#### [`fof-merge-discussions.api.error.deleting_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.api.error.deleting_failed%22)

> Failed to delete empty discussions.

```diff
+Falha ao excluir as discussões vazias.
```

#### [`fof-merge-discussions.api.error.fixing_posts_number_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.api.error.fixing_posts_number_failed%22)

> Failed to fix posts numbers.

```diff
+Falha ao corrigir a numeração dos posts.
```

#### [`fof-merge-discussions.api.error.fixing_posts_number_meta_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.api.error.fixing_posts_number_meta_failed%22)

> Failed to fix posts numbers.

```diff
+Falha ao corrigir a numeração dos posts.
```

#### [`fof-merge-discussions.api.error.merging_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.api.error.merging_failed%22)

> Failed to merge discussions.

```diff
+Falha ao mesclar as discussões.
```

#### [`fof-merge-discussions.api.error.updating_failed`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.api.error.updating_failed%22)

> Failed to update discussion details.

```diff
+Falha ao atualizar os detalhes da discussão.
```

#### [`fof-merge-discussions.email.merged.subject`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.email.merged.subject%22)

> Your discussion "{merged\_discussion\_title}" was merged

```diff
+Sua discussão "{merged_discussion_title}" foi mesclada
```

#### [`fof-merge-discussions.forum.discussion.merge`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.discussion.merge%22)

> =&gt; fof-merge-discussions.ref.merge

```diff
+=> fof-merge-discussions.ref.merge
```

#### [`fof-merge-discussions.forum.modal.load_preview_button`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.load_preview_button%22)

> Preview

```diff
+Visualizar
```

#### [`fof-merge-discussions.forum.modal.ordering_date_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_date_help%22)

> Posts in the resulting discussion are reordered by their individual creation date

```diff
+Os posts da discussão resultante são reordenados pela data de criação de cada um
```

#### [`fof-merge-discussions.forum.modal.ordering_date_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_date_label%22)

> Merge posts by creation date

```diff
+Mesclar posts por data de criação
```

#### [`fof-merge-discussions.forum.modal.ordering_heading`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_heading%22)

> Merge ordering

```diff
+Ordenação da mesclagem
```

#### [`fof-merge-discussions.forum.modal.ordering_suffix_help`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_suffix_help%22)

> Posts that are merged into the surviving discussion will be appended at the end of the discussion

```diff
+Os posts mesclados na discussão remanescente serão adicionados ao fim dela
```

#### [`fof-merge-discussions.forum.modal.ordering_suffix_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.ordering_suffix_label%22)

> Add merged posts to the end of the discussion

```diff
+Adicionar os posts mesclados ao fim da discussão
```

#### [`fof-merge-discussions.forum.modal.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.submit_button%22)

> =&gt; fof-merge-discussions.ref.merge

```diff
+=> fof-merge-discussions.ref.merge
```

#### [`fof-merge-discussions.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.title%22)

> Merge Discussions

```diff
+Mesclar Discussões
```

#### [`fof-merge-discussions.forum.modal.type_from_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_from_label%22)

> Merge this discussion into another

```diff
+Mesclar esta discussão em outra
```

#### [`fof-merge-discussions.forum.modal.type_heading`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_heading%22)

> Merge type

```diff
+Tipo de mesclagem
```

#### [`fof-merge-discussions.forum.modal.type_target_label`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.modal.type_target_label%22)

> Merge into me

```diff
+Mesclar nesta discussão
```

#### [`fof-merge-discussions.forum.notification.preferences.discussion_merged`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.forum.notification.preferences.discussion_merged%22)

> Someone merges one of my discussions with another

```diff
+Alguém mescla uma das minhas discussões com outra
```

#### [`fof-merge-discussions.ref.merge`](https://weblate.rob006.net/translate/flarum2/fof-merge-discussions/pt_BR/?q=context%3A%3D%22fof-merge-discussions.ref.merge%22)

> Merge

```diff
+Mesclar
```


### `fof-moderator-notes` (missing)

#### [`fof-moderator-notes.forum.moderatorNotes.filter_by_me`](https://weblate.rob006.net/translate/flarum2/fof-moderator-notes/pt_BR/?q=context%3A%3D%22fof-moderator-notes.forum.moderatorNotes.filter_by_me%22)

> Only notes I created

```diff
+Apenas notas que criei
```


### `fof-move-posts` (missing)

#### [`fof-move-posts.admin.permissions.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.admin.permissions.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.admin.settings.group_sequential_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.admin.settings.group_sequential_posts%22)

> Group sequential post moved event posts into one.

```diff
+Agrupar em um só os posts de evento de movimentação consecutivos.
```

#### [`fof-move-posts.admin.settings.moved_first_post_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content%22)

> Moved Discussion (First Post) Content

```diff
+Conteúdo da Discussão Movida (Primeiro Post)
```

#### [`fof-move-posts.admin.settings.moved_first_post_content_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.admin.settings.moved_first_post_content_help%22)

> When you have a discussion with only one single post, moving that post will result in the initial discussion's first post to be edited to point to the new discussion. You can edit the contents of that post here.
>

```diff
+Quando uma discussão tem um único post, mover esse post faz com que o primeiro post da discussão original seja editado para apontar para a nova discussão. Você pode editar o conteúdo desse post aqui.
+
```

#### [`fof-move-posts.forum.alerts.posts_moved_to`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.alerts.posts_moved_to%22)

> {count, plural, one {Post moved to {target\_discussion}.} other {Moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {Post movido para {target_discussion}.} other {# posts movidos para {target_discussion}.}}
```

#### [`fof-move-posts.forum.badge.first_moved_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.badge.first_moved_tooltip%22)

> Moved

```diff
+Movida
```

#### [`fof-move-posts.forum.discussion.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.discussion.move_posts%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.error.move_old_post_to_newer_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.error.move_old_post_to_newer_discussion%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.error.move_posts_to_same_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.error.move_posts_to_same_discussion%22)

> You cannot move posts to the same discussion.

```diff
+Você não pode mover posts para a mesma discussão.
```

#### [`fof-move-posts.forum.modal.check`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.check%22)

> Check Operation Type

```diff
+Verificar Tipo de Operação
```

#### [`fof-move-posts.forum.modal.confirm_move_all_to_new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.confirm_move_all_to_new_discussion%22)

> You are about to move all posts from this discussion into a new one. In most cases, it makes more sense to edit the existing discussion instead, for example by changing its title, tags, or other attributes. Do you want to continue?

```diff
+Você está prestes a mover todos os posts desta discussão para uma nova. Na maioria dos casos, faz mais sentido editar a discussão existente, por exemplo alterando o título, as tags ou outros atributos. Deseja continuar?
```

#### [`fof-move-posts.forum.modal.destination`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.destination%22)

> Destination Discussion

```diff
+Discussão de Destino
```

#### [`fof-move-posts.forum.modal.discussion_help`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_help%22)

> The tags of the source discussion will be used, and can be changed after creation.

```diff
+As tags da discussão de origem serão usadas e podem ser alteradas após a criação.
```

#### [`fof-move-posts.forum.modal.discussion_name`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.discussion_name%22)

> =&gt; core.forum.composer\_discussion.title\_placeholder

```diff
+=> core.forum.composer_discussion.title_placeholder
```

#### [`fof-move-posts.forum.modal.new_discussion`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.new_discussion%22)

> New Discussion

```diff
+Nova Discussão
```

#### [`fof-move-posts.forum.modal.selected_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.selected_posts%22)

> {count, plural, one {One Post Selected} other {{count} Posts Selected}}

```diff
+{count, plural, one {# Post Selecionado} other {# Posts Selecionados}}
```

#### [`fof-move-posts.forum.modal.status.complex_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.status.complex_move%22)

> Will be a complex move, posts will be pushed between posts, leading to old URL references of the target discussion's posts to change as well.

```diff
+Será uma movimentação complexa: os posts serão inseridos entre outros posts, fazendo com que as referências a URLs antigas dos posts da discussão de destino também mudem.
```

#### [`fof-move-posts.forum.modal.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.status.old_to_new_move%22)

> =&gt; fof-move-posts.ref.status.old\_to\_new\_move

```diff
+=> fof-move-posts.ref.status.old_to_new_move
```

#### [`fof-move-posts.forum.modal.status.simple_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.status.simple_move%22)

> Will be a simple move, posts will all be added at the end of the discussion.

```diff
+Será uma movimentação simples: todos os posts serão adicionados ao final da discussão.
```

#### [`fof-move-posts.forum.modal.submit`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.submit%22)

> Proceed

```diff
+Prosseguir
```

#### [`fof-move-posts.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.modal.title%22)

> =&gt; fof-move-posts.ref.move\_posts

```diff
+=> fof-move-posts.ref.move_posts
```

#### [`fof-move-posts.forum.notifications.post_moved_text`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.notifications.post_moved_text%22)

> One or more of your posts were moved to {targetDiscussionTitle}.

```diff
+Um ou mais dos seus posts foram movidos para {targetDiscussionTitle}.
```

#### [`fof-move-posts.forum.post.move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.post.move%22)

> Select to move

```diff
+Selecionar para mover
```

#### [`fof-move-posts.forum.post.moving`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.post.moving%22)

> Moving Post

```diff
+Movendo Post
```

#### [`fof-move-posts.forum.post.unmove`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.post.unmove%22)

> Unselect to move

```diff
+Desmarcar para mover
```

#### [`fof-move-posts.forum.post_stream.post_moved`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.forum.post_stream.post_moved%22)

> {count, plural, one {{username} moved a post to {target\_discussion}.} other {{username} moved {count} posts to {target\_discussion}.}}

```diff
+{count, plural, one {{username} moveu um post para {target_discussion}.} other {{username} moveu # posts para {target_discussion}.}}
```

#### [`fof-move-posts.lib.discussion.first_post.default_content`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.lib.discussion.first_post.default_content%22)

> \*This post has been moved to \*\*\[%DISCUSSION\_NAME%\](%POST\_LINK%)\*\*.\*
>

```diff
+*Este post foi movido para **[%DISCUSSION_NAME%](%POST_LINK%)**.*
+
```

#### [`fof-move-posts.ref.move_posts`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.ref.move_posts%22)

> Move Posts

```diff
+Mover Posts
```

#### [`fof-move-posts.ref.status.old_to_new_move`](https://weblate.rob006.net/translate/flarum2/fof-move-posts/pt_BR/?q=context%3A%3D%22fof-move-posts.ref.status.old_to_new_move%22)

> Cannot move an old post to a newer discussion.

```diff
+Não é possível mover um post antigo para uma discussão mais nova.
```


### `fof-news-widget` (missing)

#### [`fof-news-widget.admin.settings.add_line`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/pt_BR/?q=context%3A%3D%22fof-news-widget.admin.settings.add_line%22)

> Add News Line

```diff
+Adicionar Linha de Notícia
```

#### [`fof-news-widget.admin.settings.html_warning`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/pt_BR/?q=context%3A%3D%22fof-news-widget.admin.settings.html_warning%22)

> Please be careful, any HTML will be rendered.

```diff
+Cuidado, qualquer HTML será renderizado.
```

#### [`fof-news-widget.admin.settings.lines`](https://weblate.rob006.net/translate/flarum2/fof-news-widget/pt_BR/?q=context%3A%3D%22fof-news-widget.admin.settings.lines%22)

> News Lines

```diff
+Linhas de Notícias
```


### `fof-oauth` (missing)

#### [`fof-oauth.admin.permissions.moderate_user_providers`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.permissions.moderate_user_providers%22)

> Moderate user's linked accounts

```diff
+Moderar as contas vinculadas dos usuários
```

#### [`fof-oauth.admin.settings.advanced.heading`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.advanced.heading%22)

> Advanced

```diff
+Avançado
```

#### [`fof-oauth.admin.settings.advanced.log-oauth-errors-help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.advanced.log-oauth-errors-help%22)

> If enabled, OAuth errors will be logged to the Flarum log. This may help with debugging OAuth issues, but may also contain sensitive information.

```diff
+Se ativado, os erros de OAuth serão registrados no log do Flarum. Isso pode ajudar a depurar problemas de OAuth, mas também pode conter informações sensíveis.
```

#### [`fof-oauth.admin.settings.advanced.log-oauth-errors-label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.advanced.log-oauth-errors-label%22)

> Log OAuth errors

```diff
+Registrar erros de OAuth
```

#### [`fof-oauth.admin.settings.disable_avatars_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_help%22)

> If enabled, the user's avatar will not be updated to match the provider's avatar on signup. Note that this only affects future signups, and will not change the avatar of existing users.
>

```diff
+Se ativado, o avatar do usuário não será atualizado para o avatar do provedor no cadastro. Isso afeta apenas cadastros futuros e não altera o avatar de usuários existentes.
+
```

#### [`fof-oauth.admin.settings.disable_avatars_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.disable_avatars_label%22)

> Disable avatars from provider

```diff
+Desativar avatares do provedor
```

#### [`fof-oauth.admin.settings.providers.google.hosted_domain_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.google.hosted_domain_label%22)

> Hosted Domain (G suite/Google Apps for Business, optional)

```diff
+Domínio Hospedado (G suite/Google Apps for Business, opcional)
```

#### [`fof-oauth.admin.settings.providers.group_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_help%22)

> Select a group to automatically assign to users who register using this provider.

```diff
+Selecione um grupo para atribuir automaticamente aos usuários que se cadastrarem usando este provedor.
```

#### [`fof-oauth.admin.settings.providers.group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.group_label%22)

> Assign Group

```diff
+Atribuir Grupo
```

#### [`fof-oauth.admin.settings.providers.no_group_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.providers.no_group_label%22)

> No group assignment

```diff
+Sem atribuição de grupo
```

#### [`fof-oauth.admin.settings.update_email_from_provider_help`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.update_email_from_provider_help%22)

> If enabled, logging in with an OAuth provider whose verified email differs from the user's forum email sends a confirmation link to the new address, and a notice to the current one. The email changes once the link is followed. Providers that cannot confirm the address is verified, including third-party providers that have not been updated to support it, will not change the email address.

```diff
+Se ativado, ao entrar com um provedor OAuth cujo e-mail verificado seja diferente do e-mail do usuário no fórum, um link de confirmação é enviado ao novo endereço e um aviso ao atual. O e-mail muda quando o link é acessado. Provedores que não conseguem confirmar que o endereço é verificado, incluindo provedores de terceiros que não foram atualizados para oferecer esse suporte, não alteram o endereço de e-mail.
```

#### [`fof-oauth.admin.settings.update_email_from_provider_label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.admin.settings.update_email_from_provider_label%22)

> Update email address from provider

```diff
+Atualizar o endereço de e-mail pelo provedor
```

#### [`fof-oauth.email.provider_email_change_notice.subject`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.email.provider_email_change_notice.subject%22)

> Email Address Change Requested

```diff
+Alteração de Endereço de E-mail Solicitada
```

#### [`fof-oauth.forum.log_in.unverified_email_in_use`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.log_in.unverified_email_in_use%22)

> {provider} hasn't confirmed this email address, so we can't use it to sign you in. If you already have an account, log in below, then link {provider} from your account settings.

```diff
+{provider} não confirmou este endereço de e-mail, então não podemos usá-lo para o seu login. Se você já tem uma conta, entre abaixo e depois vincule {provider} nas configurações da sua conta.
```

#### [`fof-oauth.forum.user.settings.linked-account.identification-label`](https://weblate.rob006.net/translate/flarum2/fof-oauth/pt_BR/?q=context%3A%3D%22fof-oauth.forum.user.settings.linked-account.identification-label%22)

> {provider} ID

```diff
+ID do {provider}
```


### `fof-online-users-widget` (missing)

#### [`fof-online-users-widget.admin.permissions.view_online_users_widget`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/pt_BR/?q=context%3A%3D%22fof-online-users-widget.admin.permissions.view_online_users_widget%22)

> View Online Users Widget

```diff
+Ver o Widget de Usuários Online
```

#### [`fof-online-users-widget.admin.settings.cache_ttl`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/pt_BR/?q=context%3A%3D%22fof-online-users-widget.admin.settings.cache_ttl%22)

> Time to cache the users list (in seconds)

```diff
+Tempo de cache da lista de usuários (em segundos)
```

#### [`fof-online-users-widget.admin.settings.last_seen_interval`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/pt_BR/?q=context%3A%3D%22fof-online-users-widget.admin.settings.last_seen_interval%22)

> Last seen interval to consider a user online (in minutes)

```diff
+Intervalo desde a última visita para considerar um usuário online (em minutos)
```

#### [`fof-online-users-widget.admin.settings.max_users`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/pt_BR/?q=context%3A%3D%22fof-online-users-widget.admin.settings.max_users%22)

> Max shown users

```diff
+Máx. de usuários mostrados
```

#### [`fof-online-users-widget.forum.widget.empty`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/pt_BR/?q=context%3A%3D%22fof-online-users-widget.forum.widget.empty%22)

> No Users Currently Online.

```diff
+Nenhum Usuário Online no Momento.
```

#### [`fof-online-users-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-online-users-widget/pt_BR/?q=context%3A%3D%22fof-online-users-widget.forum.widget.title%22)

> Online Users

```diff
+Usuários Online
```


### `fof-open-collective` (missing)

#### [`fof-open-collective.admin.settings.api_key_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.api_key_help%22)

> This authentication method is deprecated. Please consider switching to a Personal Token.

```diff
+Este método de autenticação está obsoleto. Considere mudar para um Token Pessoal.
```

#### [`fof-open-collective.admin.settings.api_key_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.api_key_label%22)

> Application API Key (deprecated)

```diff
+Chave de API de Aplicação (obsoleta)
```

#### [`fof-open-collective.admin.settings.group_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.group_help%22)

> Select which Flarum user group recurring backers should be added to. Users will be automatically added when they become recurring backers and moved to the one-time group (if configured) when their subscription ends.

```diff
+Selecione a qual grupo de usuários do Flarum os apoiadores recorrentes devem ser adicionados. Os usuários serão adicionados automaticamente quando se tornarem apoiadores recorrentes e movidos para o grupo de apoiadores únicos (se configurado) quando a assinatura terminar.
```

#### [`fof-open-collective.admin.settings.group_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.group_label%22)

> Recurring Backers Group

```diff
+Grupo de Apoiadores Recorrentes
```

#### [`fof-open-collective.admin.settings.onetime_group_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.onetime_group_help%22)

> Select which Flarum user group one-time backers should be added to. If not set, one-time backers will not be managed. When a recurring backer cancels their subscription, they will be moved to this group.

```diff
+Selecione a qual grupo de usuários do Flarum os apoiadores únicos devem ser adicionados. Se não for definido, os apoiadores únicos não serão gerenciados. Quando um apoiador recorrente cancelar a assinatura, ele será movido para este grupo.
```

#### [`fof-open-collective.admin.settings.onetime_group_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.onetime_group_label%22)

> One-Time Backers Group (Optional)

```diff
+Grupo de Apoiadores Únicos (Opcional)
```

#### [`fof-open-collective.admin.settings.personal_token_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.personal_token_help%22)

> Create a personal token at &lt;a&gt;https://opencollective.com/applications&lt;/a&gt;. This token is used to fetch your backer information from Open Collective.

```diff
+Crie um token pessoal em <a>https://opencollective.com/applications</a>. Este token é usado para buscar as informações dos seus apoiadores no Open Collective.
```

#### [`fof-open-collective.admin.settings.personal_token_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.personal_token_label%22)

> Personal Token

```diff
+Token Pessoal
```

#### [`fof-open-collective.admin.settings.slug_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_help%22)

> Enter your Open Collective collective slug (the part after opencollective.com/ in your collective URL).

```diff
+Digite o slug do seu coletivo no Open Collective (a parte depois de opencollective.com/ na URL do seu coletivo).
```

#### [`fof-open-collective.admin.settings.slug_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.slug_label%22)

> Collective Slug

```diff
+Slug do Coletivo
```

#### [`fof-open-collective.admin.settings.title`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.title%22)

> FriendsOfFlarum Open Collective

```diff
+FriendsOfFlarum Open Collective
```

#### [`fof-open-collective.admin.settings.use_legacy_api_key_help`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.use_legacy_api_key_help%22)

> If you have a legacy API key, you may keep using it, but it is recommended to switch to a Personal Token. Currently, personal tokens seem to work in API Key mode (i.e. "API-Key" header), but this is not documented.
>

```diff
+Se você tem uma chave de API legada, pode continuar usando-a, mas é recomendado mudar para um Token Pessoal. Atualmente, tokens pessoais parecem funcionar no modo de Chave de API (ou seja, cabeçalho "API-Key"), mas isso não está documentado.
+
```

#### [`fof-open-collective.admin.settings.use_legacy_api_key_label`](https://weblate.rob006.net/translate/flarum2/fof-open-collective/pt_BR/?q=context%3A%3D%22fof-open-collective.admin.settings.use_legacy_api_key_label%22)

> Use Legacy Application API Key

```diff
+Usar Chave de API de Aplicação Legada
```


### `fof-photoswipe` (missing)

#### [`fof-photoswipe.forum.arrow_next_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/pt_BR/?q=context%3A%3D%22fof-photoswipe.forum.arrow_next_title%22)

> Next

```diff
+Próxima
```

#### [`fof-photoswipe.forum.arrow_prev_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/pt_BR/?q=context%3A%3D%22fof-photoswipe.forum.arrow_prev_title%22)

> Previous

```diff
+Anterior
```

#### [`fof-photoswipe.forum.close_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/pt_BR/?q=context%3A%3D%22fof-photoswipe.forum.close_title%22)

> Close

```diff
+Fechar
```

#### [`fof-photoswipe.forum.error_msg`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/pt_BR/?q=context%3A%3D%22fof-photoswipe.forum.error_msg%22)

> The image cannot be loaded

```diff
+Não foi possível carregar a imagem
```

#### [`fof-photoswipe.forum.zoom_title`](https://weblate.rob006.net/translate/flarum2/fof-photoswipe/pt_BR/?q=context%3A%3D%22fof-photoswipe.forum.zoom_title%22)

> Zoom

```diff
+Zoom
```


### `fof-polls` (missing)

#### [`fof-polls.admin.permissions.moderate_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.moderate_group%22)

> Edit &amp; remove poll groups

```diff
+Editar e remover grupos de enquetes
```

#### [`fof-polls.admin.permissions.self_post_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.self_post_edit%22)

> Edit \*all\* polls on own posts (requires post edit permission)

```diff
+Editar *todas* as enquetes nos próprios posts (requer permissão de editar posts)
```

#### [`fof-polls.admin.permissions.start_global`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.start_global%22)

> Start a global poll

```diff
+Iniciar enquete global
```

#### [`fof-polls.admin.permissions.start_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.start_group%22)

> Create poll groups

```diff
+Criar grupos de enquetes
```

#### [`fof-polls.admin.permissions.upload_images`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.upload_images%22)

> Allow users to upload images for polls

```diff
+Enviar imagens para enquetes
```

#### [`fof-polls.admin.permissions.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.permissions.view_group%22)

> View poll groups

```diff
+Ver grupos de enquetes
```

#### [`fof-polls.admin.settings.enabled_poll_groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups%22)

> Enable poll groups

```diff
+Ativar grupos de enquetes
```

#### [`fof-polls.admin.settings.enabled_poll_groups_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.enabled_poll_groups_help%22)

> Poll groups allow you to group globals polls together, and display them in a dedicated page.

```diff
+Os grupos de enquetes permitem agrupar enquetes globais e exibi-las em uma página própria.
```

#### [`fof-polls.admin.settings.max_options`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.max_options%22)

> Maximum number of options per poll

```diff
+Número máximo de opções por enquete
```

#### [`fof-polls.admin.settings.options_color_blend`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.options_color_blend%22)

> Color blend text in poll options

```diff
+Mesclar cores do texto nas opções da enquete
```

#### [`fof-polls.admin.settings.options_color_blend_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.admin.settings.options_color_blend_help%22)

> Use this to use color mixing to make the poll options more readable. Disable if this feature causes issues with your forum's appearance, reducing readability.

```diff
+Usa a mistura de cores para deixar as opções da enquete mais legíveis. Desative se este recurso causar problemas na aparência do seu fórum, reduzindo a legibilidade.
```

#### [`fof-polls.forum.compose.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.add_title%22)

> Add a Poll

```diff
+Adicionar Enquete
```

#### [`fof-polls.forum.compose.continue_editing`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.continue_editing%22)

> Continue Editing

```diff
+Continuar Editando
```

#### [`fof-polls.forum.compose.draft_saved`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.draft_saved%22)

> Draft saved

```diff
+Rascunho salvo
```

#### [`fof-polls.forum.compose.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.edit_title%22)

> Edit Poll

```diff
+Editar Enquete
```

#### [`fof-polls.forum.compose.polls_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.polls_manager%22)

> Polls Manager

```diff
+Gerenciador de Enquetes
```

#### [`fof-polls.forum.compose.polls_preview`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.polls_preview%22)

> View Poll

```diff
+Ver Enquete
```

#### [`fof-polls.forum.compose.publish`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.publish%22)

> Publish

```diff
+Publicar
```

#### [`fof-polls.forum.compose.save_as_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.save_as_draft%22)

> Save as draft

```diff
+Salvar como rascunho
```

#### [`fof-polls.forum.compose.schedule`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.schedule%22)

> Schedule

```diff
+Agendar
```

#### [`fof-polls.forum.compose.schedule_datetime_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.schedule_datetime_label%22)

> Publish at

```diff
+Publicar em
```

#### [`fof-polls.forum.compose.schedule_publication`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication%22)

> Schedule publication

```diff
+Agendar publicação
```

#### [`fof-polls.forum.compose.schedule_publication_edit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.schedule_publication_edit%22)

> Edit scheduled publication

```diff
+Editar publicação agendada
```

#### [`fof-polls.forum.compose.schedule_submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.schedule_submit%22)

> Schedule

```diff
+Agendar
```

#### [`fof-polls.forum.compose.submit`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.submit%22)

> Submit

```diff
+Enviar
```

#### [`fof-polls.forum.compose.success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.success%22)

> Poll saved successfully.

```diff
+Enquete salva com sucesso.
```

#### [`fof-polls.forum.compose.update_draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.compose.update_draft%22)

> Update draft

```diff
+Atualizar rascunho
```

#### [`fof-polls.forum.composer_discussion.no_permission_alert`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.composer_discussion.no_permission_alert%22)

> You do not have permission to start a poll.

```diff
+Você não tem permissão para iniciar uma enquete.
```

#### [`fof-polls.forum.max_votes_allowed`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.max_votes_allowed%22)

> Poll allows voting for {max, plural, one {# option} other {# options}}.

```diff
+A enquete permite votar em {max, plural, one {# opção} other {# opções}}.
```

#### [`fof-polls.forum.modal.allow_change_vote_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.allow_change_vote_label%22)

> Allow users to change their vote

```diff
+Permitir que os usuários alterem o voto
```

#### [`fof-polls.forum.modal.allow_multiple_votes_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.allow_multiple_votes_label%22)

> Allow people to vote for multiple options

```diff
+Permitir votar em várias opções
```

#### [`fof-polls.forum.modal.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.delete%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`fof-polls.forum.modal.empty_answers`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.empty_answers%22)

> {count, plural, one {# answer is empty — please fill it in or remove it.} other {# answers are empty — please fill them in or remove them.}}

```diff
+{count, plural, one {# resposta está vazia — preencha-a ou remova-a.} other {# respostas estão vazias — preencha-as ou remova-as.}}
```

#### [`fof-polls.forum.modal.error`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.error%22)

> =&gt; core.lib.error.generic\_message

```diff
+=> core.lib.error.generic_message
```

#### [`fof-polls.forum.modal.hide_votes_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.hide_votes_label%22)

> Hide votes until poll ends

```diff
+Ocultar votos até o fim da enquete
```

#### [`fof-polls.forum.modal.hide_votes_label_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.hide_votes_label_help%22)

> The user who started the poll will always be able to see the votes.

```diff
+O usuário que iniciou a enquete sempre poderá ver os votos.
```

#### [`fof-polls.forum.modal.max_votes_help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.max_votes_help%22)

> Set to 0 to allow users to vote for all options.

```diff
+Defina 0 para permitir que os usuários votem em todas as opções.
```

#### [`fof-polls.forum.modal.max_votes_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.max_votes_label%22)

> Max votes per user

```diff
+Máximo de votos por usuário
```

#### [`fof-polls.forum.modal.poll_image.alt_help_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.alt_help_text%22)

> This text is required when an image is set, it will be displayed if the image fails to load.

```diff
+Este texto é obrigatório quando há uma imagem; ele será exibido se a imagem não carregar.
```

#### [`fof-polls.forum.modal.poll_image.alt_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.alt_label%22)

> Image Alt Text

```diff
+Texto Alternativo da Imagem
```

#### [`fof-polls.forum.modal.poll_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.help%22)

> Upload an image to be displayed alongside the poll (optional).

```diff
+Envie uma imagem para ser exibida junto à enquete (opcional).
```

#### [`fof-polls.forum.modal.poll_image.label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.poll_image.label%22)

> Poll Image

```diff
+Imagem da Enquete
```

#### [`fof-polls.forum.modal.poll_option_image.help`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.poll_option_image.help%22)

> Upload an image to be displayed alongside the poll answer (optional).

```diff
+Envie uma imagem para ser exibida junto à resposta da enquete (opcional).
```

#### [`fof-polls.forum.modal.poll_option_image.label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.poll_option_image.label%22)

> Poll Answer Image

```diff
+Imagem da Resposta da Enquete
```

#### [`fof-polls.forum.modal.subtitle_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.subtitle_placeholder%22)

> Subtitle/Description (optional)

```diff
+Subtítulo/Descrição (opcional)
```

#### [`fof-polls.forum.modal.tooltip.options.add-button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.modal.tooltip.options.add-button%22)

> Add Answer

```diff
+Adicionar Resposta
```

#### [`fof-polls.forum.moderation.add`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.moderation.add%22)

> Add Poll

```diff
+Adicionar Enquete
```

#### [`fof-polls.forum.page.nav`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.page.nav%22)

> Polls

```diff
+Enquetes
```

#### [`fof-polls.forum.page.nav-all`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.page.nav-all%22)

> All Global Polls

```diff
+Todas as Enquetes Globais
```

#### [`fof-polls.forum.page.nav-groups`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.page.nav-groups%22)

> Poll Groups

```diff
+Grupos de Enquetes
```

#### [`fof-polls.forum.poll.draft_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll.draft_label%22)

> Draft

```diff
+Rascunho
```

#### [`fof-polls.forum.poll.scheduled_error_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_error_tooltip%22)

> This scheduled publication failed. Open the poll to see why.

```diff
+Esta publicação agendada falhou. Abra a enquete para ver o motivo.
```

#### [`fof-polls.forum.poll.scheduled_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll.scheduled_label%22)

> Scheduled for {date}

```diff
+Agendada para {date}
```

#### [`fof-polls.forum.poll.total_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll.total_votes%22)

> {count, plural, one {# vote was given} other {# votes were given}}

```diff
+{count, plural, one {# voto registrado} other {# votos registrados}}
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_label%22)

> Cancel scheduled publication

```diff
+Cancelar publicação agendada
```

#### [`fof-polls.forum.poll_controls.cancel_schedule_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.cancel_schedule_success%22)

> Scheduled publication cancelled.

```diff
+Publicação agendada cancelada.
```

#### [`fof-polls.forum.poll_controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.delete_error_message%22)

> There went something wrong while deleting the poll.

```diff
+Algo deu errado ao excluir a enquete.
```

#### [`fof-polls.forum.poll_controls.edit_schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.edit_schedule_publish_label%22)

> Edit scheduled publication

```diff
+Editar publicação agendada
```

#### [`fof-polls.forum.poll_controls.publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_label%22)

> Publish now

```diff
+Publicar agora
```

#### [`fof-polls.forum.poll_controls.publish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.publish_success%22)

> Poll published.

```diff
+Enquete publicada.
```

#### [`fof-polls.forum.poll_controls.schedule_publish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.schedule_publish_label%22)

> Schedule publication

```diff
+Agendar publicação
```

#### [`fof-polls.forum.poll_controls.unpublish_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_confirmation%22)

> Move this poll back to draft? It will disappear from the showcase.

```diff
+Voltar esta enquete para rascunho? Ela sairá da vitrine.
```

#### [`fof-polls.forum.poll_controls.unpublish_error_has_votes`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_error_has_votes%22)

> Cannot unpublish — the poll already has votes. Delete it instead.

```diff
+Não é possível despublicar — a enquete já tem votos. Em vez disso, exclua-a.
```

#### [`fof-polls.forum.poll_controls.unpublish_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_label%22)

> Move back to draft

```diff
+Voltar para rascunho
```

#### [`fof-polls.forum.poll_controls.unpublish_success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_controls.unpublish_success%22)

> Poll moved to draft.

```diff
+Enquete movida para rascunho.
```

#### [`fof-polls.forum.poll_form.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_form.delete%22)

> Delete Poll

```diff
+Excluir Enquete
```

#### [`fof-polls.forum.poll_form.error`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_form.error%22)

> There was an error saving the poll, please contact any administrator.

```diff
+Ocorreu um erro ao salvar a enquete, contate um administrador.
```

#### [`fof-polls.forum.poll_groups.composer.add_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.add_title%22)

> Add Poll Group

```diff
+Adicionar Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.composer.delete`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.delete%22)

> Delete Poll Group

```diff
+Excluir Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.composer.edit_title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.edit_title%22)

> Edit Poll Group

```diff
+Editar Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.composer.groups_manager`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.groups_manager%22)

> Poll Groups Manager

```diff
+Gerenciador de Grupos de Enquetes
```

#### [`fof-polls.forum.poll_groups.composer.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.save_changes%22)

> =&gt; core.ref.save\_changes

```diff
+=> core.ref.save_changes
```

#### [`fof-polls.forum.poll_groups.composer.success`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.success%22)

> Poll group saved successfully.

```diff
+Grupo de enquetes salvo com sucesso.
```

#### [`fof-polls.forum.poll_groups.composer.view_group`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.composer.view_group%22)

> View Poll Group

```diff
+Ver Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.controls.add_poll_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.add_poll_label%22)

> Add Poll

```diff
+Adicionar Enquete
```

#### [`fof-polls.forum.poll_groups.controls.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_confirmation%22)

> Are you sure you want to delete this poll group?

```diff
+Tem certeza de que deseja excluir este grupo de enquetes?
```

#### [`fof-polls.forum.poll_groups.controls.delete_error_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_error_message%22)

> There went something wrong while deleting the poll group.

```diff
+Algo deu errado ao excluir o grupo de enquetes.
```

#### [`fof-polls.forum.poll_groups.controls.delete_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_label%22)

> =&gt; core.ref.delete

```diff
+=> core.ref.delete
```

#### [`fof-polls.forum.poll_groups.controls.delete_success_message`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.delete_success_message%22)

> Poll group deleted successfully.

```diff
+Grupo de enquetes excluído com sucesso.
```

#### [`fof-polls.forum.poll_groups.controls.edit_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.edit_label%22)

> =&gt; core.ref.edit

```diff
+=> core.ref.edit
```

#### [`fof-polls.forum.poll_groups.controls.view_label`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.controls.view_label%22)

> View Poll Group

```diff
+Ver Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.list_page.add_poll_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.add_poll_button%22)

> Add Poll to Group

```diff
+Adicionar Enquete ao Grupo
```

#### [`fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.cannot_start_poll_group_button%22)

> Cannot Start a Poll Group

```diff
+Impossível Iniciar Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.list_page.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.empty_text%22)

> It looks as though there are no poll groups here.

```diff
+Parece que não há grupos de enquetes aqui.
```

#### [`fof-polls.forum.poll_groups.list_page.load_more_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
+=> core.ref.load_more
```

#### [`fof-polls.forum.poll_groups.list_page.no_polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.no_polls%22)

> There are no polls in this group.

```diff
+Não há enquetes neste grupo.
```

#### [`fof-polls.forum.poll_groups.list_page.start_poll_group_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.start_poll_group_button%22)

> Start a Poll Group

```diff
+Iniciar Grupo de Enquetes
```

#### [`fof-polls.forum.poll_groups.list_page.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.poll_groups.list_page.title%22)

> Poll Groups

```diff
+Grupos de Enquetes
```

#### [`fof-polls.forum.polls_list.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.empty_text%22)

> It looks as though there are no community wide polls here.

```diff
+Parece que não há enquetes da comunidade aqui.
```

#### [`fof-polls.forum.polls_list.load_more_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.load_more_button%22)

> =&gt; core.ref.load\_more

```diff
+=> core.ref.load_more
```

#### [`fof-polls.forum.polls_list.sort_dropdown.least_voted`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.least_voted%22)

> Least Voted

```diff
+Menos Votadas
```

#### [`fof-polls.forum.polls_list.sort_dropdown.most_voted`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.most_voted%22)

> Most Voted

```diff
+Mais Votadas
```

#### [`fof-polls.forum.polls_list.sort_dropdown.newest`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.newest%22)

> Newest

```diff
+Mais novas
```

#### [`fof-polls.forum.polls_list.sort_dropdown.oldest`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.oldest%22)

> Oldest

```diff
+Mais antigas
```

#### [`fof-polls.forum.polls_list.sort_dropdown.sort_dropdown.default`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.sort_dropdown.sort_dropdown.default%22)

> =&gt; fof-polls.forum.polls\_list.sort\_dropdown.newest

```diff
+=> fof-polls.forum.polls_list.sort_dropdown.newest
```

#### [`fof-polls.forum.polls_list.status_filter.all`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.all%22)

> All

```diff
+Todas
```

#### [`fof-polls.forum.polls_list.status_filter.draft`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.draft%22)

> Drafts

```diff
+Rascunhos
```

#### [`fof-polls.forum.polls_list.status_filter.published`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_list.status_filter.published%22)

> Published

```diff
+Publicadas
```

#### [`fof-polls.forum.polls_page.title`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.polls_page.title%22)

> Polls

```diff
+Enquetes
```

#### [`fof-polls.forum.showcase.active-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.showcase.active-polls%22)

> Active Polls

```diff
+Enquetes Ativas
```

#### [`fof-polls.forum.showcase.ended-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.showcase.ended-polls%22)

> Concluded Polls

```diff
+Enquetes Encerradas
```

#### [`fof-polls.forum.showcase.no-active-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.showcase.no-active-polls%22)

> There are no active polls at the moment.

```diff
+Não há enquetes ativas no momento.
```

#### [`fof-polls.forum.showcase.no-recent-polls`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.showcase.no-recent-polls%22)

> There are no recently ended polls at the moment.

```diff
+Não há enquetes encerradas recentemente no momento.
```

#### [`fof-polls.forum.upload_image.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.upload_image.remove_button%22)

> Delete Image

```diff
+Excluir Imagem
```

#### [`fof-polls.forum.upload_image.upload_button`](https://weblate.rob006.net/translate/flarum2/fof-polls/pt_BR/?q=context%3A%3D%22fof-polls.forum.upload_image.upload_button%22)

> Upload Image

```diff
+Enviar Imagem
```


### `fof-profile-image-crop` (missing)

#### [`fof-profile-image-crop.forum.modal.error.failed_to_load_cropper`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/pt_BR/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.error.failed_to_load_cropper%22)

> Failed to load the image cropper.

```diff
+Falha ao carregar a ferramenta de recorte.
```

#### [`fof-profile-image-crop.forum.modal.error.generic_resize`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/pt_BR/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.error.generic_resize%22)

> Something went wrong while cropping &amp; resizing the image.

```diff
+Algo deu errado ao recortar e redimensionar a imagem.
```

#### [`fof-profile-image-crop.forum.modal.error.get_image_data`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/pt_BR/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.error.get_image_data%22)

> Failed to crop. Make sure your browser's fingerprinting protection is disabled.

```diff
+Falha ao recortar. Verifique se a proteção contra fingerprinting do navegador está desativada.
```

#### [`fof-profile-image-crop.forum.modal.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/pt_BR/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.submit_button%22)

> Upload

```diff
+Enviar
```

#### [`fof-profile-image-crop.forum.modal.submit_crop_button`](https://weblate.rob006.net/translate/flarum2/fof-profile-image-crop/pt_BR/?q=context%3A%3D%22fof-profile-image-crop.forum.modal.submit_crop_button%22)

> Crop &amp; Upload

```diff
+Recortar e Enviar
```


### `fof-pwa` (missing)

#### [`flarum-gdpr.lib.data.pushsubscriptions.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.pushsubscriptions.delete_description%22)

> Deletes all push notification subscriptions and device tokens associated with the user.

```diff
+Exclui todas as inscrições de notificações push e tokens de dispositivo associados ao usuário.
```

#### [`flarum-gdpr.lib.data.pushsubscriptions.export_description`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.pushsubscriptions.export_description%22)

> Exports all push notification subscriptions and device tokens associated with the user.

```diff
+Exporta todas as inscrições de notificações push e tokens de dispositivo associados ao usuário.
```

#### [`fof-pwa.admin.nav.pwa_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.nav.pwa_button%22)

> Progressive Web App

```diff
+Progressive Web App
```

#### [`fof-pwa.admin.pwa.about.description_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.about.description_label%22)

> Description

```diff
+Descrição
```

#### [`fof-pwa.admin.pwa.about.description_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.about.description_text%22)

> You can set the description on the 'Basics' page in your admin dashboard.

```diff
+Você pode definir a descrição na página "Básico" do seu dashboard de administração.
```

#### [`fof-pwa.admin.pwa.about.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.about.heading%22)

> About

```diff
+Sobre
```

#### [`fof-pwa.admin.pwa.about.long_name_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.about.long_name_label%22)

> Long name

```diff
+Nome longo
```

#### [`fof-pwa.admin.pwa.about.long_name_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.about.long_name_text%22)

> The name of the web application displayed to the user.

```diff
+O nome do aplicativo web exibido ao usuário.
```

#### [`fof-pwa.admin.pwa.about.short_name_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.about.short_name_label%22)

> Short name

```diff
+Nome curto
```

#### [`fof-pwa.admin.pwa.colors.background_color_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.colors.background_color_label%22)

> Background color

```diff
+Cor de fundo
```

#### [`fof-pwa.admin.pwa.colors.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.colors.heading%22)

> Colors

```diff
+Cores
```

#### [`fof-pwa.admin.pwa.colors.theme_color_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.colors.theme_color_label%22)

> Theme color

```diff
+Cor do tema
```

#### [`fof-pwa.admin.pwa.firebase_config.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.firebase_config.heading%22)

> Firebase

```diff
+Firebase
```

#### [`fof-pwa.admin.pwa.firebase_config.upload_file`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.firebase_config.upload_file%22)

> Upload file

```diff
+Enviar arquivo
```

#### [`fof-pwa.admin.pwa.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.heading%22)

> Progressive Web App Configuration

```diff
+Configuração do Progressive Web App
```

#### [`fof-pwa.admin.pwa.logo_heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.logo_heading%22)

> Logos and Icons

```diff
+Logotipos e Ícones
```

#### [`fof-pwa.admin.pwa.maintenance.debug_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.debug_text%22)

> This will log info about notifications to \`storage/logs\`. It should generally be disabled to avoid filling up logs unnecessarily.

```diff
+Isso registrará informações sobre notificações em `storage/logs`. Em geral, deve ficar desativado para não encher os logs sem necessidade.
```

#### [`fof-pwa.admin.pwa.maintenance.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.heading%22)

> Maintenance

```diff
+Manutenção
```

#### [`fof-pwa.admin.pwa.maintenance.reset_vapid_confirm`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.reset_vapid_confirm%22)

> Resetting VAPID keys will remove any subscriptions using the existing keys, so users won't receive any notifications until the next time they visit your site. This should only be done when setting up push notifications for the first time, or if push notifications aren't working at all and there's a warning about missing VAPID keys above.

```diff
+Redefinir as chaves VAPID removerá as inscrições que usam as chaves existentes, então os usuários não receberão notificações até a próxima visita ao seu site. Faça isso apenas ao configurar as notificações push pela primeira vez, ou se as notificações push não estiverem funcionando e houver um aviso acima sobre chaves VAPID ausentes.
```

#### [`fof-pwa.admin.pwa.maintenance.reset_vapid_success`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.maintenance.reset_vapid_success%22)

> Successfully reset VAPID keys. {count} subscriptions were reset. Reload the page to see an updated status check report.

```diff
+Chaves VAPID redefinidas com sucesso. Inscrições redefinidas: {count}. Recarregue a página para ver o relatório de verificação de status atualizado.
```

#### [`fof-pwa.admin.pwa.other.heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.other.heading%22)

> Other

```diff
+Outros
```

#### [`fof-pwa.admin.pwa.other.share_buttons_label`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.other.share_buttons_label%22)

> Enable share buttons

```diff
+Ativar botões de compartilhamento
```

#### [`fof-pwa.admin.pwa.other.share_buttons_text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.other.share_buttons_text%22)

> If enabled, a "Share" button will be added to discussions, posts, and users.

```diff
+Se ativado, um botão "Compartilhar" será adicionado a discussões, posts e usuários.
```

#### [`fof-pwa.admin.pwa.refreshed_message`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.refreshed_message%22)

> PWA config refreshed successfully.

```diff
+Configuração do PWA atualizada com sucesso.
```

#### [`fof-pwa.admin.pwa.status_check_heading`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.status_check_heading%22)

> Status Check

```diff
+Verificação de Status
```

#### [`fof-pwa.admin.pwa.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.pwa.submit_button%22)

> Save Settings

```diff
+Salvar Configurações
```

#### [`fof-pwa.admin.status.no_logo`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.status.no_logo%22)

> You must upload at least one logo, with a size of at least 144x144px, for the PWA to be installable.

```diff
+Você deve enviar pelo menos um logotipo, com tamanho mínimo de 144x144px, para que o PWA seja instalável.
```

#### [`fof-pwa.admin.status.no_name`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.admin.status.no_name%22)

> You must provide a full name for your app to work.

```diff
+Você deve informar um nome completo para que seu app funcione.
```

#### [`fof-pwa.forum.discussion_controls.share_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.discussion_controls.share_button%22)

> Share

```diff
+Compartilhar
```

#### [`fof-pwa.forum.post_controls.share_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.post_controls.share_button%22)

> Share

```diff
+Compartilhar
```

#### [`fof-pwa.forum.settings.push_header`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.push_header%22)

> Push

```diff
+Push
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_default`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_default%22)

> Due to browser restrictions, you must opt in to receive push notifications on this device.

```diff
+Devido a restrições do navegador, você precisa aceitar receber notificações push neste dispositivo.
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_default_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_default_button%22)

> Opt In

```diff
+Aceitar
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_denied`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_denied%22)

> You must adjust your browser settings to receive push notifications on this device.

```diff
+Você precisa ajustar as configurações do navegador para receber notificações push neste dispositivo.
```

#### [`fof-pwa.forum.settings.pwa_notifications.access_denied_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.access_denied_button%22)

> Learn How

```diff
+Saiba como
```

#### [`fof-pwa.forum.settings.pwa_notifications.no_browser_support`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.no_browser_support%22)

> This browser does not support push notifications for progressive web apps.

```diff
+Este navegador não oferece suporte a notificações push para progressive web apps.
```

#### [`fof-pwa.forum.settings.pwa_notifications.no_browser_support_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.settings.pwa_notifications.no_browser_support_button%22)

> Learn More

```diff
+Saiba Mais
```

#### [`fof-pwa.forum.user_controls.share_button`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.forum.user_controls.share_button%22)

> Share

```diff
+Compartilhar
```

#### [`fof-pwa.views.offline.header`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.views.offline.header%22)

> Network connection error

```diff
+Erro de conexão de rede
```

#### [`fof-pwa.views.offline.text`](https://weblate.rob006.net/translate/flarum2/fof-pwa/pt_BR/?q=context%3A%3D%22fof-pwa.views.offline.text%22)

> This app requires a network connection; it cannot be used offline. Please check your connection.

```diff
+Este app requer conexão de rede; ele não pode ser usado offline. Verifique sua conexão.
```


### `fof-pwned-passwords` (missing)

#### [`fof-pwned-passwords.admin.enableAdminRevoke`](https://weblate.rob006.net/translate/flarum2/fof-pwned-passwords/pt_BR/?q=context%3A%3D%22fof-pwned-passwords.admin.enableAdminRevoke%22)

> Revoke permissions from pwned admins

```diff
+Revogar permissões de administradores com senha vazada
```

#### [`fof-pwned-passwords.admin.enableLoginCheck`](https://weblate.rob006.net/translate/flarum2/fof-pwned-passwords/pt_BR/?q=context%3A%3D%22fof-pwned-passwords.admin.enableLoginCheck%22)

> Enable password check on login

```diff
+Ativar a verificação de senha no login
```

#### [`fof-pwned-passwords.error`](https://weblate.rob006.net/translate/flarum2/fof-pwned-passwords/pt_BR/?q=context%3A%3D%22fof-pwned-passwords.error%22)

> The password you chose is registered in the Pwned Passwords database, please choose a different one.

```diff
+A senha que você escolheu consta no banco de dados Pwned Passwords, escolha outra.
```

#### [`fof-pwned-passwords.forum.alert.resend_button`](https://weblate.rob006.net/translate/flarum2/fof-pwned-passwords/pt_BR/?q=context%3A%3D%22fof-pwned-passwords.forum.alert.resend_button%22)

> Resend Reset Email

```diff
+Reenviar E-mail de Redefinição
```

#### [`fof-pwned-passwords.forum.alert.sent_message`](https://weblate.rob006.net/translate/flarum2/fof-pwned-passwords/pt_BR/?q=context%3A%3D%22fof-pwned-passwords.forum.alert.sent_message%22)

> Sent

```diff
+Enviado
```

#### [`fof-pwned-passwords.forum.alert.warning`](https://weblate.rob006.net/translate/flarum2/fof-pwned-passwords/pt_BR/?q=context%3A%3D%22fof-pwned-passwords.forum.alert.warning%22)

> Your account's current password is registered in the Pwned Passwords database. We've sent a password reset email to you.

```diff
+A senha atual da sua conta consta no banco de dados Pwned Passwords. Enviamos a você um e-mail de redefinição de senha.
```


### `fof-reactions` (missing)

#### [`fof-reactions.admin.page.cdn.default-url`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.cdn.default-url%22)

> Default: {url}

```diff
+Padrão: {url}
```

#### [`fof-reactions.admin.page.cdn.label`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.cdn.label%22)

> URL

```diff
+URL
```

#### [`fof-reactions.admin.page.cdn.title`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.cdn.title%22)

> CDN

```diff
+CDN
```

#### [`fof-reactions.admin.page.reactions.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.reactions.delete_confirmation%22)

> Are you sure you want to delete this reaction? This action cannot be undone.

```diff
+Tem certeza de que deseja excluir esta reação? Esta ação não pode ser desfeita.
```

#### [`fof-reactions.admin.page.settings.allow-anonymous`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.allow-anonymous%22)

> Allow anonymous(guest) reactions

```diff
+Permitir reações anônimas (de convidados)
```

#### [`fof-reactions.admin.page.settings.allow-anonymous-help`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.page.settings.allow-anonymous-help%22)

> If enabled, guests and anonymous users will be able to react to posts. Note that anonymous reactions will not be linked to a user profile and will be aggregated in the reactions list.

```diff
+Se ativado, convidados e usuários anônimos poderão reagir aos posts. Observe que as reações anônimas não serão vinculadas a um perfil de usuário e serão agregadas na lista de reações.
```

#### [`fof-reactions.admin.permissions.delete_post_reactions_label`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.admin.permissions.delete_post_reactions_label%22)

> Delete reactions on posts

```diff
+Excluir reações em posts
```

#### [`fof-reactions.forum.modal.anonymous_count`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.forum.modal.anonymous_count%22)

> {count, plural, one {# anonymous user} other {# anonymous users}}

```diff
+{count, plural, one {# usuário anônimo} other {# usuários anônimos}}
```

#### [`fof-reactions.forum.modal.no_reactions`](https://weblate.rob006.net/translate/flarum2/fof-reactions/pt_BR/?q=context%3A%3D%22fof-reactions.forum.modal.no_reactions%22)

> No reactions yet

```diff
+Nenhuma reação ainda
```


### `fof-recaptcha` (missing)

#### [`fof-recaptcha.admin.settings.forgot`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.settings.forgot%22)

> =&gt; core.forum.forgot\_password.title

```diff
+=> core.forum.forgot_password.title
```

#### [`fof-recaptcha.admin.settings.signin`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.settings.signin%22)

> =&gt; core.forum.log\_in.title

```diff
+=> core.forum.log_in.title
```

#### [`fof-recaptcha.admin.settings.signup`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.settings.signup%22)

> =&gt; core.forum.sign\_up.title

```diff
+=> core.forum.sign_up.title
```

#### [`fof-recaptcha.admin.test.help_text`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.test.help_text%22)

> This test will use the current values entered above. Make sure to reload the test after modifying settings, and don't forget to save once the test passes!
> Below may not reflect the saved settings.
>

```diff
+Este teste usa os valores atuais digitados acima. Recarregue o teste após modificar as configurações e não se esqueça de salvar quando o teste passar!
+O que aparece abaixo pode não refletir as configurações salvas.
+
```

#### [`fof-recaptcha.admin.test.load_test_button`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.test.load_test_button%22)

> Load

```diff
+Carregar
```

#### [`fof-recaptcha.admin.test.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.test.submit_button%22)

> Submit

```diff
+Enviar
```

#### [`fof-recaptcha.admin.test.success_message`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.test.success_message%22)

> Success! reCAPTCHA is configured correctly.

```diff
+Sucesso! O reCAPTCHA está configurado corretamente.
```

#### [`fof-recaptcha.admin.test.title`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22fof-recaptcha.admin.test.title%22)

> Test reCAPTCHA

```diff
+Testar reCAPTCHA
```

#### [`validation.recaptcha-unknown`](https://weblate.rob006.net/translate/flarum2/fof-recaptcha/pt_BR/?q=context%3A%3D%22validation.recaptcha-unknown%22)

> An unknown error occurred while validating reCAPTCHA ({errors}).

```diff
+Ocorreu um erro desconhecido ao validar o reCAPTCHA ({errors}).
```


### `fof-rich-text` (missing)

#### [`fof-rich-text.admin.settings.toggle_on_editor`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.admin.settings.toggle_on_editor%22)

> Show rich text mode toggle on editor?

```diff
+Mostrar o botão de modo de texto rico no editor?
```

#### [`fof-rich-text.forum.settings.composer_heading`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.forum.settings.composer_heading%22)

> Composer

```diff
+Editor
```

#### [`fof-rich-text.forum.settings.rich_text_compact_paragraphs_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.forum.settings.rich_text_compact_paragraphs_label%22)

> Don't separate paragraphs with newline.

```diff
+Não separar parágrafos com uma linha em branco.
```

#### [`fof-rich-text.forum.settings.use_rich_text_editor_label`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.forum.settings.use_rich_text_editor_label%22)

> Use rich text editor?

```diff
+Usar o editor de texto rico?
```

#### [`fof-rich-text.lib.composer.additional_items_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.additional_items_tooltip%22)

> Additional Controls

```diff
+Controles Adicionais
```

#### [`fof-rich-text.lib.composer.code_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.code_block_tooltip%22)

> Insert a code block

```diff
+Inserir bloco de código
```

#### [`fof-rich-text.lib.composer.horizontal_rule_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.horizontal_rule_tooltip%22)

> Insert horizontal rule

```diff
+Inserir linha horizontal
```

#### [`fof-rich-text.lib.composer.image_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.image_tooltip%22)

> Add an image

```diff
+Adicionar uma imagem
```

#### [`fof-rich-text.lib.composer.insert_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_button%22)

> Insert

```diff
+Inserir
```

#### [`fof-rich-text.lib.composer.insert_image.src_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.src_placeholder%22)

> Link

```diff
+Link
```

#### [`fof-rich-text.lib.composer.insert_image.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_image.title_placeholder%22)

> Title

```diff
+Título
```

#### [`fof-rich-text.lib.composer.insert_link.href_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.href_placeholder%22)

> URL

```diff
+URL
```

#### [`fof-rich-text.lib.composer.insert_link.remove_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.remove_button%22)

> Remove

```diff
+Remover
```

#### [`fof-rich-text.lib.composer.insert_link.text_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.text_placeholder%22)

> Text

```diff
+Texto
```

#### [`fof-rich-text.lib.composer.insert_link.title_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.insert_link.title_placeholder%22)

> Title (shows on hover)

```diff
+Título (aparece ao passar o mouse)
```

#### [`fof-rich-text.lib.composer.link_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.link_tooltip%22)

> Add a link

```diff
+Adicionar um link
```

#### [`fof-rich-text.lib.composer.spoiler_block_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.spoiler_block_tooltip%22)

> Block Spoiler/Dropdown

```diff
+Spoiler em Bloco/Dropdown
```

#### [`fof-rich-text.lib.composer.text_type_tooltip`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.text_type_tooltip%22)

> Select Text Type

```diff
+Selecionar Tipo de Texto
```

#### [`fof-rich-text.lib.composer.toggle_button`](https://weblate.rob006.net/translate/flarum2/fof-rich-text/pt_BR/?q=context%3A%3D%22fof-rich-text.lib.composer.toggle_button%22)

> Toggle Rich Text Mode

```diff
+Alternar Modo de Texto Rico
```


### `fof-sentry` (missing)

#### [`fof-sentry.admin.sections.backend_performance`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.backend_performance%22)

> Backend Performance Monitoring

```diff
+Monitoramento de Desempenho do Backend
```

#### [`fof-sentry.admin.sections.backend_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.backend_performance_help%22)

> Track PHP backend performance and profiling. Set sample rates to control overhead.

```diff
+Acompanhe o desempenho e o profiling do backend PHP. Defina taxas de amostragem para controlar a sobrecarga.
```

#### [`fof-sentry.admin.sections.database_monitoring`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.database_monitoring%22)

> Database Query Monitoring

```diff
+Monitoramento de Consultas ao Banco de Dados
```

#### [`fof-sentry.admin.sections.database_monitoring_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.database_monitoring_help%22)

> Monitor database query performance, detect slow queries and N+1 issues. Only active when backend performance monitoring is enabled.

```diff
+Monitore o desempenho das consultas ao banco de dados e detecte consultas lentas e problemas N+1. Só fica ativo quando o monitoramento de desempenho do backend está ativado.
```

#### [`fof-sentry.admin.sections.frontend_monitoring`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.frontend_monitoring%22)

> Frontend (JavaScript) Monitoring

```diff
+Monitoramento do Frontend (JavaScript)
```

#### [`fof-sentry.admin.sections.general`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.general%22)

> General Settings

```diff
+Configurações Gerais
```

#### [`fof-sentry.admin.sections.general_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.general_help%22)

> Configure your Sentry DSN and environment settings.

```diff
+Configure o DSN do Sentry e as configurações de ambiente.
```

#### [`fof-sentry.admin.sections.user_context`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.user_context%22)

> User Context

```diff
+Contexto do Usuário
```

#### [`fof-sentry.admin.sections.user_context_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sections.user_context_help%22)

> Control what user information is sent to Sentry with error reports.

```diff
+Controle quais informações do usuário são enviadas ao Sentry com os relatórios de erro.
```

#### [`fof-sentry.admin.sentry_settings`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.sentry_settings%22)

> Sentry Settings

```diff
+Configurações do Sentry
```

#### [`fof-sentry.admin.settings.db_n_plus_one_detection_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_detection_help%22)

> Automatically detect N+1 query problems by tracking repeated query patterns. N+1 queries occur when code executes the same query multiple times in a loop instead of using proper joins or eager loading. Helps identify significant performance bottlenecks.

```diff
+Detecte automaticamente problemas de consultas N+1 rastreando padrões de consulta repetidos. Consultas N+1 ocorrem quando o código executa a mesma consulta várias vezes em um loop em vez de usar joins adequados ou eager loading. Ajuda a identificar gargalos de desempenho significativos.
```

#### [`fof-sentry.admin.settings.db_n_plus_one_detection_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_detection_label%22)

> Enable N+1 Query Detection

```diff
+Ativar Detecção de Consultas N+1
```

#### [`fof-sentry.admin.settings.db_n_plus_one_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_threshold_help%22)

> Number of times a query pattern must repeat to be flagged as a potential N+1 issue. Sensitivity levels: 5-10 (aggressive, may have false positives), 10-20 (balanced, recommended), 20+ (conservative, only flags severe issues). Default: 10.

```diff
+Número de vezes que um padrão de consulta deve se repetir para ser sinalizado como um possível problema N+1. Níveis de sensibilidade: 5-10 (agressivo, pode gerar falsos positivos), 10-20 (equilibrado, recomendado), 20+ (conservador, sinaliza apenas problemas graves). Padrão: 10.
```

#### [`fof-sentry.admin.settings.db_n_plus_one_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_threshold_label%22)

> N+1 Detection Threshold

```diff
+Limite de Detecção N+1
```

#### [`fof-sentry.admin.settings.db_query_sample_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_help%22)

> Percentage of database queries to track in performance monitoring (0-100%). Impact levels: 100% (track all queries, maximum visibility, higher overhead), 50% (track half, balanced), 10-25% (track subset, lower overhead, still catches issues), 0% (track only slow queries, minimum overhead). Note: Slow queries (above threshold) are ALWAYS tracked regardless of this setting. Recommendation: Use 10-25% on high-traffic sites to reduce performance impact and Sentry data costs.

```diff
+Porcentagem de consultas ao banco de dados a rastrear no monitoramento de desempenho (0-100%). Níveis de impacto: 100% (rastreia todas as consultas, visibilidade máxima, maior sobrecarga), 50% (rastreia metade, equilibrado), 10-25% (rastreia um subconjunto, menor sobrecarga, ainda detecta problemas), 0% (rastreia apenas consultas lentas, sobrecarga mínima). Nota: consultas lentas (acima do limite) são SEMPRE rastreadas, independentemente desta configuração. Recomendação: use 10-25% em sites de alto tráfego para reduzir o impacto no desempenho e os custos de dados do Sentry.
```

#### [`fof-sentry.admin.settings.db_query_sample_rate_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_label%22)

> Query Sampling Rate

```diff
+Taxa de Amostragem de Consultas
```

#### [`fof-sentry.admin.settings.db_slow_query_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_slow_query_threshold_help%22)

> Queries taking longer than this threshold (in milliseconds) are flagged as slow and automatically tracked regardless of sample rate. Severity levels: Medium (1-2× threshold), High (2-5× threshold), Critical (5×+ threshold). Default: 1000ms (1 second). Lower to 500ms for more aggressive detection.

```diff
+Consultas que demoram mais que este limite (em milissegundos) são sinalizadas como lentas e rastreadas automaticamente, independentemente da taxa de amostragem. Níveis de gravidade: Médio (1-2× o limite), Alto (2-5× o limite), Crítico (5×+ o limite). Padrão: 1000ms (1 segundo). Reduza para 500ms para uma detecção mais agressiva.
```

#### [`fof-sentry.admin.settings.db_slow_query_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_slow_query_threshold_label%22)

> Slow Query Threshold (milliseconds)

```diff
+Limite de Consulta Lenta (milissegundos)
```

#### [`fof-sentry.admin.settings.db_track_bindings_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_help%22)

> Include actual parameter values in query tracking (e.g., "SELECT \* FROM users WHERE id = 123" instead of "SELECT \* FROM users WHERE id = ?"). Benefits: See exact values causing slow queries and identify problematic data patterns. Security &amp; Privacy Warning: May expose sensitive user data in Sentry. Passwords and hashes (32+ hex chars) are automatically masked. Long strings (100+ chars) are truncated. Review your privacy policy before enabling. Recommendation: Enable only in staging/development, disable in production.

```diff
+Inclua os valores reais dos parâmetros no rastreamento de consultas (ex.: "SELECT * FROM users WHERE id = 123" em vez de "SELECT * FROM users WHERE id = ?"). Benefícios: veja os valores exatos que causam consultas lentas e identifique padrões de dados problemáticos. Aviso de Segurança e Privacidade: pode expor dados sensíveis de usuários no Sentry. Senhas e hashes (32+ caracteres hexadecimais) são mascarados automaticamente. Strings longas (100+ caracteres) são truncadas. Revise sua política de privacidade antes de ativar. Recomendação: ative apenas em staging/desenvolvimento e desative em produção.
```

#### [`fof-sentry.admin.settings.db_track_bindings_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_label%22)

> Track Query Parameter Values

```diff
+Rastrear Valores dos Parâmetros das Consultas
```

#### [`fof-sentry.admin.settings.dsn_backend_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.dsn_backend_help%22)

> Optional separate DSN exclusively for backend (PHP) errors. Useful for using a different Sentry project for backend errors, routing through a Relay for improved performance, or separating frontend and backend error tracking. If not set, the primary DSN above will be used for both.

```diff
+DSN separado e opcional, exclusivo para erros do backend (PHP). Útil para usar outro projeto do Sentry para erros do backend, rotear por um Relay para melhor desempenho ou separar o rastreamento de erros do frontend e do backend. Se não for definido, o DSN principal acima será usado para ambos.
```

#### [`fof-sentry.admin.settings.dsn_backend_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.dsn_backend_label%22)

> Sentry DSN (Backend Only)

```diff
+DSN do Sentry (Somente Backend)
```

#### [`fof-sentry.admin.settings.dsn_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.dsn_help%22)

> Your Sentry Data Source Name - the primary connection URL for both frontend and backend error reporting. Get this from your Sentry project settings. Important: If using a Relay DSN, disable "User Feedback" as it requires direct Sentry access.

```diff
+Seu Data Source Name do Sentry - a URL de conexão principal para o relato de erros do frontend e do backend. Obtenha-o nas configurações do seu projeto no Sentry. Importante: se usar um DSN do Relay, desative o "Feedback do Usuário", pois ele exige acesso direto ao Sentry.
```

#### [`fof-sentry.admin.settings.dsn_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.dsn_label%22)

> Sentry DSN

```diff
+DSN do Sentry
```

#### [`fof-sentry.admin.settings.environment_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.environment_help%22)

> Tag all events with an environment name (e.g., "production", "staging", "development"). This helps you filter errors by deployment environment and set different alert rules per environment.

```diff
+Marque todos os eventos com um nome de ambiente (ex.: "production", "staging", "development"). Isso ajuda a filtrar erros por ambiente de implantação e a definir regras de alerta diferentes por ambiente.
```

#### [`fof-sentry.admin.settings.environment_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.environment_label%22)

> Sentry Environment

```diff
+Ambiente do Sentry
```

#### [`fof-sentry.admin.settings.javascript_console_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_console_help%22)

> Record console.log, console.info, console.warn, and console.error calls as breadcrumbs. See the sequence of events leading to an error and debug complex user interactions. Note: Increases data volume. Use selectively in production.

```diff
+Registre chamadas a console.log, console.info, console.warn e console.error como breadcrumbs. Veja a sequência de eventos que levou a um erro e depure interações complexas do usuário. Nota: aumenta o volume de dados. Use de forma seletiva em produção.
```

#### [`fof-sentry.admin.settings.javascript_console_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_console_label%22)

> Capture Console Messages as Breadcrumbs

```diff
+Capturar Mensagens do Console como Breadcrumbs
```

#### [`fof-sentry.admin.settings.javascript_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_help%22)

> Capture and report JavaScript errors from your forum's frontend to Sentry. Tracks uncaught exceptions, promise rejections, console errors, and network failures. Disable this if you only want backend error tracking.

```diff
+Capture e envie ao Sentry os erros de JavaScript do frontend do seu fórum. Acompanha exceções não capturadas, rejeições de promises, erros de console e falhas de rede. Desative se quiser apenas o rastreamento de erros do backend.
```

#### [`fof-sentry.admin.settings.javascript_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_label%22)

> Enable JavaScript Error Reporting

```diff
+Ativar Relato de Erros de JavaScript
```

#### [`fof-sentry.admin.settings.javascript_replays_error_sample_rate`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_replays_error_sample_rate%22)

> Error-Triggered Replay Sample Rate

```diff
+Taxa de Amostragem do Replay Acionado por Erro
```

#### [`fof-sentry.admin.settings.javascript_replays_session_sample_rate`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_replays_session_sample_rate%22)

> Session Replay Sample Rate

```diff
+Taxa de Amostragem do Replay de Sessão
```

#### [`fof-sentry.admin.settings.javascript_trace_sample_rate`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.javascript_trace_sample_rate%22)

> Frontend Performance Monitoring Sample Rate

```diff
+Taxa de Amostragem do Monitoramento de Desempenho do Frontend
```

#### [`fof-sentry.admin.settings.monitor_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.monitor_performance_help%22)

> Percentage of backend requests to trace (0 = disabled, 100 = trace all). Performance traces include request/response time, database queries, and extension loading times. Recommendation: Start with 10-25% in production, 100% in staging. Lower values reduce data volume and Sentry costs.

```diff
+Porcentagem de requisições do backend a rastrear (0 = desativado, 100 = rastrear todas). Os rastreamentos de desempenho incluem tempo de requisição/resposta, consultas ao banco de dados e tempos de carregamento das extensões. Recomendação: comece com 10-25% em produção e 100% em staging. Valores menores reduzem o volume de dados e os custos do Sentry.
```

#### [`fof-sentry.admin.settings.monitor_performance_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.monitor_performance_label%22)

> Backend Performance Monitoring Sample Rate

```diff
+Taxa de Amostragem do Monitoramento de Desempenho do Backend
```

#### [`fof-sentry.admin.settings.profile_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.profile_rate_help%22)

> Percentage of traced transactions to profile (relative to monitoring rate above). Example: If monitoring = 10% and profiling = 50%, then 5% of all requests are profiled. Profiling provides detailed function-level performance data. Performance impact: Profiling adds overhead and increases response time. See &lt;a&gt;Sentry's optimization guide&lt;/a&gt;. {icon} &lt;bold&gt;Requires Excimer extension (Linux only). Currently {icon}.&lt;/bold&gt;

```diff
+Porcentagem das transações rastreadas que passam por profiling (relativa à taxa de monitoramento acima). Exemplo: se monitoramento = 10% e profiling = 50%, então 5% de todas as requisições passam por profiling. O profiling fornece dados detalhados de desempenho no nível de função. Impacto no desempenho: o profiling adiciona sobrecarga e aumenta o tempo de resposta. Veja o <a>guia de otimização do Sentry</a>. {icon} <bold>Requer a extensão Excimer (somente Linux). Atualmente {icon}.</bold>
```

#### [`fof-sentry.admin.settings.profile_rate_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.profile_rate_label%22)

> Backend Profiling Sample Rate

```diff
+Taxa de Amostragem do Profiling do Backend
```

#### [`fof-sentry.admin.settings.send_user_emails_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.send_user_emails_label%22)

> Include User Email Addresses in Reports

```diff
+Incluir E-mails dos Usuários nos Relatórios
```

#### [`fof-sentry.admin.settings.user_feedback_label`](https://weblate.rob006.net/translate/flarum2/fof-sentry/pt_BR/?q=context%3A%3D%22fof-sentry.admin.settings.user_feedback_label%22)

> Enable User Feedback Dialog

```diff
+Ativar Diálogo de Feedback do Usuário
```


### `fof-seo` (missing)

#### [`fof-seo.admin.common.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.common.close%22)

> Close

```diff
+Fechar
```

#### [`fof-seo.admin.common.learn_more`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.common.learn_more%22)

> Learn more

```diff
+Saiba mais
```

#### [`fof-seo.admin.common.save_changes`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.common.save_changes%22)

> Save changes

```diff
+Salvar alterações
```

#### [`fof-seo.admin.dashboard.widget.cta`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.cta%22)

> Do the health-check!

```diff
+Faça a verificação de saúde!
```

#### [`fof-seo.admin.dashboard.widget.review_prompt`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.dashboard.widget.review_prompt%22)

> It's time to review your SEO settings!

```diff
+É hora de revisar suas configurações de SEO!
```

#### [`fof-seo.admin.header.health_check`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.health_check%22)

> Health check

```diff
+Verificação de saúde
```

#### [`fof-seo.admin.header.search_engines_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.search_engines_info%22)

> Search engine information

```diff
+Informações de mecanismos de busca
```

#### [`fof-seo.admin.header.seo_settings`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.seo_settings%22)

> SEO settings

```diff
+Configurações de SEO
```

#### [`fof-seo.admin.header.setup_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.setup_ssl%22)

> Set up SSL

```diff
+Configurar SSL
```

#### [`fof-seo.admin.header.sitemap_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.sitemap_info%22)

> Sitemap information

```diff
+Informações do sitemap
```

#### [`fof-seo.admin.header.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.title%22)

> Search Engine Optimization

```diff
+Otimização para Mecanismos de Busca
```

#### [`fof-seo.admin.header.tools`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.header.tools%22)

> Tools

```diff
+Ferramentas
```

#### [`fof-seo.admin.modals.crawl_post.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.intro%22)

> &lt;b&gt;Read this dialog carefully.&lt;/b&gt; This function will only be executed on a page refresh on a discussion. You can always change this option later.

```diff
+<b>Leia este diálogo com atenção.</b> Esta função só será executada ao atualizar a página de uma discussão. Você pode mudar esta opção depois.
```

#### [`fof-seo.admin.modals.crawl_post.mode_all_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_all_title%22)

> Index all posts in a discussion (setting enabled)

```diff
+Indexar todos os posts de uma discussão (configuração ativada)
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_help%22)

> Search engine will only show the main post in the search results. It won't affect loading speed when you navigate to it via forum links.

```diff
+O mecanismo de busca mostrará apenas o post principal nos resultados de busca. Isso não afetará a velocidade de carregamento quando você navegar até ele por links do fórum.
```

#### [`fof-seo.admin.modals.crawl_post.mode_main_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.mode_main_title%22)

> Only index the main post (default)

```diff
+Indexar apenas o post principal (padrão)
```

#### [`fof-seo.admin.modals.crawl_post.question`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.question%22)

> Do you want to enable this feature?

```diff
+Deseja ativar este recurso?
```

#### [`fof-seo.admin.modals.crawl_post.switch_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.switch_label%22)

> Crawl all posts (it's slower on page refresh, but search results will be better)

```diff
+Rastrear todos os posts (mais lento ao atualizar a página, mas os resultados de busca serão melhores)
```

#### [`fof-seo.admin.modals.crawl_post.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.crawl_post.title%22)

> Post crawl settings

```diff
+Configurações de rastreamento de posts
```

#### [`fof-seo.admin.modals.dofollow.add_placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.add_placeholder%22)

> Allow a domain

```diff
+Permitir um domínio
```

#### [`fof-seo.admin.modals.dofollow.default_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.default_note%22)

> The domain you use for your Flarum instance is added to the list by default.

```diff
+O domínio usado pela sua instância do Flarum é adicionado à lista por padrão.
```

#### [`fof-seo.admin.modals.dofollow.duplicate_error`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.duplicate_error%22)

> This domain is already present in your do-follow list.

```diff
+Este domínio já está na sua lista do-follow.
```

#### [`fof-seo.admin.modals.dofollow.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.intro%22)

> Enter the &lt;b&gt;hostnames&lt;/b&gt; of the domains you want to add to the do-follow list.

```diff
+Digite os <b>hostnames</b> dos domínios que deseja adicionar à lista do-follow.
```

#### [`fof-seo.admin.modals.dofollow.learn_more_line`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.learn_more_line%22)

> &lt;a&gt;Learn more&lt;/a&gt; about the do-follow list.

```diff
+<a>Saiba mais</a> sobre a lista do-follow.
```

#### [`fof-seo.admin.modals.dofollow.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.modals.dofollow.title%22)

> Do-follow list

```diff
+Lista do-follow
```

#### [`fof-seo.admin.pages.health.checks.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.button%22)

> Review post settings

```diff
+Revisar configurações de posts
```

#### [`fof-seo.admin.pages.health.checks.crawl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.label%22)

> Review discussion post crawl settings

```diff
+Revise as configurações de rastreamento de posts
```

#### [`fof-seo.admin.pages.health.checks.crawl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.crawl.reason%22)

> You will need to review this setting to pass.

```diff
+Você precisa revisar esta configuração para passar.
```

#### [`fof-seo.admin.pages.health.checks.description.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.button%22)

> Update description

```diff
+Atualizar descrição
```

#### [`fof-seo.admin.pages.health.checks.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.label%22)

> Checks whether your forum has a description

```diff
+Verifica se seu fórum tem uma descrição
```

#### [`fof-seo.admin.pages.health.checks.description.reason_default`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_default%22)

> You did not change the default forum description after installation!

```diff
+Você não alterou a descrição padrão do fórum após a instalação!
```

#### [`fof-seo.admin.pages.health.checks.description.reason_missing`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_missing%22)

> You did not set up a forum description yet!

```diff
+Você ainda não definiu uma descrição para o fórum!
```

#### [`fof-seo.admin.pages.health.checks.description.reason_too_short`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.description.reason_too_short%22)

> Your forum description is lower then 20 characters. Please expand it for better search results.

```diff
+A descrição do seu fórum tem menos de 20 caracteres. Amplie-a para obter melhores resultados de busca.
```

#### [`fof-seo.admin.pages.health.checks.keywords.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.button%22)

> Update keywords

```diff
+Atualizar palavras-chave
```

#### [`fof-seo.admin.pages.health.checks.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.label%22)

> Checks whether your forum has keywords set up

```diff
+Verifica se seu fórum tem palavras-chave definidas
```

#### [`fof-seo.admin.pages.health.checks.keywords.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.keywords.reason%22)

> You did not set up a forum keywords yet!

```diff
+Você ainda não definiu palavras-chave para o fórum!
```

#### [`fof-seo.admin.pages.health.checks.meta_tags.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.meta_tags.label%22)

> Checks whether your forum has meta tags available (generated by this plugin)

```diff
+Verifica se seu fórum tem meta tags disponíveis (geradas por este plugin)
```

#### [`fof-seo.admin.pages.health.checks.review.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.button%22)

> Ok! I reviewed them!

```diff
+OK! Já revisei!
```

#### [`fof-seo.admin.pages.health.checks.review.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.label%22)

> Review your SEO settings every two months. Next review needed on {date}

```diff
+Revise suas configurações de SEO a cada dois meses. Próxima revisão necessária em {date}
```

#### [`fof-seo.admin.pages.health.checks.review.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.review.reason%22)

> It is time to re-review your SEO settings.

```diff
+É hora de revisar novamente suas configurações de SEO.
```

#### [`fof-seo.admin.pages.health.checks.robots.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.button%22)

> Read more about adding a robots.txt

```diff
+Ler mais sobre como adicionar um robots.txt
```

#### [`fof-seo.admin.pages.health.checks.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.label%22)

> Checks whether your forum has a robots.txt available

```diff
+Verifica se seu fórum tem um robots.txt disponível
```

#### [`fof-seo.admin.pages.health.checks.robots.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.robots.reason%22)

> Your robots.txt is provided by the FriendsOfFlarum Sitemap extension. Install and enable it to make a robots.txt available to search engines.

```diff
+Seu robots.txt é fornecido pela extensão FriendsOfFlarum Sitemap. Instale-a e ative-a para disponibilizar um robots.txt aos mecanismos de busca.
```

#### [`fof-seo.admin.pages.health.checks.search_engines.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.button%22)

> More information

```diff
+Mais informações
```

#### [`fof-seo.admin.pages.health.checks.search_engines.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.label%22)

> Register your forum to search engines

```diff
+Registre seu fórum nos mecanismos de busca
```

#### [`fof-seo.admin.pages.health.checks.search_engines.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.search_engines.reason%22)

> You will need to review this to pass.

```diff
+Você precisa revisar isto para passar.
```

#### [`fof-seo.admin.pages.health.checks.sitemap.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.button%22)

> Read more about adding a sitemap

```diff
+Ler mais sobre como adicionar um sitemap
```

#### [`fof-seo.admin.pages.health.checks.sitemap.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.label%22)

> Checks whether your forum has a sitemap available

```diff
+Verifica se seu fórum tem um sitemap disponível
```

#### [`fof-seo.admin.pages.health.checks.sitemap.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.sitemap.reason%22)

> It is highly recommended to install the FriendsOfFlarum Sitemap extension!

```diff
+É altamente recomendado instalar a extensão FriendsOfFlarum Sitemap!
```

#### [`fof-seo.admin.pages.health.checks.social_media.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.button%22)

> Update image

```diff
+Atualizar imagem
```

#### [`fof-seo.admin.pages.health.checks.social_media.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.label%22)

> Set Up a social media image

```diff
+Configure uma imagem de redes sociais
```

#### [`fof-seo.admin.pages.health.checks.social_media.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.social_media.reason%22)

> You did not set a social media image for your forum. It is recommended to set one. Your favicon will now be used as preview on social media.

```diff
+Você não definiu uma imagem de redes sociais para o seu fórum. Recomenda-se definir uma. Por ora, seu favicon será usado como prévia nas redes sociais.
```

#### [`fof-seo.admin.pages.health.checks.ssl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.button%22)

> How to set up SSL

```diff
+Como configurar SSL
```

#### [`fof-seo.admin.pages.health.checks.ssl.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.label%22)

> Checks whether your site has a secure connection available (SSL/TLS)

```diff
+Verifica se seu site tem uma conexão segura disponível (SSL/TLS)
```

#### [`fof-seo.admin.pages.health.checks.ssl.reason`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.checks.ssl.reason%22)

> Your forum does not force a SSL/TLS connection (a secure connection to your website). Most search engines won't index your website or lower your ranking if you have no secure connection available.

```diff
+Seu fórum não força uma conexão SSL/TLS (uma conexão segura com seu site). A maioria dos mecanismos de busca não indexará seu site ou rebaixará sua classificação se você não tiver uma conexão segura disponível.
```

#### [`fof-seo.admin.pages.health.default_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.default_button%22)

> Update setting

```diff
+Atualizar configuração
```

#### [`fof-seo.admin.pages.health.legend`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.legend%22)

> For optimal search engine results, make sure all checks are green.

```diff
+Para os melhores resultados de busca, garanta que todas as verificações estejam verdes.
```

#### [`fof-seo.admin.pages.health.status.passed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.status.passed%22)

> All set!

```diff
+Tudo certo!
```

#### [`fof-seo.admin.pages.health.status.warning`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.status.warning%22)

> Warning!

```diff
+Aviso!
```

#### [`fof-seo.admin.pages.health.table.status`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.table.status%22)

> Status

```diff
+Status
```

#### [`fof-seo.admin.pages.health.table.technique`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.health.table.technique%22)

> Technique

```diff
+Técnica
```

#### [`fof-seo.admin.pages.search_engines.bing_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_heading%22)

> Add your website to the Bing search results

```diff
+Adicione seu site aos resultados de busca do Bing
```

#### [`fof-seo.admin.pages.search_engines.bing_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_sitemap%22)

> Don't forget to configure your sitemap URL. After you verified your website you're all set and Bing will now index your website.

```diff
+Não se esqueça de configurar a URL do seu sitemap. Depois de verificar seu site, está tudo pronto e o Bing passará a indexá-lo.
```

#### [`fof-seo.admin.pages.search_engines.bing_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.bing_visit%22)

> If you want to add your website to the Bing search results, visit the {link} and complete the given steps. Not all fields are required.

```diff
+Se quiser adicionar seu site aos resultados de busca do Bing, visite o {link} e conclua os passos indicados. Nem todos os campos são obrigatórios.
```

#### [`fof-seo.admin.pages.search_engines.confirm_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.confirm_button%22)

> I have read this

```diff
+Li isto
```

#### [`fof-seo.admin.pages.search_engines.google_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_heading%22)

> Add your website to the Google search results

```diff
+Adicione seu site aos resultados de busca do Google
```

#### [`fof-seo.admin.pages.search_engines.google_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_sitemap%22)

> When you completed the registration in the Google Search Console, visit the &lt;b&gt;Sitemaps&lt;/b&gt; page. Pass your &lt;b&gt;sitemap.xml&lt;/b&gt; to Google. Make sure that Google can crawl your sitemap and will keep doing this.

```diff
+Ao concluir o cadastro no Google Search Console, visite a página <b>Sitemaps</b>. Informe seu <b>sitemap.xml</b> ao Google. Certifique-se de que o Google consegue rastrear seu sitemap e continuará fazendo isso.
```

#### [`fof-seo.admin.pages.search_engines.google_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_visit%22)

> If you want to add your website to the Google search results, visit the {link}. You'll need to add your website and verify that you're the owner of the associated domain name.

```diff
+Se quiser adicionar seu site aos resultados de busca do Google, visite o {link}. Você precisará adicionar seu site e verificar que é o proprietário do nome de domínio associado.
```

#### [`fof-seo.admin.pages.search_engines.google_www`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.google_www%22)

> When you enter your domain you need to answer the following question for yourself: Do you want to use the 'www' sub-domain in the search results? You can &lt;strong&gt;not&lt;/strong&gt; change this later. Registering your domain in the Google Search Console multiple times won't result in a better ranking.

```diff
+Ao informar seu domínio, você precisa responder à seguinte pergunta: você quer usar o subdomínio "www" nos resultados de busca? Você <strong>não</strong> poderá mudar isso depois. Registrar seu domínio várias vezes no Google Search Console não resultará em uma classificação melhor.
```

#### [`fof-seo.admin.pages.search_engines.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.heading%22)

> Submit your website to Search Engines

```diff
+Envie seu site aos mecanismos de busca
```

#### [`fof-seo.admin.pages.search_engines.intro`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.intro%22)

> It is good practice to let Search Engines know your site is exists. This page will guide you in doing this succesfully.

```diff
+É uma boa prática informar aos mecanismos de busca que seu site existe. Esta página vai guiar você para fazer isso com sucesso.
```

#### [`fof-seo.admin.pages.search_engines.sitemap_tip`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.sitemap_tip%22)

> It is recommended to have a sitemap ready before completing this guide. If you don't have a sitemap yet, &lt;a&gt;click here to read more about them&lt;/a&gt;.

```diff
+Recomenda-se ter um sitemap pronto antes de concluir este guia. Se você ainda não tem um sitemap, <a>clique aqui para ler mais sobre eles</a>.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_body%22)

> If you want to add your website to the Yahoo search results, finish your Bing search results registration. Yahoo will use that data.

```diff
+Se quiser adicionar seu site aos resultados de busca do Yahoo, conclua seu cadastro nos resultados de busca do Bing. O Yahoo usará esses dados.
```

#### [`fof-seo.admin.pages.search_engines.yahoo_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yahoo_heading%22)

> Add your website to the Yahoo search results

```diff
+Adicione seu site aos resultados de busca do Yahoo
```

#### [`fof-seo.admin.pages.search_engines.yandex_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_heading%22)

> Add your website to the Yandex search results

```diff
+Adicione seu site aos resultados de busca do Yandex
```

#### [`fof-seo.admin.pages.search_engines.yandex_sitemap`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_sitemap%22)

> Don't forget to configure the sitemap in the Yandex.Webmaster.

```diff
+Não se esqueça de configurar o sitemap no Yandex.Webmaster.
```

#### [`fof-seo.admin.pages.search_engines.yandex_visit`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.search_engines.yandex_visit%22)

> If you want to add your website to the Yandex search results, visit the {link} and follow the given steps.

```diff
+Se quiser adicionar seu site aos resultados de busca do Yandex, visite o {link} e siga os passos indicados.
```

#### [`fof-seo.admin.pages.sitemap.generated_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.generated_note%22)

> The sitemap file is automatically generated and does not need any maintenance.

```diff
+O arquivo de sitemap é gerado automaticamente e não precisa de manutenção.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_body%22)

> In that case, activate it by clicking the extension in the sidebar at the left . Then this warning will disappear.

```diff
+Nesse caso, ative-a clicando na extensão na barra lateral à esquerda. Então este aviso desaparecerá.
```

#### [`fof-seo.admin.pages.sitemap.just_installed_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.just_installed_heading%22)

> I just installed the extension

```diff
+Acabei de instalar a extensão
```

#### [`fof-seo.admin.pages.sitemap.robots_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_body%22)

> The same extension also generates a &lt;b&gt;robots.txt&lt;/b&gt; for your forum. This file tells search engines which areas they may crawl and points them to your sitemap, so installing it takes care of both files at once — there is nothing extra to configure.

```diff
+A mesma extensão também gera um <b>robots.txt</b> para o seu fórum. Esse arquivo informa aos mecanismos de busca quais áreas eles podem rastrear e aponta para o seu sitemap, então instalá-la resolve os dois arquivos de uma vez — não há nada mais a configurar.
```

#### [`fof-seo.admin.pages.sitemap.robots_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.robots_heading%22)

> What about robots.txt?

```diff
+E o robots.txt?
```

#### [`fof-seo.admin.pages.sitemap.which_extension_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_body%22)

> {link} is the suggested extension to install for Flarum. We strongly recommend you to install and activate this extension.

```diff
+{link} é a extensão sugerida para instalar no Flarum. Recomendamos fortemente que você instale e ative esta extensão.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_details`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_details%22)

> This extension will make sure crawlers will find your forum &lt;b&gt;discussions&lt;/b&gt;, &lt;b&gt;tags&lt;/b&gt; (when extension is enabled) and &lt;b&gt;Pages&lt;/b&gt; extension (when extension is installed and enabled). It will automatically make an sitemap.xml available.

```diff
+Esta extensão garante que os rastreadores encontrem as <b>discussões</b> do seu fórum, as <b>tags</b> (quando a extensão está ativada) e a extensão <b>Pages</b> (quando instalada e ativada). Ela disponibiliza automaticamente um sitemap.xml.
```

#### [`fof-seo.admin.pages.sitemap.which_extension_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.which_extension_heading%22)

> What extension should I install?

```diff
+Que extensão devo instalar?
```

#### [`fof-seo.admin.pages.sitemap.why_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_body%22)

> A sitemap is a XML file with a list of all the available pages on your website. It will be used by crawlers and search engines to find pages on your website.

```diff
+Um sitemap é um arquivo XML com uma lista de todas as páginas disponíveis no seu site. Ele é usado por rastreadores e mecanismos de busca para encontrar páginas no seu site.
```

#### [`fof-seo.admin.pages.sitemap.why_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.sitemap.why_heading%22)

> Why should you use a sitemap?

```diff
+Por que usar um sitemap?
```

#### [`fof-seo.admin.pages.ssl.added_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.added_heading%22)

> Okay, I added SSL!

```diff
+Pronto, adicionei SSL!
```

#### [`fof-seo.admin.pages.ssl.how_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_body%22)

> For people who are using a webhosting, the most common way is to enter the webhosting panel, go to the hosting-settings of your website and click SSL. You can follow the steps to add SSL to your website. The most webhosting companies nowadays are supporting the popular certificate issuer {link}.

```diff
+Para quem usa uma hospedagem, o caminho mais comum é entrar no painel da hospedagem, ir às configurações de hospedagem do seu site e clicar em SSL. Você pode seguir os passos para adicionar SSL ao seu site. Hoje, a maioria das empresas de hospedagem oferece suporte ao popular emissor de certificados {link}.
```

#### [`fof-seo.admin.pages.ssl.how_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.how_heading%22)

> How to add SSL to your website?

```diff
+Como adicionar SSL ao seu site?
```

#### [`fof-seo.admin.pages.ssl.intro_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_body%22)

> Safety and privacy awareness on the web is on the rise. &lt;b&gt;Almost every&lt;/b&gt; developer/website owner want their website safe to use for their visitors so they won't need to be afraid that their data will be compromised by hackers or website-impersonators.

```diff
+A consciência sobre segurança e privacidade na web está crescendo. <b>Quase todo</b> desenvolvedor/dono de site quer que seu site seja seguro para os visitantes, para que eles não precisem temer que seus dados sejam comprometidos por hackers ou por quem se passa pelo site.
```

#### [`fof-seo.admin.pages.ssl.intro_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.intro_heading%22)

> Why do I need an secure connection?

```diff
+Por que preciso de uma conexão segura?
```

#### [`fof-seo.admin.pages.ssl.no_ssl_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_body%22)

> In that case, you can uninstall this extension as search engines &lt;b&gt;won't index your forum&lt;/b&gt; or rank them far below other sites due safety reasons.

```diff
+Nesse caso, você pode desinstalar esta extensão, pois os mecanismos de busca <b>não indexarão seu fórum</b> ou o classificarão muito abaixo de outros sites por motivos de segurança.
```

#### [`fof-seo.admin.pages.ssl.no_ssl_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.no_ssl_heading%22)

> What if I do not want to add SSL?

```diff
+E se eu não quiser adicionar SSL?
```

#### [`fof-seo.admin.pages.ssl.rankings_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body%22)

> When you do not have a secure connection to your website, search engines will rank your site much lower then other sites, or even won't index it.

```diff
+Quando você não tem uma conexão segura com seu site, os mecanismos de busca o classificam muito abaixo de outros sites, ou nem o indexam.
```

#### [`fof-seo.admin.pages.ssl.rankings_body_ssl`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_body_ssl%22)

> When you have SSL available, your website will get an higher rank and will be indexed.

```diff
+Quando você tem SSL disponível, seu site recebe uma classificação mais alta e é indexado.
```

#### [`fof-seo.admin.pages.ssl.rankings_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.rankings_heading%22)

> Search engines {icon} secure connections

```diff
+Mecanismos de busca {icon} conexões seguras
```

#### [`fof-seo.admin.pages.ssl.what_body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_body%22)

> The most people know &lt;b&gt;https&lt;/b&gt; that's used for secure connections as SSL: &lt;i&gt;Secure Sockets Layer&lt;/i&gt;. Officially it's called TLS: &lt;i&gt;Transport Layer Security&lt;/i&gt;. This method is used to create a secure connection to your webserver what will prevent attackers or other webservers to impersonate your website and keep your visitors safe. The SSL connection will be broken if that happens and the visitors browsers will warning the user that's it's not trusted.

```diff
+A maioria das pessoas conhece o <b>https</b> usado em conexões seguras como SSL: <i>Secure Sockets Layer</i>. Oficialmente, ele se chama TLS: <i>Transport Layer Security</i>. Este método é usado para criar uma conexão segura com seu servidor web, o que impede que invasores ou outros servidores se passem pelo seu site e mantém seus visitantes seguros. Se isso acontecer, a conexão SSL será quebrada e o navegador do visitante avisará que o site não é confiável.
```

#### [`fof-seo.admin.pages.ssl.what_heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.pages.ssl.what_heading%22)

> What is SSL or TLS?

```diff
+O que é SSL ou TLS?
```

#### [`fof-seo.admin.permissions.category_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.permissions.category_label%22)

> SEO

```diff
+SEO
```

#### [`fof-seo.admin.permissions.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.permissions.configure_seo%22)

> Allow configuring SEO

```diff
+Permitir configurar SEO
```

#### [`fof-seo.admin.settings.crawl.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.crawl.button%22)

> Setup post crawl settings

```diff
+Configurar o rastreamento de posts
```

#### [`fof-seo.admin.settings.crawl.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.crawl.heading%22)

> Discussion post crawl settings

```diff
+Configurações de rastreamento de posts
```

#### [`fof-seo.admin.settings.crawl.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.crawl.help%22)

> This is an important setting about crawling your discussion posts in search results.

```diff
+Esta é uma configuração importante sobre o rastreamento dos posts das suas discussões nos resultados de busca.
```

#### [`fof-seo.admin.settings.indexing.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.indexing.heading%22)

> Indexing controls

```diff
+Controles de indexação
```

#### [`fof-seo.admin.settings.indexing.profiles_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_help%22)

> When enabled, user profile pages emit a 'noindex' meta tag so they are kept out of search results. Links on the page are still followed, so crawlers can still reach the content they point to.

```diff
+Quando ativado, as páginas de perfil de usuário emitem uma meta tag "noindex" para ficarem fora dos resultados de busca. Os links da página continuam sendo seguidos, então os rastreadores ainda alcançam o conteúdo para o qual apontam.
```

#### [`fof-seo.admin.settings.indexing.profiles_label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.indexing.profiles_label%22)

> De-index profile pages

```diff
+Desindexar páginas de perfil
```

#### [`fof-seo.admin.settings.indexing.tags_button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_button%22)

> Select tags

```diff
+Selecionar tags
```

#### [`fof-seo.admin.settings.indexing.tags_help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_help%22)

> Discussions in the selected tags (and those tags' own listing pages) will be kept out of search results with a 'noindex' meta tag. Links are still followed. Selecting a parent tag also covers its child tags.

```diff
+As discussões nas tags selecionadas (e as páginas de listagem dessas tags) ficarão fora dos resultados de busca com uma meta tag "noindex". Os links continuam sendo seguidos. Selecionar uma tag pai também inclui suas tags filhas.
```

#### [`fof-seo.admin.settings.indexing.tags_none_selected`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.indexing.tags_none_selected%22)

> No tags excluded from indexing.

```diff
+Nenhuma tag excluída da indexação.
```

#### [`fof-seo.admin.settings.info.maintain`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.info.maintain%22)

> Check all your settings when you first setup this extensions. Maintain them to get the best search results.

```diff
+Verifique todas as configurações ao configurar esta extensão pela primeira vez. Mantenha-as em dia para obter os melhores resultados de busca.
```

#### [`fof-seo.admin.settings.info.overview`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.info.overview%22)

> This page contains some other settings from around the admin area. However, it's good to have a good overview about these settings. Do not forget to do the SEO check.

```diff
+Esta página contém algumas outras configurações de toda a área de administração. Ainda assim, é bom ter uma boa visão geral delas. Não se esqueça de fazer a verificação de SEO.
```

#### [`fof-seo.admin.settings.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Nota: Separe as palavras-chave com vírgula.
```

#### [`fof-seo.admin.settings.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Exemplo: flarum, desenvolvimento web, fórum, maçãs, segurança
```

#### [`fof-seo.admin.settings.keywords.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.keywords.heading%22)

> Forum keywords

```diff
+Palavras-chave do fórum
```

#### [`fof-seo.admin.settings.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.keywords.help%22)

> Enter one or more keywords that describes your forum.

```diff
+Digite uma ou mais palavras-chave que descrevam seu fórum.
```

#### [`fof-seo.admin.settings.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.keywords.placeholder%22)

> Add a few keywords

```diff
+Adicione algumas palavras-chave
```

#### [`fof-seo.admin.settings.new_tab.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.heading%22)

> Open external links in new tab

```diff
+Abrir links externos em nova aba
```

#### [`fof-seo.admin.settings.new_tab.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.new_tab.help%22)

> This extension will also make sure that external links (to other domains) open in a new tab. Currently it is not possible to disable this setting.

```diff
+Esta extensão também garante que links externos (para outros domínios) abram em uma nova aba. No momento não é possível desativar esta configuração.
```

#### [`fof-seo.admin.settings.nofollow.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.button%22)

> Open domain do-follow list

```diff
+Abrir a lista do-follow de domínios
```

#### [`fof-seo.admin.settings.nofollow.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.heading%22)

> No-follow links

```diff
+Links no-follow
```

#### [`fof-seo.admin.settings.nofollow.help_dofollow`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.nofollow.help_dofollow%22)

> With this setting you are able to add domains to the 'do-follow' list. For example, you can add &lt;i&gt;flarum.org&lt;/i&gt; to make sure links to this website do not receive a 'nofollow' attribute.

```diff
+Com esta configuração, você pode adicionar domínios à lista "do-follow". Por exemplo, você pode adicionar <i>flarum.org</i> para garantir que os links para esse site não recebam o atributo "nofollow".
```

#### [`fof-seo.admin.settings.social_media_image.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.heading%22)

> Social media image

```diff
+Imagem de redes sociais
```

#### [`fof-seo.admin.settings.social_media_image.help_size`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_size%22)

> Expecting a square image. Recommended size is 1200x1200 pixels. Otherwise use a landscape image, recommended size is 1200x630.

```diff
+Espera-se uma imagem quadrada. O tamanho recomendado é 1200x1200 pixels. Caso contrário, use uma imagem em paisagem, com tamanho recomendado de 1200x630.
```

#### [`fof-seo.admin.settings.social_media_image.help_usage`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.social_media_image.help_usage%22)

> This image will be used by Social Media when a user shares a page on your website (Facebook, X (formerly Twitter), Reddit).

```diff
+Esta imagem será usada pelas redes sociais quando um usuário compartilhar uma página do seu site (Facebook, X (antigo Twitter), Reddit).
```

#### [`fof-seo.admin.settings.twitter_card.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.heading%22)

> X (formerly Twitter) card size

```diff
+Tamanho do card do X (antigo Twitter)
```

#### [`fof-seo.admin.settings.twitter_card.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.help%22)

> When your forum is shared on X (formerly Twitter), it will have an image (if a social media image has been set up). This can be a big card with a big image, or a small card (summary) with a smaller image.

```diff
+Quando seu fórum é compartilhado no X (antigo Twitter), ele terá uma imagem (se uma imagem de redes sociais tiver sido configurada). Pode ser um card grande com uma imagem grande, ou um card pequeno (resumo) com uma imagem menor.
```

#### [`fof-seo.admin.settings.twitter_card.option_large`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_large%22)

> Large card (large image)

```diff
+Card grande (imagem grande)
```

#### [`fof-seo.admin.settings.twitter_card.option_summary`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.twitter_card.option_summary%22)

> Summary card (smaller image)

```diff
+Card de resumo (imagem menor)
```

#### [`fof-seo.admin.settings.updated.button`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.updated.button%22)

> Back to overview and re-check

```diff
+Voltar à visão geral e verificar novamente
```

#### [`fof-seo.admin.settings.updated.heading`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.updated.heading%22)

> Updated this setting?

```diff
+Atualizou esta configuração?
```

#### [`fof-seo.admin.settings.updated.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.admin.settings.updated.help%22)

> When you think you're ready, click the button below to re-check the status of this setting.

```diff
+Quando achar que está tudo pronto, clique no botão abaixo para verificar novamente o status desta configuração.
```

#### [`fof-seo.forum.controls.configure_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.controls.configure_seo%22)

> Configure SEO

```diff
+Configurar SEO
```

#### [`fof-seo.forum.controls.reset_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.controls.reset_seo%22)

> Reset SEO

```diff
+Redefinir SEO
```

#### [`fof-seo.forum.controls.update_seo`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.controls.update_seo%22)

> Update SEO

```diff
+Atualizar SEO
```

#### [`fof-seo.forum.meta_seo.auto_update.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.help%22)

> When enabled, this items meta tags are automatically updated when the object changes.

```diff
+Quando ativado, as meta tags deste item são atualizadas automaticamente quando o objeto muda.
```

#### [`fof-seo.forum.meta_seo.auto_update.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.label%22)

> Auto update meta tags

```diff
+Atualizar meta tags automaticamente
```

#### [`fof-seo.forum.meta_seo.auto_update.switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.auto_update.switch%22)

> Update object SEO on change

```diff
+Atualizar o SEO do objeto ao mudar
```

#### [`fof-seo.forum.meta_seo.close.autofill_info`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.autofill_info%22)

> This change will revert custom changes and fill the meta-tags with item-data.

```diff
+Esta alteração reverterá as alterações personalizadas e preencherá as meta tags com os dados do item.
```

#### [`fof-seo.forum.meta_seo.close.close`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.close%22)

> Close

```diff
+Fechar
```

#### [`fof-seo.forum.meta_seo.close.save`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save%22)

> Save

```diff
+Salvar
```

#### [`fof-seo.forum.meta_seo.close.save_autofill`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.close.save_autofill%22)

> Save &amp; auto-fill

```diff
+Salvar e autopreencher
```

#### [`fof-seo.forum.meta_seo.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.help%22)

> Displays an image.

```diff
+Exibe uma imagem.
```

#### [`fof-seo.forum.meta_seo.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.label%22)

> Meta image

```diff
+Meta imagem
```

#### [`fof-seo.forum.meta_seo.image.managed_by`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.managed_by%22)

> Image source managed by {source}

```diff
+Origem da imagem gerenciada por {source}
```

#### [`fof-seo.forum.meta_seo.image.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.placeholder%22)

> Enter image URL

```diff
+Digite a URL da imagem
```

#### [`fof-seo.forum.meta_seo.image.upload`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.image.upload%22)

> Upload file

```diff
+Enviar arquivo
```

#### [`fof-seo.forum.meta_seo.keywords.comma_note`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.comma_note%22)

> Note: Separate keywords with a comma.

```diff
+Nota: Separe as palavras-chave com vírgula.
```

#### [`fof-seo.forum.meta_seo.keywords.example`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.example%22)

> Example: flarum, web development, forum, apples, security

```diff
+Exemplo: flarum, desenvolvimento web, fórum, maçãs, segurança
```

#### [`fof-seo.forum.meta_seo.keywords.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.help%22)

> Enter one or more keywords that describes this item.

```diff
+Digite uma ou mais palavras-chave que descrevam este item.
```

#### [`fof-seo.forum.meta_seo.keywords.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.label%22)

> Keywords

```diff
+Palavras-chave
```

#### [`fof-seo.forum.meta_seo.keywords.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.keywords.placeholder%22)

> Add a few keywords

```diff
+Adicione algumas palavras-chave
```

#### [`fof-seo.forum.meta_seo.managed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.managed%22)

> Managed

```diff
+Gerenciado
```

#### [`fof-seo.forum.meta_seo.meta_description.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.help%22)

> Describes the item and shown in search engines.

```diff
+Descreve o item e é exibida nos mecanismos de busca.
```

#### [`fof-seo.forum.meta_seo.meta_description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_description.label%22)

> Meta description

```diff
+Meta descrição
```

#### [`fof-seo.forum.meta_seo.meta_title.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.help%22)

> Title in search engines.

```diff
+Título nos mecanismos de busca.
```

#### [`fof-seo.forum.meta_seo.meta_title.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.label%22)

> Meta title

```diff
+Meta título
```

#### [`fof-seo.forum.meta_seo.meta_title.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.meta_title.placeholder%22)

> Enter page title

```diff
+Digite o título da página
```

#### [`fof-seo.forum.meta_seo.note_prefix`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.note_prefix%22)

> Note:

```diff
+Nota:
```

#### [`fof-seo.forum.meta_seo.og.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.auto_switch%22)

> Auto generate Open Graph tags

```diff
+Gerar tags Open Graph automaticamente
```

#### [`fof-seo.forum.meta_seo.og.description.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.label%22)

> Open Graph description

```diff
+Descrição Open Graph
```

#### [`fof-seo.forum.meta_seo.og.description.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.description.placeholder%22)

> Custom Open Graph description

```diff
+Descrição Open Graph personalizada
```

#### [`fof-seo.forum.meta_seo.og.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.label%22)

> Open Graph tags

```diff
+Tags Open Graph
```

#### [`fof-seo.forum.meta_seo.og.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.og.title%22)

> Open Graph title

```diff
+Título Open Graph
```

#### [`fof-seo.forum.meta_seo.reading_time.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.help%22)

> Estimated reading time in seconds.

```diff
+Tempo estimado de leitura em segundos.
```

#### [`fof-seo.forum.meta_seo.reading_time.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.label%22)

> Estimated reading time

```diff
+Tempo estimado de leitura
```

#### [`fof-seo.forum.meta_seo.reading_time.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.reading_time.placeholder%22)

> Reading time in seconds

```diff
+Tempo de leitura em segundos
```

#### [`fof-seo.forum.meta_seo.robots.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.help%22)

> Robot-crawling settings for this item.

```diff
+Configurações de rastreamento por robôs para este item.
```

#### [`fof-seo.forum.meta_seo.robots.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.label%22)

> Robots

```diff
+Robots
```

#### [`fof-seo.forum.meta_seo.robots.switch.follow`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.follow%22)

> Allow following links to different pages

```diff
+Permitir seguir links para outras páginas
```

#### [`fof-seo.forum.meta_seo.robots.switch.indexing`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.indexing%22)

> Allow indexing page

```diff
+Permitir indexar a página
```

#### [`fof-seo.forum.meta_seo.robots.switch.noarchive`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noarchive%22)

> Disable archiving page (noarchive)

```diff
+Desativar o arquivamento da página (noarchive)
```

#### [`fof-seo.forum.meta_seo.robots.switch.noimageindex`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.noimageindex%22)

> Disable indexing images on this page (noimageindex)

```diff
+Desativar a indexação de imagens nesta página (noimageindex)
```

#### [`fof-seo.forum.meta_seo.robots.switch.nosnippet`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.switch.nosnippet%22)

> Disable text-snippes on page (nosnippet)

```diff
+Desativar trechos de texto na página (nosnippet)
```

#### [`fof-seo.forum.meta_seo.robots.tags.archive_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.archive_not_allowed%22)

> Archiving pages not allowed

```diff
+Arquivamento de páginas não permitido
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_allowed%22)

> Allow follow links

```diff
+Permitir seguir links
```

#### [`fof-seo.forum.meta_seo.robots.tags.follow_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.follow_not_allowed%22)

> Link following not allowed

```diff
+Seguimento de links não permitido
```

#### [`fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.imageindex_not_allowed%22)

> Image indexing not allowed

```diff
+Indexação de imagens não permitida
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_allowed%22)

> Allow indexing page

```diff
+Permitir indexar a página
```

#### [`fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.indexing_not_allowed%22)

> Page indexing not allowed

```diff
+Indexação da página não permitida
```

#### [`fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.robots.tags.snippet_not_allowed%22)

> Taking text-snippets not allowed

```diff
+Trechos de texto não permitidos
```

#### [`fof-seo.forum.meta_seo.saved`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.saved%22)

> Saved!

```diff
+Salvo!
```

#### [`fof-seo.forum.meta_seo.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.title%22)

> SEO settings - Meta

```diff
+Configurações de SEO - Meta
```

#### [`fof-seo.forum.meta_seo.twitter.auto_switch`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.auto_switch%22)

> Auto generate X (formerly Twitter) card

```diff
+Gerar automaticamente o card do X (antigo Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.description`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.description%22)

> X (formerly Twitter) description

```diff
+Descrição do X (antigo Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.help`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.help%22)

> Displays an image on X (formerly Twitter).

```diff
+Exibe uma imagem no X (antigo Twitter).
```

#### [`fof-seo.forum.meta_seo.twitter.image.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.label%22)

> X (formerly Twitter) image

```diff
+Imagem do X (antigo Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.image.reset`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.image.reset%22)

> Reset image

```diff
+Redefinir imagem
```

#### [`fof-seo.forum.meta_seo.twitter.label`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.label%22)

> X (formerly Twitter) card

```diff
+Card do X (antigo Twitter)
```

#### [`fof-seo.forum.meta_seo.twitter.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.twitter.title%22)

> X (formerly Twitter) title

```diff
+Título do X (antigo Twitter)
```

#### [`fof-seo.forum.meta_seo.unsupported_object.body`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.body%22)

> Please open this dialog using the objectType and objectId properties or register the object relationship instead.

```diff
+Abra este diálogo usando as propriedades objectType e objectId ou registre a relação do objeto.
```

#### [`fof-seo.forum.meta_seo.unsupported_object.docs_link`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.docs_link%22)

> Documentation

```diff
+Documentação
```

#### [`fof-seo.forum.meta_seo.unsupported_object.title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.meta_seo.unsupported_object.title%22)

> This object is not a supported SeoMeta object

```diff
+Este objeto não é um objeto SeoMeta compatível
```

#### [`fof-seo.forum.profile_description`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.profile_description%22)

> Profile of {username} \| {discussion\_count} discussions \| {comment\_count} posts

```diff
+Perfil de {username} | {discussion_count} discussões | {comment_count} posts
```

#### [`fof-seo.forum.profile_title`](https://weblate.rob006.net/translate/flarum2/fof-seo/pt_BR/?q=context%3A%3D%22fof-seo.forum.profile_title%22)

> Profile of {username}

```diff
+Perfil de {username}
```


### `fof-share-social` (missing)

#### [`fof-share-social.admin.settings.canonical-urls`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.admin.settings.canonical-urls%22)

> Use canonical URLs for sharing

```diff
+Usar URLs canônicas ao compartilhar
```

#### [`fof-share-social.admin.settings.default-option`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.admin.settings.default-option%22)

> Default share option

```diff
+Opção de compartilhamento padrão
```

#### [`fof-share-social.admin.settings.default-option-help`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.admin.settings.default-option-help%22)

> Choosing a default option will convert the modal into a dropdown button.
> If "Native Share" is selected, it will only be shown if the browser supports it, otherwise behavior reverts to original modal.
>

```diff
+Escolher uma opção padrão transforma o modal em um botão com menu suspenso.
+Se "Compartilhamento Nativo" for selecionado, ele só será exibido se o navegador for compatível; caso contrário, o comportamento volta ao modal original.
+
```

#### [`fof-share-social.admin.settings.plain-copy`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.admin.settings.plain-copy%22)

> Display plain URL copy

```diff
+Exibir opção de copiar a URL simples
```

#### [`fof-share-social.forum.discussion.share_button`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.forum.discussion.share_button%22)

> Share

```diff
+Compartilhar
```

#### [`fof-share-social.forum.discussion.share_dropdown_accessible_label`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.forum.discussion.share_dropdown_accessible_label%22)

> Toggle discussion share dropdown menu

```diff
+Alternar menu suspenso de compartilhamento da discussão
```

#### [`fof-share-social.forum.modal.copy_button`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.forum.modal.copy_button%22)

> Copy

```diff
+Copiar
```

#### [`fof-share-social.forum.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.forum.modal.title%22)

> Share

```diff
+Compartilhar
```

#### [`fof-share-social.lib.networks.facebook`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.facebook%22)

> Facebook

```diff
+Facebook
```

#### [`fof-share-social.lib.networks.linkedin`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.linkedin%22)

> LinkedIn

```diff
+LinkedIn
```

#### [`fof-share-social.lib.networks.my_mail`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.my_mail%22)

> My World

```diff
+My World
```

#### [`fof-share-social.lib.networks.native`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.native%22)

> Native Share

```diff
+Compartilhamento Nativo
```

#### [`fof-share-social.lib.networks.odnoklassniki`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.odnoklassniki%22)

> Odnoklassniki

```diff
+Odnoklassniki
```

#### [`fof-share-social.lib.networks.qq`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.qq%22)

> QQ

```diff
+QQ
```

#### [`fof-share-social.lib.networks.qzone`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.qzone%22)

> QZone

```diff
+QZone
```

#### [`fof-share-social.lib.networks.reddit`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.reddit%22)

> Reddit

```diff
+Reddit
```

#### [`fof-share-social.lib.networks.telegram`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.telegram%22)

> Telegram

```diff
+Telegram
```

#### [`fof-share-social.lib.networks.twitter`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.twitter%22)

> X (formerly Twitter)

```diff
+X (antigo Twitter)
```

#### [`fof-share-social.lib.networks.vkontakte`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.vkontakte%22)

> VKontakte

```diff
+VKontakte
```

#### [`fof-share-social.lib.networks.whatsapp`](https://weblate.rob006.net/translate/flarum2/fof-share-social/pt_BR/?q=context%3A%3D%22fof-share-social.lib.networks.whatsapp%22)

> WhatsApp

```diff
+WhatsApp
```


### `fof-signature` (missing)

#### [`fof-signature.admin.permissions.allow_signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.permissions.allow_signature%22)

> Can have a signature

```diff
+Pode ter uma assinatura
```

#### [`fof-signature.admin.permissions.edit_signature_others`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.permissions.edit_signature_others%22)

> Edit other users' signatures

```diff
+Editar assinaturas de outros usuários
```

#### [`fof-signature.admin.settings.allow_inline_editing.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.description%22)

> Inline editing of signature.

```diff
+Edição inline da assinatura.
```

#### [`fof-signature.admin.settings.allow_inline_editing.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.settings.allow_inline_editing.help%22)

> When enabled, users can edit their signature while viewing a post.

```diff
+Quando ativado, os usuários podem editar a assinatura enquanto veem um post.
```

#### [`fof-signature.admin.settings.maximum_char_limit.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.description%22)

> Maximum character limit of signature.

```diff
+Limite máximo de caracteres da assinatura.
```

#### [`fof-signature.admin.settings.maximum_char_limit.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.settings.maximum_char_limit.help%22)

> When the user exceeds the maximum character limit in their signature, they will be prevented from saving until the character count is accordingly.

```diff
+Quando o usuário exceder o limite máximo de caracteres na assinatura, não conseguirá salvar até ajustar o número de caracteres.
```

#### [`fof-signature.admin.settings.maximum_image_count.description`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.description%22)

> Maximum inserted images.

```diff
+Máximo de imagens inseridas.
```

#### [`fof-signature.admin.settings.maximum_image_count.help`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.admin.settings.maximum_image_count.help%22)

> When the user exceeds the maximum image count in their signature, they will be prevented from saving until the image count is accordingly.

```diff
+Quando o usuário exceder o número máximo de imagens na assinatura, não conseguirá salvar até ajustar o número de imagens.
```

#### [`fof-signature.forum.buttons.edit`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.buttons.edit%22)

> Edit Signature

```diff
+Editar Assinatura
```

#### [`fof-signature.forum.buttons.save`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.buttons.save%22)

> Save Signature

```diff
+Salvar Assinatura
```

#### [`fof-signature.forum.buttons.signature`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.buttons.signature%22)

> Signature

```diff
+Assinatura
```

#### [`fof-signature.forum.editor.placeholder`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.editor.placeholder%22)

> Edit your signature here

```diff
+Edite sua assinatura aqui
```

#### [`fof-signature.forum.errors.max_char_limit_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.errors.max_char_limit_exceed%22)

> Maximum character limit exceeded.

```diff
+Limite máximo de caracteres excedido.
```

#### [`fof-signature.forum.errors.max_image_count_exceed`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.errors.max_image_count_exceed%22)

> Maximum image count exceeded.

```diff
+Número máximo de imagens excedido.
```

#### [`fof-signature.forum.errors.save_failed`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.errors.save_failed%22)

> Something went wrong while saving your signature.

```diff
+Algo deu errado ao salvar sua assinatura.
```

#### [`fof-signature.forum.profile.click`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.profile.click%22)

> Click to write your signature

```diff
+Clique para escrever sua assinatura
```

#### [`fof-signature.forum.settings.heading`](https://weblate.rob006.net/translate/flarum2/fof-signature/pt_BR/?q=context%3A%3D%22fof-signature.forum.settings.heading%22)

> Signature

```diff
+Assinatura
```


### `fof-sitemap` (missing)

#### [`fof-sitemap.admin.settings.build_button`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button%22)

> Rebuild Sitemaps Now

```diff
+Reconstruir Sitemaps Agora
```

#### [`fof-sitemap.admin.settings.build_button_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.build_button_help%22)

> Triggers an immediate rebuild of all sitemap files. The job will be dispatched to the queue if it's configured, else will run immediately.

```diff
+Dispara a reconstrução imediata de todos os arquivos de sitemap. O job será enviado à fila, se ela estiver configurada; caso contrário, será executado imediatamente.
```

#### [`fof-sitemap.admin.settings.build_error`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.build_error%22)

> Failed to queue sitemap rebuild. Please check your logs and queue configuration.

```diff
+Falha ao colocar a reconstrução do sitemap na fila. Verifique seus logs e a configuração da fila.
```

#### [`fof-sitemap.admin.settings.build_success`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.build_success%22)

> Sitemap rebuild has been queued successfully. Check your logs to monitor progress.

```diff
+A reconstrução do sitemap foi colocada na fila com sucesso. Verifique seus logs para acompanhar o progresso.
```

#### [`fof-sitemap.admin.settings.exclude_tags`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags%22)

> Exclude all tag pages from sitemap

```diff
+Excluir todas as páginas de tags do sitemap
```

#### [`fof-sitemap.admin.settings.exclude_tags_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.exclude_tags_help%22)

> By default any tag visible to guests will be indexed

```diff
+Por padrão, qualquer tag visível para convidados será indexada
```

#### [`fof-sitemap.admin.settings.include_changefreq`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.include_changefreq%22)

> Include change frequency values in sitemap

```diff
+Incluir valores de frequência de alteração no sitemap
```

#### [`fof-sitemap.admin.settings.include_changefreq_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.include_changefreq_help%22)

> Change frequency values are ignored by Google but may be used by other search engines for crawl scheduling

```diff
+Os valores de frequência de alteração são ignorados pelo Google, mas podem ser usados por outros mecanismos de busca para agendar o rastreamento
```

#### [`fof-sitemap.admin.settings.include_priority`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.include_priority%22)

> Include priority values in sitemap

```diff
+Incluir valores de prioridade no sitemap
```

#### [`fof-sitemap.admin.settings.include_priority_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.include_priority_help%22)

> Priority values are ignored by Google but may be used by other search engines like Bing and Yandex

```diff
+Os valores de prioridade são ignorados pelo Google, mas podem ser usados por outros mecanismos de busca, como Bing e Yandex
```

#### [`fof-sitemap.admin.settings.last_build_time`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.last_build_time%22)

> Last Build Time

```diff
+Horário da Última Geração
```

#### [`fof-sitemap.admin.settings.soft_404.heading`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.heading%22)

> Soft 404 prevention

```diff
+Prevenção de soft 404
```

#### [`fof-sitemap.admin.settings.soft_404.help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.help%22)

> When a model has no or little relevant content, Google and other crawlers may flag these as "soft 404" pages. To eliminate this, set a minimum number of items required for each qualifying item here.

```diff
+Quando um modelo tem pouco ou nenhum conteúdo relevante, o Google e outros rastreadores podem sinalizar essas páginas como "soft 404". Para evitar isso, defina aqui um número mínimo de itens exigido para cada item qualificável.
```

#### [`fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_help%22)

> The minimum number of discussions a tag must have for it to be included in the sitemap.

```diff
+O número mínimo de discussões que uma tag deve ter para ser incluída no sitemap.
```

#### [`fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.tags.discussion.minimum_item_threshold_label%22)

> Tag: Minimum number of discussions

```diff
+Tag: Número mínimo de discussões
```

#### [`fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_help%22)

> The minimum number of comments/posts a user must have for their profile to be included in the sitemap.

```diff
+O número mínimo de comentários/posts que um usuário deve ter para que seu perfil seja incluído no sitemap.
```

#### [`fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_label`](https://weblate.rob006.net/translate/flarum2/fof-sitemap/pt_BR/?q=context%3A%3D%22fof-sitemap.admin.settings.soft_404.user.comments.minimum_item_threshold_label%22)

> User: Minimum number of comments/posts

```diff
+Usuário: Número mínimo de comentários/posts
```


### `fof-socialprofile` (missing)

#### [`fof-socialprofile.admin.settings.favicon_provider_label`](https://weblate.rob006.net/translate/flarum2/fof-socialprofile/pt_BR/?q=context%3A%3D%22fof-socialprofile.admin.settings.favicon_provider_label%22)

> External Favicon Provider

```diff
+Provedor Externo de Favicon
```


### `fof-split` (missing)

#### [`fof-split.forum.split.cancel`](https://weblate.rob006.net/translate/flarum2/fof-split/pt_BR/?q=context%3A%3D%22fof-split.forum.split.cancel%22)

> Cancel split

```diff
+Cancelar divisão
```


### `fof-synopsis` (missing)

#### [`fof-synopsis.admin.settings.excerpt-length.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-length.help%22)

> How many characters should be displayed from the post.

```diff
+Quantos caracteres do post devem ser exibidos.
```

#### [`fof-synopsis.admin.settings.excerpt-length.label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-length.label%22)

> Summary excerpt length in characters

```diff
+Tamanho do trecho de resumo em caracteres
```

#### [`fof-synopsis.admin.settings.excerpt-type.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-type.help%22)

> Select if the first or last post be used for synopsis content

```diff
+Selecione se o primeiro ou o último post será usado como conteúdo da sinopse
```

#### [`fof-synopsis.admin.settings.excerpt-type.label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.excerpt-type.label%22)

> Which post should be displayed as the excerpt?

```diff
+Qual post deve ser exibido como trecho?
```

#### [`fof-synopsis.admin.settings.first-label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.first-label%22)

> First post

```diff
+Primeiro post
```

#### [`fof-synopsis.admin.settings.last-label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.last-label%22)

> Last post

```diff
+Último post
```

#### [`fof-synopsis.admin.settings.rich-excerpts.help`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.rich-excerpts.help%22)

> When enabled, images, embeds and other non text elements may be included in the synopsis

```diff
+Quando ativado, imagens, embeds e outros elementos não textuais podem ser incluídos na sinopse
```

#### [`fof-synopsis.admin.settings.rich-excerpts.label`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.rich-excerpts.label%22)

> Display excerpts using rich content

```diff
+Exibir trechos com conteúdo rico
```

#### [`fof-synopsis.admin.settings.tags-enabled`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.admin.settings.tags-enabled%22)

> You have &lt;code&gt;flarum/tags&lt;/code&gt; enabled. These settings will become default, unless per individual tags have their own setting.

```diff
+Você tem <code>flarum/tags</code> ativado. Estas configurações serão o padrão, a menos que tags individuais tenham sua própria configuração.
```

#### [`fof-synopsis.forum.user.settings.show-summaries`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.forum.user.settings.show-summaries%22)

> Display an excerpt from each discussion in discussion lists (Desktop/Tablet)

```diff
+Exibir um trecho de cada discussão nas listas de discussões (Desktop/Tablet)
```

#### [`fof-synopsis.forum.user.settings.show-summaries-mobile`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.forum.user.settings.show-summaries-mobile%22)

> Display an excerpt from each discussion in discussion lists (Mobile)

```diff
+Exibir um trecho de cada discussão nas listas de discussões (Celular)
```

#### [`fof-synopsis.forum.user.settings.summaries-heading`](https://weblate.rob006.net/translate/flarum2/fof-synopsis/pt_BR/?q=context%3A%3D%22fof-synopsis.forum.user.settings.summaries-heading%22)

> Synopsis

```diff
+Sinopse
```


### `fof-terms` (missing)

#### [`flarum-gdpr.lib.data.userpolicydata.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.userpolicydata.delete_description%22)

> Removes the user's acceptance of the terms

```diff
+Remove a aceitação dos termos pelo usuário
```

#### [`flarum-gdpr.lib.data.userpolicydata.export_description`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.userpolicydata.export_description%22)

> Details about the user's acceptance of the terms

```diff
+Detalhes sobre a aceitação dos termos pelo usuário
```

#### [`fof-terms.admin.policies.optional`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.optional%22)

> Optional Policy

```diff
+Política Opcional
```

#### [`fof-terms.admin.policies.optional-help`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.admin.policies.optional-help%22)

> When enabled, users can use and interact with the forum without accepting this policy.

```diff
+Quando ativado, os usuários podem usar e interagir com o fórum sem aceitar esta política.
```

#### [`fof-terms.forum.update-alert.can-accept-optional-message`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.update-alert.can-accept-optional-message%22)

> We recently updated the terms. You can review them at your convenience.

```diff
+Recentemente, atualizamos os termos. Você pode revisá-los quando quiser.
```

#### [`fof-terms.forum.update-alert.close`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.update-alert.close%22)

> Close

```diff
+Fechar
```

#### [`fof-terms.forum.user_settings.optional_policies_label`](https://weblate.rob006.net/translate/flarum2/fof-terms/pt_BR/?q=context%3A%3D%22fof-terms.forum.user_settings.optional_policies_label%22)

> Policies

```diff
+Políticas
```


### `fof-top-posters-widget` (missing)

#### [`fof-top-posters-widget.admin.settings.info`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/pt_BR/?q=context%3A%3D%22fof-top-posters-widget.admin.settings.info%22)

> Users of the selected groups will be excluded from the widget results.

```diff
+Os usuários dos grupos selecionados serão excluídos dos resultados do widget.
```

#### [`fof-top-posters-widget.forum.widget.title`](https://weblate.rob006.net/translate/flarum2/fof-top-posters-widget/pt_BR/?q=context%3A%3D%22fof-top-posters-widget.forum.widget.title%22)

> Top Posters this Month

```diff
+Quem Mais Postou este Mês
```


### `fof-upgrade-advisor` (missing)

#### [`fof-upgrade-advisor.admin.checks.database-version.pass`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.pass%22)

> Running {current}.

```diff
+Executando {current}.
```

#### [`fof-upgrade-advisor.admin.checks.database-version.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.title%22)

> Database version

```diff
+Versão do banco de dados
```

#### [`fof-upgrade-advisor.admin.checks.database-version.warning_below_recommended`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.warning_below_recommended%22)

> {current} works, but {recommended} or newer is recommended for the best experience.

```diff
+{current} funciona, mas {recommended} ou mais recente é recomendado para a melhor experiência.
```

#### [`fof-upgrade-advisor.admin.checks.database-version.warning_unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.database-version.warning_unknown%22)

> Could not determine the database server version.

```diff
+Não foi possível determinar a versão do servidor de banco de dados.
```

#### [`fof-upgrade-advisor.admin.checks.extension-compatibility.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.extension-compatibility.title%22)

> Extension compatibility

```diff
+Compatibilidade de extensões
```

#### [`fof-upgrade-advisor.admin.checks.php-version.chip`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.chip%22)

> PHP {current}

```diff
+PHP {current}
```

#### [`fof-upgrade-advisor.admin.checks.php-version.fail`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.fail%22)

> PHP {current} is installed, but {required} or newer is required.

```diff
+PHP {current} está instalado, mas é exigida a versão {required} ou mais recente.
```

#### [`fof-upgrade-advisor.admin.checks.php-version.pass`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.pass%22)

> Running PHP {current}.

```diff
+Executando PHP {current}.
```

#### [`fof-upgrade-advisor.admin.checks.php-version.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.title%22)

> PHP version

```diff
+Versão do PHP
```

#### [`fof-upgrade-advisor.admin.checks.php-version.warning`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.checks.php-version.warning%22)

> Could not determine the PHP version.

```diff
+Não foi possível determinar a versão do PHP.
```

#### [`fof-upgrade-advisor.admin.errors.load_failed`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.errors.load_failed%22)

> Could not run the readiness checks. Please try again.

```diff
+Não foi possível executar as verificações de prontidão. Tente novamente.
```

#### [`fof-upgrade-advisor.admin.extensions.contact.forum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.forum%22)

> Support thread

```diff
+Discussão de suporte
```

#### [`fof-upgrade-advisor.admin.extensions.contact.issues`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.issues%22)

> Issues

```diff
+Issues
```

#### [`fof-upgrade-advisor.admin.extensions.contact.source`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.extensions.contact.source%22)

> Source

```diff
+Código-fonte
```

#### [`fof-upgrade-advisor.admin.hints.no_path_abandoned`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.hints.no_path_abandoned%22)

> Abandoned with no replacement. Plan to remove it or find an alternative.

```diff
+Abandonada e sem substituto. Planeje removê-la ou encontre uma alternativa.
```

#### [`fof-upgrade-advisor.admin.hints.swap_after_upgrade`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.hints.swap_after_upgrade%22)

> Remove before upgrading, then install {replacement} after the upgrade.

```diff
+Remova antes de atualizar e instale {replacement} depois da atualização.
```

#### [`fof-upgrade-advisor.admin.hints.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.hints.unknown%22)

> Not found on Packagist or any configured repository. If it's premium or private, add repository access.

```diff
+Não encontrada no Packagist nem em nenhum repositório configurado. Se for premium ou privada, adicione acesso ao repositório.
```

#### [`fof-upgrade-advisor.admin.list.after`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.after%22)

> After upgrading

```diff
+Depois de atualizar
```

#### [`fof-upgrade-advisor.admin.list.before`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.before%22)

> Before upgrading

```diff
+Antes de atualizar
```

#### [`fof-upgrade-advisor.admin.list.configure`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.configure%22)

> Configure repository access

```diff
+Configurar acesso ao repositório
```

#### [`fof-upgrade-advisor.admin.list.copied`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.copied%22)

> Copied

```diff
+Copiado
```

#### [`fof-upgrade-advisor.admin.list.copy`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.copy%22)

> Copy

```diff
+Copiar
```

#### [`fof-upgrade-advisor.admin.list.details.abandoned`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.abandoned%22)

> Abandoned, no replacement

```diff
+Abandonada, sem substituto
```

#### [`fof-upgrade-advisor.admin.list.details.none`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.none%22)

> {version}

```diff
+{version}
```

#### [`fof-upgrade-advisor.admin.list.details.remove`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.remove%22)

> Built into core

```diff
+Incorporada ao core
```

#### [`fof-upgrade-advisor.admin.list.details.replacement`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.replacement%22)

> → {replacement}

```diff
+→ {replacement}
```

#### [`fof-upgrade-advisor.admin.list.details.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.details.unknown%22)

> Not found

```diff
+Não encontrada
```

#### [`fof-upgrade-advisor.admin.list.groups.decision.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.decision.title%22)

> Needs a decision

```diff
+Precisa de decisão
```

#### [`fof-upgrade-advisor.admin.list.groups.environment.description`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.environment.description%22)

> Fix these before upgrading.

```diff
+Corrija estes itens antes de atualizar.
```

#### [`fof-upgrade-advisor.admin.list.groups.environment.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.environment.title%22)

> Server environment

```diff
+Ambiente do servidor
```

#### [`fof-upgrade-advisor.admin.list.groups.ready.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.ready.title%22)

> Ready

```diff
+Prontas
```

#### [`fof-upgrade-advisor.admin.list.groups.replace.description`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.replace.description%22)

> Remove these before upgrading; install any replacements once the upgrade is done.

```diff
+Remova estas antes de atualizar; instale os substitutos quando a atualização terminar.
```

#### [`fof-upgrade-advisor.admin.list.groups.replace.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.replace.title%22)

> Remove or replace

```diff
+Remover ou substituir
```

#### [`fof-upgrade-advisor.admin.list.groups.unknown.description`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.unknown.description%22)

> Usually premium or private extensions. Add repository access so the advisor can check them.

```diff
+Geralmente extensões premium ou privadas. Adicione acesso ao repositório para que o Upgrade Advisor possa verificá-las.
```

#### [`fof-upgrade-advisor.admin.list.groups.unknown.title`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.list.groups.unknown.title%22)

> Couldn't check

```diff
+Não verificadas
```

#### [`fof-upgrade-advisor.admin.overall.blocked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.blocked%22)

> Blocked: {reasons}

```diff
+Bloqueado: {reasons}
```

#### [`fof-upgrade-advisor.admin.overall.reasons.check`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.reasons.check%22)

> {title} needs fixing

```diff
+{title} precisa de correção
```

#### [`fof-upgrade-advisor.admin.overall.reasons.unchecked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.reasons.unchecked%22)

> {count, plural, one {# extension} other {# extensions}} couldn't be checked

```diff
+{count, plural, one {# extensão não pôde ser verificada} other {# extensões não puderam ser verificadas}}
```

#### [`fof-upgrade-advisor.admin.overall.tasks`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.tasks%22)

> Ready once {count, plural, one {# task is} other {# tasks are}} done

```diff
+Pronto após {count, plural, one {# tarefa concluída} other {# tarefas concluídas}}
```

#### [`fof-upgrade-advisor.admin.overall.unchecked_only`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.overall.unchecked_only%22)

> Nearly ready: {count, plural, one {# extension} other {# extensions}} couldn't be checked

```diff
+Quase pronto: {count, plural, one {# extensão não pôde ser verificada} other {# extensões não puderam ser verificadas}}
```

#### [`fof-upgrade-advisor.admin.repositories.add_composer`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.add_composer%22)

> Add repository

```diff
+Adicionar repositório
```

#### [`fof-upgrade-advisor.admin.repositories.add_floxum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.add_floxum%22)

> Add Floxum

```diff
+Adicionar Floxum
```

#### [`fof-upgrade-advisor.admin.repositories.empty`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.empty%22)

> No additional repositories configured.

```diff
+Nenhum repositório adicional configurado.
```

#### [`fof-upgrade-advisor.admin.repositories.help`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.help%22)

> Add private or marketplace Composer repositories so the advisor can check extensions that aren't on public Packagist. Used only when an extension can't be found on Packagist.
>

```diff
+Adicione repositórios Composer privados ou de marketplace para que o Upgrade Advisor possa verificar extensões que não estão no Packagist público. Usados apenas quando uma extensão não é encontrada no Packagist.
+
```

#### [`fof-upgrade-advisor.admin.repositories.remove`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.remove%22)

> Remove repository

```diff
+Remover repositório
```

#### [`fof-upgrade-advisor.admin.repositories.test`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test%22)

> Test connection

```diff
+Testar conexão
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_auth`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_auth%22)

> Authentication failed — check the token

```diff
+Falha na autenticação — verifique o token
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_invalid`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_invalid%22)

> Invalid response — check the URL

```diff
+Resposta inválida — verifique a URL
```

#### [`fof-upgrade-advisor.admin.repositories.test_fail_unreachable`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_fail_unreachable%22)

> Could not reach the repository

```diff
+Não foi possível acessar o repositório
```

#### [`fof-upgrade-advisor.admin.repositories.test_ok`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.test_ok%22)

> Connected

```diff
+Conectado
```

#### [`fof-upgrade-advisor.admin.repositories.token`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.token%22)

> Token

```diff
+Token
```

#### [`fof-upgrade-advisor.admin.repositories.type_composer`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.type_composer%22)

> Private Packagist / Custom

```diff
+Private Packagist / Personalizado
```

#### [`fof-upgrade-advisor.admin.repositories.type_floxum`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.type_floxum%22)

> Floxum

```diff
+Floxum
```

#### [`fof-upgrade-advisor.admin.repositories.url`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.url%22)

> Repository URL

```diff
+URL do Repositório
```

#### [`fof-upgrade-advisor.admin.repositories.username`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.repositories.username%22)

> Username

```diff
+Nome de usuário
```

#### [`fof-upgrade-advisor.admin.summary.blocked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.blocked%22)

> {count} blocked

```diff
+Bloqueadas: {count}
```

#### [`fof-upgrade-advisor.admin.summary.checked`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.checked%22)

> Checked {time}

```diff
+Verificado {time}
```

#### [`fof-upgrade-advisor.admin.summary.data_as_of`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.data_as_of%22)

> Package data from {time}

```diff
+Dados dos pacotes: {time}
```

#### [`fof-upgrade-advisor.admin.summary.data_as_of_help`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.data_as_of_help%22)

> Package lookups are cached for up to 6 hours. Refresh to fetch the latest.

```diff
+As consultas de pacotes ficam em cache por até 6 horas. Atualize para buscar os mais recentes.
```

#### [`fof-upgrade-advisor.admin.summary.export`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.export%22)

> Export CSV

```diff
+Exportar CSV
```

#### [`fof-upgrade-advisor.admin.summary.progress`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.progress%22)

> {percent}% of extensions ready as-is

```diff
+{percent}% das extensões já prontas
```

#### [`fof-upgrade-advisor.admin.summary.ready`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.ready%22)

> {count} ready as-is

```diff
+Já prontas: {count}
```

#### [`fof-upgrade-advisor.admin.summary.recommended`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.recommended%22)

> {version} recommended

```diff
+Recomendado: {version}
```

#### [`fof-upgrade-advisor.admin.summary.refresh`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.refresh%22)

> Refresh

```diff
+Atualizar
```

#### [`fof-upgrade-advisor.admin.summary.refresh_cooldown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.refresh_cooldown%22)

> Refresh ({seconds}s)

```diff
+Atualizar ({seconds}s)
```

#### [`fof-upgrade-advisor.admin.summary.tasks`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.tasks%22)

> {count} to do

```diff
+A fazer: {count}
```

#### [`fof-upgrade-advisor.admin.summary.unknown`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.summary.unknown%22)

> {count} couldn't be checked

```diff
+Não verificadas: {count}
```

#### [`fof-upgrade-advisor.admin.tabs.report`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.tabs.report%22)

> Readiness report

```diff
+Relatório de prontidão
```

#### [`fof-upgrade-advisor.admin.tabs.repositories`](https://weblate.rob006.net/translate/flarum2/fof-upgrade-advisor/pt_BR/?q=context%3A%3D%22fof-upgrade-advisor.admin.tabs.repositories%22)

> Repositories

```diff
+Repositórios
```


### `fof-upload` (missing)

#### [`flarum-gdpr.lib.data.uploads.anonymize_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.uploads.anonymize_description%22)

> Removes the user reference from the uploaded files. The files themselves remain accessible to users that could view them pre-anonymization.

```diff
+Remove a referência ao usuário dos arquivos enviados. Os arquivos em si continuam acessíveis aos usuários que podiam vê-los antes da anonimização.
```

#### [`flarum-gdpr.lib.data.uploads.delete_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.uploads.delete_description%22)

> Deletes all files uploaded by the user.

```diff
+Exclui todos os arquivos enviados pelo usuário.
```

#### [`flarum-gdpr.lib.data.uploads.export_description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22flarum-gdpr.lib.data.uploads.export_description%22)

> All files uploaded by the user.

```diff
+Todos os arquivos enviados pelo usuário.
```

#### [`fof-upload.admin.labels.aws-s3.bucket`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.aws-s3.bucket%22)

> Bucket

```diff
+Bucket
```

#### [`fof-upload.admin.labels.configured_by_environment`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.configured_by_environment%22)

> Your storage settings have been pre-configured via environment variables.

```diff
+Suas configurações de armazenamento foram pré-configuradas por variáveis de ambiente.
```

#### [`fof-upload.admin.labels.qiniu.bucket`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.qiniu.bucket%22)

> Bucket

```diff
+Bucket
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate%22)

> Allow SVG animations

```diff
+Permitir animações SVG
```

#### [`fof-upload.admin.labels.svg-sanitizer.allow_animate_help`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.allow_animate_help%22)

> Enabling SVG animations may introduce security vulnerabilities as animated SVGs can contain malicious code. Enable this setting at your own risk and only if you trust your users.

```diff
+Ativar animações SVG pode introduzir vulnerabilidades de segurança, pois SVGs animados podem conter código malicioso. Ative esta configuração por sua conta e risco e somente se confiar nos seus usuários.
```

#### [`fof-upload.admin.labels.svg-sanitizer.help`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.help%22)

> Configure how SVG files are processed and sanitized when uploaded. SVG files can contain potentially harmful scripts and should be handled carefully. Uploaded SVGs are sanitized on upload and harmful scripts and tags are removed.

```diff
+Configure como os arquivos SVG são processados e sanitizados no upload. Arquivos SVG podem conter scripts potencialmente perigosos e devem ser tratados com cuidado. Os SVGs enviados são sanitizados no upload, e scripts e tags perigosos são removidos.
```

#### [`fof-upload.admin.labels.svg-sanitizer.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.title%22)

> SVG Sanitizer

```diff
+Sanitizador de SVG
```

#### [`fof-upload.admin.nav.shared-uploads-button`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.nav.shared-uploads-button%22)

> Shared uploads

```diff
+Uploads compartilhados
```

#### [`fof-upload.admin.permissions.access_shared_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.permissions.access_shared_label%22)

> Access shared files in Media Manager

```diff
+Acessar arquivos compartilhados no gerenciador de mídia
```

#### [`fof-upload.admin.permissions.upload_shared_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.permissions.upload_shared_label%22)

> Upload shared files

```diff
+Enviar arquivos compartilhados
```

#### [`fof-upload.admin.shared-uploads.description`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.shared-uploads.description%22)

> Upload files that can be used by all users of your forum.

```diff
+Envie arquivos que podem ser usados por todos os usuários do fórum.
```

#### [`fof-upload.admin.shared-uploads.introduction`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.shared-uploads.introduction%22)

> Shared uploads are files that can be used by all users of your forum. They are not attached to any post, but can be inserted into posts by using the media manager.
>
> &lt;strong&gt;Warning:&lt;/strong&gt; Shared uploads are not protected by any permissions. Anyone with the URL can view them.
>

```diff
+Uploads compartilhados são arquivos que podem ser usados por todos os usuários do fórum. Eles não ficam anexados a nenhum post, mas podem ser inseridos em posts pelo gerenciador de mídia.
+
+<strong>Aviso:</strong> uploads compartilhados não são protegidos por nenhuma permissão. Qualquer pessoa com a URL pode vê-los.
+
```

#### [`fof-upload.admin.shared-uploads.no-files`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.shared-uploads.no-files%22)

> No shared files have been uploaded yet.

```diff
+Nenhum arquivo compartilhado foi enviado ainda.
```

#### [`fof-upload.admin.shared-uploads.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.shared-uploads.title%22)

> Shared uploads

```diff
+Uploads compartilhados
```

#### [`fof-upload.admin.shared-uploads.upload-new-button`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.admin.shared-uploads.upload-new-button%22)

> Upload new file

```diff
+Enviar novo arquivo
```

#### [`fof-upload.api.upload_errors.cannot_write_to_disk`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.cannot_write_to_disk%22)

> Cannot write to disk.

```diff
+Falha ao gravar no disco.
```

#### [`fof-upload.api.upload_errors.max_upload_file_size_form`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.max_upload_file_size_form%22)

> Upload max filesize limit reached from form.

```diff
+Limite máximo de tamanho de arquivo do formulário atingido.
```

#### [`fof-upload.api.upload_errors.max_upload_file_size_ini`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.max_upload_file_size_ini%22)

> Upload max filesize limit reached from php.ini.

```diff
+Limite máximo de tamanho de arquivo do php.ini atingido.
```

#### [`fof-upload.api.upload_errors.no_file_uploaded`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.no_file_uploaded%22)

> No file uploaded.

```diff
+Nenhum arquivo enviado.
```

#### [`fof-upload.api.upload_errors.no_files_made_it_to_upload`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.no_files_made_it_to_upload%22)

> Please upload files no larger than {max} kb.

```diff
+Envie arquivos de no máximo {max} kb.
```

#### [`fof-upload.api.upload_errors.no_upload_tmp_folder`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.no_upload_tmp_folder%22)

> No tmp folder for uploading files.

```diff
+Sem pasta tmp para o upload de arquivos.
```

#### [`fof-upload.api.upload_errors.partial_upload`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.partial_upload%22)

> Partial upload.

```diff
+Upload parcial.
```

#### [`fof-upload.api.upload_errors.upload_blocked_by_php_extension`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.api.upload_errors.upload_blocked_by_php_extension%22)

> A php extension blocked the upload.

```diff
+Uma extensão do PHP bloqueou o upload.
```

#### [`fof-upload.forum.buttons.shared_media`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.buttons.shared_media%22)

> Shared media

```diff
+Mídia compartilhada
```

#### [`fof-upload.forum.buttons.upload_shared`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.forum.buttons.upload_shared%22)

> Shared

```diff
+Compartilhados
```

#### [`fof-upload.lib.file_list.confirm_selection_btn`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.confirm_selection_btn%22)

> {fileCount, plural, =0 {None selected} one {Select file} other {Select files}}

```diff
+{fileCount, plural, =0 {Nenhum selecionado} one {Selecionar arquivo} other {Selecionar arquivos}}
```

#### [`fof-upload.lib.file_list.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.delete_confirmation%22)

> Are you sure you want to delete "{fileName}"?

```diff
+Tem certeza de que deseja excluir "{fileName}"?
```

#### [`fof-upload.lib.file_list.delete_file_a11y_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.delete_file_a11y_label%22)

> Delete file "{fileName}"

```diff
+Excluir o arquivo "{fileName}"
```

#### [`fof-upload.lib.file_list.empty`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.empty%22)

> There are no files to show.

```diff
+Não há arquivos para mostrar.
```

#### [`fof-upload.lib.file_list.hide_file.btn_a11y_label_hide`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.btn_a11y_label_hide%22)

> Hide "{fileName}" from media manager

```diff
+Ocultar "{fileName}" do gerenciador de mídia
```

#### [`fof-upload.lib.file_list.hide_file.btn_a11y_label_show`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.btn_a11y_label_show%22)

> Show "{fileName}" in media manager

```diff
+Mostrar "{fileName}" no gerenciador de mídia
```

#### [`fof-upload.lib.file_list.hide_file.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.hide_confirmation%22)

> Are you sure you want to hide "{fileName}"? Hiding a file will only remove it from your media manager and will not affect existing posts.

```diff
+Tem certeza de que deseja ocultar "{fileName}"? Ocultar um arquivo apenas o remove do seu gerenciador de mídia e não afeta os posts existentes.
```

#### [`fof-upload.lib.file_list.hide_file.hide_fail`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.hide_fail%22)

> Couldn't hide file "{fileName}"

```diff
+Não foi possível ocultar o arquivo "{fileName}"
```

#### [`fof-upload.lib.file_list.hide_file.hide_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.hide_success%22)

> File hidden

```diff
+Arquivo oculto
```

#### [`fof-upload.lib.file_list.hide_file.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.loading%22)

> Hiding file...

```diff
+Ocultando arquivo...
```

#### [`fof-upload.lib.file_list.hide_file.show_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.show_confirmation%22)

> Are you sure you want to show "{fileName}"? Showing a file will make it visible in your media manager.

```diff
+Tem certeza de que deseja mostrar "{fileName}"? Mostrar um arquivo o torna visível no seu gerenciador de mídia.
```

#### [`fof-upload.lib.file_list.hide_file.show_fail`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.show_fail%22)

> Couldn't show file "{fileName}"

```diff
+Não foi possível mostrar o arquivo "{fileName}"
```

#### [`fof-upload.lib.file_list.hide_file.show_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_file.show_success%22)

> File shown

```diff
+Arquivo visível
```

#### [`fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_hide`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_hide%22)

> Make "{fileName}" private (no public URL)

```diff
+Tornar "{fileName}" privado (sem URL pública)
```

#### [`fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_show`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.btn_a11y_label_show%22)

> Make "{fileName}" public (with public URL)

```diff
+Tornar "{fileName}" público (com URL pública)
```

#### [`fof-upload.lib.file_list.hide_shared_file.hide_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.hide_confirmation%22)

> Are you sure you want to make "{fileName}" private? Making a file private will remove its public URL, but it will not affect existing posts. It will also no longer be visible in the media manager to unauthorized users.

```diff
+Tem certeza de que deseja tornar "{fileName}" privado? Tornar um arquivo privado remove a URL pública dele, mas não afeta os posts existentes. Ele também deixa de ficar visível no gerenciador de mídia para usuários não autorizados.
```

#### [`fof-upload.lib.file_list.hide_shared_file.hide_fail`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.hide_fail%22)

> Couldn't make file "{fileName}" private

```diff
+Não foi possível tornar o arquivo "{fileName}" privado
```

#### [`fof-upload.lib.file_list.hide_shared_file.hide_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.hide_success%22)

> File made private

```diff
+Arquivo tornado privado
```

#### [`fof-upload.lib.file_list.hide_shared_file.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.loading%22)

> Making file private...

```diff
+Tornando o arquivo privado...
```

#### [`fof-upload.lib.file_list.hide_shared_file.show_confirmation`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.show_confirmation%22)

> Are you sure you want to make "{fileName}" public? Making a file public will make it accessible to anyone with a public URL and anyone can share it using the media manager.

```diff
+Tem certeza de que deseja tornar "{fileName}" público? Tornar um arquivo público o deixa acessível a qualquer pessoa com a URL pública, e qualquer um poderá compartilhá-lo pelo gerenciador de mídia.
```

#### [`fof-upload.lib.file_list.hide_shared_file.show_fail`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.show_fail%22)

> Couldn't make file "{fileName}" public

```diff
+Não foi possível tornar o arquivo "{fileName}" público
```

#### [`fof-upload.lib.file_list.hide_shared_file.show_success`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.hide_shared_file.show_success%22)

> File made public

```diff
+Arquivo tornado público
```

#### [`fof-upload.lib.file_list.load_more_files_btn`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.load_more_files_btn%22)

> Load more files

```diff
+Carregar mais arquivos
```

#### [`fof-upload.lib.file_list.loading`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.loading%22)

> Loading files...

```diff
+Carregando arquivos...
```

#### [`fof-upload.lib.file_list.modal_empty_desktop`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.modal_empty_desktop%22)

> Your file list is empty. Click the button or drag a file here to upload.

```diff
+Sua lista de arquivos está vazia. Clique no botão ou arraste um arquivo para cá para enviar.
```

#### [`fof-upload.lib.file_list.modal_empty_phone`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.modal_empty_phone%22)

> Your file list is empty. Tap the button above to upload a file.

```diff
+Sua lista de arquivos está vazia. Toque no botão acima para enviar um arquivo.
```

#### [`fof-upload.lib.file_list.release_to_upload`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.release_to_upload%22)

> Release to upload

```diff
+Solte para enviar
```

#### [`fof-upload.lib.file_list.select_file_a11y_label`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.file_list.select_file_a11y_label%22)

> Select file "{fileName}"

```diff
+Selecionar o arquivo "{fileName}"
```

#### [`fof-upload.lib.upload-shared-file-modal.dropzone`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.upload-shared-file-modal.dropzone%22)

> Drag and drop files here or click to browse

```diff
+Arraste e solte arquivos aqui ou clique para procurar
```

#### [`fof-upload.lib.upload-shared-file-modal.hide-from-media-gallery`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.upload-shared-file-modal.hide-from-media-gallery%22)

> Hide from user's media gallery

```diff
+Ocultar da galeria de mídia do usuário
```

#### [`fof-upload.lib.upload-shared-file-modal.title`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.upload-shared-file-modal.title%22)

> New shared file

```diff
+Novo arquivo compartilhado
```

#### [`fof-upload.lib.upload-shared-file-modal.upload`](https://weblate.rob006.net/translate/flarum2/fof-upload/pt_BR/?q=context%3A%3D%22fof-upload.lib.upload-shared-file-modal.upload%22)

> Upload

```diff
+Enviar
```


### `fof-user-bio` (missing)

#### [`fof-user-bio.admin.setting.allowFormatting`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.admin.setting.allowFormatting%22)

> Allow formatting in bio

```diff
+Permitir formatação na bio
```

#### [`fof-user-bio.admin.setting.allowFormatting_help`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.admin.setting.allowFormatting_help%22)

> By design, this formatting is separate from post formatting. If the BBCode and/or Markdown extensions are enabled, they will be available to format the bio. No images or embeds are allowed. Extensions that add to the Flarum formatter must \*explicitly\* add support for the bio formatter.

```diff
+Por design, esta formatação é separada da formatação de posts. Se as extensões BBCode e/ou Markdown estiverem ativadas, elas estarão disponíveis para formatar a bio. Imagens e embeds não são permitidos. Extensões que estendem o formatador do Flarum devem adicionar *explicitamente* suporte ao formatador da bio.
```

#### [`fof-user-bio.admin.setting.maxLines`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.admin.setting.maxLines%22)

> Max number of lines to show at a time

```diff
+Máximo de linhas exibidas por vez
```

#### [`fof-user-bio.forum.profile.cancel_button`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.forum.profile.cancel_button%22)

> Cancel

```diff
+Cancelar
```

#### [`fof-user-bio.forum.profile.cancel_confirm`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.forum.profile.cancel_confirm%22)

> Are you sure you want to cancel editing your bio? You'll lose any changes you've made.

```diff
+Tem certeza de que deseja cancelar a edição da sua bio? Você perderá as alterações feitas.
```

#### [`fof-user-bio.forum.profile.edit_bio_label`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.forum.profile.edit_bio_label%22)

> Edit bio

```diff
+Editar bio
```

#### [`fof-user-bio.forum.profile.save_button`](https://weblate.rob006.net/translate/flarum2/fof-user-bio/pt_BR/?q=context%3A%3D%22fof-user-bio.forum.profile.save_button%22)

> Save

```diff
+Salvar
```


### `fof-user-directory` (missing)

#### [`fof-user-directory.admin.settings.link-group-mentions`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.admin.settings.link-group-mentions%22)

> Link group mentions in posts to the User Directory

```diff
+Vincular menções de grupo nos posts ao Diretório de Usuários
```

#### [`fof-user-directory.forum.hero.title`](https://weblate.rob006.net/translate/flarum2/fof-user-directory/pt_BR/?q=context%3A%3D%22fof-user-directory.forum.hero.title%22)

> =&gt; fof-user-directory.forum.page.nav

```diff
+=> fof-user-directory.forum.page.nav
```


### `fof-usercard-stats` (missing)

#### [`fof-usercard-stats.forum.user.discussion-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/pt_BR/?q=context%3A%3D%22fof-usercard-stats.forum.user.discussion-count%22)

> {count, plural, one { {count} discussion} other {{count} discussions}}

```diff
+{count, plural, one {# discussão} other {# discussões}}
```

#### [`fof-usercard-stats.forum.user.post-count`](https://weblate.rob006.net/translate/flarum2/fof-usercard-stats/pt_BR/?q=context%3A%3D%22fof-usercard-stats.forum.user.post-count%22)

> {count, plural, one { {count} post} other {{count} posts}}

```diff
+{count, plural, one {# post} other {# posts}}
```


### `fof-username-request` (missing)

#### [`fof-username-request.admin.permissions.moderate_requests`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.admin.permissions.moderate_requests%22)

> Approve username/nickname change requests

```diff
+Aprovar solicitações de alteração de nome de usuário/apelido
```

#### [`fof-username-request.admin.permissions.request_nickname`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.admin.permissions.request_nickname%22)

> Request nickname change

```diff
+Solicitar alteração de apelido
```

#### [`fof-username-request.admin.permissions.request_username`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.admin.permissions.request_username%22)

> Request username change

```diff
+Solicitar alteração de nome de usuário
```

#### [`fof-username-request.email.body.noReasonProvided`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.email.body.noReasonProvided%22)

> No reason provided.

```diff
+Nenhum motivo informado.
```

#### [`fof-username-request.email.subject.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.email.subject.approved%22)

> {display\_name} approved your username change to {requested\_username}

```diff
+{display_name} aprovou a alteração do seu nome de usuário para {requested_username}
```

#### [`fof-username-request.email.subject.rejected`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.email.subject.rejected%22)

> {display\_name} rejected your username change to {requested\_username}

```diff
+{display_name} rejeitou a alteração do seu nome de usuário para {requested_username}
```

#### [`fof-username-request.forum.nickname_modals.action.approval_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.approval_label%22)

> Approve

```diff
+Aprovar
```

#### [`fof-username-request.forum.nickname_modals.action.decision_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.decision_title%22)

> Decision

```diff
+Decisão
```

#### [`fof-username-request.forum.nickname_modals.action.help_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.help_text%22)

> Please make sure that this requested nickname change follows the forum guidelines.

```diff
+Verifique se esta alteração de apelido solicitada segue as diretrizes do fórum.
```

#### [`fof-username-request.forum.nickname_modals.action.name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.name%22)

> {name} has requested to change their nickname to "{requestedName}"

```diff
+{name} solicitou a alteração do apelido para "{requestedName}"
```

#### [`fof-username-request.forum.nickname_modals.action.reason_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.reason_title%22)

> Reason for Rejection

```diff
+Motivo da Rejeição
```

#### [`fof-username-request.forum.nickname_modals.action.rejected_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.rejected_label%22)

> Reject

```diff
+Rejeitar
```

#### [`fof-username-request.forum.nickname_modals.action.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.submit_button%22)

> Submit

```diff
+Enviar
```

#### [`fof-username-request.forum.nickname_modals.action.success`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.success%22)

> Decision sent.

```diff
+Decisão enviada.
```

#### [`fof-username-request.forum.nickname_modals.action.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.action.title%22)

> =&gt; fof-username-request.ref.nickname\_change\_request

```diff
+=> fof-username-request.ref.nickname_change_request
```

#### [`fof-username-request.forum.nickname_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.confirmation_message%22)

> Your nickname change request has been submitted and is pending approval.

```diff
+Sua solicitação de alteração de apelido foi enviada e aguarda aprovação.
```

#### [`fof-username-request.forum.nickname_modals.request.current_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.current_request%22)

> You have already requested to change your nickname to "{name}". You can either update your request or delete it.

```diff
+Você já solicitou a alteração do seu apelido para "{name}". Você pode atualizar ou excluir a solicitação.
```

#### [`fof-username-request.forum.nickname_modals.request.delete_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.delete_button%22)

> Delete Request

```diff
+Excluir Solicitação
```

#### [`fof-username-request.forum.nickname_modals.request.deleted`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.deleted%22)

> Nickname request deleted.

```diff
+Solicitação de apelido excluída.
```

#### [`fof-username-request.forum.nickname_modals.request.dismiss_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.dismiss_button%22)

> =&gt; core.ref.okay

```diff
+=> core.ref.okay
```

#### [`fof-username-request.forum.nickname_modals.request.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.submit_button%22)

> Submit Request

```diff
+Enviar Solicitação
```

#### [`fof-username-request.forum.nickname_modals.request.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.request.title%22)

> Request Nickname Change

```diff
+Solicitar Alteração de Apelido
```

#### [`fof-username-request.forum.nickname_modals.results.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.approved%22)

> Your nickname change request has been approved

```diff
+Sua solicitação de alteração de apelido foi aprovada
```

#### [`fof-username-request.forum.nickname_modals.results.dismiss_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.dismiss_button%22)

> =&gt; core.ref.okay

```diff
+=> core.ref.okay
```

#### [`fof-username-request.forum.nickname_modals.results.new_name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.new_name%22)

> Your nickname has been successfully changed to: {name}

```diff
+Seu apelido foi alterado com sucesso para: {name}
```

#### [`fof-username-request.forum.nickname_modals.results.reason`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.reason%22)

> Reason for rejection: &lt;i&gt;"{reason}"&lt;/i&gt;.

```diff
+Motivo da rejeição: <i>"{reason}"</i>.
```

#### [`fof-username-request.forum.nickname_modals.results.rejected`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.rejected%22)

> Your nickname change request was rejected

```diff
+Sua solicitação de alteração de apelido foi rejeitada
```

#### [`fof-username-request.forum.nickname_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.resubmit%22)

> At this time you may resubmit a new nickname change request from your account settings if you so choose to.

```diff
+Agora você pode enviar uma nova solicitação de alteração de apelido nas configurações da conta, se quiser.
```

#### [`fof-username-request.forum.nickname_modals.results.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.nickname_modals.results.title%22)

> Nickname Change Request

```diff
+Solicitação de Alteração de Apelido
```

#### [`fof-username-request.forum.pending_requests.empty_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.empty_text%22)

> No name change requests found.

```diff
+Nenhuma solicitação de alteração de nome encontrada.
```

#### [`fof-username-request.forum.pending_requests.nickname_exerpt`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.nickname_exerpt%22)

> Requested nickname: {requestedName}

```diff
+Apelido solicitado: {requestedName}
```

#### [`fof-username-request.forum.pending_requests.nickname_item_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.nickname_item_text%22)

> {name} requested a nickname change

```diff
+{name} solicitou uma alteração de apelido
```

#### [`fof-username-request.forum.pending_requests.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.title%22)

> =&gt; fof-username-request.ref.name\_change\_requests

```diff
+=> fof-username-request.ref.name_change_requests
```

#### [`fof-username-request.forum.pending_requests.tooltip`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.tooltip%22)

> =&gt; fof-username-request.ref.name\_change\_requests

```diff
+=> fof-username-request.ref.name_change_requests
```

#### [`fof-username-request.forum.pending_requests.username_exerpt`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.username_exerpt%22)

> Requested username: {requestedName}

```diff
+Nome de usuário solicitado: {requestedName}
```

#### [`fof-username-request.forum.pending_requests.username_item_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.pending_requests.username_item_text%22)

> {name} requested a username change

```diff
+{name} solicitou uma alteração de nome de usuário
```

#### [`fof-username-request.forum.settings.nickname_request_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.settings.nickname_request_button%22)

> Change Nickname

```diff
+Alterar Apelido
```

#### [`fof-username-request.forum.settings.username_request_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.settings.username_request_button%22)

> Change Username

```diff
+Alterar Nome de Usuário
```

#### [`fof-username-request.forum.user.name_history_link`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.user.name_history_link%22)

> Name History

```diff
+Histórico de Nomes
```

#### [`fof-username-request.forum.username_modals.action.approval_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.approval_label%22)

> Approve

```diff
+Aprovar
```

#### [`fof-username-request.forum.username_modals.action.decision_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.decision_title%22)

> Decision

```diff
+Decisão
```

#### [`fof-username-request.forum.username_modals.action.help_text`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.help_text%22)

> Please make sure that this requested username change follows the forum guidelines.

```diff
+Verifique se esta alteração de nome de usuário solicitada segue as diretrizes do fórum.
```

#### [`fof-username-request.forum.username_modals.action.name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.name%22)

> {name} has requested to change their username to "{requestedName}"

```diff
+{name} solicitou a alteração do nome de usuário para "{requestedName}"
```

#### [`fof-username-request.forum.username_modals.action.reason_title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.reason_title%22)

> Reason for Rejection

```diff
+Motivo da Rejeição
```

#### [`fof-username-request.forum.username_modals.action.rejected_label`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.rejected_label%22)

> Reject

```diff
+Rejeitar
```

#### [`fof-username-request.forum.username_modals.action.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.submit_button%22)

> Submit

```diff
+Enviar
```

#### [`fof-username-request.forum.username_modals.action.success`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.success%22)

> Decision sent.

```diff
+Decisão enviada.
```

#### [`fof-username-request.forum.username_modals.action.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.action.title%22)

> =&gt; fof-username-request.ref.username\_change\_request

```diff
+=> fof-username-request.ref.username_change_request
```

#### [`fof-username-request.forum.username_modals.request.confirmation_message`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.confirmation_message%22)

> Your username change request has been submitted and is pending approval.

```diff
+Sua solicitação de alteração de nome de usuário foi enviada e aguarda aprovação.
```

#### [`fof-username-request.forum.username_modals.request.current_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.current_request%22)

> You have already requested to change your username to "{name}". You can either update your request or delete it.

```diff
+Você já solicitou a alteração do seu nome de usuário para "{name}". Você pode atualizar ou excluir a solicitação.
```

#### [`fof-username-request.forum.username_modals.request.delete_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.delete_button%22)

> Delete Request

```diff
+Excluir Solicitação
```

#### [`fof-username-request.forum.username_modals.request.deleted`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.deleted%22)

> Username request deleted.

```diff
+Solicitação de nome de usuário excluída.
```

#### [`fof-username-request.forum.username_modals.request.dismiss_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.dismiss_button%22)

> =&gt; core.ref.okay

```diff
+=> core.ref.okay
```

#### [`fof-username-request.forum.username_modals.request.submit_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.submit_button%22)

> Submit Request

```diff
+Enviar Solicitação
```

#### [`fof-username-request.forum.username_modals.request.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.request.title%22)

> Request Username Change

```diff
+Solicitar Alteração de Nome de Usuário
```

#### [`fof-username-request.forum.username_modals.results.approved`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.approved%22)

> Your username change request has been approved

```diff
+Sua solicitação de alteração de nome de usuário foi aprovada
```

#### [`fof-username-request.forum.username_modals.results.dismiss_button`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.dismiss_button%22)

> =&gt; core.ref.okay

```diff
+=> core.ref.okay
```

#### [`fof-username-request.forum.username_modals.results.new_name`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.new_name%22)

> Your username has been successfully changed to: {name}

```diff
+Seu nome de usuário foi alterado com sucesso para: {name}
```

#### [`fof-username-request.forum.username_modals.results.reason`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.reason%22)

> Reason for rejection: &lt;i&gt;"{reason}"&lt;/i&gt;.

```diff
+Motivo da rejeição: <i>"{reason}"</i>.
```

#### [`fof-username-request.forum.username_modals.results.rejected`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.rejected%22)

> Your username change request was rejected

```diff
+Sua solicitação de alteração de nome de usuário foi rejeitada
```

#### [`fof-username-request.forum.username_modals.results.resubmit`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.resubmit%22)

> At this time you may resubmit a new username change request from your account settings if you so choose to.

```diff
+Agora você pode enviar uma nova solicitação de alteração de nome de usuário nas configurações da conta, se quiser.
```

#### [`fof-username-request.forum.username_modals.results.title`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.forum.username_modals.results.title%22)

> Username Change Request

```diff
+Solicitação de Alteração de Nome de Usuário
```

#### [`fof-username-request.ref.name_change_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.ref.name_change_request%22)

> Name Change Request

```diff
+Solicitação de Alteração de Nome
```

#### [`fof-username-request.ref.name_change_requests`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.ref.name_change_requests%22)

> Name Change Requests

```diff
+Solicitações de Alteração de Nome
```

#### [`fof-username-request.ref.nickname_change_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.ref.nickname_change_request%22)

> Nickname Change Request

```diff
+Solicitação de Alteração de Apelido
```

#### [`fof-username-request.ref.nickname_change_requests`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.ref.nickname_change_requests%22)

> Nickname Change Requests

```diff
+Solicitações de Alteração de Apelido
```

#### [`fof-username-request.ref.username_change_request`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.ref.username_change_request%22)

> Username Change Request

```diff
+Solicitação de Alteração de Nome de Usuário
```

#### [`fof-username-request.ref.username_change_requests`](https://weblate.rob006.net/translate/flarum2/fof-username-request/pt_BR/?q=context%3A%3D%22fof-username-request.ref.username_change_requests%22)

> Username Change Requests

```diff
+Solicitações de Alteração de Nome de Usuário
```


### `fof-webhooks` (missing)

#### [`fof-webhooks.actions.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.discussion.deleted%22)

> Deleted discussion \`{1}\`

```diff
+Excluiu a discussão `{1}`
```

#### [`fof-webhooks.actions.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.discussion.hidden%22)

> Hid discussion \`{1}\`

```diff
+Ocultou a discussão `{1}`
```

#### [`fof-webhooks.actions.discussion.renamed.description`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.discussion.renamed.description%22)

> New title: {1}

```diff
+Novo título: {1}
```

#### [`fof-webhooks.actions.discussion.renamed.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.discussion.renamed.title%22)

> Renamed discussion \`{1}\`

```diff
+Renomeou a discussão `{1}`
```

#### [`fof-webhooks.actions.discussion.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.discussion.restored%22)

> Restored discussion \`{1}\`

```diff
+Restaurou a discussão `{1}`
```

#### [`fof-webhooks.actions.discussion.started`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.discussion.started%22)

> Started discussion \`{1}\`

```diff
+Iniciou a discussão `{1}`
```

#### [`fof-webhooks.actions.group.created`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.group.created%22)

> Created \`{1}\` group

```diff
+Criou o grupo `{1}`
```

#### [`fof-webhooks.actions.group.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.group.deleted%22)

> Deleted \`{1}\` group

```diff
+Excluiu o grupo `{1}`
```

#### [`fof-webhooks.actions.group.renamed`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.group.renamed%22)

> Renamed a group to \`{1}\`

```diff
+Renomeou um grupo para `{1}`
```

#### [`fof-webhooks.actions.post.approved`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.post.approved%22)

> Approved post in \`{1}\`

```diff
+Aprovou um post em `{1}`
```

#### [`fof-webhooks.actions.post.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.post.deleted%22)

> Deleted post in \`{1}\`

```diff
+Excluiu um post em `{1}`
```

#### [`fof-webhooks.actions.post.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.post.hidden%22)

> Hid post in \`{1}\`

```diff
+Ocultou um post em `{1}`
```

#### [`fof-webhooks.actions.post.posted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.post.posted%22)

> New post in \`{1}\`

```diff
+Novo post em `{1}`
```

#### [`fof-webhooks.actions.post.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.post.restored%22)

> Restored post in \`{1}\`

```diff
+Restaurou um post em `{1}`
```

#### [`fof-webhooks.actions.post.revised`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.post.revised%22)

> Edited post in \`{1}\`

```diff
+Editou um post em `{1}`
```

#### [`fof-webhooks.actions.user.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.user.deleted%22)

> Deleted user \`{1}\`

```diff
+Excluiu o usuário `{1}`
```

#### [`fof-webhooks.actions.user.registered`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.user.registered%22)

> New user registered

```diff
+Novo usuário cadastrado
```

#### [`fof-webhooks.actions.user.renamed.description`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.user.renamed.description%22)

> New username: {1}

```diff
+Novo nome de usuário: {1}
```

#### [`fof-webhooks.actions.user.renamed.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.actions.user.renamed.title%22)

> Changed username of \`{1}\`

```diff
+Alterou o nome de usuário de `{1}`
```

#### [`fof-webhooks.adapters.errors.404`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.adapters.errors.404%22)

> Webhook Not Found

```diff
+Webhook Não Encontrado
```

#### [`fof-webhooks.admin.errors.service_not_found`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.errors.service_not_found%22)

> The service "{service}" cannot be found.

```diff
+O serviço "{service}" não foi encontrado.
```

#### [`fof-webhooks.admin.errors.tag_disabled`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.errors.tag_disabled%22)

> This webhook had a tag restriction configured. The Tags extension is disabled. The restriction will not apply. Make sure this is intended.

```diff
+Este webhook tinha uma restrição de tag configurada. A extensão Tags está desativada. A restrição não será aplicada. Confirme se isso é intencional.
```

#### [`fof-webhooks.admin.errors.tag_invalid`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.errors.tag_invalid%22)

> This webhook is restricted to an invalid tag. The restriction will not apply. Make sure this is intended.

```diff
+Este webhook está restrito a uma tag inválida. A restrição não será aplicada. Confirme se isso é intencional.
```

#### [`fof-webhooks.admin.errors.url_invalid`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.errors.url_invalid%22)

> URL is not valid for selected service.

```diff
+A URL não é válida para o serviço selecionado.
```

#### [`fof-webhooks.admin.nav.desc`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.nav.desc%22)

> Customizable outgoing webhooks for your forum.

```diff
+Webhooks de saída personalizáveis para o seu fórum.
```

#### [`fof-webhooks.admin.settings.actions.flarum.approval.postwasapproved`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.approval.postwasapproved%22)

> Post Approved

```diff
+Post Aprovado
```

#### [`fof-webhooks.admin.settings.actions.flarum.approval.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.approval.title%22)

> Flarum Approval

```diff
+Aprovação do Flarum
```

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.deleted%22)

> =&gt; fof-webhooks.ref.deleted

```diff
+=> fof-webhooks.ref.deleted
```

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.hidden%22)

> =&gt; fof-webhooks.ref.hidden

```diff
+=> fof-webhooks.ref.hidden
```

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.renamed`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.renamed%22)

> =&gt; fof-webhooks.ref.renamed

```diff
+=> fof-webhooks.ref.renamed
```

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.restored%22)

> =&gt; fof-webhooks.ref.restored

```diff
+=> fof-webhooks.ref.restored
```

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.started`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.started%22)

> Started

```diff
+Início
```

#### [`fof-webhooks.admin.settings.actions.flarum.discussion.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.discussion.title%22)

> Flarum Discussion

```diff
+Discussão do Flarum
```

#### [`fof-webhooks.admin.settings.actions.flarum.group.created`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.group.created%22)

> Created

```diff
+Criação
```

#### [`fof-webhooks.admin.settings.actions.flarum.group.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.group.deleted%22)

> =&gt; fof-webhooks.ref.deleted

```diff
+=> fof-webhooks.ref.deleted
```

#### [`fof-webhooks.admin.settings.actions.flarum.group.renamed`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.group.renamed%22)

> =&gt; fof-webhooks.ref.renamed

```diff
+=> fof-webhooks.ref.renamed
```

#### [`fof-webhooks.admin.settings.actions.flarum.group.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.group.title%22)

> Flarum Group

```diff
+Grupo do Flarum
```

#### [`fof-webhooks.admin.settings.actions.flarum.post.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.post.deleted%22)

> =&gt; fof-webhooks.ref.deleted

```diff
+=> fof-webhooks.ref.deleted
```

#### [`fof-webhooks.admin.settings.actions.flarum.post.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.post.hidden%22)

> =&gt; fof-webhooks.ref.hidden

```diff
+=> fof-webhooks.ref.hidden
```

#### [`fof-webhooks.admin.settings.actions.flarum.post.posted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.post.posted%22)

> Posted

```diff
+Publicação
```

#### [`fof-webhooks.admin.settings.actions.flarum.post.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.post.restored%22)

> =&gt; fof-webhooks.ref.restored

```diff
+=> fof-webhooks.ref.restored
```

#### [`fof-webhooks.admin.settings.actions.flarum.post.revised`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.post.revised%22)

> Edited

```diff
+Edição
```

#### [`fof-webhooks.admin.settings.actions.flarum.post.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.post.title%22)

> Flarum Post

```diff
+Post do Flarum
```

#### [`fof-webhooks.admin.settings.actions.flarum.user.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.user.deleted%22)

> =&gt; fof-webhooks.ref.deleted

```diff
+=> fof-webhooks.ref.deleted
```

#### [`fof-webhooks.admin.settings.actions.flarum.user.registered`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.user.registered%22)

> Registered

```diff
+Cadastro
```

#### [`fof-webhooks.admin.settings.actions.flarum.user.renamed`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.user.renamed%22)

> =&gt; fof-webhooks.ref.renamed

```diff
+=> fof-webhooks.ref.renamed
```

#### [`fof-webhooks.admin.settings.actions.flarum.user.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.actions.flarum.user.title%22)

> Flarum User

```diff
+Usuário do Flarum
```

#### [`fof-webhooks.admin.settings.debug_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.debug_help%22)

> Add extra logs to the Flarum log file to debug issues with webhooks and/or events not working corectly.

```diff
+Adiciona logs extras ao arquivo de log do Flarum para depurar problemas com webhooks e/ou eventos que não funcionam corretamente.
```

#### [`fof-webhooks.admin.settings.debug_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.debug_label%22)

> Debug

```diff
+Debug
```

#### [`fof-webhooks.admin.settings.help.disabled`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.help.disabled%22)

> This webhook is disabled because it doesn't have any events enabled.

```diff
+Este webhook está desativado porque não tem nenhum evento ativado.
```

#### [`fof-webhooks.admin.settings.help.general`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.help.general%22)

> Here you can add, edit, and remove webhooks from your forum.

```diff
+Aqui você pode adicionar, editar e remover webhooks do seu fórum.
```

#### [`fof-webhooks.admin.settings.help.tags`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.help.tags%22)

> You can restrict webhooks to specific tags. If you select any tags, the webhook will only be fired if the event is triggered on a resource that has any of the selected tags.

```diff
+Você pode restringir webhooks a tags específicas. Se você selecionar alguma tag, o webhook só será disparado se o evento ocorrer em um recurso que tenha alguma das tags selecionadas.
```

#### [`fof-webhooks.admin.settings.help.url`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.help.url%22)

> The webhook's endpoint to be executed

```diff
+O endpoint do webhook a ser executado
```

#### [`fof-webhooks.admin.settings.item.tag_any_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.item.tag_any_label%22)

> Any Tag

```diff
+Qualquer Tag
```

#### [`fof-webhooks.admin.settings.modal.description`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.description%22)

> Here you modify what events the webhook is fired on.

```diff
+Aqui você altera em quais eventos o webhook é disparado.
```

#### [`fof-webhooks.admin.settings.modal.events_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.events_label%22)

> Events

```diff
+Eventos
```

#### [`fof-webhooks.admin.settings.modal.extra_text_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.extra_text_help%22)

> Extra text to include in the sent webhook.

```diff
+Texto extra a incluir no webhook enviado.
```

#### [`fof-webhooks.admin.settings.modal.extra_text_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.extra_text_label%22)

> Extra Text

```diff
+Texto Extra
```

#### [`fof-webhooks.admin.settings.modal.group_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.group_help%22)

> Send resources that can be seen by this group

```diff
+Enviar recursos que este grupo pode ver
```

#### [`fof-webhooks.admin.settings.modal.group_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.group_label%22)

> Group

```diff
+Grupo
```

#### [`fof-webhooks.admin.settings.modal.include_matching_tags_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.include_matching_tags_label%22)

> Include matching tags -- for webhooks restricted to specific tags, show which ones the event matched

```diff
+Incluir tags correspondentes -- em webhooks restritos a tags específicas, mostra com quais o evento correspondeu
```

#### [`fof-webhooks.admin.settings.modal.max_post_content_length_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.max_post_content_length_help%22)

> Set a number to limit the post content in all post-related events. Change to 0 or nothing to remove limit.

```diff
+Defina um número para limitar o conteúdo do post em todos os eventos relacionados a posts. Use 0 ou deixe vazio para remover o limite.
```

#### [`fof-webhooks.admin.settings.modal.max_post_content_length_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.max_post_content_length_label%22)

> Maximum Post Content Length

```diff
+Tamanho Máximo do Conteúdo do Post
```

#### [`fof-webhooks.admin.settings.modal.name_help`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.name_help%22)

> The name of the webhook. This will be used for things like the Discord username, Slack bot name, etc.

```diff
+O nome do webhook. Será usado em coisas como o nome de usuário no Discord, o nome do bot no Slack etc.
```

#### [`fof-webhooks.admin.settings.modal.name_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.name_label%22)

> Name

```diff
+Nome
```

#### [`fof-webhooks.admin.settings.modal.title`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.title%22)

> Webhook Settings

```diff
+Configurações do Webhook
```

#### [`fof-webhooks.admin.settings.modal.use_plain_text_label`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.modal.use_plain_text_label%22)

> Reduce amount of formatting in post content

```diff
+Reduzir a formatação no conteúdo do post
```

#### [`fof-webhooks.admin.settings.services.discord`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.services.discord%22)

> Discord

```diff
+Discord
```

#### [`fof-webhooks.admin.settings.services.microsoft-teams`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.services.microsoft-teams%22)

> Microsoft Teams

```diff
+Microsoft Teams
```

#### [`fof-webhooks.admin.settings.services.slack`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.admin.settings.services.slack%22)

> Slack

```diff
+Slack
```

#### [`fof-webhooks.ref.deleted`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.ref.deleted%22)

> Deleted

```diff
+Exclusão
```

#### [`fof-webhooks.ref.hidden`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.ref.hidden%22)

> Hidden

```diff
+Ocultação
```

#### [`fof-webhooks.ref.renamed`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.ref.renamed%22)

> Renamed

```diff
+Renomeação
```

#### [`fof-webhooks.ref.restored`](https://weblate.rob006.net/translate/flarum2/fof-webhooks/pt_BR/?q=context%3A%3D%22fof-webhooks.ref.restored%22)

> Restored

```diff
+Restauração
```

<!-- {% endraw %} -->
