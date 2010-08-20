<div class="imprintNames index">
<h2><?php __('Projects');?></h2>
<p>
<?php echo $myPaginate->topLinks();?>
</p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
</tr>
<?php
$i = 0;
foreach ($imprintNames as $imprintName):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link(__($imprintName['ImprintName']['name'], true), array('action' => 'view', $imprintName['ImprintName']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>