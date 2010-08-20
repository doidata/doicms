<div class="relationCodes form">
<?php echo $form->create('RelationCode');?>
	<fieldset>
 		<legend><?php __('Edit RelationCode');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('RelationCode.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('RelationCode.id'))); ?></li>
		<li><?php echo $html->link(__('List RelationCodes', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
