<?php 
/* SVN FILE: $Id$ */
/* DoiModesController Test cases generated on: 2009-09-21 16:09:05 : 1253538545*/
App::import('Controller', 'DoiModes');

class TestDoiModes extends DoiModesController {
	var $autoRender = false;
}

class DoiModesControllerTest extends CakeTestCase {
	var $DoiModes = null;

	function setUp() {
		$this->DoiModes = new TestDoiModes();
		$this->DoiModes->constructClasses();
	}

	function testDoiModesControllerInstance() {
		$this->assertTrue(is_a($this->DoiModes, 'DoiModesController'));
	}

	function tearDown() {
		unset($this->DoiModes);
	}
}
?>