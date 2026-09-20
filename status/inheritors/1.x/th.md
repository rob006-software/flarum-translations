# Thai inherited translations differences

Translations for Thai (`th`) are inherited from Flarum 1.x, but they can be adjusted
independently after inheritance. This page lists all strings which have the same source string on both
sides, but do not match between them: **0** are translated differently and **221** are
translated only in `th`. Altogether they cover **9** components.

<!-- {% raw %} -->


## Contents

| Component | Missing translations |
| --- | --- |
| `flarum-extension-manager` | [87](#flarum-extension-manager-missing) |
| `flarum-gdpr` | [90](#flarum-gdpr-missing) |
| `flarum-nicknames` | [12](#flarum-nicknames-missing) |
| `flectar-turnstile` | [7](#flectar-turnstile-missing) |
| `fof-sentry` | [8](#fof-sentry-missing) |
| `fof-upload` | [1](#fof-upload-missing) |
| `huoxin-filter-rule-manager` | [1](#huoxin-filter-rule-manager-missing) |
| `ianm-follow-users` | [2](#ianm-follow-users-missing) |
| `ianm-log-viewer` | [13](#ianm-log-viewer-missing) |


## Missing translations

These strings are translated only in `th`, so there is nothing to inherit from Flarum 1.x - they could be used to fill the gaps there. Each entry contains the English source string, followed by the translation available only in `th`.


### `flarum-extension-manager` (missing)

#### [`flarum-extension-manager.admin.auth_config.add_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_label%22)

> New authentication method

```diff
+Authentication method ใหม่
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.host_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.host_label%22)

> Host

```diff
+host
```

#### [`flarum-extension-manager.admin.auth_config.add_modal.token_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.add_modal.token_label%22)

> Token

```diff
+token
```

#### [`flarum-extension-manager.admin.auth_config.delete_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_confirmation%22)

> Are you sure you want to delete this authentication method?

```diff
+ลบ
```

#### [`flarum-extension-manager.admin.auth_config.delete_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.delete_label%22)

> Delete authentication method

```diff
+ลบ
```

#### [`flarum-extension-manager.admin.auth_config.edit_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.edit_label%22)

> Edit authentication method

```diff
+แก้ไข
```

#### [`flarum-extension-manager.admin.auth_config.fields.host`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.fields.host%22)

> Host

```diff
+host
```

#### [`flarum-extension-manager.admin.auth_config.fields.token`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.fields.token%22)

> Token

```diff
+token
```

#### [`flarum-extension-manager.admin.auth_config.no_auth_methods_configured`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.no_auth_methods_configured%22)

> No authentication methods configured. This is an optional advanced feature to allow installing from private repositories.

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.auth_config.remove_button_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.remove_button_label%22)

> Remove authentication method

```diff
+นำออก
```

#### [`flarum-extension-manager.admin.auth_config.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.title%22)

> Authentication Methods

```diff
+Authentication Methods
```

#### [`flarum-extension-manager.admin.auth_config.types.bearer`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.bearer%22)

> HTTP Bearer

```diff
+bearer
```

#### [`flarum-extension-manager.admin.auth_config.types.github-oauth`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.github-oauth%22)

> GitHub OAuth

```diff
+OAuth
```

#### [`flarum-extension-manager.admin.auth_config.types.gitlab-oauth`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.gitlab-oauth%22)

> GitLab OAuth

```diff
+OAuth
```

#### [`flarum-extension-manager.admin.auth_config.types.gitlab-token`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.auth_config.types.gitlab-token%22)

> GitLab Token

```diff
+ตกลง
```

#### [`flarum-extension-manager.admin.composer.add_repository_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.add_repository_label%22)

> Add Repository

```diff
+เพิ่ม
```

#### [`flarum-extension-manager.admin.composer.delete_repository_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_confirmation%22)

> Are you sure you want to delete this repository? All extensions installed from this repository will be removed.

```diff
+ลบ
```

#### [`flarum-extension-manager.admin.composer.delete_repository_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.delete_repository_label%22)

> Delete repository

```diff
+ลบ
```

#### [`flarum-extension-manager.admin.composer.edit_repository_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.edit_repository_label%22)

> Edit repository

```diff
+แก้ไข
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.help%22)

> The type of packages allowed to be installed. Do not change this unless you know what you are doing.

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.label%22)

> Minimum Stability

```diff
+stability
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.alpha`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.alpha%22)

> Alpha

```diff
+alpha
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.beta`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.beta%22)

> Beta

```diff
+beta
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.dev`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.dev%22)

> Dev

```diff
+dev
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.rc`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.rc%22)

> Release Candidate

```diff
+วันที่
```

#### [`flarum-extension-manager.admin.composer.minimum_stability.options.stable`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.minimum_stability.options.stable%22)

> Stable (Recommended)

```diff
+stable
```

#### [`flarum-extension-manager.admin.composer.repositories.help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.help%22)

> Add additional repositories to install packages from. This is an advanced feature, do not add repositories that are not trusted, as they can be used to execute malicious code on your server.
>

```diff
+เพิ่ม
```

#### [`flarum-extension-manager.admin.composer.repositories.label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.label%22)

> Repositories

```diff
+repository
```

#### [`flarum-extension-manager.admin.composer.repositories.types.composer`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.composer%22)

> composer

```diff
+composer
```

#### [`flarum-extension-manager.admin.composer.repositories.types.path`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.path%22)

> path

```diff
+path
```

#### [`flarum-extension-manager.admin.composer.repositories.types.vcs`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.repositories.types.vcs%22)

> vcs

```diff
+vcs
```

#### [`flarum-extension-manager.admin.composer.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.composer.title%22)

> Composer

```diff
+composer
```

#### [`flarum-extension-manager.admin.exceptions.composer_command_failure`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.composer_command_failure%22)

> Failed to execute. Check the composer logs in storage/logs/composer.

```diff
+ล้มเหลว
```

#### [`flarum-extension-manager.admin.exceptions.extension_already_installed`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.extension_already_installed%22)

> Extension is already installed.

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.exceptions.extension_not_directly_dependency`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.extension_not_directly_dependency%22)

> Extension is installed as a dependency of another extension, it cannot be directly removed.

```diff
+นำออก
```

#### [`flarum-extension-manager.admin.exceptions.extension_not_installed`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.extension_not_installed%22)

> Extension not found.

```diff
+ไม่
```

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extension_incompatible_with_instance`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extension_incompatible_with_instance%22)

> The extension is most likely incompatible with your current Flarum instance.

```diff
+extension
```

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extension_not_found`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extension_not_found%22)

> The extension was not found or does not exist.

```diff
+ไม่
```

#### [`flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.exceptions.guessed_cause.extensions_incompatible_with_new_major%22)

> Some installed extensions are not compatible with the newest major release. Please wait until the extensions are updated to be compatible by the authors, or remove them before proceeding.
>

```diff
+นำออก
```

#### [`flarum-extension-manager.admin.extensions.check_why_it_failed_updating`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.check_why_it_failed_updating%22)

> Show why it did not update to the latest.

```diff
+แสดง
```

#### [`flarum-extension-manager.admin.extensions.install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.install%22)

> Install a new extension

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.extensions.successful_install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.successful_install%22)

> {extension} was installed successfully, redirecting..

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.extensions.successful_remove`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.successful_remove%22)

> Extension removed successfully.

```diff
+นำออก
```

#### [`flarum-extension-manager.admin.extensions.successful_update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.successful_update%22)

> {extension} was updated successfully, redirecting..

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.extensions.update_hard_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.update_hard_label%22)

> Hard update

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.extensions.update_soft_label`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.extensions.update_soft_label%22)

> Soft update

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.file_permissions`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.file_permissions%22)

