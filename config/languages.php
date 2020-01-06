<?php

/*
 * This file is part of the flarum-translations.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return (static function () {
	$getProjectComponents = static function (string $projectId, array $exceptions = []): array {
		$keys = array_keys(require __DIR__ . "/$projectId-project.php");
		return array_filter($keys, static function (string $key) use ($exceptions) {
			return strncmp($key, '__', 2) !== 0 && !in_array($key, $exceptions, true);
		});
	};

	return [
		'pl' => [
			'flarum' => $getProjectComponents('flarum'),
			'fof' => $getProjectComponents('fof'),
			'various' => $getProjectComponents('various'),
		],
		'tr' => [
			'flarum' => $getProjectComponents('flarum'),
			'fof' => $getProjectComponents('fof', [
				'core', // this is only a placeholder component - no need to translate it
			]),
			'various' => $getProjectComponents('various', [
				'core', // this is only a placeholder component - no need to translate it
			]),
		],
	];
})();
