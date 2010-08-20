<?php
class OwnersController extends AppController {

	var $name = 'Owners';
	var $helpers = array('Html', 'Form');
	var $paginate = array(
        'limit' => 100,
        'order' => array(
            'Owner.name' => 'asc'
        )
    );
	function index() {
		$this->Owner->recursive = 0;
		$this->set('owners', $this->paginate());
	}

	function view($id = null) {
		$this->Owner->Behaviors->attach('Containable');
		$this->paginate['Owner']=array('contain' => array('Resource'),'conditions'=>array('Owner.id'=>$id));
		$this->set('resources', $this->paginate());
		$this->set('owners', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Owner->create();
			if ($this->Owner->save($this->data)) {
				$this->Session->setFlash(__('The Owner has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Owner could not be saved. Please, try again.', true));
			}
		}
		$resources = $this->Owner->Resource->find('list');
		$this->set(compact('resources'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Owner', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Owner->save($this->data)) {
				$this->Session->setFlash(__('The Owner has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Owner could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Owner->read(null, $id);
		}
		$resources = $this->Owner->Resource->find('list');
		$this->set(compact('resources'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Owner', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Owner->del($id)) {
			$this->Session->setFlash(__('Owner deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Owner->recursive = 0;
		$this->set('owners', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Owner.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('owner', $this->Owner->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Owner->create();
			if ($this->Owner->save($this->data)) {
				$this->Session->setFlash(__('The Owner has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Owner could not be saved. Please, try again.', true));
			}
		}
		$resources = $this->Owner->Resource->find('list');
		$this->set(compact('resources'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Owner', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Owner->save($this->data)) {
				$this->Session->setFlash(__('The Owner has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Owner could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Owner->read(null, $id);
		}
		$resources = $this->Owner->Resource->find('list');
		$this->set(compact('resources'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Owner', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Owner->del($id)) {
			$this->Session->setFlash(__('Owner deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>