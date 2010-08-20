<div class="contributors index">
<h2><?php __('Authors');?></h2>
<p>
<?php echo $myPaginate->topLinks();?>
</p>

<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Name','ContributorName.name');?></th>
	<th>Resources</th>
	<th>Publication date</th>
	<th>doi code</th>
	<th>project</th>
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
			<?php
				//if(!$index)//echo name one time only
					echo $html->link($contributor['ContributorName']['name'], array('controller' => 'contributors', 'action' => 'view_author', $contributor['Contributor']['id']));
			 ?>
		</td>
	<?php
		if(isset($contributor['Resource'][0]))
		foreach($contributor['Resource'] as $index=>$resource){?>
		<td>
			<?php echo $html->link($resource['title'], array('controller' => 'resources', 'action' => 'view', $resource['id']));?>
		</td>
		<td>
			<?php echo $resource['publicationdate'];?>
		</td>
			<td>
			<?php echo $resource['doi'];?>
		</td>
		<td>
			<?php echo $resource['ImprintName']['name'];?>
		</td>
		<?php }else
			echo'<td></td><td></td><td></td><td></td>';?>

	</tr>

<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
