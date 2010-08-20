<div class="resources index">
<h2><?php __('Resources');?></h2>
<p>
<?php echo $myPaginate->topLinks();?>
</p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th class="actions"><?php __('Actions');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('first author');?></th>
	<th><?php echo $paginator->sort('publicationdate');?></th>
	<th><?php echo $paginator->sort('doi');?></th>
	<th><?php echo $paginator->sort('project');?></th>
</tr>
<?php
$i = 0;
foreach ($resources as $resource):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $resource['Resource']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $resource['Resource']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resource['Resource']['id'])); ?>
			<?php echo $html->link(__('Download XML', true), array('action' => 'view', $resource['Resource']['id'],'xml','download')); ?>
		</td>
		<td>
		<?php echo $html->link($text->truncate($resource['Resource']['title'],30),array('controller'=>'resources','action'=>'view',$resource['Resource']['id']));?>
		</td>
		<td>
			<?php
				 if(isset($resource['Contributor'][0]['ContributorName']['name']))
				 	echo $html->link($resource['Contributor'][0]['ContributorName']['name'], array('controller' => 'contributors', 'action' => 'view', $resource['Contributor'][0]['id']));
			 ?>
		</td>

		<td>
			<?php echo $resource['Resource']['publicationdate']; ?>
		</td>
		<td>
			<?php echo $resource['Resource']['doi']; ?>
		</td>
		<td>
			<?php echo $html->link($resource['ImprintName']['name'], array('controller' => 'imprint_names', 'action' => 'view', $resource['ImprintName']['id'])); ?>
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
