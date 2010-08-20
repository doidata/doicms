<?php
class NotificationTypesController extends AppController {

	var $name = 'NotificationTypes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->NotificationType->recursive = 0;
		$this->set('notificationTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid NotificationType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('notificationType', $this->NotificationType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->NotificationType->create();
			if ($this->NotificationType->save($this->data)) {
				$this->Session->setFlash(__('The NotificationType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The NotificationType could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid NotificationType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->NotificationType->save($this->data)) {
				$this->Session->setFlash(__('The NotificationType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The NotificationType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NotificationType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for NotificationType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->NotificationType->del($id)) {
			$this->Session->setFlash(__('NotificationType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->NotificationType->recursive = 0;
		$this->set('notificationTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid NotificationType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('notificationType', $this->NotificationType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->NotificationType->create();
			if ($this->NotificationType->save($this->data)) {
				$this->Session->setFlash(__('The NotificationType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The NotificationType could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid NotificationType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->NotificationType->save($this->data)) {
				$this->Session->setFlash(__('The NotificationType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The NotificationType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->NotificationType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for NotificationType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->NotificationType->del($id)) {
			$this->Session->setFlash(__('NotificationType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>