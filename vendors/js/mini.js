<?php /* SVN FILE: $Id: mini.js 483 2008-10-29 10:12:11Z ad7six $ */
/**
 * mini.js is the entry point for concatonating, and optionally compressing, several js files into one response
 *
 * PHP version 5
 *
 * Copyright (c) 2008, Andy Dawson
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright (c) 2008, Andy Dawson
 * @link          www.ad7six.com
 * @package       base
 * @subpackage    base.vendors.js
 * @since         v 1.0
 * @version       $Revision: 483 $
 * @modifiedby    $LastChangedBy: ad7six $
 * @lastmodified  $Date: 2008-10-29 11:12:11 +0100 (Wed, 29 Oct 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
App::import('Vendor', 'MiCompressor');
list($_, $request) = explode('?', $_SERVER['REQUEST_URI']);
echo MiCompressor::serve($request, 'js'); return;
?>