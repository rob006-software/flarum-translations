<?php

/*
 * This file is part of the flarum-translations.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/* @noinspection PhpUnusedAliasInspection */

declare(strict_types=1);

use app\components\release\PolishReleaseGenerator;
use app\components\release\ReleaseGenerator;

return [
	'ar' => [
		'type' => 'language',
		'language' => 'ar',
		'repository' => 'git@github.com:neerugupta/flarum-lang-arabic.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'az' => [
		'type' => 'language',
		'language' => 'az',
		'repository' => 'git@github.com:flarum-lang/azerbaijani.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'bn' => [
		'type' => 'language',
		'language' => 'bn',
		'repository' => 'git@github.com:flarum-lang/bengali.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'cs' => [
		'type' => 'language',
		'language' => 'cs',
		'repository' => 'git@github.com:madnest/flarum-lang-czech.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'da' => [
		'type' => 'language',
		'language' => 'da',
		'repository' => 'git@github.com:flarum-lang/danish.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'de' => [
		'type' => 'language',
		'language' => 'de',
		'repository' => 'git@github.com:flarum-lang/german.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'es' => [
		'type' => 'language',
		'language' => 'es',
		'repository' => 'git@github.com:flarum-lang/spanish.git',
		'branch' => 'main',
		'path' => '/locale/es-ES-informal',
	],
	'et' => [
		'type' => 'language',
		'language' => 'et',
		'repository' => 'git@github.com:aprold/flarum-lang-estonian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'fa' => [
		'type' => 'language',
		'language' => 'fa',
		'repository' => 'git@github.com:flarum-lang/persian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'fi' => [
		'type' => 'language',
		'language' => 'fi',
		'repository' => 'git@github.com:flarum-lang/finnish.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'fr' => [
		'type' => 'language',
		'language' => 'fr',
		'repository' => 'git@github.com:flarum-lang/french.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'he' => [
		'type' => 'language',
		'language' => 'he',
		'repository' => 'git@github.com:icecore2/Flarum-hebrew.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'hi' => [
		'type' => 'language',
		'language' => 'hi',
		'repository' => 'git@github.com:flarum-lang/hindi.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'hu' => [
		'type' => 'language',
		'language' => 'hu',
		'repository' => 'git@github.com:flarum-lang/hungarian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'it' => [
		'type' => 'language',
		'language' => 'it',
		'repository' => 'git@github.com:flarum-lang/italian.git',
		'branch' => 'main',
		'path' => '/locale',
		'releaseGenerator' => [
			'class' => ReleaseGenerator::class,
			'versionTemplate' => 'Major.Minor.Patch',
		],
		'maintainers' => ['justoverclockl'],
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
		'repository' => 'git@github.com:flarum-lang/georgian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'ko' => [
		'type' => 'language',
		'language' => 'ko',
		'repository' => 'git@github.com:flarum-lang/korean.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'lt' => [
		'type' => 'language',
		'language' => 'lt',
		'repository' => 'git@github.com:flarum-lang/lithuanian.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'lv' => [
		'type' => 'language',
		'language' => 'lv',
		'repository' => 'git@github.com:edevrob/flarum-lang-latvian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'ml' => [
		'type' => 'language',
		'language' => 'ml',
		'repository' => 'git@github.com:flarum-lang/malayalam.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'nl' => [
		'type' => 'language',
		'language' => 'nl',
		'repository' => 'git@github.com:flarum-lang/dutch.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'pl' => [
		'type' => 'language',
		'language' => 'pl',
		'repository' => 'git@github.com:rob006-software/flarum-lang-polish.git',
		'branch' => 'master',
		'path' => '/locale',
		'releaseGenerator' => [
			'class' => PolishReleaseGenerator::class,
			'versionTemplate' => 'v0.Major.Minor',
		],
		'maintainers' => ['rob006'],
	],
	'pt' => [
		'type' => 'language',
		'language' => 'pt',
		'repository' => 'git@github.com:flarum-lang/portuguese.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'pt_BR' => [
		'type' => 'language',
		'language' => 'pt_BR',
		'repository' => 'git@github.com:flarum-lang/brazilian.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'ru' => [
		'type' => 'language',
		'language' => 'ru',
		'repository' => 'git@github.com:flarum-lang/russian.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'si' => [
		'type' => 'language',
		'language' => 'si',
		'repository' => 'git@github.com:flarum-lang/sinhala.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'sk' => [
		'type' => 'language',
		'language' => 'sk',
		'repository' => 'git@github.com:flarum-lang/slovak.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'sr' => [
		'type' => 'language',
		'language' => 'sr',
		'repository' => 'git@github.com:bryantmilan/lang-serbian.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'sv' => [
		'type' => 'language',
		'language' => 'sv',
		'repository' => 'git@github.com:flarum-lang/swedish.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'ta' => [
		'type' => 'language',
		'language' => 'ta',
		'repository' => 'git@github.com:flarum-lang/tamil.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'te' => [
		'type' => 'language',
		'language' => 'te',
		'repository' => 'git@github.com:flarum-lang/telugu.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'th' => [
		'type' => 'language',
		'language' => 'th',
		'repository' => 'git@github.com:flarum-lang/thai.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'tr' => [
		'type' => 'language',
		'language' => 'tr',
		'repository' => 'git@github.com:flarum-lang/turkish.git',
		'branch' => 'main',
		'path' => '/locale',
	],
	'uz' => [
		'type' => 'language',
		'language' => 'uz',
		'repository' => 'git@github.com:flarum-lang/uzbek.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'vi' => [
		'type' => 'language',
		'language' => 'vi',
		'repository' => 'git@github.com:flarum-lang/vietnamese.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'zh_Hans' => [
		'type' => 'language',
		'language' => 'zh_Hans',
		'repository' => 'git@github.com:flarum-lang/chinese-simplified.git',
		'branch' => 'master',
		'path' => '/locale',
	],
];
