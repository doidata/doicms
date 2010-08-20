<div class="owners view">
<h2><?php __('copyright owner'.': '.$owners[0]['Owner']['name']);?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Resource Title','title');?></th>
	<th><?php echo $paginator->sort('Doi code','doi');?></th>
	<th><?php echo $paginator->sort('Publication Date','publicationdate');?></th>
</tr>
<?php
$i = 0;
foreach ($owners[0]['Resource'] as $resource):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($text->truncate($resource['title'],30),array('controller'=>'resources','action'=>'view',$resource['id']));?>
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

