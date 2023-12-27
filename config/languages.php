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

use function rob006\flarum\translations\helpers\getComponents;

return [
	'af' => getComponents(),
	'ar' => getComponents([
		// translations included in extension
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'ast' => getComponents(),
	'az' => getComponents(),
	'be' => getComponents(),
	'bg' => getComponents(),
	'bn' => getComponents(),
	'br' => getComponents(),
	'ca' => getComponents(),
	'ckb' => getComponents(),
	'cs' => getComponents(),
	'cy' => getComponents(),
	'da' => getComponents(),
	'de' => getComponents([
		// translations included in extension
		'!archlinux-de-click-image',
		'!tpokorra-post-notification',
		'!v17development-seo',
		'!wolfgang-demeter-bbcode-5star-rating',
	]),
	'de@formal' => getComponents([
		// translations included in extension
		'!archlinux-de-click-image',
		'!tpokorra-post-notification',
		'!v17development-seo',
		'!wolfgang-demeter-bbcode-5star-rating',
	]),
	'el' => getComponents(),
	'eo' => getComponents(),
	'es' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!cadiducho-bbcode',
		'!jslirola-login2seeplus',
		'!malago-achievements',
		'!malago-ads',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'es@formal' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!cadiducho-bbcode',
		'!jslirola-login2seeplus',
		'!malago-achievements',
		'!malago-ads',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'es_AR' => getComponents(),
	'et' => getComponents(),
	'eu' => getComponents(),
	'fa' => getComponents(),
	'fi' => getComponents(),
	'fil' => getComponents(),
	'fr' => getComponents([
		// translations included in extension
		'!antoinefr-money',
		'!antoinefr-online',
		'!clarkwinkelmann-create-user-modal',
		'!clarkwinkelmann-email-as-display-name',
		'!clarkwinkelmann-emojionearea',
		'!clarkwinkelmann-passwordless',
		'!club-1-cross-references',
		'!club-1-server-side-highlight',
		'!kilowhat-formulaire',
		'!tituspijean-auth-ldap',
		// '!v17development-seo', https://github.com/v17development/flarum-seo/issues/61#issuecomment-855474306
	]),
	'ga' => getComponents(),
	'gl' => getComponents(),
	'he' => getComponents(),
	'hi' => getComponents(),
	'hr' => getComponents(),
	'hu' => getComponents(),
	'hy' => getComponents(),
	'id' => getComponents(),
	'is' => getComponents(),
	'it' => getComponents([
		// translations included in extension
		// '!clarkwinkelmann-emojionearea', https://github.com/clarkwinkelmann/flarum-ext-emojionearea/issues/28#issuecomment-855995493
		'!justoverclock-discussion-hero-showtags',
		'!justoverclock-thread-read-time',
		'!maicol07-sso',
		'!matteocontrini-imgur-upload',
	]),
	'ja' => getComponents(),
	'ka' => getComponents(),
	'kab' => getComponents(),
	'kk' => getComponents(),
	'km' => getComponents(),
	'kmr' => getComponents(),
	'kn' => getComponents(),
	'ko' => getComponents(),
	'lt' => getComponents(),
	'lv' => getComponents(),
	'mk' => getComponents(),
	'ml' => getComponents(),
	'mr' => getComponents(),
	'my' => getComponents(),
	'nb' => getComponents(),
	'ne' => getComponents(),
	'nl' => getComponents([
		// translations included in extension
		'!v17development-seo',
	]),
	'nn' => getComponents(),
	'oc' => getComponents(),
	'pa' => getComponents(),
	'pl' => getComponents([
		// translations included in extension
		'!rob006-last-post-avatar',
	]),
	'pt' => getComponents(),
	'pt_BR' => getComponents(),
	'ro' => getComponents(),
	'ru' => getComponents([
		// translations included in extension
		'!xelson-chat',
	]),
	'sc' => getComponents(),
	'si' => getComponents(),
	'sk' => getComponents(),
	'sl' => getComponents(),
	'sq' => getComponents(),
	'sr_Cyrl' => getComponents(),
	'sr_Latn' => getComponents(),
	'sv' => getComponents(),
	'ta' => getComponents(),
	'te' => getComponents(),
	'th' => getComponents(),
	'tk' => getComponents(),
	'tl' => getComponents(),
	'tok' => getComponents(),
	'tr' => getComponents([
		// translations included in extension
		// '!dem13n-topic-starter-label', https://github.com/Dem13n/topic-starter-label/pull/5
		'!glowingblue-password-strength',
		'!the-turk-diff',
		'!the-turk-fancybox',
		'!the-turk-mathren',
		'!the-turk-pallet-theme',
		'!the-turk-quiet-edits',
		'!the-turk-regrole',
	]),
	'ug' => getComponents(),
	'uk' => getComponents(),
	'ur' => getComponents(),
	'uz' => getComponents(),
	'vi' => getComponents([
		// translations included in extension
		'!litalino-adblock',
		'!litalino-blog-article-series',
		'!litalino-country-flags',
		'!litalino-geo-weather-widget',
		'!litalino-more-bbcode',
		'!xelson-chat',
	]),
	'zh_Hans' => getComponents([
		// translations included in extension
		'!gbcl-userip',
		'!imdong-spam-alert',
		'!imdong-visible-to-op-only',
		'!vlssu-cravatar',
		'!widayn-avatar-cropper',
		'!ziiven-fireworks',
		'!ziiven-money-leaderboard',
		'!ziiven-money-transfer',
		'!ziiven-view-history',
	]),
	'zh_Hant' => getComponents(),
];
