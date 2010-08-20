<?php 
/* SVN FILE: $Id$ */
/* RegistrantNamesController Test cases generated on: 2009-09-21 16:09:24 : 1253538264*/
App::import('Controller', 'RegistrantNames');

class TestRegistrantNames extends RegistrantNamesController {
	var $autoRender = false;
}

class RegistrantNamesControllerTest extends CakeTestCase {
	var $RegistrantNames = null;

	function setUp() {
		$this->RegistrantNames = new TestRegistrantNames();
		$this->RegistrantNames->constructClasses();
	}

	function testRegistrantNamesControllerInstance() {
		$this->assertTrue(is_a($this->RegistrantNames, 'RegistrantNamesController'));
	}

	function tearDown() {
		unset($this->RegistrantNames);
	}
}
?>