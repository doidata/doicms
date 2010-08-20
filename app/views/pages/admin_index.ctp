<H1>administration list</H1>
<br>LIST:<br />
<div id="admin_list">
<?php
	echo $html->link('Contributer Names', array('controller' =>'contributor_names' , 'action' => 'index')) . "<br/>";
	echo $html->link('Contributions', array('controller' =>'contributors' , 'action' => 'index')). "<br/>";
	echo $html->link('Owners', array('controller' =>'owners' , 'action' => 'index')). "<br/>";
	echo $html->link('Publishers', array('controller' =>'publishers' , 'action' => 'index')). "<br/>";
	echo $html->link('Resources', array('controller' =>'resources' , 'action' => 'index')). "<br/>";
	echo $html->link('Additional Titles', array('controller' =>'additional_titles' , 'action' => 'index')). "<br/>";
	echo $html->link('Imprint Names', array('controller' =>'imprint_names' , 'action' => 'index')). "<br/>";
	echo $html->link('Series Identifiers', array('controller' =>'series_identifiers' , 'action' => 'index')). "<br/>";
	echo $html->link('Doi Models', array('controller' =>'doi_modes' , 'action' => 'index')). "<br/>";
	echo $html->link('Doi Structural Types', array('controller' =>'doi_structural_types' , 'action' => 'index')). "<br/>";
	echo $html->link('Notification Types', array('controller' =>'notification_types' , 'action' => 'index')). "<br/>";
	echo $html->link('Product Forms', array('controller' =>'product_forms' , 'action' => 'index')). "<br/>";
	echo $html->link('Publication Countries', array('controller' =>'publication_countries' , 'action' => 'index')). "<br/>";
	echo $html->link('Record Types', array('controller' =>'record_types' , 'action' => 'index')). "<br/>";
	echo $html->link('Titles Types', array('controller' =>'title_types' , 'action' => 'index')). "<br/>";
	echo $html->link('Relation Codes', array('controller' =>'relation_codes' , 'action' => 'index')). "<br/>";
	echo $html->link('Relation Identifiers', array('controller' =>'relation_identifiers' , 'action' => 'index')). "<br/>";
	echo $html->link('Contributer Roles', array('controller' =>'contributor_roles' , 'action' => 'index')). "<br/>";
	echo $html->link('Languages', array('controller' =>'languages' , 'action' => 'index')). "<br/>";
	echo $html->link('Title Languages', array('controller' =>'title_languages' , 'action' => 'index')). "<br/>";
	echo $html->link('Registration Authorities', array('controller' =>'registration_authorities' , 'action' => 'index')). "<br/>";
	echo $html->link('Registrant Names', array('controller' =>'registrant_names' , 'action' => 'index')). "<br/>";
?>
</div>