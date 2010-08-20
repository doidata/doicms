<?php 
/* SVN FILE: $Id$ */
/* ContributorsController Test cases generated on: 2009-09-21 16:09:00 : 1253538840*/
App::import('Controller', 'Contributors');

class TestContributors extends ContributorsController {
	var $autoRender = false;
}

class ContributorsControllerTest extends CakeTestCase {
	var $Contributors = null;

	function setUp() {
		$this->Contributors = new TestContributors();
		$this->Contributors->constructClasses();
	}

	function testContributorsControllerInstance() {
		$this->assertTrue(is_a($this->Contributors, 'ContributorsController'));
	}

	function tearDown() {
		unset($this->Contributors);
	}
}
?>