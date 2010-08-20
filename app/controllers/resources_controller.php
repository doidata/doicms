<?php
class ResourcesController extends AppController {

	var $name = 'Resources';
	var $helpers = array('Html', 'Form');
	var $uses=array('Resource','Contributor');


	function index() {$this->Resource->recursive=1;
		$this->Resource->Behaviors->attach('Containable');
		$this->paginate['Resource']=array(
    		'contain' => array('Contributor'=>array ('ContributorName','ContributorRole'),'ImprintName'),
    		'limit' => 100,
        	'order' => array(
            'Resource.title' => 'asc'
    		));
		$this->set('resources', $this->paginate());
	}
	function doi_codes() {
		$this->paginate = array(
        'limit' => 100,
        'order' => array(
            'Recource.doi' => 'asc'
        )
    );
		$this->Resource->Behaviors->attach('Containable');
		$this->paginate['Resource']=array(
    		'contain' => array('Contributor'=>array ('ContributorName','ContributorRole'),'ImprintName')
    		);
		$this->set('resources', $this->paginate('Resource'));
	}
	function owner($id = null) {
		$this->Resource->Behaviors->attach('Containable');
		# $this->Post->contain('Comment.author = "Daniel"');
		$this->Resource->contain("Owner.id=$id");

		//$this->paginate['Resource']=array('contain' => array('Owner'=>array('conditions'=>array('Owner.id'=>$id))));
		$this->set('resources', $this->paginate());
	}

