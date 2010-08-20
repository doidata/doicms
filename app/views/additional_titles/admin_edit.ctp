<h2>Add/Edit Addittional Title</h2>
<div class="additionalTitles form">
<?php echo $form->create('AdditionalTitle');?>

	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('subtitle');
		echo $form->input('title_type_id');
		echo $form->input('title_language_id');
		echo $form->input('resource_id');
	?>

<?php echo $form->end('Submit');?>
</div>

