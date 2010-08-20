<div class="owners form">
<?php echo $form->create('Owner');?>
	<fieldset>
 		<legend><?php __('Edit Owner');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('type');
		echo $form->input('status');
		echo $form->input('Resource');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Owner.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Owner.id'))); ?></li>
		<li><?php echo $html->link(__('List Owners', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
	</ul>
</div>
