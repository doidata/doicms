<div class="contributorNames view">
<h2><?php  __('ContributorName');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contributorName['ContributorName']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contributorName['ContributorName']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name Inverted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contributorName['ContributorName']['name_inverted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contributorName['ContributorName']['type']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ContributorName', true), array('action' => 'edit', $contributorName['ContributorName']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ContributorName', true), array('action' => 'delete', $contributorName['ContributorName']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contributorName['ContributorName']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ContributorNames', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New ContributorName', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contributors', true), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor', true), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Contributors');?></h3>
	<?php if (!empty($contributorName['Contributor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Contributor Name Id'); ?></th>
		<th><?php __('Contributor Role Id'); ?></th>
		<th><?php __('Contributor Sequence'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contributorName['Contributor'] as $contributor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contributor['id'];?></td>
			<td><?php echo $contributor['contributor_name_id'];?></td>
			<td><?php echo $contributor['contributor_role_id'];?></td>
			<td><?php echo $contributor['contributor_sequence'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'contributors', 'action' => 'view', $contributor['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'contributors', 'action' => 'edit', $contributor['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'contributors', 'action' => 'delete', $contributor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contributor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Contributor', true), array('controller' => 'contributors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
