<?php
class ImprintNamesController extends AppController {

	var $name = 'ImprintNames';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ImprintName->recursive = 0;
		$this->set('imprintNames', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ImprintName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('imprintName', $this->ImprintName->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ImprintName->create();
			if ($this->ImprintName->save($this->data)) {
				$this->Session->setFlash(__('The ImprintName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ImprintName could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ImprintName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ImprintName->save($this->data)) {
				$this->Session->setFlash(__('The ImprintName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ImprintName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ImprintName->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ImprintName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ImprintName->del($id)) {
			$this->Session->setFlash(__('ImprintName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->ImprintName->recursive = 0;
		$this->set('imprintNames', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ImprintName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('imprintName', $this->ImprintName->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ImprintName->create();
			if ($this->ImprintName->save($this->data)) {
				$this->Session->setFlash(__('The ImprintName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ImprintName could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ImprintName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ImprintName->save($this->data)) {
				$this->Session->setFlash(__('The ImprintName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ImprintName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ImprintName->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ImprintName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ImprintName->del($id)) {
			$this->Session->setFlash(__('ImprintName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>