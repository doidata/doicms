<div class="imprintNames form">
<?php echo $form->create('ImprintName');?>
	<fieldset>
 		<legend><?php __('Edit ImprintName');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('ImprintName.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ImprintName.id'))); ?></li>
		<li><?php echo $html->link(__('List ImprintNames', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
	</ul>
</div>