> The extension manager requires read and write permissions on the following files and directories: composer.json, composer.lock, vendor, storage, storage/.composer
>

```diff
+อ่าน
```

#### [`flarum-extension-manager.admin.major_updater.description`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.description%22)

> Major Flarum updates are not backwards compatible, meaning that some of your currently installed extensions, and manually made modifications might not work with this new version. Please make sure to make a backup of your database and files before proceeding.
>

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.major_updater.dry_run`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run%22)

> Dry Run

```diff
+เรียกใช้
```

#### [`flarum-extension-manager.admin.major_updater.dry_run_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.dry_run_help%22)

> A dry run emulates the update to see if your current setup can safely update, this does not mean that your manual made custom modifications will work in the newer version.

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.major_updater.failure.desc`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.failure.desc%22)

> The last major update failed, some installed extensions are not compatible with the new major release.

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.major_updater.failure.why`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.failure.why%22)

> Find out more

```diff
+เพิ่มเติม
```

#### [`flarum-extension-manager.admin.major_updater.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.major_updater.title%22)

> Flarum {version} Major Update Available

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.columns.elapsed_time`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.elapsed_time%22)

> Completed in

```diff
+เสร็จสิ้น
```

#### [`flarum-extension-manager.admin.sections.queue.columns.operation`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.operation%22)

> Operation

```diff
+operation
```

#### [`flarum-extension-manager.admin.sections.queue.columns.package`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.package%22)

> Package

```diff
+package
```

#### [`flarum-extension-manager.admin.sections.queue.columns.peak_memory_used`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.columns.peak_memory_used%22)

> Peak Memory Usage

```diff
+Peak Memory Usage
```

#### [`flarum-extension-manager.admin.sections.queue.none`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.none%22)

> There are no tasks yet.

```diff
+ไม่
```

#### [`flarum-extension-manager.admin.sections.queue.operations.extension_install`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.extension_install%22)

> Install extension

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.sections.queue.operations.extension_remove`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.extension_remove%22)

> Remove extension

```diff
+นำออก
```

#### [`flarum-extension-manager.admin.sections.queue.operations.extension_update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.extension_update%22)

> Update extension

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_check`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_check%22)

> Check for updates

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_global`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_global%22)

> Update all software packages

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_major`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_major%22)

> Major update

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.operations.update_minor`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.update_minor%22)

> Minor update

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.operations.why_not`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.operations.why_not%22)

> Analyze why a package cannot be updated

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.cause_unknown`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.cause_unknown%22)

> Unknown

```diff
+ไม่
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.command`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.command%22)

> Composer Command

```diff
+composer
```

#### [`flarum-extension-manager.admin.sections.queue.output_modal.output`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.output_modal.output%22)

> Output

```diff
+output
```

#### [`flarum-extension-manager.admin.sections.queue.refresh`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.refresh%22)

> Refresh tasks list

```diff
+รีเฟรช
```

