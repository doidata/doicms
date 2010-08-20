<div class="contributors view">
<h2><?php echo $contributors[0]['ContributorName']['name'];?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
	<th>Resource Title</th>
	<th>Contributor Role</th>
	<th>Publication date</th>
	<th>doi code</th>
</tr>
<?php
$i = 0;
foreach ($contributors as $contributor):
foreach($contributor['Resource'] as $index=>$resource):
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
			<?php echo $contributor['ContributorRole']['name'];?>
		</td>
		<td>
			<?php echo $resource['publicationdate'];?>
		</td>
		<td>
			<?php echo $resource['doi'];?>
		</td>
	</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>
</div>

