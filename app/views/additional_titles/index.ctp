<div class="additionalTitles index">
<h2><?php __('AdditionalTitles');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('subtitle');?></th>
	<th><?php echo $paginator->sort('title_type_id');?></th>
	<th><?php echo $paginator->sort('title_language_id');?></th>
	<th><?php echo $paginator->sort('resource_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($additionalTitles as $additionalTitle):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $additionalTitle['AdditionalTitle']['id']; ?>
		</td>
		<td>
			<?php echo $additionalTitle['AdditionalTitle']['title']; ?>
		</td>
		<td>
			<?php echo $additionalTitle['AdditionalTitle']['subtitle']; ?>
		</td>
		<td>
			<?php echo $html->link($additionalTitle['TitleType']['name'], array('controller' => 'title_types', 'action' => 'view', $additionalTitle['TitleType']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($additionalTitle['TitleLanguage']['name'], array('controller' => 'title_languages', 'action' => 'view', $additionalTitle['TitleLanguage']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($additionalTitle['Resource']['title'], array('controller' => 'resources', 'action' => 'view', $additionalTitle['Resource']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $additionalTitle['AdditionalTitle']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $additionalTitle['AdditionalTitle']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $additionalTitle['AdditionalTitle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $additionalTitle['AdditionalTitle']['id'])); ?>
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
		<li><?php echo $html->link(__('New AdditionalTitle', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Languages', true), array('controller' => 'title_languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Language', true), array('controller' => 'title_languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Types', true), array('controller' => 'title_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Type', true), array('controller' => 'title_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
