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

use app\components\release\PolishReleaseGenerator;
use function rob006\flarum\translations\helpers\getComponents;

return [
	'fr' => [
		'type' => 'language',
		'language' => 'fr',
		'repository' => 'git@github.com:qiaeru/lang-french.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'ja' => [
		'type' => 'language',
		'language' => 'ja',
		'repository' => 'git@github.com:FFans/lang-japanese.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'ka' => [
		'type' => 'language',
		'language' => 'ka',
		'repository' => 'git@github.com:B3K4682/lang-georgian.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'pl' => [
		'type' => 'language',
		'language' => 'pl',
		'releaseGenerator' => PolishReleaseGenerator::class,
		'repository' => 'git@github.com:rob006-software/flarum-lang-polish.git',
		'branch' => 'master',
		'path' => '/locale',
		'components' => getComponents([
			// do not export premium extensions for now - they're only partially translated and existing
			// translations need verification
			// @see https://github.com/rob006-software/flarum-lang-polish/issues/5
			'!datitisev-backup',
			'!datitisev-maintenance',
			'!kilowhat-custom-paths',
			'!kilowhat-formulaire',
			'!kilowhat-wordpress',
			'!kyrne-websocket',
			'!reflar-recache',
			'!reflar-webhooks-pro',
			'!v17development-support',
		]),
	],
	'tr-lang' => [
		'type' => 'language',
		'language' => 'tr',
		'repository' => 'git@github.com:tolgaaaltas/flarum-lang-turkish.git',
		'branch' => 'master',
		'path' => '/locale',
		'components' => getComponents([
			'core',
			'validation',
			'flarum-*',
		]),
	],
	'tr-ext' => [
		'type' => 'language',
		'language' => 'tr',
		'repository' => 'git@github.com:tolgaaaltas/flarum-ext-turkish.git',
		'branch' => 'master',
		'path' => '/locale',
		'components' => getComponents([
			'!core',
			'!validation',
			'!flarum-*',
			'*',
		]),
	],
	'zh_Hans' => [
		'type' => 'language',
		'language' => 'zh_Hans',
		'repository' => 'git@github.com:FFans/lang-simplified-chinese.git',
		'branch' => 'master',
		'path' => '/locale',
	],
];
