<div class="contributors form">
<?php echo $form->create('Contributor');?>
	<fieldset>
 		<legend><?php __('Add Contributor');?></legend>
	<?php
		echo $form->input('contributor_name_id');
		echo $form->input('contributor_role_id');
		echo $form->input('contributor_sequence');
		echo $form->input('Resource');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Contributors', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Contributor Names', true), array('controller'=> 'contributor_names', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor Name', true), array('controller'=> 'contributor_names', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Contributor Roles', true), array('controller'=> 'contributor_roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor Role', true), array('controller'=> 'contributor_roles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
