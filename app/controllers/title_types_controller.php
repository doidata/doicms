<?php
class TitleTypesController extends AppController {

	var $name = 'TitleTypes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TitleType->recursive = 0;
		$this->set('titleTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TitleType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('titleType', $this->TitleType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TitleType->create();
			if ($this->TitleType->save($this->data)) {
				$this->Session->setFlash(__('The TitleType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleType could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TitleType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TitleType->save($this->data)) {
				$this->Session->setFlash(__('The TitleType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TitleType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TitleType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TitleType->del($id)) {
			$this->Session->setFlash(__('TitleType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->TitleType->recursive = 0;
		$this->set('titleTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TitleType.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('titleType', $this->TitleType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->TitleType->create();
			if ($this->TitleType->save($this->data)) {
				$this->Session->setFlash(__('The TitleType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleType could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TitleType', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TitleType->save($this->data)) {
				$this->Session->setFlash(__('The TitleType has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TitleType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TitleType', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TitleType->del($id)) {
			$this->Session->setFlash(__('TitleType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>