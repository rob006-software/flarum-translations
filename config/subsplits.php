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

return (static function () {
	$getProjectComponents = static function (string $projectId, array $exceptions = []): array {
		$keys = array_keys(require __DIR__ . "/$projectId-project.php");
		return array_filter($keys, static function (string $key) use ($exceptions) {
			return strncmp($key, '__', 2) !== 0 && !in_array($key, $exceptions, true);
		});
	};

	return [
		'pl' => [
			'type' => 'language',
			'language' => 'pl',
			'updateReadme' => true,
			'releaseGenerator' => PolishReleaseGenerator::class,
			'repository' => 'git@github.com:rob006-software/flarum-lang-polish.git',
			'branch' => 'master',
			'path' => '/locale',
			'components' => [
				'flarum' => $getProjectComponents('flarum'),
				'fof' => $getProjectComponents('fof'),
				'various' => $getProjectComponents('various', [
					// do not export premium extensions for now - they're only partially translated and existing
					// translations need verification
					// @see https://github.com/rob006-software/flarum-lang-polish/issues/5
					'datitisev-backup',
					'datitisev-maintenance',
					'kilowhat-custom-paths',
					'kilowhat-formulaire',
					'kilowhat-wordpress',
					'kyrne-websocket',
					'reflar-recache',
					'reflar-webhooks-pro',
					'v17development-support',
				]),
			],
		],
		'zh_Hans' => [
			'type' => 'language',
			'language' => 'zh_Hans',
			'updateReadme' => true,
			'repository' => 'git@github.com:Littlegolden/flarum-lang-simplified-chinese.git',
			'branch' => 'master',
			'path' => '/locale',
		],
	];
})();
