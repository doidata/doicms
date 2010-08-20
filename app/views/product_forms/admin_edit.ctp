<div class="productForms form">
<?php echo $form->create('ProductForm');?>
	<fieldset>
 		<legend><?php __('Edit ProductForm');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ProductForm.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductForm.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductForms', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
