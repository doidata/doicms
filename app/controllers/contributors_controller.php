<?php
class ContributorsController extends AppController {

	var $name = 'Contributors';
	var $helpers = array('Html', 'Form');

	function index() {
        $this->Contributor->Behaviors->attach('Containable');
		$this->paginate['Contributor']=array(
    		'contain' => array('Resource'=>array ('ImprintName'),'ContributorName','ContributorRole'),
    		'limit' => 100,
        	'order' => array(
            'ContributorName.name' => 'asc'
        	));

		$this->set('contributors', $this->paginate());
	}
	function list_authors() {
		$this->Contributor->Behaviors->attach('Containable');
		$this->paginate['Contributor']=array(
    		'contain' => array('Resource'=>array ('ImprintName'),'ContributorName')
    		);
		$this->set('contributors', $this->paginate());
	}
	function view_author($id = null) {
		$this->Contributor->Behaviors->attach('Containable');
		$this->paginate['Contributor']=array(
    		'contain' => array('Resource'=>array ('ImprintName'),'ContributorName','ContributorRole'),'conditions'=>array('Contributor.id'=>$id)
    		);
		$this->set('contributors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Contributor.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('contributor', $this->Contributor->read(null, $id));
	}



	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Contributor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contributor->del($id)) {
			$this->Session->setFlash(__('Contributor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>