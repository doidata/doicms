<?php
class TitleLanguagesController extends AppController {

	var $name = 'TitleLanguages';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->TitleLanguage->recursive = 0;
		$this->set('titleLanguages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TitleLanguage.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('titleLanguage', $this->TitleLanguage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TitleLanguage->create();
			if ($this->TitleLanguage->save($this->data)) {
				$this->Session->setFlash(__('The TitleLanguage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleLanguage could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TitleLanguage', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TitleLanguage->save($this->data)) {
				$this->Session->setFlash(__('The TitleLanguage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleLanguage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TitleLanguage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TitleLanguage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TitleLanguage->del($id)) {
			$this->Session->setFlash(__('TitleLanguage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->TitleLanguage->recursive = 0;
		$this->set('titleLanguages', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid TitleLanguage.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('titleLanguage', $this->TitleLanguage->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->TitleLanguage->create();
			if ($this->TitleLanguage->save($this->data)) {
				$this->Session->setFlash(__('The TitleLanguage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleLanguage could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid TitleLanguage', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->TitleLanguage->save($this->data)) {
				$this->Session->setFlash(__('The TitleLanguage has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The TitleLanguage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TitleLanguage->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for TitleLanguage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TitleLanguage->del($id)) {
			$this->Session->setFlash(__('TitleLanguage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>