#### [`flarum-extension-manager.admin.sections.queue.statuses.running`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.statuses.running%22)

> Running

```diff
+เรียกใช้
```

#### [`flarum-extension-manager.admin.sections.queue.task_just_started`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.task_just_started%22)

> Task just started

```diff
+เริ่ม
```

#### [`flarum-extension-manager.admin.sections.queue.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.sections.queue.title%22)

> Queue

```diff
+queue
```

#### [`flarum-extension-manager.admin.settings.access_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.settings.access_warning%22)

> Please be careful to who you give access to the admin area, the extension manager could be misused by bad actors to install packages that can lead to security breaches.

```diff
+ติดตั้ง
```

#### [`flarum-extension-manager.admin.settings.debug_mode_warning`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.settings.debug_mode_warning%22)

> You are running in debug mode, the extension manager cannot properly install and update local development packages. Please use the command line interface instead for such purposes.

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.settings.queue_jobs`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.settings.queue_jobs%22)

> Run operations in the background queue

```diff
+ย้อนกลับ
```

#### [`flarum-extension-manager.admin.settings.task_retention_days`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.settings.task_retention_days%22)

> Task retention days

```diff
+task retention days
```

#### [`flarum-extension-manager.admin.settings.task_retention_days_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.settings.task_retention_days_help%22)

> The number of days to keep completed tasks in the database. Tasks older than this will be deleted. Set to 0 to keep all tasks.
>

```diff
+ลบ
```

#### [`flarum-extension-manager.admin.update_successful`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.update_successful%22)

> Flarum successfully updated.

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.updater.check_for_updates`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.check_for_updates%22)

> Check for updates

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.updater.flarum`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.flarum%22)

> Flarum Core

```diff
+Flarum Core
```

#### [`flarum-extension-manager.admin.updater.global_update_successful`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.global_update_successful%22)

> Successfully updated all packages.

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.updater.last_update_checked_at`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.last_update_checked_at%22)

> Last Update Check: 

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.updater.run_global_update`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.run_global_update%22)

> Run Global Update

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.updater.updater_help`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_help%22)

> Runs a check for new extension and Flarum updates.

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.updater.updater_title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.updater.updater_title%22)

> Updates

```diff
+อัปเดต
```

#### [`flarum-extension-manager.admin.why_not_modal.title`](https://weblate.rob006.net/translate/flarum2/flarum-extension-manager/th/?q=context%3A%3D%22flarum-extension-manager.admin.why_not_modal.title%22)

> Why Won't it Update

```diff
+อัปเดต
```


### `flarum-gdpr` (missing)

#### [`flarum-gdpr.admin.gdpr_page.data_types.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.anonymize_description%22)

> Anonymize Action

```diff
+ไม่
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.delete_description%22)

> Delete Action

```diff
+ลบ
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.export_description%22)

> Export Action

```diff
+ส่งออก
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.extension`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.extension%22)

> Extension

```diff
+extension
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.help_text%22)

> These are the currently registered data types. Each type is listed along with it's associated export, anonymization, and deletion actions. If an extension handles any data which falls under GDPR regulations, it should register it's data types with &lt;code&gt;flarum/gdpr&lt;/code&gt;.
> Data stored in the &lt;code&gt;user&lt;/code&gt; table is handled seperately, see user table data below.
>

```diff
+ส่งออก
```

#### [`flarum-gdpr.admin.gdpr_page.data_types.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.data_types.title%22)

> Data Types

```diff
+ประเภท
```

#### [`flarum-gdpr.admin.gdpr_page.description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.description%22)

> Status of various GDPR actions and integrations

```diff
+สถานะ
```

#### [`flarum-gdpr.admin.gdpr_page.heading`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.heading%22)

> GDPR Data Overview

```diff
+ดู
```

#### [`flarum-gdpr.admin.gdpr_page.settings.extension_settings_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.settings.extension_settings_button%22)

> GDPR Settings

```diff
+ตั้งค่า
```

#### [`flarum-gdpr.admin.gdpr_page.settings.heading`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.settings.heading%22)

> GDPR Settings

```diff
+ตั้งค่า
```

#### [`flarum-gdpr.admin.gdpr_page.settings.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.settings.help_text%22)

> Looking for GDPR settings? They're found on the extension page.

```diff
+ตกลง
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.column`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.column%22)

> Column

```diff
+column
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.extension`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.extension%22)

> Extension

```diff
+extension
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.help_text%22)

> On the most part, any columns added to the &lt;code&gt;user&lt;/code&gt; table will be handled automatically, both for exporting data and for erasure.
> However, there are some special cases, which are listed below.
>

```diff
+เพิ่ม
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.nullable`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.nullable%22)

> Nullable

```diff
+nullable
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii%22)

> PII

```diff
+PII
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.pii_tooltip%22)

> This column is considered personally identifiable information and will be redacted in anonymized contexts (e.g. anonymized event payloads).

```diff
+ไม่
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export%22)

> Redacted on export

```diff
+ส่งออก
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.redacted_on_export_tooltip%22)

> This column's value is blanked (set to null) when generating a user data export. The column still appears in the export with a null value.

```diff
+ส่งออก
```

#### [`flarum-gdpr.admin.gdpr_page.user_table_data.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.gdpr_page.user_table_data.title%22)

> User Table Data

```diff
+ผู้ใช้
```

