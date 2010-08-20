<?php 
/* SVN FILE: $Id$ */
/* AdditionalTitlesController Test cases generated on: 2009-06-12 21:06:23 : 1244834603*/
App::import('Controller', 'AdditionalTitles');

class TestAdditionalTitles extends AdditionalTitlesController {
	var $autoRender = false;
}

class AdditionalTitlesControllerTest extends CakeTestCase {
	var $AdditionalTitles = null;

	function setUp() {
		$this->AdditionalTitles = new TestAdditionalTitles();
		$this->AdditionalTitles->constructClasses();
	}

	function testAdditionalTitlesControllerInstance() {
		$this->assertTrue(is_a($this->AdditionalTitles, 'AdditionalTitlesController'));
	}

	function tearDown() {
		unset($this->AdditionalTitles);
	}
}
?>