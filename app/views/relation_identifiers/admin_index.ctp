<div class="relationIdentifiers index">
<h2><?php __('RelationIdentifiers');?></h2>
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
	<th><?php echo $paginator->sort('code');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($relationIdentifiers as $relationIdentifier):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $relationIdentifier['RelationIdentifier']['id']; ?>
		</td>
		<td>
			<?php echo $relationIdentifier['RelationIdentifier']['name']; ?>
		</td>
		<td>
			<?php echo $relationIdentifier['RelationIdentifier']['code']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $relationIdentifier['RelationIdentifier']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $relationIdentifier['RelationIdentifier']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $relationIdentifier['RelationIdentifier']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $relationIdentifier['RelationIdentifier']['id'])); ?>
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
		<li><?php echo $html->link(__('New RelationIdentifier', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
	</ul>
</div>