#### [`flarum-gdpr.admin.nav.gdpr_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.nav.gdpr_button%22)

> GDPR Integrations

```diff
+GDPR
```

#### [`flarum-gdpr.admin.permissions.process_erasure`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.permissions.process_erasure%22)

> Process erasure requests

```diff
+ร้องขอ
```

#### [`flarum-gdpr.admin.permissions.process_export_for_others`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.permissions.process_export_for_others%22)

> Request and receive data exports for other users

```diff
+ส่งออก
```

#### [`flarum-gdpr.admin.permissions.see_anonymized_user_badges`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.permissions.see_anonymized_user_badges%22)

> See anonymized user badges

```diff
+ไม่
```

#### [`flarum-gdpr.admin.settings.allow_anonymization`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_anonymization%22)

> Allow anonymization for erasure requests

```diff
+ไม่
```

#### [`flarum-gdpr.admin.settings.allow_anonymization_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_anonymization_help%22)

> The default option, and recommended for most communities. Under this mode, posts/comments will be preserved as much as possible as allowed by GDPR, but any user identifiable information is removed.

```diff
+นำออก
```

#### [`flarum-gdpr.admin.settings.allow_deletion`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_deletion%22)

> Allow deletion for erasure requests

```diff
+ทั้งหมด
```

#### [`flarum-gdpr.admin.settings.allow_deletion_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.allow_deletion_help%22)

> A much stricter option. Under this mode, all posts/comments will be deleted, and the user will be removed from the database. Use with caution.

```diff
+ลบ
```

#### [`flarum-gdpr.admin.settings.default_anonymous_username`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_anonymous_username%22)

> Default username for anonymized users

```diff
+ไม่
```

#### [`flarum-gdpr.admin.settings.default_anonymous_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_anonymous_username_help%22)

> When a user is anonymized, their username will be replaced with this value, plus the ID of the anonymization request, for example &lt;code&gt;Anonymous123&lt;/code&gt;.

```diff
+ไม่
```

#### [`flarum-gdpr.admin.settings.default_erasure`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure%22)

> Default action for erasure requests

```diff
+ค่าเริ่มต้น
```

#### [`flarum-gdpr.admin.settings.default_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_help%22)

> What should the default action be for erasure requests?

```diff
+ค่าเริ่มต้น
```

#### [`flarum-gdpr.admin.settings.default_erasure_options.anonymization`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_options.anonymization%22)

> Anonymization

```diff
+ไม่
```

#### [`flarum-gdpr.admin.settings.default_erasure_options.deletion`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.default_erasure_options.deletion%22)

> Deletion

```diff
+deletion
```

#### [`flarum-gdpr.admin.settings.gdpr_page.help_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.help_text%22)

> Before deciding on which actions to use on your forum, it is vital to understand which data is integrated, and how it is handled for both anonymization and deletion. Vist the GDPR overview to understand how data is handled, and which optional extensions have registered their data to be handled by this extension.

```diff
+ดู
```

#### [`flarum-gdpr.admin.settings.gdpr_page.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.admin.settings.gdpr_page.title%22)

> Data Integration and actions

```diff
+Data Integration and actions
```

#### [`flarum-gdpr.email.confirm_erasure.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.email.confirm_erasure.subject%22)

> Confirm your account erasure request

```diff
+ยืนยัน
```

#### [`flarum-gdpr.email.erasure_cancelled.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.email.erasure_cancelled.subject%22)

> Account erasure request cancelled

```diff
+ยกเลิก
```

#### [`flarum-gdpr.email.erasure_completed.anonymization.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.email.erasure_completed.anonymization.subject%22)

> Account anonymization completed

```diff
+ไม่
```

#### [`flarum-gdpr.email.erasure_completed.deletion.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.email.erasure_completed.deletion.subject%22)

> Account deletion completed

```diff
+เสร็จสิ้น
```

#### [`flarum-gdpr.email.export_available.subject`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.email.export_available.subject%22)

> Data export available

```diff
+ส่งออก
```

#### [`flarum-gdpr.forum.badges.anonymized_user`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.badges.anonymized_user%22)

> Anonymized User

```diff
+ไม่
```

#### [`flarum-gdpr.forum.delete_user.modal_delete_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.modal_delete_button%22)

> Erase using default action

```diff
+ค่าเริ่มต้น
```

#### [`flarum-gdpr.forum.delete_user.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.text%22)

> Are you sure you want to erase {username}'s account?
>
> This action is irreversible.
>

```diff
+ชื่อ
```

#### [`flarum-gdpr.forum.delete_user.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.delete_user.title%22)

> Erase {username}'s account

```diff
+ชื่อ
```

#### [`flarum-gdpr.forum.erasure_request_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.erasure_request_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.

```diff
+ยืนยัน
```

#### [`flarum-gdpr.forum.erasure_requests.empty_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.empty_text%22)

> No pending account erasure requests

```diff
+ไม่
```

#### [`flarum-gdpr.forum.erasure_requests.item_text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.item_text%22)

> {name} requested account erasure

```diff
+ชื่อ
```

#### [`flarum-gdpr.forum.erasure_requests.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.title%22)

> Account Erasure Requests

```diff
+บัญชี
```

#### [`flarum-gdpr.forum.erasure_requests.tooltip`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.erasure_requests.tooltip%22)

