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
	'fr' => getComponents(),
	'ja' => getComponents(),
	'ka' => getComponents(),
	'pl' => getComponents(),
	'tr' => getComponents([
		// the-turk extensions have TR translations included
		// @see https://github.com/rob006-software/flarum-translations/issues/425
		'!the-turk-diff',
		'!the-turk-edit-notifications',
		'!the-turk-extended-appearance',
		'!the-turk-fancybox',
		'!the-turk-mathren',
		'!the-turk-password-strength',
		'!glowingblue-password-strength',
		'!the-turk-quiet-edits',
		'!the-turk-regrole',
		'!the-turk-stargazing-theme',
		'!the-turk-welcome-widgets',
		'!ianm-regrole',
	]),
	'zh_Hans' => getComponents(),
];
