<?php 
/* SVN FILE: $Id$ */
/* TitleTypesController Test cases generated on: 2009-09-21 16:09:30 : 1253539170*/
App::import('Controller', 'TitleTypes');

class TestTitleTypes extends TitleTypesController {
	var $autoRender = false;
}

class TitleTypesControllerTest extends CakeTestCase {
	var $TitleTypes = null;

	function setUp() {
		$this->TitleTypes = new TestTitleTypes();
		$this->TitleTypes->constructClasses();
	}

	function testTitleTypesControllerInstance() {
		$this->assertTrue(is_a($this->TitleTypes, 'TitleTypesController'));
	}

	function tearDown() {
		unset($this->TitleTypes);
	}
}
?>