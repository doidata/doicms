<div class="titleTypes index">
<h2><?php __('TitleTypes');?></h2>
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
foreach ($titleTypes as $titleType):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $titleType['TitleType']['id']; ?>
		</td>
		<td>
			<?php echo $titleType['TitleType']['name']; ?>
		</td>
		<td>
			<?php echo $titleType['TitleType']['code']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $titleType['TitleType']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $titleType['TitleType']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $titleType['TitleType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $titleType['TitleType']['id'])); ?>
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
		<li><?php echo $html->link(__('New TitleType', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller'=> 'resources', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller'=> 'resources', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Additional Titles', true), array('controller'=> 'additional_titles', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Additional Title', true), array('controller'=> 'additional_titles', 'action'=>'add')); ?> </li>
	</ul>
</div>
