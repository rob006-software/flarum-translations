<?php

/*
 * This file is part of the flarum-translations.
 *
 * Copyright (c) 2019 Robert Korulczyk <robert@korulczyk.pl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
	'__weblateId' => 'flarum-extensions',
	// do not remove this component - it is used as main component in this project
	'core' => [
		'https://raw.githubusercontent.com/rob006-software/flarum-translations/master/placeholders/various.yml',
		'languages' => ['pl'], // this is only a placeholder - no need to really translate it
	],
	'migratetoflarum-canonical' => 'https://raw.githubusercontent.com/migratetoflarum/canonical/master/resources/locale/en.yml',
	// this extension does not follow naming conventions for translation files
	'flarum-best-answer' => 'https://raw.githubusercontent.com/wiwatsrt/flarum-ext-best-answer/master/locale/en.yml',
	'michaelbelgium-discussion-views' => 'https://raw.githubusercontent.com/MichaelBelgium/flarum-discussion-views/master/locale/en.yml',
	// @todo this should be moved to fof
	'flagrow-upload' => 'https://raw.githubusercontent.com/FriendsOfFlarum/upload/master/resources/locale/en.yml',
	// @todo this should be moved to fof
	'flagrow-linguist' => 'https://raw.githubusercontent.com/FriendsOfFlarum/linguist/master/resources/locale/en.yml',
];
