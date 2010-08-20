<?php
class SeriesIdentifiersController extends AppController {

	var $name = 'SeriesIdentifiers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->SeriesIdentifier->recursive = 0;
		$this->set('seriesIdentifiers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SeriesIdentifier.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('seriesIdentifier', $this->SeriesIdentifier->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SeriesIdentifier->create();
			if ($this->SeriesIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The SeriesIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SeriesIdentifier could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SeriesIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SeriesIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The SeriesIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SeriesIdentifier could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SeriesIdentifier->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SeriesIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SeriesIdentifier->del($id)) {
			$this->Session->setFlash(__('SeriesIdentifier deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->SeriesIdentifier->recursive = 0;
		$this->set('seriesIdentifiers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SeriesIdentifier.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('seriesIdentifier', $this->SeriesIdentifier->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SeriesIdentifier->create();
			if ($this->SeriesIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The SeriesIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SeriesIdentifier could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SeriesIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SeriesIdentifier->save($this->data)) {
				$this->Session->setFlash(__('The SeriesIdentifier has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SeriesIdentifier could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SeriesIdentifier->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SeriesIdentifier', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SeriesIdentifier->del($id)) {
			$this->Session->setFlash(__('SeriesIdentifier deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>