> Account Erasure Requests

```diff
+บัญชี
```

#### [`flarum-gdpr.forum.export_file`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.export_file%22)

> Export of user data for {username} ({email}) prepared at {date} from {forumTitle} ({url})

```diff
+ส่งออก
```

#### [`flarum-gdpr.forum.notification.export-ready`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.notification.export-ready%22)

> Your data export for {username} is now ready to download.

```diff
+ดาวน์โหลด
```

#### [`flarum-gdpr.forum.process_erasure.anonymization_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.anonymization_button%22)

> Anonymize user

```diff
+ไม่
```

#### [`flarum-gdpr.forum.process_erasure.comments_label`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.comments_label%22)

> Comments (optional)

```diff
+ความเห็น
```

#### [`flarum-gdpr.forum.process_erasure.confirm`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.confirm%22)

> Are you sure you want to erase {name}'s account under {mode} mode?

```diff
+ชื่อ
```

#### [`flarum-gdpr.forum.process_erasure.confirmed_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.confirmed_at%22)

> Confirmed: {date}

```diff
+ยืนยัน
```

#### [`flarum-gdpr.forum.process_erasure.deletion_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.deletion_button%22)

> Delete user

```diff
+ลบ
```

#### [`flarum-gdpr.forum.process_erasure.eligible_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.eligible_at%22)

> Eligible for auto-processing: {date}

```diff
+กำลังประมวลผล
```

#### [`flarum-gdpr.forum.process_erasure.requested_at`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.requested_at%22)

> Requested: {date}

```diff
+วันที่
```

#### [`flarum-gdpr.forum.process_erasure.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.text%22)

> {name} has requested account erasure.

```diff
+ชื่อ
```

#### [`flarum-gdpr.forum.process_erasure.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.process_erasure.title%22)

> Process erasure request

```diff
+ร้องขอ
```

#### [`flarum-gdpr.forum.request_erasure.cancel_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.cancel_button%22)

> Cancel request

```diff
+ยกเลิก
```

#### [`flarum-gdpr.forum.request_erasure.password_label`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.password_label%22)

> Confirm Password

```diff
+ยืนยัน
```

#### [`flarum-gdpr.forum.request_erasure.reason_label`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.reason_label%22)

> Reason (optional)

```diff
+ตัวเลือก
```

#### [`flarum-gdpr.forum.request_erasure.request_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.request_button%22)

> Request erasure

```diff
+ร้องขอ
```

#### [`flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.awaiting_user_confirmation%22)

> You should have received an email to confirm your account erasure request.
>

```diff
+ยืนยัน
```

#### [`flarum-gdpr.forum.request_erasure.status.user_confirmed`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.status.user_confirmed%22)

> You have confirmed your account erasure request. Action will be taken within 30 days, as required by the GDPR.
>

```diff
+ยืนยัน
```

#### [`flarum-gdpr.forum.request_erasure.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.text%22)

> Once received and confirmed, an admin will review your request within 30 days, as required by the GDPR.

```diff
+ดู
```

#### [`flarum-gdpr.forum.request_erasure.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.request_erasure.title%22)

> Request account erasure

```diff
+บัญชี
```

#### [`flarum-gdpr.forum.settings.export_data_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_button%22)

> Export Data

```diff
+ส่งออก
```

#### [`flarum-gdpr.forum.settings.export_data_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.settings.export_data_help%22)

> Requesting data export will provide you with a downloadable copy of all the information associated with your account. This includes posts, comments, and profile details.

```diff
+ดาวน์โหลด
```

#### [`flarum-gdpr.forum.settings.request_erasure_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_button%22)

> Erase Account

```diff
+บัญชี
```

#### [`flarum-gdpr.forum.settings.request_erasure_help`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.forum.settings.request_erasure_help%22)

> Requesting erasure will permanently delete your account and all associated data. This action is irreversible. Before proceeding, ensure you have saved any content you wish to keep.

```diff
+บันทึก
```

#### [`flarum-gdpr.lib.data.avatar.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.avatar.delete_description%22)

> Deletes the user's avatar from the filesystem.

```diff
+ลบ
```

#### [`flarum-gdpr.lib.data.avatar.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.avatar.export_description%22)

> Retrieves the user's avatar from the filesystem and includes it in the export.

```diff
+ส่งออก
```

#### [`flarum-gdpr.lib.data.default_user_action`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.default_user_action%22)

> No action, handled by default user table data handling.

```diff
+ไม่
```

#### [`flarum-gdpr.lib.data.discussions.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.discussions.export_description%22)

> Exports all discussions the user has started. Data restricted to title and creation date.

```diff
+ส่งออก
```

#### [`flarum-gdpr.lib.data.forum.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.forum.export_description%22)

> Exports the forum title, url, username, email and the current date.

```diff
+ส่งออก
```

#### [`flarum-gdpr.lib.data.no_action`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.no_action%22)

> No action taken.

```diff
+ไม่
```

#### [`flarum-gdpr.lib.data.posts.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.anonymize_description%22)

> Removes the IP address from all posts the user has made.

```diff
+เพิ่ม
```

#### [`flarum-gdpr.lib.data.posts.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.delete_description%22)

> Deletes all posts the user has made.

```diff
+ลบ
```

#### [`flarum-gdpr.lib.data.posts.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.posts.export_description%22)

