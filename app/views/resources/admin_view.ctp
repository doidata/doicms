<div class="resources view">
<h2><?php  __('Resource');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Record Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['RecordType']['name'], array('controller' => 'record_types', 'action' => 'view', $resource['RecordType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Form'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['ProductForm']['name'], array('controller' => 'product_forms', 'action' => 'view', $resource['ProductForm']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subtitle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['subtitle']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['TitleType']['name'], array('controller' => 'title_types', 'action' => 'view', $resource['TitleType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title Language'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['TitleLanguage']['name'], array('controller' => 'title_languages', 'action' => 'view', $resource['TitleLanguage']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Copyrightyear'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['copyrightyear']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Doi'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['doi']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Doiwebsitelink'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['doiwebsitelink']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Doi Structural Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['DoiStructuralType']['name'], array('controller' => 'doi_structural_types', 'action' => 'view', $resource['DoiStructuralType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Doi Mode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['DoiMode']['name'], array('controller' => 'doi_modes', 'action' => 'view', $resource['DoiMode']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Series Identifier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['SeriesIdentifier']['name'], array('controller' => 'series_identifiers', 'action' => 'view', $resource['SeriesIdentifier']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imprint Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['ImprintName']['name'], array('controller' => 'imprint_names', 'action' => 'view', $resource['ImprintName']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relation Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['RelationCode']['name'], array('controller' => 'relation_codes', 'action' => 'view', $resource['RelationCode']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Relation Identifier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['RelationIdentifier']['name'], array('controller' => 'relation_identifiers', 'action' => 'view', $resource['RelationIdentifier']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Related Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['related_product']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $resource['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['publisher_role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publisher2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['Publisher2']['name'], array('controller' => 'publishers', 'action' => 'view', $resource['Publisher2']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Co Publisher Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['co_publisher_role']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publication Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['PublicationCountry']['name'], array('controller' => 'publication_countries', 'action' => 'view', $resource['PublicationCountry']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Publicationdate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['publicationdate']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subjectschemeidentifier'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['subjectschemeidentifier']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subjectheadingtext'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $resource['Resource']['subjectheadingtext']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registrant Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['RegistrantName']['name'], array('controller' => 'registrant_names', 'action' => 'view', $resource['RegistrantName']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registration Authority'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['RegistrationAuthority']['name'], array('controller' => 'registration_authorities', 'action' => 'view', $resource['RegistrationAuthority']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notification Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($resource['NotificationType']['name'], array('controller' => 'notification_types', 'action' => 'view', $resource['NotificationType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Resource', true), array('action' => 'edit', $resource['Resource']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Resource', true), array('action' => 'delete', $resource['Resource']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resource['Resource']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Resources', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publisher', true), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Doi Modes', true), array('controller' => 'doi_modes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Doi Mode', true), array('controller' => 'doi_modes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Doi Structural Types', true), array('controller' => 'doi_structural_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Doi Structural Type', true), array('controller' => 'doi_structural_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Imprint Names', true), array('controller' => 'imprint_names', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Imprint Name', true), array('controller' => 'imprint_names', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Notification Types', true), array('controller' => 'notification_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Notification Type', true), array('controller' => 'notification_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Forms', true), array('controller' => 'product_forms', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Form', true), array('controller' => 'product_forms', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Publication Countries', true), array('controller' => 'publication_countries', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Publication Country', true), array('controller' => 'publication_countries', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Record Types', true), array('controller' => 'record_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Record Type', true), array('controller' => 'record_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Registration Authorities', true), array('controller' => 'registration_authorities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Registration Authority', true), array('controller' => 'registration_authorities', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Registrant Names', true), array('controller' => 'registrant_names', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Registrant Name', true), array('controller' => 'registrant_names', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Types', true), array('controller' => 'title_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Type', true), array('controller' => 'title_types', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Languages', true), array('controller' => 'title_languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Language', true), array('controller' => 'title_languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Series Identifiers', true), array('controller' => 'series_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Series Identifier', true), array('controller' => 'series_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Relation Codes', true), array('controller' => 'relation_codes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Relation Code', true), array('controller' => 'relation_codes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Relation Identifiers', true), array('controller' => 'relation_identifiers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Relation Identifier', true), array('controller' => 'relation_identifiers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Additional Titles', true), array('controller' => 'additional_titles', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Additional Title', true), array('controller' => 'additional_titles', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contributors', true), array('controller' => 'contributors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contributor', true), array('controller' => 'contributors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Languages', true), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Owners', true), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Owner', true), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Additional Titles');?></h3>
	<?php if (!empty($resource['AdditionalTitle'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Subtitle'); ?></th>
		<th><?php __('Title Type Id'); ?></th>
		<th><?php __('Title Language Id'); ?></th>
		<th><?php __('Resource Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resource['AdditionalTitle'] as $additionalTitle):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $additionalTitle['id'];?></td>
			<td><?php echo $additionalTitle['title'];?></td>
			<td><?php echo $additionalTitle['subtitle'];?></td>
			<td><?php echo $additionalTitle['title_type_id'];?></td>
			<td><?php echo $additionalTitle['title_language_id'];?></td>
			<td><?php echo $additionalTitle['resource_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'additional_titles', 'action' => 'view', $additionalTitle['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'additional_titles', 'action' => 'edit', $additionalTitle['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'additional_titles', 'action' => 'delete', $additionalTitle['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $additionalTitle['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Additional Title', true), array('controller' => 'additional_titles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Contributors');?></h3>
	<?php if (!empty($resource['Contributor'])):?>
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
		foreach ($resource['Contributor'] as $contributor):
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
<div class="related">
	<h3><?php __('Related Languages');?></h3>
	<?php if (!empty($resource['Language'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Code'); ?></th>
		<th><?php __('Rolename'); ?></th>
		<th><?php __('Rolecode'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resource['Language'] as $language):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $language['id'];?></td>
			<td><?php echo $language['name'];?></td>
			<td><?php echo $language['code'];?></td>
			<td><?php echo $language['rolename'];?></td>
			<td><?php echo $language['rolecode'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'languages', 'action' => 'view', $language['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'languages', 'action' => 'edit', $language['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'languages', 'action' => 'delete', $language['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $language['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Language', true), array('controller' => 'languages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Owners');?></h3>
	<?php if (!empty($resource['Owner'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Status'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($resource['Owner'] as $owner):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $owner['id'];?></td>
			<td><?php echo $owner['name'];?></td>
			<td><?php echo $owner['type'];?></td>
			<td><?php echo $owner['status'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'owners', 'action' => 'view', $owner['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'owners', 'action' => 'edit', $owner['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'owners', 'action' => 'delete', $owner['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $owner['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Owner', true), array('controller' => 'owners', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
