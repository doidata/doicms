<?php 
/* SVN FILE: $Id$ */
/* RelationIdentifiersController Test cases generated on: 2009-09-21 16:09:33 : 1253539293*/
App::import('Controller', 'RelationIdentifiers');

class TestRelationIdentifiers extends RelationIdentifiersController {
	var $autoRender = false;
}

class RelationIdentifiersControllerTest extends CakeTestCase {
	var $RelationIdentifiers = null;

	function setUp() {
		$this->RelationIdentifiers = new TestRelationIdentifiers();
		$this->RelationIdentifiers->constructClasses();
	}

	function testRelationIdentifiersControllerInstance() {
		$this->assertTrue(is_a($this->RelationIdentifiers, 'RelationIdentifiersController'));
	}

	function tearDown() {
		unset($this->RelationIdentifiers);
	}
}
?>