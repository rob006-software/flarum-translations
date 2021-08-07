<?php

/*
 * This file is part of the flarum-translations.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

use function rob006\flarum\translations\helpers\getComponents;

return [
	'ar' => getComponents([
		// translations included in extension
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'cs' => getComponents(),
	'de' => getComponents([
		// translations included in extension
		'!tpokorra-post-notification',
		'!v17development-seo',
	]),
	'es' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!jslirola-login2seeplus',
		'!malago-achievements',
		'!malago-ads',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'et' => getComponents(),
	'fa' => getComponents(),
	'fr' => getComponents([
		// translations included in extension
		'!antoinefr-money',
		'!antoinefr-online',
		'!clarkwinkelmann-create-user-modal',
		'!clarkwinkelmann-email-as-display-name',
		'!clarkwinkelmann-emojionearea',
		'!clarkwinkelmann-passwordless',
		'!tituspijean-auth-ldap',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'hi' => getComponents(),
	'hu' => getComponents(),
	'it' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!maicol07-sso',
		'!matteocontrini-imgur-upload',
	]),
	'ja' => getComponents(),
	'ka' => getComponents(),
	'lt' => getComponents(),
	'lv' => getComponents(),
	'ml' => getComponents(),
	'ms' => getComponents(),
	'nl' => getComponents([
		// translations included in extension
		'!v17development-seo',
	]),
	'pl' => getComponents(),
	'pt' => getComponents(),
	'pt_BR' => getComponents(),
	'si' => getComponents(),
	'sk' => getComponents(),
	'ta' => getComponents(),
	'te' => getComponents(),
	'th' => getComponents(),
	'tr' => getComponents([
		// translations included in extension
		// '!dem13n-topic-starter-label', https://github.com/Dem13n/topic-starter-label/pull/5
		'!glowingblue-password-strength',
		'!the-turk-diff',
		'!the-turk-fancybox',
		'!the-turk-mathren',
		'!the-turk-pallet-theme',
		'!the-turk-quiet-edits',
		'!the-turk-regrole',
	]),
	'zh_Hans' => getComponents(),
];
