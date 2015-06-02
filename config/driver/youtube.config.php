<?php
/**
 * NOVIUS
 *
 * @copyright  2014 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius.com
 */

return array(
	'name'		=> __('Youtube'),
	'icon'		=> array(
		'16' => 'youtube.jpg',
	),
    'api'       => array(
        'host'      => 'www.youtube.com',
        'path'      => '/oembed',
    ),
);
