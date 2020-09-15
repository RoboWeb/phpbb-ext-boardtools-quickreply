<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2019 Tatiana5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// Translate according to plural rules.
	'NOTIFICATION_QUICKNICK' => array(
		1 => '<strong>Wspomniany</strong> przez %1$s w wiadomości:',
	),

	'NOTIFICATION_TYPE_QUICKNICK' => 'Ktoś wspomniał o Tobie w wiadomości',

	'QR_BBPOST' => 'Link do źródła',
));
