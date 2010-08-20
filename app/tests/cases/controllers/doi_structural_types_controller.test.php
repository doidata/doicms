<?php 
/* SVN FILE: $Id$ */
/* DoiStructuralTypesController Test cases generated on: 2009-09-21 16:09:47 : 1253538587*/
App::import('Controller', 'DoiStructuralTypes');

class TestDoiStructuralTypes extends DoiStructuralTypesController {
	var $autoRender = false;
}

class DoiStructuralTypesControllerTest extends CakeTestCase {
	var $DoiStructuralTypes = null;

	function setUp() {
		$this->DoiStructuralTypes = new TestDoiStructuralTypes();
		$this->DoiStructuralTypes->constructClasses();
	}

	function testDoiStructuralTypesControllerInstance() {
		$this->assertTrue(is_a($this->DoiStructuralTypes, 'DoiStructuralTypesController'));
	}

	function tearDown() {
		unset($this->DoiStructuralTypes);
	}
}
?>