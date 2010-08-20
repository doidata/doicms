<?php 
/* SVN FILE: $Id$ */
/* RelationCodesController Test cases generated on: 2009-09-21 16:09:38 : 1253539238*/
App::import('Controller', 'RelationCodes');

class TestRelationCodes extends RelationCodesController {
	var $autoRender = false;
}

class RelationCodesControllerTest extends CakeTestCase {
	var $RelationCodes = null;

	function setUp() {
		$this->RelationCodes = new TestRelationCodes();
		$this->RelationCodes->constructClasses();
	}

	function testRelationCodesControllerInstance() {
		$this->assertTrue(is_a($this->RelationCodes, 'RelationCodesController'));
	}

	function tearDown() {
		unset($this->RelationCodes);
	}
}
?>