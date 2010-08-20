<?php 
/* SVN FILE: $Id$ */
/* SeriesIdentifiersController Test cases generated on: 2009-09-21 16:09:29 : 1253538929*/
App::import('Controller', 'SeriesIdentifiers');

class TestSeriesIdentifiers extends SeriesIdentifiersController {
	var $autoRender = false;
}

class SeriesIdentifiersControllerTest extends CakeTestCase {
	var $SeriesIdentifiers = null;

	function setUp() {
		$this->SeriesIdentifiers = new TestSeriesIdentifiers();
		$this->SeriesIdentifiers->constructClasses();
	}

	function testSeriesIdentifiersControllerInstance() {
		$this->assertTrue(is_a($this->SeriesIdentifiers, 'SeriesIdentifiersController'));
	}

	function tearDown() {
		unset($this->SeriesIdentifiers);
	}
}
?>