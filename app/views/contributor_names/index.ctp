<div class="contributorNames index">
<h2><?php __('authors');?></h2>
<p>
<?php echo $myPaginate->topLinks();?></p>
<table cellpadding="0" cellspacing="0">
<tr>

	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('name_inverted');?></th>
	<th><?php echo $paginator->sort('type');?></th>

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
			<?php //echo $contributorName['ContributorName']['name']; ?>
			<?php echo $html->link($contributorName['ContributorName']['name'],array('controller'=>'contributor_names','action'=>'view',$contributorName['ContributorName']['id'])); ?>

		</td>
		<td>
			<?php //echo $contributorName['ContributorName']['name_inverted']; ?>
			<?php echo $html->link($contributorName['ContributorName']['name_inverted'],array('controller'=>'contributor_names','action'=>'view',$contributorName['ContributorName']['id'])); ?>
		</td>
		<td>
			<?php echo $contributorName['ContributorName']['type']==1 ? "Person":"Company"; ?>
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
