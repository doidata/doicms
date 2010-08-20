<div class="actions">
	<ul>
		 <li><?php echo $html->link(__('resources', true), array('controller' => 'resources', 'action' => 'index')); ?></li>
		 <li><?php echo $html->link(__('authors', true), array('controller' => 'contributor_names', 'action' => 'index')); ?></li>
		 <li><?php echo $html->link(__('contributions', true), array('controller' => 'contributors', 'action' => 'index')); ?></li>
		 <li><?php echo $html->link(__('copyrights', true), array('controller' => 'owners', 'action' => 'index')); ?></li>
		 <li><?php echo $html->link(__('publishers', true), array('controller' => 'publishers', 'action' => 'index')); ?></li>
		 <li><?php echo $html->link(__('projects', true), array('controller' => 'imprint_names', 'action' => 'index')); ?></li>
		 <li><?php echo $html->link(__('dois', true), array('controller' => 'resources', 'action' => 'doi_codes')); ?></li>

	</ul>
</div>