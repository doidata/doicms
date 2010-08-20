<?php
class ContributorRolesController extends AppController {

	var $name = 'ContributorRoles';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ContributorRole->recursive = 0;
		$this->set('contributorRoles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ContributorRole.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contributorRole', $this->ContributorRole->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ContributorRole->create();
			if ($this->ContributorRole->save($this->data)) {
				$this->Session->setFlash(__('The ContributorRole has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorRole could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ContributorRole', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContributorRole->save($this->data)) {
				$this->Session->setFlash(__('The ContributorRole has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorRole could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContributorRole->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ContributorRole', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContributorRole->del($id)) {
			$this->Session->setFlash(__('ContributorRole deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->ContributorRole->recursive = 0;
		$this->set('contributorRoles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ContributorRole.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contributorRole', $this->ContributorRole->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ContributorRole->create();
			if ($this->ContributorRole->save($this->data)) {
				$this->Session->setFlash(__('The ContributorRole has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorRole could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ContributorRole', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContributorRole->save($this->data)) {
				$this->Session->setFlash(__('The ContributorRole has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorRole could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContributorRole->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ContributorRole', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContributorRole->del($id)) {
			$this->Session->setFlash(__('ContributorRole deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>