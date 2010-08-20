<?php 
/* SVN FILE: $Id$ */
/* NotificationTypesController Test cases generated on: 2009-09-21 16:09:13 : 1253538973*/
App::import('Controller', 'NotificationTypes');

class TestNotificationTypes extends NotificationTypesController {
	var $autoRender = false;
}

class NotificationTypesControllerTest extends CakeTestCase {
	var $NotificationTypes = null;

	function setUp() {
		$this->NotificationTypes = new TestNotificationTypes();
		$this->NotificationTypes->constructClasses();
	}

	function testNotificationTypesControllerInstance() {
		$this->assertTrue(is_a($this->NotificationTypes, 'NotificationTypesController'));
	}

	function tearDown() {
		unset($this->NotificationTypes);
	}
}
?>