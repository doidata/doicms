<div class="contributors index">
<h2><?php __('Contributors');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('contributor_name_id');?></th>
	<th><?php echo $paginator->sort('contributor_role_id');?></th>
	<th><?php echo $paginator->sort('contributor_sequence');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($contributors as $contributor):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $contributor['Contributor']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($contributor['ContributorName']['name'], array('controller'=> 'contributor_names', 'action'=>'view', $contributor['ContributorName']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($contributor['ContributorRole']['name'], array('controller'=> 'contributor_roles', 'action'=>'view', $contributor['ContributorRole']['id'])); ?>
		</td>
		<td>
			<?php echo $contributor['Contributor']['contributor_sequence']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $contributor['Contributor']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $contributor['Contributor']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $contributor['Contributor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contributor['Contributor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Contributor', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Contributor Names', true), array('controller'=> 'contributor_names', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor Name', true), array('controller'=> 'contributor_names', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Contributor Roles', true), array('controller'=> 'contributor_roles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor Role', true), array('controller'=> 'contributor_roles', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
