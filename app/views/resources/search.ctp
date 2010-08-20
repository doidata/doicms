<div class="resources index">
<?php if(isset($resources)): ?>
<?php __('Resources');?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('first author');?></th>
	<th><?php echo $paginator->sort('publicationdate');?></th>
	<th><?php echo $paginator->sort('doi');?></th>
	<th><?php echo $paginator->sort('publisher');?></th>
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
			<?php echo $html->link($resource['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $resource['Publisher']['id'])); ?>
		</td>

	</tr>
<?php endforeach; ?>
</table>
<?php endif;?>
</div><br /><br />
<div class="contributors index">
<?php if (isset($contributors)):?>
<?php __('Contributors');?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Name','contributor_name_id');?></th>
	<th><?php echo $paginator->sort('Role','contributor_role_id');?></th>
	<th><?php echo $paginator->sort('Sequence No.','contributor_sequence');?></th>
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
			<?php echo $html->link($contributor['ContributorName']['name'], array('controller' => 'contributor_names', 'action' => 'view', $contributor['ContributorName']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($contributor['ContributorRole']['name'], array('controller' => 'contributor_roles', 'action' => 'view', $contributor['ContributorRole']['id'])); ?>
		</td>
		<td>
			<?php echo $contributor['Contributor']['contributor_sequence']; ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
</div>


