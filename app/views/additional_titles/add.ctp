<div class="additionalTitles form">
<?php echo $form->create('AdditionalTitle');?>
	<fieldset>
 		<legend><?php __('Add AdditionalTitle');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('subtitle');
		echo $form->input('title_type_id');
		echo $form->input('title_language_id');
		echo $form->input('resource_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AdditionalTitles', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Languages', true), array('controller' => 'title_languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Language', true), array('controller' => 'title_languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Types', true), array('controller' => 'title_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Type', true), array('controller' => 'title_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