> Exports all posts the user has made. Data restricted to content, creation date, IP address and discussion ID.

```diff
+เพิ่ม
```

#### [`flarum-gdpr.lib.data.tokens.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.tokens.delete_description%22)

> Deletes all tokens the user has created.

```diff
+ลบ
```

#### [`flarum-gdpr.lib.data.tokens.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.tokens.export_description%22)

> Exports all tokens the user has created. Data restricted to creation date and token type.

```diff
+สร้าง
```

#### [`flarum-gdpr.lib.data.user.anonymize_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.user.anonymize_description%22)

> Sets all columns on the user table to null. Non-nullable columns are set to their default values or special values. Password is changed, preferences set to default and all groups are removed.

```diff
+นำออก
```

#### [`flarum-gdpr.lib.data.user.delete_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.user.delete_description%22)

> Deletes the user from the database.

```diff
+ลบ
```

#### [`flarum-gdpr.lib.data.user.export_description`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.data.user.export_description%22)

> Exports data from the user table. All columns except id, password.

```diff
+ส่งออก
```

#### [`flarum-gdpr.lib.request_data.request_button`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.request_data.request_button%22)

> Request archive

```diff
+rc
```

#### [`flarum-gdpr.lib.request_data.text`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.request_data.text%22)

> A zip archive will be prepared for you. Once it's ready, you'll receive a notification with a download link. The link will remain active for one day.
>

```diff
+ดาวน์โหลด
```

#### [`flarum-gdpr.lib.request_data.title`](https://weblate.rob006.net/translate/flarum2/flarum-gdpr/th/?q=context%3A%3D%22flarum-gdpr.lib.request_data.title%22)

> Request data for {username}

```diff
+ชื่อ
```


### `flarum-nicknames` (missing)

#### [`flarum-nicknames.admin.permissions.edit_own_nickname_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.permissions.edit_own_nickname_label%22)

> Edit own nickname

```diff
+แก้ไข
```

#### [`flarum-nicknames.admin.settings.max_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.max_label%22)

> Maximum nickname length

```diff
+ชื่อ
```

#### [`flarum-nicknames.admin.settings.min_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.min_label%22)

> Minimum nickname length

```diff
+ชื่อ
```

#### [`flarum-nicknames.admin.settings.random_username_help`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_help%22)

> This will hide the \`username\` input on registration, and use a random number instead. It will also make the \`nickname\` field mandatory. This will only take effect if "Allow setting nicknames on registration" is enabled.

```diff
+ซ่อน
```

#### [`flarum-nicknames.admin.settings.random_username_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.random_username_label%22)

> Randomize Usernames

```diff
+ชื่อ
```

#### [`flarum-nicknames.admin.settings.regex_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.regex_label%22)

> Regular expression for validation

```diff
+regular expression for validation
```

#### [`flarum-nicknames.admin.settings.set_on_registration_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.set_on_registration_label%22)

> Allow setting nicknames on registration

```diff
+ชื่อ
```

#### [`flarum-nicknames.admin.settings.unique_label`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.settings.unique_label%22)

> Require unique nicknames

```diff
+ชื่อ
```

#### [`flarum-nicknames.admin.wrong_driver`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.admin.wrong_driver%22)

> You must select "nickname" as the display name driver on the &lt;a&gt;&lt;strong&gt;Basics Page&lt;/strong&gt;&lt;/a&gt; for this extension to take effect.

```diff
+เลือก
```

#### [`flarum-nicknames.api.invalid_nickname_message`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.api.invalid_nickname_message%22)

> This nickname is invalid. Please contact your forum administrator for more information on nickname rules.

```diff
+ชื่อ
```

#### [`flarum-nicknames.ref.change_nickname`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.ref.change_nickname%22)

> Change Nickname

```diff
+ชื่อ
```

#### [`flarum-nicknames.ref.nickname`](https://weblate.rob006.net/translate/flarum2/flarum-nicknames/th/?q=context%3A%3D%22flarum-nicknames.ref.nickname%22)

> Nickname

```diff
+ชื่อ
```


### `flectar-turnstile` (missing)

#### [`flectar-turnstile.admin.settings.help_text`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22flectar-turnstile.admin.settings.help_text%22)

> Generate Turnstile keys on your Cloudflare account &lt;a&gt;here&lt;/a&gt;.

```diff
+บัญชี
```

#### [`flectar-turnstile.admin.settings.secret_key`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22flectar-turnstile.admin.settings.secret_key%22)

> Secret key

```diff
+secret key
```

#### [`flectar-turnstile.admin.settings.site_key`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22flectar-turnstile.admin.settings.site_key%22)

> Site key

```diff
+site key
```

#### [`flectar-turnstile.forum.error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22flectar-turnstile.forum.error%22)

> An error occurred while verifying you are human. Please try again.

```diff
+ยืนยัน
```

#### [`flectar-turnstile.forum.not_loaded_error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22flectar-turnstile.forum.not_loaded_error%22)

> Failed to load Cloudflare Turnstile. Please refresh the page, and check your adblocker.

```diff
+รีเฟรช
```

#### [`flectar-turnstile.forum.validation_error`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22flectar-turnstile.forum.validation_error%22)

> Please complete the Turnstile challenge.

```diff
+ทั้งหมด
```

#### [`validation.turnstile`](https://weblate.rob006.net/translate/flarum2/flectar-turnstile/th/?q=context%3A%3D%22validation.turnstile%22)

