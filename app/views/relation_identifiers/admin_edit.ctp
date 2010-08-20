<div class="relationIdentifiers form">
<?php echo $form->create('RelationIdentifier');?>
	<fieldset>
 		<legend><?php __('Edit RelationIdentifier');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('code');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('RelationIdentifier.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('RelationIdentifier.id'))); ?></li>
		<li><?php echo $html->link(__('List RelationIdentifiers', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
