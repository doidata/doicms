<?php
class RegistrantNamesController extends AppController {

	var $name = 'RegistrantNames';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->RegistrantName->recursive = 0;
		$this->set('registrantNames', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RegistrantName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('registrantName', $this->RegistrantName->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RegistrantName->create();
			if ($this->RegistrantName->save($this->data)) {
				$this->Session->setFlash(__('The RegistrantName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrantName could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RegistrantName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RegistrantName->save($this->data)) {
				$this->Session->setFlash(__('The RegistrantName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrantName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RegistrantName->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RegistrantName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RegistrantName->del($id)) {
			$this->Session->setFlash(__('RegistrantName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->RegistrantName->recursive = 0;
		$this->set('registrantNames', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RegistrantName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('registrantName', $this->RegistrantName->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RegistrantName->create();
			if ($this->RegistrantName->save($this->data)) {
				$this->Session->setFlash(__('The RegistrantName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrantName could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RegistrantName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RegistrantName->save($this->data)) {
				$this->Session->setFlash(__('The RegistrantName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrantName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RegistrantName->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RegistrantName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RegistrantName->del($id)) {
			$this->Session->setFlash(__('RegistrantName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>