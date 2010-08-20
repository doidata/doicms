<?php 
/* SVN FILE: $Id$ */
/* ContributorRolesController Test cases generated on: 2009-09-21 16:09:02 : 1253538362*/
App::import('Controller', 'ContributorRoles');

class TestContributorRoles extends ContributorRolesController {
	var $autoRender = false;
}

class ContributorRolesControllerTest extends CakeTestCase {
	var $ContributorRoles = null;

	function setUp() {
		$this->ContributorRoles = new TestContributorRoles();
		$this->ContributorRoles->constructClasses();
	}

	function testContributorRolesControllerInstance() {
		$this->assertTrue(is_a($this->ContributorRoles, 'ContributorRolesController'));
	}

	function tearDown() {
		unset($this->ContributorRoles);
	}
}
?>