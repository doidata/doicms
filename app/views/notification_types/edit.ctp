<div class="notificationTypes form">
<?php echo $form->create('NotificationType');?>
	<fieldset>
 		<legend><?php __('Edit NotificationType');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('notificationtype');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('NotificationType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('NotificationType.id'))); ?></li>
		<li><?php echo $html->link(__('List NotificationTypes', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
