<?php

/*
 * This file is part of the flarum-translations.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

$getProjectComponents = static function (string $projectId): array {
	$keys = array_keys(require __DIR__ . "/$projectId-project.php");
	return array_filter($keys, static function (string $key) {
		return strncmp($key, '__', 2) !== 0;
	});
};

return [
	'pl' => [
		'type' => 'language',
		'language' => 'pl',
		'updateReadme' => true,
		'repository' => 'git@github.com:rob006-software/flarum-lang-polish.git',
		'branch' => 'master',
		'path' => '/locale',
	],
	'tr-core' => [
		'type' => 'language',
		'language' => 'tr',
		'updateReadme' => true,
		'repository' => 'git@github.com:tolgaaaltas/flarum-lang-turkish.git',
		'branch' => 'collective',
		'path' => '/locale',
		'components' => [
			'flarum' => $getProjectComponents('flarum'),
		],
	],
	'tr-community' => [
		'type' => 'language',
		'language' => 'tr',
		'updateReadme' => true,
		'repository' => 'git@github.com:tolgaaaltas/flarum-ext-turkish.git',
		'branch' => 'collective',
		'path' => '/locale',
		'components' => [
			'fof' => $getProjectComponents('fof'),
			'various' => $getProjectComponents('various'),
		],
	],
];
