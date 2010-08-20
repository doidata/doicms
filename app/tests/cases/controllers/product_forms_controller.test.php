<?php 
/* SVN FILE: $Id$ */
/* ProductFormsController Test cases generated on: 2009-09-21 16:09:45 : 1253539005*/
App::import('Controller', 'ProductForms');

class TestProductForms extends ProductFormsController {
	var $autoRender = false;
}

class ProductFormsControllerTest extends CakeTestCase {
	var $ProductForms = null;

	function setUp() {
		$this->ProductForms = new TestProductForms();
		$this->ProductForms->constructClasses();
	}

	function testProductFormsControllerInstance() {
		$this->assertTrue(is_a($this->ProductForms, 'ProductFormsController'));
	}

	function tearDown() {
		unset($this->ProductForms);
	}
}
?>