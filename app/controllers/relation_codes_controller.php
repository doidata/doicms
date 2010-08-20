<?php
class RelationCodesController extends AppController {

	var $name = 'RelationCodes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->RelationCode->recursive = 0;
		$this->set('relationCodes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RelationCode.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('relationCode', $this->RelationCode->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RelationCode->create();
			if ($this->RelationCode->save($this->data)) {
				$this->Session->setFlash(__('The RelationCode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationCode could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RelationCode', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RelationCode->save($this->data)) {
				$this->Session->setFlash(__('The RelationCode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationCode could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RelationCode->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RelationCode', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RelationCode->del($id)) {
			$this->Session->setFlash(__('RelationCode deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->RelationCode->recursive = 0;
		$this->set('relationCodes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RelationCode.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('relationCode', $this->RelationCode->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RelationCode->create();
			if ($this->RelationCode->save($this->data)) {
				$this->Session->setFlash(__('The RelationCode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationCode could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RelationCode', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RelationCode->save($this->data)) {
				$this->Session->setFlash(__('The RelationCode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationCode could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RelationCode->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RelationCode', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RelationCode->del($id)) {
			$this->Session->setFlash(__('RelationCode deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>