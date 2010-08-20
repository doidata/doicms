<div class="contributorNames form">
<?php echo $form->create('ContributorName');?>
	<fieldset>
 		<legend><?php __('Edit ContributorName');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('name_inverted');
		echo $form->input('type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('ContributorName.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ContributorName.id'))); ?></li>
		<li><?php echo $html->link(__('List ContributorNames', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Contributors', true), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor', true), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
	</ul>
</div>
