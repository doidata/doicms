<?php
class AdditionalTitlesController extends AppController {

	var $name = 'AdditionalTitles';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AdditionalTitle->recursive = 0;
		$this->set('additionalTitles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AdditionalTitle.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('additionalTitle', $this->AdditionalTitle->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AdditionalTitle->create();
			if ($this->AdditionalTitle->save($this->data)) {
				$this->Session->setFlash(__('The AdditionalTitle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AdditionalTitle could not be saved. Please, try again.', true));
			}
		}
		$resources = $this->AdditionalTitle->Resource->find('list');
		$titleLanguages = $this->AdditionalTitle->TitleLanguage->find('list');
		$titleTypes = $this->AdditionalTitle->TitleType->find('list');
		$this->set(compact('resources', 'titleLanguages', 'titleTypes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AdditionalTitle', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdditionalTitle->save($this->data)) {
				$this->Session->setFlash(__('The AdditionalTitle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AdditionalTitle could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdditionalTitle->read(null, $id);
		}
		$resources = $this->AdditionalTitle->Resource->find('list');
		$titleLanguages = $this->AdditionalTitle->TitleLanguage->find('list');
		$titleTypes = $this->AdditionalTitle->TitleType->find('list');
		$this->set(compact('resources','titleLanguages','titleTypes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AdditionalTitle', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdditionalTitle->del($id)) {
			$this->Session->setFlash(__('AdditionalTitle deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->AdditionalTitle->recursive = 0;
		$this->set('additionalTitles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AdditionalTitle.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('additionalTitle', $this->AdditionalTitle->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AdditionalTitle->create();
			if ($this->AdditionalTitle->save($this->data)) {
				$this->Session->setFlash(__('The AdditionalTitle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AdditionalTitle could not be saved. Please, try again.', true));
			}
		}
		$resources = $this->AdditionalTitle->Resource->find('list');
		$titleLanguages = $this->AdditionalTitle->TitleLanguage->find('list');
		$titleTypes = $this->AdditionalTitle->TitleType->find('list');
		$this->set(compact('resources', 'titleLanguages', 'titleTypes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AdditionalTitle', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdditionalTitle->save($this->data)) {
				$this->Session->setFlash(__('The AdditionalTitle has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AdditionalTitle could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdditionalTitle->read(null, $id);
		}
		$resources = $this->AdditionalTitle->Resource->find('list');
		$titleLanguages = $this->AdditionalTitle->TitleLanguage->find('list');
		$titleTypes = $this->AdditionalTitle->TitleType->find('list');
		$this->set(compact('resources','titleLanguages','titleTypes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AdditionalTitle', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdditionalTitle->del($id)) {
			$this->Session->setFlash(__('AdditionalTitle deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>