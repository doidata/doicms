<?php
class ProductFormsController extends AppController {

	var $name = 'ProductForms';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->ProductForm->recursive = 0;
		$this->set('productForms', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductForm.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productForm', $this->ProductForm->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductForm->create();
			if ($this->ProductForm->save($this->data)) {
				$this->Session->setFlash(__('The ProductForm has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductForm could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductForm', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductForm->save($this->data)) {
				$this->Session->setFlash(__('The ProductForm has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductForm could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductForm->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductForm', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductForm->del($id)) {
			$this->Session->setFlash(__('ProductForm deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->ProductForm->recursive = 0;
		$this->set('productForms', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ProductForm.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('productForm', $this->ProductForm->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ProductForm->create();
			if ($this->ProductForm->save($this->data)) {
				$this->Session->setFlash(__('The ProductForm has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductForm could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ProductForm', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductForm->save($this->data)) {
				$this->Session->setFlash(__('The ProductForm has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The ProductForm could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductForm->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ProductForm', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductForm->del($id)) {
			$this->Session->setFlash(__('ProductForm deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>