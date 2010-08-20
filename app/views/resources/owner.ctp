<div class="owners index">
<h2><?php __('copyright owner');?></h2>
<p>
<?php echo $myPaginate->topLinks();?>
</p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Resource Title');?></th>
	<th><?php echo $paginator->sort('Doi code');?></th>
	<th><?php echo $paginator->sort('Publication Date');?></th>
</tr>
<?php
$i = 0;
pr($resources);
foreach ($resources as $resource):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $resource['title']; ?>
		</td>
		<td>
			<?php echo $resource['doi']; ?>
		</td>
		<td>
			<?php echo $resource['publicationdate']; ?>
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

