<?php

/*
 * This file is part of the flarum-components.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
	'repository' => 'git@github.com:rob006-software/flarum-translations.git',
	'dir' => __DIR__,
	'sourcesDir' => __DIR__ . '/sources',
	'translationsDir' => __DIR__ . '/translations',
	'projects' => [
		'flarum' => require __DIR__ . '/config/flarum.php',
		'fof' => require __DIR__ . '/config/fof.php',
		'various' => require __DIR__ . '/config/various.php',
	],
	'languages' => [
		'pl',
		'fr',
	],
	'subsplits' => [
		'pl' => [
			'repository' => 'git@github.com:rob006-software/flarum-lang-polish.git',
			'branch' => 'master',
			'path' => '/locale',
		],
	],
];
