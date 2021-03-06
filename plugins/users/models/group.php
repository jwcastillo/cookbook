<?php
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * Cake Bakery
 *
 * Copyright (c) 2006,	Cake Software Foundation, Inc.
 * 							1785 E. Sahara Avenue, Suite 490-204
 * 							Las Vegas, Nevada 89104
 *
 * Licensed under the CAKE SOFTWARE FOUNDATION LICENSE(CSFL) version 1.0
 * Redistributions of files must retain the above copyright notice.
 * You may not use this file except in compliance with the License.
 *
 * You may obtain a copy of the License at:
 * License page: http://www.cakefoundation.org/licenses/csfl/
 * Copyright page: http://www.cakefoundation.org/copyright/
 *
 * @filesource
 * @copyright     Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package       bakery
 * @subpackage    bakery.models
 * @since         Bakery v 1.0.0.0
 * @license       http://www.cakefoundation.org/licenses/csfl/  The CSFL License
 */

/**
 * Short description for file.
 *
 * Long description for file
 *
 * @package       bakery
 * @subpackage    bakery.models
 * @since         Bakery v 1.0.0.0
 *
 */
class Group extends UsersAppModel {

/**
 * name property
 *
 * @var string 'Group'
 * @access public
 */
	var $name = 'Group';

/**
 * validate property
 *
 * @var array
 * @access public
 */
	var $validate = array(
		'name' => 'notEmpty'
	);

/**
 * belongsTo property
 *
 * @var array
 * @access public
 */
	var $belongsTo = array(
		'Level' => array(
			'className' => 'Users.Level'
		)
	);

/**
 * hasMany property
 *
 * @var array
 * @access public
 */
	var $hasMany = array(
		'User' => array(
			'className' => 'Users.User'
		)
	);
}
?>