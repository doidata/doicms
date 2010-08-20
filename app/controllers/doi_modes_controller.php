<?php
class DoiModesController extends AppController {

	var $name = 'DoiModes';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->DoiMode->recursive = 0;
		$this->set('doiModes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DoiMode.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('doiMode', $this->DoiMode->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DoiMode->create();
			if ($this->DoiMode->save($this->data)) {
				$this->Session->setFlash(__('The DoiMode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiMode could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DoiMode', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DoiMode->save($this->data)) {
				$this->Session->setFlash(__('The DoiMode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiMode could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DoiMode->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DoiMode', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DoiMode->del($id)) {
			$this->Session->setFlash(__('DoiMode deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->DoiMode->recursive = 0;
		$this->set('doiModes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid DoiMode.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('doiMode', $this->DoiMode->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->DoiMode->create();
			if ($this->DoiMode->save($this->data)) {
				$this->Session->setFlash(__('The DoiMode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiMode could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid DoiMode', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->DoiMode->save($this->data)) {
				$this->Session->setFlash(__('The DoiMode has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The DoiMode could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DoiMode->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for DoiMode', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DoiMode->del($id)) {
			$this->Session->setFlash(__('DoiMode deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>