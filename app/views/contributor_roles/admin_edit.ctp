<div class="contributorRoles form">
<?php echo $form->create('ContributorRole');?>
	<fieldset>
 		<legend><?php __('Edit ContributorRole');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('ContributorRole.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ContributorRole.id'))); ?></li>
		<li><?php echo $html->link(__('List ContributorRoles', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Contributors', true), array('controller'=> 'contributors', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor', true), array('controller'=> 'contributors', 'action'=>'add')); ?> </li>
	</ul>
</div>
