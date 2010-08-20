<div class="resources form">
<?php echo $form->create('Resource');?>
	<fieldset>
 		<legend><?php __('Edit Resource');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('record_type_id');
		echo $form->input('product_form_id');
		echo $form->input('title');
		echo $form->input('subtitle');
		echo $form->input('title_type_id');
		echo $form->input('title_language_id');
		echo $form->input('copyrightyear');
		echo $form->input('doi');
		echo $form->input('doiwebsitelink');
		echo $form->input('doi_structural_type_id');
		echo $form->input('doi_mode_id');
		echo $form->input('series_identifier_id');
		echo $form->input('imprint_name_id');
		echo $form->input('relation_code_id');
		echo $form->input('relation_identifier_id');
		echo $form->input('related_product');
		echo $form->input('publisher_id');
		echo $form->input('publisher_role');
		echo $form->input('co_publisher_id');
		echo $form->input('co_publisher_role');
		echo $form->input('publication_country_id');
		echo $form->input('publicationdate');
		echo $form->input('subjectschemeidentifier');
		echo $form->input('subjectheadingtext');
		echo $form->input('registrant_name_id');
		echo $form->input('registration_authority_id');
		echo $form->input('notification_type_id');
		echo $form->input('Contributor');
		echo $form->input('Language');
		echo $form->input('Owner');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Resource.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Resource.id'))); ?></li>
		<li><?php echo $html->link(__('List Resources', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Doi Modes', true), array('controller' => 'doi_modes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Doi Mode', true), array('controller' => 'doi_modes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Doi Structural Types', true), array('controller' => 'doi_structural_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Doi Structural Type', true), array('controller' => 'doi_structural_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Imprint Names', true), array('controller' => 'imprint_names', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Imprint Name', true), array('controller' => 'imprint_names', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Notification Types', true), array('controller' => 'notification_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Notification Type', true), array('controller' => 'notification_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Forms', true), array('controller' => 'product_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Form', true), array('controller' => 'product_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Publication Countries', true), array('controller' => 'publication_countries', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publication Country', true), array('controller' => 'publication_countries', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Record Types', true), array('controller' => 'record_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Record Type', true), array('controller' => 'record_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Registration Authorities', true), array('controller' => 'registration_authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Registration Authority', true), array('controller' => 'registration_authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Registrant Names', true), array('controller' => 'registrant_names', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Registrant Name', true), array('controller' => 'registrant_names', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Types', true), array('controller' => 'title_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Type', true), array('controller' => 'title_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Languages', true), array('controller' => 'title_languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Language', true), array('controller' => 'title_languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Series Identifiers', true), array('controller' => 'series_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Series Identifier', true), array('controller' => 'series_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Relation Codes', true), array('controller' => 'relation_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Relation Code', true), array('controller' => 'relation_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Relation Identifiers', true), array('controller' => 'relation_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Relation Identifier', true), array('controller' => 'relation_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Additional Titles', true), array('controller' => 'additional_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Additional Title', true), array('controller' => 'additional_titles', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contributors', true), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor', true), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Owners', true), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Owner', true), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
