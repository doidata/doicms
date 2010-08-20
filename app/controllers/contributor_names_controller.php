<?php
class ContributorNamesController extends AppController {

	var $name = 'ContributorNames' ;
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ContributorName->recursive = 0;
		$this->set('contributorNames', $this->paginate());
	}

	function view($id = null) {
		$this->ContributorName->Behaviors->attach('Containable');
		$this->ContributorName->contain(array('Contributor' => array('Resource','ContributorRole')));
		if (!$id) {
			$this->Session->setFlash(__('Invalid ContributorName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contributorName', $this->ContributorName->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ContributorName->create();
			if ($this->ContributorName->save($this->data)) {
				$this->Session->setFlash(__('The ContributorName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorName could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ContributorName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContributorName->save($this->data)) {
				$this->Session->setFlash(__('The ContributorName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContributorName->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ContributorName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContributorName->del($id)) {
			$this->Session->setFlash(__('ContributorName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->ContributorName->recursive = 0;
		$this->set('contributorNames', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ContributorName.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contributorName', $this->ContributorName->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ContributorName->create();
			if ($this->ContributorName->save($this->data)) {
				$this->Session->setFlash(__('The ContributorName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorName could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ContributorName', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContributorName->save($this->data)) {
				$this->Session->setFlash(__('The ContributorName has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ContributorName could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContributorName->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ContributorName', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContributorName->del($id)) {
			$this->Session->setFlash(__('ContributorName deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>