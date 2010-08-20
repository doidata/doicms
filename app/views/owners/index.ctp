<div class="owners index">
<h2><?php __('copyright owner');?></h2>
<p>
<?php echo $myPaginate->topLinks();?>
</p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('status');?></th>
</tr>
<?php
$i = 0;
foreach ($owners as $owner):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($owner['Owner']['name'],array('controller'=>'owners','action'=>'view',$owner['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $owner['Owner']['type']==1 ? "Person":"Company"; ?>
		</td>
		<td>
			<?php echo $owner['Owner']['status']; ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>


