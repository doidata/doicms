<div class="titleLanguages form">
<?php echo $form->create('TitleLanguage');?>
	<fieldset>
 		<legend><?php __('Add TitleLanguage');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('code');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TitleLanguages', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Additional Titles', true), array('controller'=> 'additional_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Additional Title', true), array('controller'=> 'additional_titles', 'action'=>'add')); ?> </li>
	</ul>
</div>
