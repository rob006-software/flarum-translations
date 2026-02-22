<?php

/*
 * This file is part of the flarum-translations-builder.
 *
 * Copyright (c) 2025 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

use app\components\inheritors\MergeInheritor;
use app\components\inheritors\SerbianCyrillicToLatinTranslationsInheritor;
use app\components\inheritors\TranslationsInheritor;

return [
	'1.x' => [
		'class' => MergeInheritor::class,
		'inheritFromLabel' => 'Flarum 1.x',
		'inheritFromBranch' => 'master',
		'inheritFromRepositoryPath' => __DIR__ . '/../translations/1.x',
	],
	'de@formal' => [
		'class' => TranslationsInheritor::class,
		'inheritFromLabel' => 'German informal variant',
		'inheritFromSources' => __DIR__ . '/../sources',
		'inheritFromTranslations' => __DIR__ . '/../translations/de',
		'inheritToSources' => __DIR__ . '/../sources',
		'inheritToTranslations' => __DIR__ . '/../translations/de@formal',
	],
	'es@formal' => [
		'class' => TranslationsInheritor::class,
		'inheritFromLabel' => 'Spanish informal variant',
		'inheritFromSources' => __DIR__ . '/../sources',
		'inheritFromTranslations' => __DIR__ . '/../translations/es',
		'inheritToSources' => __DIR__ . '/../sources',
		'inheritToTranslations' => __DIR__ . '/../translations/es@formal',
	],
	'sr_Latn' => [
		'class' => SerbianCyrillicToLatinTranslationsInheritor::class,
		'inheritFromLabel' => 'Serbian (Cyrillic)',
		'inheritFromSources' => __DIR__ . '/../sources',
		'inheritFromTranslations' => __DIR__ . '/../translations/sr_Cyrl',
		'inheritToSources' => __DIR__ . '/../sources',
		'inheritToTranslations' => __DIR__ . '/../translations/sr_Latn',
	],
];
