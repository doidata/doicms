<div class="edit_xml">
<?php echo $form->create('XmlHeader',array('url'=>array('controller'=>'resources','action'=>'edit_xml')));?>
	<fieldset>
 		<legend><?php __('Edit XML Header');?></legend>
	<?php
		echo $form->input('root');
		echo $form->input('from_company');
		echo $form->input('from_person');
		echo $form->input('from_email');
		echo $form->input('to_company');
		echo $form->input('sent_date');
	?>
	</fieldset>
<?php echo $form->end('Save');?>
</div>
