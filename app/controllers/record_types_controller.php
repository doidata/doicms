<?php
class RecordTypesController extends AppController {

	var $name = 'RecordTypes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->RecordType->recursive = 0;
		$this->set('recordTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RecordType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('recordType', $this->RecordType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RecordType->create();
			if ($this->RecordType->save($this->data)) {
				$this->Session->setFlash(__('The RecordType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RecordType could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RecordType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RecordType->save($this->data)) {
				$this->Session->setFlash(__('The RecordType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RecordType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RecordType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RecordType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RecordType->del($id)) {
			$this->Session->setFlash(__('RecordType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->RecordType->recursive = 0;
		$this->set('recordTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RecordType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('recordType', $this->RecordType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RecordType->create();
			if ($this->RecordType->save($this->data)) {
				$this->Session->setFlash(__('The RecordType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RecordType could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RecordType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RecordType->save($this->data)) {
				$this->Session->setFlash(__('The RecordType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RecordType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RecordType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RecordType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RecordType->del($id)) {
			$this->Session->setFlash(__('RecordType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>