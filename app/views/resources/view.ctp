<div id="resource_view">
<h2><?php echo $resource['Resource']['title']; ?></h2>
<fieldset>
	<legend>Title Composite</legend>
	<table>
		<tr>
			<td class="table_data_right"><?php __('Title'); ?></td>
			<td colspan="5"><?php echo $resource['Resource']['title']; ?></td>
		</tr>
		<tr>
			<td class="table_data_right"> <?php __('Subtitle'); ?></td>
			<td colspan="5"><?php echo $resource['Resource']['subtitle']; ?></td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('Title Type'); ?></td>
			<td >	<?php echo $resource['TitleType']['name'];?></td>
			<td class="table_data_right"><?php __('Title Language'); ?></td>
			<td colspan="2"><?php echo $resource['TitleLanguage']['name']; ?></td>
		</tr>
	</table>


	<?php
	if(!empty($resource['AdditionalTitle']))
		foreach ($resource['AdditionalTitle'] as $additionalTitle):
	?>
	<table>
		<tr>
			<td class="table_data_right"><?php __('Title'); ?></td>
			<td colspan="5"><?php echo $additionalTitle['title']; ?></td>
		</tr>
		<tr>
			<td class="table_data_right"> <?php __('Subtitle'); ?></td>
			<td colspan="5"><?php echo $additionalTitle['subtitle']; ?></td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('Title Type'); ?></td>
			<td >	<?php echo $additionalTitle['TitleType']['name']; ?></td>
			<td class="table_data_right"><?php __('Title Language'); ?></td>
			<td colspan="2"><?php echo $additionalTitle['TitleLanguage']['name'] ?></td>
		</tr>
	</table>

	<?php endforeach;?>
</fieldset>
<fieldset>
<legend>Digital Object Identifier</legend>
	<table>
		<tr>
			<td class="table_data_right"><?php __('Doi'); ?></td>
			<td colspan="5"><?php echo $resource['Resource']['doi']; ?></td>
		</tr>
		<tr>
			<td class="table_data_right"> <?php __('URL'); ?></td>
			<td colspan="5">	<?php echo $html->link($resource['Resource']['doiwebsitelink'],$resource['Resource']['doiwebsitelink']); ?></td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('Doi Structural Type'); ?></td>
			<td ><?php echo $resource['DoiStructuralType']['name']; ?></td>
			<td class="table_data_right"><?php __('Doi Mode'); ?></td>
			<td colspan="2"><?php echo $resource['DoiMode']['name']; ?></td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('Product Form'); ?></td>
			<td ><?php echo $resource['ProductForm']['name']; ?></td>
			<td class="table_data_right"><?php __('Record Type'); ?></td>
			<td colspan="2"><?php echo $resource['RecordType']['name']; ?></td>
		</tr>
	</table>
</fieldset>
<fieldset>
<legend>Contributors</legend>
	<?php if (!empty($resource['Contributor'])):?>
	<table>
	<?php foreach ($resource['Contributor'] as $contributor):?>
	<tr>
			<td class="table_data_right"><?php __('Name'); ?></td>
			<td ><?php echo $contributor['ContributorName']['name'];?></td>
			<td class="table_data_right"><?php __('Role'); ?></td>
			<td >	<?php echo $contributor['ContributorRole']['name'];?></td>
			<td class="table_data_right"><?php __('Seq. No.'); ?></td>
			<td ><?php echo $contributor['contributor_sequence'];?></td>
	</tr>
	<?php endforeach; ?>
	</table>
	<?php endif;?>
</fieldset>
<fieldset>
<legend>Languages</legend>
	<?php if (!empty($resource['Language'])):?>
	<table>
	<?php foreach ($resource['Language'] as $language):?>
	<tr>
			<td class="table_data_right"><?php __('Name'); ?></td>
			<td ><?php echo $language['name'];?></td>
			<td class="table_data_right"><?php __('Role'); ?></td>
			<td colspan="2"><?php echo $language['rolename'];?></td>
	</tr>
	<?php endforeach; ?>
	</table>
	<?php endif;?>
</fieldset>
<fieldset>
<legend>Copyright Owners</legend>
	<?php if (!empty($resource['Owner'])):?>
	<table>
	<?php foreach ($resource['Owner'] as $owner):?>
	<tr>
			<td class="table_data_right"><?php __('Name'); ?></td>
			<td ><?php echo $owner['name'];?></td>
			<td class="table_data_right"><?php __('Status'); ?></td>
			<td colspan="2"><?php echo $owner['status'];?></td>
	</tr>
	<?php endforeach; ?>
	</table>
	<?php endif;?>
</fieldset>
<fieldset>
<legend>Context</legend>
	<table>
		<tr>
			<td class="table_data_right"><?php __('Publisher'); ?></td>
			<td ><?php echo $resource['Publisher']['name'];?></td>
			<td class="table_data_right"><?php __('co-publisher'); ?> </td>
			<td colspan="3"><?php echo $resource['CoPublisher']['name'];?> </td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('year'); ?></td>
			<td >	<?php echo substr($resource['Resource']['publicationdate'],0,4);?></td>
			<td class="table_data_right"><?php __('publ. date'); ?></td>
			<td ><?php echo $resource['Resource']['publicationdate'];?></td>
			<td class="table_data_right"><?php __('publication country'); ?></td>
			<td ><?php echo $resource['PublicationCountry']['name'];?></td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('project'); ?></td>
			<td ><?php echo $resource['ImprintName']['name'];?></td>
			<td class="table_data_right"><?php __('series'); ?></td>
			<td colspan="3"><?php echo $resource['SeriesIdentifier']['name'];?></td>
		</tr>
		<tr>
			<td class="table_data_right"><?php __('related product'); ?></td>
			<td><?php echo $resource['RelationCode']['name'];?></td>
			<td colspan="2"><?php echo $resource['RelationIdentifier']['name'];?></td>
			<td colspan="2"><?php echo $resource['Resource']['related_product'];?></td>

		</tr>
	</table>
</fieldset>
<fieldset>
<legend>Meta</legend>
	<table>
		<tr>
			<td class="table_data_right"><?php __('keywords'); ?></td>
			<td colspan="5"><?php echo $resource['Resource']['subjectheadingtext'];?></td>
		</tr>
		<td class="table_data_right"><?php __('registrant'); ?></td>
			<td ><?php echo $resource['RegistrantName']['name'];?></td>
			<td class="table_data_right"><?php __('registr. authority'); ?></td>
			<td colspan="2">	<?php echo $resource['RegistrationAuthority']['name'];?></td>
		</tr>
		</tr>
	</table>
</fieldset>
</div>
