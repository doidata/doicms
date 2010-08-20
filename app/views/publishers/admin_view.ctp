<div class="publishers view">
<h2><?php  __('Publisher');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publisher['Publisher']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $publisher['Publisher']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Publisher', true), array('action' => 'edit', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Publisher', true), array('action' => 'delete', $publisher['Publisher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Resources');?></h3>
	<?php if (!empty($publisher['Resource'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Record Type Id'); ?></th>
		<th><?php __('Product Form Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Subtitle'); ?></th>
		<th><?php __('Title Type Id'); ?></th>
		<th><?php __('Title Language Id'); ?></th>
		<th><?php __('Copyrightyear'); ?></th>
		<th><?php __('Doi'); ?></th>
		<th><?php __('Doiwebsitelink'); ?></th>
		<th><?php __('Doi Structural Type Id'); ?></th>
		<th><?php __('Doi Mode Id'); ?></th>
		<th><?php __('Series Identifier Id'); ?></th>
		<th><?php __('Imprint Name Id'); ?></th>
		<th><?php __('Relation Code Id'); ?></th>
		<th><?php __('Relation Identifier Id'); ?></th>
		<th><?php __('Related Product'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Publisher Role'); ?></th>
		<th><?php __('Co Publisher Id'); ?></th>
		<th><?php __('Co Publisher Role'); ?></th>
		<th><?php __('Publication Country Id'); ?></th>
		<th><?php __('Publicationdate'); ?></th>
		<th><?php __('Subjectschemeidentifier'); ?></th>
		<th><?php __('Subjectheadingtext'); ?></th>
		<th><?php __('Registrant Name Id'); ?></th>
		<th><?php __('Registration Authority Id'); ?></th>
		<th><?php __('Notification Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['Resource'] as $resource):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $resource['id'];?></td>
			<td><?php echo $resource['record_type_id'];?></td>
			<td><?php echo $resource['product_form_id'];?></td>
			<td><?php echo $resource['title'];?></td>
			<td><?php echo $resource['subtitle'];?></td>
			<td><?php echo $resource['title_type_id'];?></td>
			<td><?php echo $resource['title_language_id'];?></td>
			<td><?php echo $resource['copyrightyear'];?></td>
			<td><?php echo $resource['doi'];?></td>
			<td><?php echo $resource['doiwebsitelink'];?></td>
			<td><?php echo $resource['doi_structural_type_id'];?></td>
			<td><?php echo $resource['doi_mode_id'];?></td>
			<td><?php echo $resource['series_identifier_id'];?></td>
			<td><?php echo $resource['imprint_name_id'];?></td>
			<td><?php echo $resource['relation_code_id'];?></td>
			<td><?php echo $resource['relation_identifier_id'];?></td>
			<td><?php echo $resource['related_product'];?></td>
			<td><?php echo $resource['publisher_id'];?></td>
			<td><?php echo $resource['publisher_role'];?></td>
			<td><?php echo $resource['co_publisher_id'];?></td>
			<td><?php echo $resource['co_publisher_role'];?></td>
			<td><?php echo $resource['publication_country_id'];?></td>
			<td><?php echo $resource['publicationdate'];?></td>
			<td><?php echo $resource['subjectschemeidentifier'];?></td>
			<td><?php echo $resource['subjectheadingtext'];?></td>
			<td><?php echo $resource['registrant_name_id'];?></td>
			<td><?php echo $resource['registration_authority_id'];?></td>
			<td><?php echo $resource['notification_type_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'resources', 'action' => 'view', $resource['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'resources', 'action' => 'edit', $resource['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'resources', 'action' => 'delete', $resource['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resource['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Resources');?></h3>
	<?php if (!empty($publisher['Resource1'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Record Type Id'); ?></th>
		<th><?php __('Product Form Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Subtitle'); ?></th>
		<th><?php __('Title Type Id'); ?></th>
		<th><?php __('Title Language Id'); ?></th>
		<th><?php __('Copyrightyear'); ?></th>
		<th><?php __('Doi'); ?></th>
		<th><?php __('Doiwebsitelink'); ?></th>
		<th><?php __('Doi Structural Type Id'); ?></th>
		<th><?php __('Doi Mode Id'); ?></th>
		<th><?php __('Series Identifier Id'); ?></th>
		<th><?php __('Imprint Name Id'); ?></th>
		<th><?php __('Relation Code Id'); ?></th>
		<th><?php __('Relation Identifier Id'); ?></th>
		<th><?php __('Related Product'); ?></th>
		<th><?php __('Publisher Id'); ?></th>
		<th><?php __('Publisher Role'); ?></th>
		<th><?php __('Co Publisher Id'); ?></th>
		<th><?php __('Co Publisher Role'); ?></th>
		<th><?php __('Publication Country Id'); ?></th>
		<th><?php __('Publicationdate'); ?></th>
		<th><?php __('Subjectschemeidentifier'); ?></th>
		<th><?php __('Subjectheadingtext'); ?></th>
		<th><?php __('Registrant Name Id'); ?></th>
		<th><?php __('Registration Authority Id'); ?></th>
		<th><?php __('Notification Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($publisher['Resource1'] as $resource1):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $resource1['id'];?></td>
			<td><?php echo $resource1['record_type_id'];?></td>
			<td><?php echo $resource1['product_form_id'];?></td>
			<td><?php echo $resource1['title'];?></td>
			<td><?php echo $resource1['subtitle'];?></td>
			<td><?php echo $resource1['title_type_id'];?></td>
			<td><?php echo $resource1['title_language_id'];?></td>
			<td><?php echo $resource1['copyrightyear'];?></td>
			<td><?php echo $resource1['doi'];?></td>
			<td><?php echo $resource1['doiwebsitelink'];?></td>
			<td><?php echo $resource1['doi_structural_type_id'];?></td>
			<td><?php echo $resource1['doi_mode_id'];?></td>
			<td><?php echo $resource1['series_identifier_id'];?></td>
			<td><?php echo $resource1['imprint_name_id'];?></td>
			<td><?php echo $resource1['relation_code_id'];?></td>
			<td><?php echo $resource1['relation_identifier_id'];?></td>
			<td><?php echo $resource1['related_product'];?></td>
			<td><?php echo $resource1['publisher_id'];?></td>
			<td><?php echo $resource1['publisher_role'];?></td>
			<td><?php echo $resource1['co_publisher_id'];?></td>
			<td><?php echo $resource1['co_publisher_role'];?></td>
			<td><?php echo $resource1['publication_country_id'];?></td>
			<td><?php echo $resource1['publicationdate'];?></td>
			<td><?php echo $resource1['subjectschemeidentifier'];?></td>
			<td><?php echo $resource1['subjectheadingtext'];?></td>
			<td><?php echo $resource1['registrant_name_id'];?></td>
			<td><?php echo $resource1['registration_authority_id'];?></td>
			<td><?php echo $resource1['notification_type_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'resources', 'action' => 'view', $resource1['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'resources', 'action' => 'edit', $resource1['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'resources', 'action' => 'delete', $resource1['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resource1['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Resource1', true), array('controller' => 'resources', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
