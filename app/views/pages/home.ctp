
	Welcome to the data repositry for the web initiative "in|ad|ae|qu|at".<br />
	Please choos one from the main list views:
	<ul>
		<?php
		$links=array('resources','authors','contributors','copyrights','publishers','projects','dois');
		?>
		<il>

	</ul>
	<table id="MainPageList">
		<tr>
			<td><?php echo $html->link('resources', array('controller' =>'resources' , 'action' => 'index'));?></td>
			<td>(list all works registered in this repository)</td>
		</tr>
		<tr>
			<td><?php echo $html->link('authors', array('controller' =>'contributor_names' , 'action' => 'index'));?></td>
			<td>(list all authors and contributors by name)</td>
		</tr>
		<tr>
			<td><?php echo $html->link('contributions', array('controller' =>'contributors' , 'action' => 'index'));?></td>
			<td>(list all contributions made by authors or contributors)</td>
		</tr>
		<tr>
			<td><?php echo $html->link('copyrights', array('controller' =>'owners' , 'action' => 'index'));?></td>
			<td>(list all copyright owner)</td>
		</tr>
		<tr>
			<td><?php echo $html->link('publishers', array('controller' =>'publishers' , 'action' => 'index'));?></td>
			<td>(list all publishers)</td>
		</tr>
		<tr>
			<td><?php echo $html->link('projects', array('controller' =>'imprint_names' , 'action' => 'index'));?></td>
			<td>(list the main project groups in this repository)</td>
		</tr>
		<tr>
			<td><?php echo $html->link('dois', array('controller' =>'resources' , 'action' => 'doi_codes'));?></td>
			<td>(list all registered doi codes in this repository)</td>
		</tr>
	</table>