> We couldn't verify if you're a robot or not. Please refresh the page and try again.

```diff
+รีเฟรช
```


### `fof-sentry` (missing)

#### [`fof-sentry.admin.settings.db_n_plus_one_detection_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_detection_help%22)

> Automatically detect N+1 query problems by tracking repeated query patterns. N+1 queries occur when code executes the same query multiple times in a loop instead of using proper joins or eager loading. Helps identify significant performance bottlenecks.

```diff
+ตรวจจับปัญหา N+1 query อัตโนมัติโดยติดตาม query ที่ซ้ำกัน ช่วยระบุ bottleneck ประสิทธิภาพสำคัญ
```

#### [`fof-sentry.admin.settings.db_n_plus_one_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.db_n_plus_one_threshold_help%22)

> Number of times a query pattern must repeat to be flagged as a potential N+1 issue. Sensitivity levels: 5-10 (aggressive, may have false positives), 10-20 (balanced, recommended), 20+ (conservative, only flags severe issues). Default: 10.

```diff
+จำนวนครั้งที่ query ต้องซ้ำเพื่อถือว่าเป็น N+1 แนะนำ 10-20 (สมดุล) ค่าเริ่มต้น: 10
```

#### [`fof-sentry.admin.settings.db_query_sample_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.db_query_sample_rate_help%22)

> Percentage of database queries to track in performance monitoring (0-100%). Impact levels: 100% (track all queries, maximum visibility, higher overhead), 50% (track half, balanced), 10-25% (track subset, lower overhead, still catches issues), 0% (track only slow queries, minimum overhead). Note: Slow queries (above threshold) are ALWAYS tracked regardless of this setting. Recommendation: Use 10-25% on high-traffic sites to reduce performance impact and Sentry data costs.

```diff
+เปอร์เซ็นต์ของ database query ที่จะติดตาม (0-100%) Query ที่ช้ากว่าเกณฑ์จะถูกติดตามเสมอไม่ว่าจะตั้งค่าเท่าใด แนะนำ: 10-25% บนเว็บไซต์ที่มีผู้ใช้งานมาก
```

#### [`fof-sentry.admin.settings.db_slow_query_threshold_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.db_slow_query_threshold_help%22)

> Queries taking longer than this threshold (in milliseconds) are flagged as slow and automatically tracked regardless of sample rate. Severity levels: Medium (1-2× threshold), High (2-5× threshold), Critical (5×+ threshold). Default: 1000ms (1 second). Lower to 500ms for more aggressive detection.

```diff
+Query ที่ใช้เวลานานกว่าเกณฑ์นี้จะถูกบันทึกโดยอัตโนมัติ ระดับความรุนแรง: ปานกลาง (1-2×), สูง (2-5×), วิกฤต (5×+) ค่าเริ่มต้น: 1000ms
```

#### [`fof-sentry.admin.settings.db_track_bindings_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.db_track_bindings_help%22)

> Include actual parameter values in query tracking (e.g., "SELECT \* FROM users WHERE id = 123" instead of "SELECT \* FROM users WHERE id = ?"). Benefits: See exact values causing slow queries and identify problematic data patterns. Security &amp; Privacy Warning: May expose sensitive user data in Sentry. Passwords and hashes (32+ hex chars) are automatically masked. Long strings (100+ chars) are truncated. Review your privacy policy before enabling. Recommendation: Enable only in staging/development, disable in production.

```diff
+รวมค่า parameter จริงในการติดตาม query เช่น "WHERE id = 123" แทน "WHERE id = ?" คำเตือน: อาจเปิดเผยข้อมูลผู้ใช้ที่ละเอียดอ่อน รหัสผ่านและค่า hash จะถูกซ่อนอัตโนมัติ แนะนำ: เปิดใช้เฉพาะใน staging/development
```

#### [`fof-sentry.admin.settings.monitor_performance_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.monitor_performance_help%22)

> Percentage of backend requests to trace (0 = disabled, 100 = trace all). Performance traces include request/response time, database queries, and extension loading times. Recommendation: Start with 10-25% in production, 100% in staging. Lower values reduce data volume and Sentry costs.

```diff
+เปอร์เซ็นต์ของ request backend ที่จะติดตาม (0 = ปิด, 100 = ติดตามทั้งหมด) แนะนำ: เริ่มที่ 10-25% ใน production และ 100% ใน staging
```

#### [`fof-sentry.admin.settings.profile_rate_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.profile_rate_help%22)

> Percentage of traced transactions to profile (relative to monitoring rate above). Example: If monitoring = 10% and profiling = 50%, then 5% of all requests are profiled. Profiling provides detailed function-level performance data. Performance impact: Profiling adds overhead and increases response time. See &lt;a&gt;Sentry's optimization guide&lt;/a&gt;. {icon} &lt;bold&gt;Requires Excimer extension (Linux only). Currently {icon}.&lt;/bold&gt;

```diff
+เปอร์เซ็นต์ของ transaction ที่ติดตามและทำ profiling (สัมพัทธ์กับอัตราด้านบน) เช่น ถ้า monitoring = 10% และ profiling = 50% จะ profile คำขอ 5% ทั้งหมด {icon} <bold>ต้องการส่วนขยาย Excimer (Linux เท่านั้น) สถานะปัจจุบัน: {icon}</bold>
```

