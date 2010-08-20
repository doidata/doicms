<div class="languages form">
<?php echo $form->create('Language');?>
	<fieldset>
 		<legend><?php __('Edit Language');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('code');
		echo $form->input('rolename');
		echo $form->input('rolecode');
		echo $form->input('Resource');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Language.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Language.id'))); ?></li>
		<li><?php echo $html->link(__('List Languages', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
