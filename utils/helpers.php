<?php

/*
 * This file is part of the flarum-translations-builder.
 *
 * Copyright (c) 2020 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace rob006\flarum\translations\helpers;

use function array_filter;
use function array_keys;
use function strlen;
use function strncmp;
use function substr;

/**
 * @param string[] $rules List of rules to apply. Use `*` as a wildcard at the end of the rule to filter by prefix.
 * Use `!` as a prefix to disallow specified components (in other case rule will be treated as name of allowed component).
 * If any of rules will not have `!` as a prefix, rules will be treated as whitelist and you need to explicitly add `*`
 * as last rule to allow any non-specified component.
 * @return string[]
 */
function getComponents(array $rules = []): array {
	$keys = array_keys(require dirname(__DIR__) . '/config/components.php');
	if (empty($rules)) {
		return $keys;
	}
	return array_filter($keys, static function (string $key) use ($rules) {
		$default = true;
		foreach ($rules as $rule) {
			if ($rule[0] === '!') {
				$rule = substr($rule, 1);
				$allow = false;
			} else {
				$allow = true;
				// in case of whitelist of components, require explicit `*` as last rule to allow any non-specified
				// component
				$default = false;
			}

			if (
				$key === $rule || $rule === '*'
				|| (substr($rule, -1) === '*' && strncmp($key, $rule, strlen($rule) - 1) === 0)
			) {
				return $allow;
			}
		}

		return $default;
	});
}