#### [`fof-sentry.admin.settings.user_feedback_help`](https://weblate.rob006.net/translate/flarum2/fof-sentry/th/?q=context%3A%3D%22fof-sentry.admin.settings.user_feedback_help%22)

> When enabled, users see a feedback form after encountering an error, allowing them to describe what happened. The form pre-fills with their username, email (if enabled), and group membership. Creates a direct communication channel with users experiencing issues. Requires a direct Sentry DSN (not a Relay DSN).

```diff
+เมื่อเปิดใช้งาน ผู้ใช้จะเห็นแบบฟอร์มข้อเสนอแนะเมื่อพบข้อผิดพลาด โดยข้อมูลชื่อผู้ใช้ อีเมล และกลุ่มจะถูกกรอกล่วงหน้า ต้องใช้ Sentry DSN โดยตรง (ไม่ใช่ Relay DSN)
```


### `fof-upload` (missing)

#### [`fof-upload.admin.labels.svg-sanitizer.help`](https://weblate.rob006.net/translate/flarum2/fof-upload/th/?q=context%3A%3D%22fof-upload.admin.labels.svg-sanitizer.help%22)

> Configure how SVG files are processed and sanitized when uploaded. SVG files can contain potentially harmful scripts and should be handled carefully. Uploaded SVGs are sanitized on upload and harmful scripts and tags are removed.

```diff
+กำหนดวิธีประมวลผลและทำความสะอาดไฟล์ SVG เมื่ออัปโหลด ไฟล์ SVG อาจมีสคริปต์อันตรายและควรจัดการอย่างระมัดระวัง
```


### `huoxin-filter-rule-manager` (missing)

#### [`huoxin-filter-rule-manager.admin.ruleset_custom_title_help`](https://weblate.rob006.net/translate/flarum2/huoxin-filter-rule-manager/th/?q=context%3A%3D%22huoxin-filter-rule-manager.admin.ruleset_custom_title_help%22)

> Optional. Overrides the default translated title for modals and toasts. Use '{{ token }}' to interpolate values returned by rules. Token values are HTML-escaped automatically; the title itself is rendered trusted so you can use simple HTML like '&lt;br&gt;'. Supports translation keys.

```diff
+ไม่บังคับ ใช้แทนหัวข้อเริ่มต้นที่แปลแล้วสำหรับ modal และ toast
```


### `ianm-follow-users` (missing)

#### [`flarum-gdpr.lib.data.followuser.delete_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/th/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.delete_description%22)

> Deletes all data related to following users.

```diff
+ลบ
```

#### [`flarum-gdpr.lib.data.followuser.export_description`](https://weblate.rob006.net/translate/flarum2/ianm-follow-users/th/?q=context%3A%3D%22flarum-gdpr.lib.data.followuser.export_description%22)

> Exports details of users followed and users following.

```diff
+ส่งออก
```


### `ianm-log-viewer` (missing)

#### [`ianm-log-viewer.admin.permissions.access_logfile_api`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.permissions.access_logfile_api%22)

> View and manage logfiles

```diff
+ดู
```

#### [`ianm-log-viewer.admin.settings.max-file-size`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size%22)

> Maximum Log File Size (MB)

```diff
+ไฟล์
```

#### [`ianm-log-viewer.admin.settings.max-file-size-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.settings.max-file-size-help%22)

> If a log file exceeds this size, it will be split into multiple parts. Set to 0 to disable splitting. Default is 1MB. Maximum allowable size is 150MB.

```diff
+ปิดใช้งาน
```

#### [`ianm-log-viewer.admin.settings.purge-days`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.settings.purge-days%22)

> Purge logfiles after days

```diff
+ไฟล์
```

#### [`ianm-log-viewer.admin.settings.purge-days-help`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.settings.purge-days-help%22)

> Relies on the Flarum scheduler being active. 0 for disabled.

```diff
+ปิดใช้งาน
```

#### [`ianm-log-viewer.admin.viewer.available_logs_heading`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.available_logs_heading%22)

> Available files

```diff
+ไฟล์
```

#### [`ianm-log-viewer.admin.viewer.confirm_delete`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.confirm_delete%22)

> Are you sure you want to delete this log file? This action cannot be undone.

```diff
+ลบ
```

#### [`ianm-log-viewer.admin.viewer.delete_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.delete_log%22)

> Delete log file

```diff
+ลบ
```

#### [`ianm-log-viewer.admin.viewer.download_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.download_log%22)

> Download log file

```diff
+ดาวน์โหลด
```

#### [`ianm-log-viewer.admin.viewer.file_contents_heading`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.file_contents_heading%22)

> File contents

```diff
+เนื้อหา
```

#### [`ianm-log-viewer.admin.viewer.last_updated`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.last_updated%22)

> Last updated: {updated}

```diff
+อัปเดต
```

#### [`ianm-log-viewer.admin.viewer.no_file_selected`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.no_file_selected%22)

> Select a log file to view its content.

```diff
+ดู
```

#### [`ianm-log-viewer.admin.viewer.view_log`](https://weblate.rob006.net/translate/flarum2/ianm-log-viewer/th/?q=context%3A%3D%22ianm-log-viewer.admin.viewer.view_log%22)

> View log file

```diff
+ดู
```

<!-- {% endraw %} -->
