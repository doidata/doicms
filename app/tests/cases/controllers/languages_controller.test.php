<?php 
/* SVN FILE: $Id$ */
/* LanguagesController Test cases generated on: 2009-09-21 16:09:18 : 1253539338*/
App::import('Controller', 'Languages');

class TestLanguages extends LanguagesController {
	var $autoRender = false;
}

class LanguagesControllerTest extends CakeTestCase {
	var $Languages = null;

	function setUp() {
		$this->Languages = new TestLanguages();
		$this->Languages->constructClasses();
	}

	function testLanguagesControllerInstance() {
		$this->assertTrue(is_a($this->Languages, 'LanguagesController'));
	}

	function tearDown() {
		unset($this->Languages);
	}
}
?>