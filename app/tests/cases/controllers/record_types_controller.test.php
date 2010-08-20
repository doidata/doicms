<?php 
/* SVN FILE: $Id$ */
/* RecordTypesController Test cases generated on: 2009-09-21 16:09:38 : 1253539118*/
App::import('Controller', 'RecordTypes');

class TestRecordTypes extends RecordTypesController {
	var $autoRender = false;
}

class RecordTypesControllerTest extends CakeTestCase {
	var $RecordTypes = null;

	function setUp() {
		$this->RecordTypes = new TestRecordTypes();
		$this->RecordTypes->constructClasses();
	}

	function testRecordTypesControllerInstance() {
		$this->assertTrue(is_a($this->RecordTypes, 'RecordTypesController'));
	}

	function tearDown() {
		unset($this->RecordTypes);
	}
}
?>