	function search(){

		$this->Resource->Behaviors->attach('Containable');
		$this->paginate['Resource']=array(
    		'contain' => array('Contributor'=>array ('ContributorName','ContributorRole'),'ImprintName','Publisher')
    		);
    	//$this->Resource->contain("");
		if($this->params['url']['r'])
			$this->set('resources', $this->paginate('Resource',"Resource.title LIKE '%{$this->params['url']['r']}%'
				OR Resource.doi LIKE '%{$this->params['url']['r']}%' OR Publisher.name LIKE '%{$this->params['url']['r']}%'"));
		if($this->params['url']['c'])
			$this->set('contributors', $this->paginate('Contributor',"ContributorName.name LIKE '%{$this->params['url']['c']}%'"));
		//$this->render('index');
	}
	function view($id = null,$xml=null,$download=null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Resource.', true));
			$this->redirect(array('action'=>'index'));		}
		$this->Resource->Behaviors->attach('Containable');
		//$this->Resource->recursive=2;
		$this->Resource->contain(array('AdditionalTitle'=>array('TitleType','TitleLanguage')
			,'TitleType','TitleLanguage','DoiStructuralType','DoiMode','SeriesIdentifier','ImprintName',
			'RelationCode','RelationIdentifier','RecordType','ProductForm','NotificationType',
			'Contributor'=>array ('ContributorName','ContributorRole'),'Language','Owner',
			'Publisher','CoPublisher','PublicationCountry','RegistrantName','RegistrationAuthority'
			));
		$this->set('resource', $this->Resource->read(null, $id));

		if($xml){
			Configure::write('debug', 0);
			header ("content-type: text/xml");
			if($download)
				header('Content-Disposition: attachment; filename="resource'.$id.'.xml"');
			$this->layout=null;
			$this->render('view_xml');
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Resource->create();
			if ($this->Resource->save($this->data)) {
				$this->Session->setFlash(__('The Resource has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Resource could not be saved. Please, try again.', true));
			}
		}
		$contributors = $this->Resource->Contributor->find('list');
		$languages = $this->Resource->Language->find('list');
		$owners = $this->Resource->Owner->find('list');
		$publishers = $this->Resource->Publisher->find('list');
		$doiModes = $this->Resource->DoiMode->find('list');
		$doiStructuralTypes = $this->Resource->DoiStructuralType->find('list');
		$imprintNames = $this->Resource->ImprintName->find('list');
		$notificationTypes = $this->Resource->NotificationType->find('list');
		$productForms = $this->Resource->ProductForm->find('list');
		$publicationCountries = $this->Resource->PublicationCountry->find('list');
		$recordTypes = $this->Resource->RecordType->find('list');
		$registrationAuthorities = $this->Resource->RegistrationAuthority->find('list');
		$registrantNames = $this->Resource->RegistrantName->find('list');
		$titleTypes = $this->Resource->TitleType->find('list');
		$titleLanguages = $this->Resource->TitleLanguage->find('list');
		$seriesIdentifiers = $this->Resource->SeriesIdentifier->find('list');
		$relationCodes = $this->Resource->RelationCode->find('list');
		$relationIdentifiers = $this->Resource->RelationIdentifier->find('list');
		$this->set(compact('contributors', 'languages', 'owners', 'publishers', 'coPublishers', 'doiModes', 'doiStructuralTypes', 'imprintNames', 'notificationTypes', 'productForms', 'publicationCountries', 'recordTypes', 'registrationAuthorities', 'registrantNames', 'titleTypes', 'titleLanguages', 'seriesIdentifiers', 'relationCodes', 'relationIdentifiers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Resource', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Resource->save($this->data)) {
				$this->Session->setFlash(__('The Resource has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Resource could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resource->read(null, $id);
		}
		$contributors = $this->Resource->Contributor->find('list');
		$languages = $this->Resource->Language->find('list');
		$owners = $this->Resource->Owner->find('list');
		$publishers = $this->Resource->Publisher->find('list');
		$coPublishers = $this->Resource->coPublisher->find('list');
		$doiModes = $this->Resource->DoiMode->find('list');
		$doiStructuralTypes = $this->Resource->DoiStructuralType->find('list');
		$imprintNames = $this->Resource->ImprintName->find('list');
		$notificationTypes = $this->Resource->NotificationType->find('list');
		$productForms = $this->Resource->ProductForm->find('list');
		$publicationCountries = $this->Resource->PublicationCountry->find('list');
		$recordTypes = $this->Resource->RecordType->find('list');
		$registrationAuthorities = $this->Resource->RegistrationAuthority->find('list');
		$registrantNames = $this->Resource->RegistrantName->find('list');
		$titleTypes = $this->Resource->TitleType->find('list');
		$titleLanguages = $this->Resource->TitleLanguage->find('list');
		$seriesIdentifiers = $this->Resource->SeriesIdentifier->find('list');
		$relationCodes = $this->Resource->RelationCode->find('list');
		$relationIdentifiers = $this->Resource->RelationIdentifier->find('list');
		$this->set(compact('contributors','languages','owners','publishers','coPublishers','doiModes','doiStructuralTypes','imprintNames','notificationTypes','productForms','publicationCountries','recordTypes','registrationAuthorities','registrantNames','titleTypes','titleLanguages','seriesIdentifiers','relationCodes','relationIdentifiers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Resource', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Resource->del($id)) {
			$this->Session->setFlash(__('Resource deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Resource->Behaviors->attach('Containable');
		$this->paginate['Resource']=array(
    		'contain' => array('Contributor'=>array ('ContributorName','ContributorRole'),'ImprintName'),
    		'limit' => 100,
        	'order' => array(
            'Resource.title' => 'asc'
    		));
		$this->set('resources', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Resource.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('resource', $this->Resource->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Resource->create();
			if ($this->Resource->save($this->data)) {
				$this->Session->setFlash(__('The Resource has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Resource could not be saved. Please, try again.', true));
			}
		}
		$contributors = $this->Resource->Contributor->find('list');
		$languages = $this->Resource->Language->find('list');
		$owners = $this->Resource->Owner->find('list');
		$publishers = $this->Resource->Publisher->find('list');
		$coPublishers = $this->Resource->CoPublisher->find('list');
		$doiModes = $this->Resource->DoiMode->find('list');
		$doiStructuralTypes = $this->Resource->DoiStructuralType->find('list');
		$imprintNames = $this->Resource->ImprintName->find('list');
		$notificationTypes = $this->Resource->NotificationType->find('list');
		$productForms = $this->Resource->ProductForm->find('list');
		$publicationCountries = $this->Resource->PublicationCountry->find('list');
		$recordTypes = $this->Resource->RecordType->find('list');
		$registrationAuthorities = $this->Resource->RegistrationAuthority->find('list');
		$registrantNames = $this->Resource->RegistrantName->find('list');
		$titleTypes = $this->Resource->TitleType->find('list');
		$titleLanguages = $this->Resource->TitleLanguage->find('list');
		$seriesIdentifiers = $this->Resource->SeriesIdentifier->find('list');
		$relationCodes = $this->Resource->RelationCode->find('list');
		$relationIdentifiers = $this->Resource->RelationIdentifier->find('list');
		$this->set(compact('contributors','languages','owners','publishers','coPublishers','doiModes','doiStructuralTypes','imprintNames','notificationTypes','productForms','publicationCountries','recordTypes','registrationAuthorities','registrantNames','titleTypes','titleLanguages','seriesIdentifiers','relationCodes','relationIdentifiers'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Resource', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Resource->saveAll($this->data)) {
				$this->Session->setFlash(__('The Resource has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Resource could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resource->read(null, $id);
		}
		$contributors = $this->Resource->Contributor->find('list');
		$languages = $this->Resource->Language->find('list');
		$owners = $this->Resource->Owner->find('list');
		$publishers = $this->Resource->Publisher->find('list');
		$coPublishers = $this->Resource->CoPublisher->find('list');
		$doiModes = $this->Resource->DoiMode->find('list');
		$doiStructuralTypes = $this->Resource->DoiStructuralType->find('list');
		$imprintNames = $this->Resource->ImprintName->find('list');
		$notificationTypes = $this->Resource->NotificationType->find('list');
		$productForms = $this->Resource->ProductForm->find('list');
		$publicationCountries = $this->Resource->PublicationCountry->find('list');
		$recordTypes = $this->Resource->RecordType->find('list');
		$registrationAuthorities = $this->Resource->RegistrationAuthority->find('list');
		$registrantNames = $this->Resource->RegistrantName->find('list');
		$titleTypes = $this->Resource->TitleType->find('list');
		$titleLanguages = $this->Resource->TitleLanguage->find('list');
		$seriesIdentifiers = $this->Resource->SeriesIdentifier->find('list');
		$relationCodes = $this->Resource->RelationCode->find('list');
		$relationIdentifiers = $this->Resource->RelationIdentifier->find('list');
		$this->set(compact('contributors','languages','owners','publishers','coPublishers','doiModes','doiStructuralTypes','imprintNames','notificationTypes','productForms','publicationCountries','recordTypes','registrationAuthorities','registrantNames','titleTypes','titleLanguages','seriesIdentifiers','relationCodes','relationIdentifiers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Resource', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Resource->del($id)) {
			$this->Session->setFlash(__('Resource deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	function admin_edit_xml(){
		#xml fields to set
		$xmlHeaders=array('from_company','from_email','from_person','to_company','sent_date');
		#read xml file
		$xml=file_get_contents(ROOT.DS.APP_DIR.DS.'views'.DS.'resources'.DS.'view_xml.ctp');
		if (!empty($this->data)) {
			$xml=preg_replace('/\b.+ xmlns:xsi/',"{$this->data['XmlHeader']['root']}  xmlns:xsi" ,$xml);
			$xml=preg_replace('/<\/.+$/',"</{$this->data['XmlHeader']['root']}>" ,$xml);

			foreach($xmlHeaders as $h){
				$H=Inflector::classify($h);
				$xml=preg_replace("/<$H>.+<\/$H>/", "<$H>{$this->data['XmlHeader'][$h]}</$H>", $xml);
			}
			#write to the xml file
			if(file_put_contents(ROOT.DS.APP_DIR.DS.'views'.DS.'resources'.DS.'view_xml.ctp',$xml))
				$this->Session->setFlash(__('XML headers updated successfully', true));
			else
				$this->Session->setFlash(__('Failed to update XML headers. Make sure you have write access to the file views/resources/view_xml.ctp', true));

		}else{
			#read from xml file
			preg_match('/\b.+ xmlns:xsi/', $xml, $matches);
			$this->data['XmlHeader']['root']=str_ireplace(' xmlns:xsi','',$matches[0]);
			foreach($xmlHeaders as $h){
				$H=Inflector::classify($h);
				preg_match("/<$H>.+<\/$H>/", $xml, $matches);
				$this->data['XmlHeader'][$h]=str_ireplace(array("<$H>","</$H>"),'',$matches[0]);

			}

		}

	}

}
?>