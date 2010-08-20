<div class="publishers form">
<?php echo $form->create('Publisher');?>
	<fieldset>
 		<legend><?php __('Edit Publisher');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Publisher.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Publisher.id'))); ?></li>
		<li><?php echo $html->link(__('List Publishers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
	</ul>
</div>
