<?php
/**
 * Individuality ( framework.php )
 *
 * This file is used to create a new framework instance and adds specific features to the theme.
 *
 * @package     Individuality
 * @copyright   Copyright (C) 2019-2020. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Create a new framework instance
 *
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$individuality = Benlumia007\Backdrop\Framework::get_instance();

$individuality->menus = new Benlumia007\Backdrop\Menu\Menu(
	$args = [
		'primary' => esc_html__( 'Primary Navigation', 'individuality' ),
		'social' => esc_html__( 'Social Navigation', 'individuality' ),
	]
);

$individuality->sidebars = new Benlumia007\Backdrop\Sidebar\Sidebar(
	$args = [
		'primary' => [
			'name' => esc_html__( 'Primary Sidebar', 'individuality' ),
			'desc' => esc_html__( 'Test', 'individuality' ),
		],
	]
);