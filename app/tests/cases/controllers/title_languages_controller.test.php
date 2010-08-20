<?php 
/* SVN FILE: $Id$ */
/* TitleLanguagesController Test cases generated on: 2009-09-21 16:09:44 : 1253539364*/
App::import('Controller', 'TitleLanguages');

class TestTitleLanguages extends TitleLanguagesController {
	var $autoRender = false;
}

class TitleLanguagesControllerTest extends CakeTestCase {
	var $TitleLanguages = null;

	function setUp() {
		$this->TitleLanguages = new TestTitleLanguages();
		$this->TitleLanguages->constructClasses();
	}

	function testTitleLanguagesControllerInstance() {
		$this->assertTrue(is_a($this->TitleLanguages, 'TitleLanguagesController'));
	}

	function tearDown() {
		unset($this->TitleLanguages);
	}
}
?>