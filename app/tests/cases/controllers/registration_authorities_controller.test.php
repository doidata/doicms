<?php 
/* SVN FILE: $Id$ */
/* RegistrationAuthoritiesController Test cases generated on: 2009-09-21 16:09:34 : 1253539414*/
App::import('Controller', 'RegistrationAuthorities');

class TestRegistrationAuthorities extends RegistrationAuthoritiesController {
	var $autoRender = false;
}

class RegistrationAuthoritiesControllerTest extends CakeTestCase {
	var $RegistrationAuthorities = null;

	function setUp() {
		$this->RegistrationAuthorities = new TestRegistrationAuthorities();
		$this->RegistrationAuthorities->constructClasses();
	}

	function testRegistrationAuthoritiesControllerInstance() {
		$this->assertTrue(is_a($this->RegistrationAuthorities, 'RegistrationAuthoritiesController'));
	}

	function tearDown() {
		unset($this->RegistrationAuthorities);
	}
}
?>