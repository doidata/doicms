<?php
class RegistrationAuthoritiesController extends AppController {

	var $name = 'RegistrationAuthorities';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->RegistrationAuthority->recursive = 0;
		$this->set('registrationAuthorities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RegistrationAuthority.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('registrationAuthority', $this->RegistrationAuthority->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RegistrationAuthority->create();
			if ($this->RegistrationAuthority->save($this->data)) {
				$this->Session->setFlash(__('The RegistrationAuthority has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrationAuthority could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RegistrationAuthority', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RegistrationAuthority->save($this->data)) {
				$this->Session->setFlash(__('The RegistrationAuthority has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrationAuthority could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RegistrationAuthority->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RegistrationAuthority', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RegistrationAuthority->del($id)) {
			$this->Session->setFlash(__('RegistrationAuthority deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->RegistrationAuthority->recursive = 0;
		$this->set('registrationAuthorities', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid RegistrationAuthority.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('registrationAuthority', $this->RegistrationAuthority->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RegistrationAuthority->create();
			if ($this->RegistrationAuthority->save($this->data)) {
				$this->Session->setFlash(__('The RegistrationAuthority has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrationAuthority could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid RegistrationAuthority', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->RegistrationAuthority->save($this->data)) {
				$this->Session->setFlash(__('The RegistrationAuthority has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The RegistrationAuthority could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RegistrationAuthority->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for RegistrationAuthority', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RegistrationAuthority->del($id)) {
			$this->Session->setFlash(__('RegistrationAuthority deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>