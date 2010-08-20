<?php 
/* SVN FILE: $Id$ */
/* PublicationCountriesController Test cases generated on: 2009-09-21 16:09:21 : 1253539041*/
App::import('Controller', 'PublicationCountries');

class TestPublicationCountries extends PublicationCountriesController {
	var $autoRender = false;
}

class PublicationCountriesControllerTest extends CakeTestCase {
	var $PublicationCountries = null;

	function setUp() {
		$this->PublicationCountries = new TestPublicationCountries();
		$this->PublicationCountries->constructClasses();
	}

	function testPublicationCountriesControllerInstance() {
		$this->assertTrue(is_a($this->PublicationCountries, 'PublicationCountriesController'));
	}

	function tearDown() {
		unset($this->PublicationCountries);
	}
}
?>