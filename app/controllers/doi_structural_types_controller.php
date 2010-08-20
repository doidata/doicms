<?php
class DoiStructuralTypesController extends AppController {

	var $name = 'DoiStructuralTypes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DoiStructuralType->recursive = 0;
		$this->set('doiStructuralTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DoiStructuralType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('doiStructuralType', $this->DoiStructuralType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DoiStructuralType->create();
			if ($this->DoiStructuralType->save($this->data)) {
				$this->Session->setFlash(__('The DoiStructuralType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiStructuralType could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DoiStructuralType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DoiStructuralType->save($this->data)) {
				$this->Session->setFlash(__('The DoiStructuralType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiStructuralType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DoiStructuralType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DoiStructuralType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DoiStructuralType->del($id)) {
			$this->Session->setFlash(__('DoiStructuralType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->DoiStructuralType->recursive = 0;
		$this->set('doiStructuralTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DoiStructuralType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('doiStructuralType', $this->DoiStructuralType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->DoiStructuralType->create();
			if ($this->DoiStructuralType->save($this->data)) {
				$this->Session->setFlash(__('The DoiStructuralType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiStructuralType could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DoiStructuralType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DoiStructuralType->save($this->data)) {
				$this->Session->setFlash(__('The DoiStructuralType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiStructuralType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DoiStructuralType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DoiStructuralType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DoiStructuralType->del($id)) {
			$this->Session->setFlash(__('DoiStructuralType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>