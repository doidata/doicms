<div class="additionalTitles view">
<h2><?php  __('AdditionalTitle');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $additionalTitle['AdditionalTitle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $additionalTitle['AdditionalTitle']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subtitle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $additionalTitle['AdditionalTitle']['subtitle']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($additionalTitle['TitleType']['name'], array('controller' => 'title_types', 'action' => 'view', $additionalTitle['TitleType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title Language'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($additionalTitle['TitleLanguage']['name'], array('controller' => 'title_languages', 'action' => 'view', $additionalTitle['TitleLanguage']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Resource'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($additionalTitle['Resource']['title'], array('controller' => 'resources', 'action' => 'view', $additionalTitle['Resource']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AdditionalTitle', true), array('action' => 'edit', $additionalTitle['AdditionalTitle']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AdditionalTitle', true), array('action' => 'delete', $additionalTitle['AdditionalTitle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $additionalTitle['AdditionalTitle']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AdditionalTitles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New AdditionalTitle', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Resources', true), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Resource', true), array('controller' => 'resources', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Languages', true), array('controller' => 'title_languages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Language', true), array('controller' => 'title_languages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Title Types', true), array('controller' => 'title_types', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Title Type', true), array('controller' => 'title_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
