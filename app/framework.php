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
$individuality = new Benlumia007\Backdrop\Framework();

/**
 * Register Service Provider with the Framework
 */
$individuality->provider( Individuality\Menu\Provider::class );
$individuality->provider( Individuality\Sidebar\Provider::class );

$individuality->boot();