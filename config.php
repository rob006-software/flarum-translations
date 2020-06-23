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

require __DIR__ . '/utils/helpers.php';

return [
	'dir' => __DIR__,
	'sourcesDir' => __DIR__ . '/sources',
	'translationsDir' => __DIR__ . '/translations',
	'components' => require __DIR__ . '/config/components.php',
	'languages' => require __DIR__ . '/config/languages.php',
	'subsplits' => require __DIR__ . '/config/subsplits.php',
	'vendors' => require __DIR__ . '/config/vendors.php',
	'supportedVersions' => [
		'0.1.0-beta.8',
		'0.1.0-beta-8',
		'0.1.0-beta.9',
		'0.1.0-beta.10',
		'0.1.0-beta.11',
		'0.1.0-beta.12',
		'0.1.0-beta.13',
	],
];
