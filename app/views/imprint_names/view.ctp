<div class="imprintNames view">
<h2><?php  __('Imprint Name');?></h2>
</div>
<div class="related">
	<?php if (!empty($imprintName['Resource'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Resource Title'); ?></th>
		<th><?php __('Doi Code'); ?></th>
		<th><?php __('Publicationdate'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($imprintName['Resource'] as $resource):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $html->link($resource['title'],array('controller'=>'resources','action'=>'view',$resource['id']));?></td>
			<td><?php echo $resource['doi'];?></td>
			<td><?php echo $resource['publicationdate'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
