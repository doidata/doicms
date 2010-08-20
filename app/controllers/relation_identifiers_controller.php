<?php
class RelationIdentifiersController extends AppController {

	var $name = 'RelationIdentifiers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->RelationIdentifier->recursive = 0;
		$this->set('relationIdentifiers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RelationIdentifier.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('relationIdentifier', $this->RelationIdentifier->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RelationIdentifier->create();
			if ($this->RelationIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The RelationIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationIdentifier could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RelationIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RelationIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The RelationIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationIdentifier could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RelationIdentifier->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RelationIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RelationIdentifier->del($id)) {
			$this->Session->setFlash(__('RelationIdentifier deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->RelationIdentifier->recursive = 0;
		$this->set('relationIdentifiers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RelationIdentifier.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('relationIdentifier', $this->RelationIdentifier->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RelationIdentifier->create();
			if ($this->RelationIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The RelationIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationIdentifier could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RelationIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RelationIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The RelationIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RelationIdentifier could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RelationIdentifier->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RelationIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RelationIdentifier->del($id)) {
			$this->Session->setFlash(__('RelationIdentifier deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>