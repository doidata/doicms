<div class="productForms form">
<?php echo $form->create('ProductForm');?>
	<fieldset>
 		<legend><?php __('Add ProductForm');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('code');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List ProductForms', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
