<?php
/* SVN FILE: $Id: app_controller.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Short description for class.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	var $components = array('Session');
	var $helpers=array('MyPaginate','Text');
	var $allowedActions=array('index','view','doi_codes','display','owner','search');
	function beforeFilter(){
		#log in the admin
		if(isset($this->data['admin']['credentials']))
			if($this->data['admin']['credentials']==Configure::read('Admin.Username')
				&& $this->data['admin']['pw']==Configure::read('Admin.Password'))
				$this->Session->write('admin',1);
			else
				$this->Session->write('admin',0);
		#or log him out!
		if(isset($this->data['admin']['logout']) && $this->data['admin']['logout']){
				$this->Session->write('admin',0);
				$this->redirect(array('controller'=>'pages','action'=>'index','admin'=>false));
			}
		if(!$this->Session->read('admin'))
			if(!in_array($this->action,$this->allowedActions)){
				$this->flash('You are not allowed to access this page','/');
				//$this->redirect(array('controller'=>'pages','action'=>'display'));
			}
		if($this->action=='admin_view')
			$this->setAction('view',$this->params['pass']);
		elseif($this->action=='admin_doi_codes')
			$this->setAction('doi_codes',$this->params['pass']);

	}

}
?>