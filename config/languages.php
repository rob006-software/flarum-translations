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
	'cs' => getComponents(),
	'es' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!malago-achievements',
		'!malago-ads',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'et' => getComponents(),
	'fr' => getComponents([
		// translations included in extension
		'!antoinefr-money',
		'!antoinefr-online',
		'!clarkwinkelmann-create-user-modal',
		'!clarkwinkelmann-emojionearea',
		'!clarkwinkelmann-passwordless',
		'!tituspijean-auth-ldap',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'hi' => getComponents(),
	'it' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!maicol07-sso',
	]),
	'ja' => getComponents(),
	'ka' => getComponents(),
	'lt' => getComponents(),
	'lv' => getComponents(),
	'ml' => getComponents(),
	'nl' => getComponents([
		// translations included in extension
		'!v17development-seo',
	]),
	'pl' => getComponents(),
	'pt_BR' => getComponents(),
	'si' => getComponents(),
	'ta' => getComponents(),
	'te' => getComponents(),
	'tr' => getComponents([
		// translations included in extension
		'!the-turk-diff',
		'!the-turk-edit-notifications',
		'!the-turk-extended-appearance',
		'!the-turk-fancybox',
		'!the-turk-mathren',
		'!the-turk-password-strength',
		'!the-turk-pallet-theme',
		'!glowingblue-password-strength',
		'!the-turk-quiet-edits',
		'!the-turk-regrole',
		'!the-turk-stargazing-theme',
		'!the-turk-welcome-widgets',
		'!ianm-regrole',
		'!ianm-diff',
	]),
	'zh_Hans' => getComponents(),
];
