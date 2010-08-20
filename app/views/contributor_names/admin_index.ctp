<div class="contributorNames index">
<h2><?php __('ContributorNames');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('name_inverted');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($contributorNames as $contributorName):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $contributorName['ContributorName']['id']; ?>
		</td>
		<td>
			<?php echo $contributorName['ContributorName']['name']; ?>
		</td>
		<td>
			<?php echo $contributorName['ContributorName']['name_inverted']; ?>
		</td>
		<td>
			<?php echo $contributorName['ContributorName']['type']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $contributorName['ContributorName']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $contributorName['ContributorName']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $contributorName['ContributorName']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contributorName['ContributorName']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New ContributorName', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Contributors', true), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor', true), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
	</ul>
</div>
