<?php
class PublicationCountriesController extends AppController {

	var $name = 'PublicationCountries';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->PublicationCountry->recursive = 0;
		$this->set('publicationCountries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PublicationCountry.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('publicationCountry', $this->PublicationCountry->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PublicationCountry->create();
			if ($this->PublicationCountry->save($this->data)) {
				$this->Session->setFlash(__('The PublicationCountry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PublicationCountry could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PublicationCountry', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PublicationCountry->save($this->data)) {
				$this->Session->setFlash(__('The PublicationCountry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PublicationCountry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PublicationCountry->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PublicationCountry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PublicationCountry->del($id)) {
			$this->Session->setFlash(__('PublicationCountry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->PublicationCountry->recursive = 0;
		$this->set('publicationCountries', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid PublicationCountry.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('publicationCountry', $this->PublicationCountry->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->PublicationCountry->create();
			if ($this->PublicationCountry->save($this->data)) {
				$this->Session->setFlash(__('The PublicationCountry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PublicationCountry could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid PublicationCountry', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->PublicationCountry->save($this->data)) {
				$this->Session->setFlash(__('The PublicationCountry has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The PublicationCountry could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PublicationCountry->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for PublicationCountry', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PublicationCountry->del($id)) {
			$this->Session->setFlash(__('PublicationCountry deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>