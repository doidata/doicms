<div class="contributors index">
<h2><?php __('contributions');?></h2>
<p>
<?php echo $myPaginate->topLinks();?>
</p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Name','contributor_name_id');?></th>
	<th><?php echo $paginator->sort('Role','contributor_role_id');?></th>
	<th><?php echo $paginator->sort('Sequence No.','contributor_sequence');?></th>
	<th><?php echo $paginator->sort('Resource Title','Resource.title');?></th>
	<th><?php echo $paginator->sort('Doi Code','Resource.doi');?></th>
</tr>
<?php
$i = 0;
foreach ($contributors as $contributor):
if(isset($contributor['Resource'][0]))
foreach($contributor['Resource'] as $resource):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($contributor['ContributorName']['name'], array('controller' => 'contributor_names', 'action' => 'view', $contributor['ContributorName']['id'])); ?>
		</td>
		<td>
			<?php echo $contributor['ContributorRole']['name']; ?>
		</td>
		<td>
			<?php echo $contributor['Contributor']['contributor_sequence']; ?>
		</td>
		<td>
			<?php echo $html->link($text->truncate($resource['title'],30),array('controller'=>'resources','action'=>'view',$resource['id']));?>
		</td>
		<td>
			<?php echo $resource['doi']; ?>
		</td>


	</tr>
<?php endforeach; ?>
<?php endforeach; ?>
</table>
</div>
