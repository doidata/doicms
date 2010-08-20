<?php
	echo $form->create('search',array('url'=>'/resources/search','type'=>'get'));
	echo $form->input('Search1',array('name'=>'r','id'=>'q_id','label'=>'Search Resource/DOI/Publisher'));
	echo $form->input('Search Contributors',array('name'=>'c'));
	echo $form->end('Search');
	echo $form->create('admin',array('url'=>array('controller'=>'pages','action'=>'index')));
	echo $form->input('logout',array('type'=>'hidden','value'=>'true'));
	echo $form->end('logout');
	echo "ADD:"."<br/>";
	echo $html->link('Contributer Names', array('controller' =>'contributor_names' , 'action' => 'add')) . "<br/>";
	echo $html->link('Contributions', array('controller' =>'contributors' , 'action' => 'add')). "<br/>";
	echo $html->link('Owners', array('controller' =>'owners' , 'action' => 'add')). "<br/>";
	echo $html->link('Publishers', array('controller' =>'publishers' , 'action' => 'add')). "<br/>";
	echo $html->link('Resources', array('controller' =>'resources' , 'action' => 'add')). "<br/>";
	echo $html->link('Additional Titles', array('controller' =>'additional_titles' , 'action' => 'add')). "<br/>";
	echo $html->link('Imprint Names', array('controller' =>'imprint_names' , 'action' => 'add')). "<br/>";
	echo $html->link('Series Identifiers', array('controller' =>'series_identifiers' , 'action' => 'add')). "<br/>";
	echo $html->link('Doi Models', array('controller' =>'doi_modes' , 'action' => 'add')). "<br/>";
	echo $html->link('Doi Structural Types', array('controller' =>'doi_structural_types' , 'action' => 'add')). "<br/>";
	echo $html->link('Notification Types', array('controller' =>'notification_types' , 'action' => 'add')). "<br/>";
	echo $html->link('Product Forms', array('controller' =>'product_forms' , 'action' => 'add')). "<br/>";
	echo $html->link('Publication Countries', array('controller' =>'publication_countries' , 'action' => 'add')). "<br/>";
	echo $html->link('Record Types', array('controller' =>'record_types' , 'action' => 'add')). "<br/>";
	echo $html->link('Titles Types', array('controller' =>'title_types' , 'action' => 'add')). "<br/>";
	echo $html->link('Relation Codes', array('controller' =>'relation_codes' , 'action' => 'add')). "<br/>";
	echo $html->link('Relation Identifiers', array('controller' =>'relation_identifiers' , 'action' => 'add')). "<br/>";
	echo $html->link('Contributer Roles', array('controller' =>'contributor_roles' , 'action' => 'add')). "<br/>";
	echo $html->link('Languages', array('controller' =>'languages' , 'action' => 'add')). "<br/>";
	echo $html->link('Title Languages', array('controller' =>'title_languages' , 'action' => 'add')). "<br/>";
	echo $html->link('Registration Authorities', array('controller' =>'registration_authorities' , 'action' => 'add')). "<br/>";
	echo $html->link('Registrant Names', array('controller' =>'registrant_names' , 'action' => 'add')). "<br/>";
	echo "<br />";
	echo $html->link('EDIT XML HEADER', array('controller'=>'resources','action'=>'edit_xml'))."<br />";
?>
