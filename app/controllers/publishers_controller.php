<?php
class PublishersController extends AppController {

	var $name = 'Publishers';
	var $helpers = array('Html', 'Form','paginator');
	var $paginate = array(
        'limit' => 100,
        'order' => array(
            'Publisher.name' => 'asc'
        )
    );
	function index() {
		$this->Publisher->recursive = 0;
		$this->set('publishers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Publisher.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('publisher', $this->Publisher->read(null, $id));
		//$this->set('publishers', $this->paginate());
		//$this->set('publisher', $this->paginate('Publisher',array('order')));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Publisher->create();
			if ($this->Publisher->save($this->data)) {
				$this->Session->setFlash(__('The Publisher has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Publisher could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Publisher', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Publisher->save($this->data)) {
				$this->Session->setFlash(__('The Publisher has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Publisher could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Publisher->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Publisher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Publisher->del($id)) {
			$this->Session->setFlash(__('Publisher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Publisher->recursive = 0;
		$this->set('publishers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Publisher.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('publisher', $this->Publisher->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Publisher->create();
			if ($this->Publisher->save($this->data)) {
				$this->Session->setFlash(__('The Publisher has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Publisher could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Publisher', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Publisher->save($this->data)) {
				$this->Session->setFlash(__('The Publisher has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Publisher could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Publisher->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Publisher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Publisher->del($id)) {
			$this->Session->setFlash(__('Publisher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>