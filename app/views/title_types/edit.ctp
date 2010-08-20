<div class="titleTypes form">
<?php echo $form->create('TitleType');?>
	<fieldset>
 		<legend><?php __('Edit TitleType');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('TitleType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('TitleType.id'))); ?></li>
		<li><?php echo $html->link(__('List TitleTypes', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Additional Titles', true), array('controller'=> 'additional_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Additional Title', true), array('controller'=> 'additional_titles', 'action'=>'add')); ?> </li>
	</ul>
</div>
