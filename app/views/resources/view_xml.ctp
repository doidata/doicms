<?php echo '<?xml version="1.0" encoding="utf-8"?>'."\n";?>
<ONIXDOIMonographicProductRegistrationMessage1  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.editeur.org/onix/DOIMetadata/1.1" xsi:schemaLocation="http://www.editeur.org/onix/DOIMetadata/1.1 http://www.medra.org/schema/onix/DOIMetadata/1.1/ONIX_DOIMetadata_1.1.xsd">
	<Header>
		<FromCompany>Christiane Zintzen</FromCompany>
		<FromPerson>Christiane Zintzen</FromPerson>
		<FromEmail>zintzen@gmail.com</FromEmail>
		<ToCompany>mEDRA</ToCompany>
		<SentDate>200809196</SentDate>
	</Header>
	<<?=$resource['RecordType']['name']; ?>>
		<NotificationType><?= $resource['NotificationType']['notificationtype'];?></NotificationType>
		<DOI><?= $resource['Resource']['doi'];?></DOI>
		<DOIWebsiteLink><?= $resource['Resource']['doiwebsitelink'];?></DOIWebsiteLink>
		<DOIStructuralType><?= $resource['DoiStructuralType']['name'];?></DOIStructuralType>
		<DOIMode><?= $resource['DoiMode']['name'];?></DOIMode>
		<RegistrantName><?= $resource['RegistrantName']['name'];?></RegistrantName>
		<RegistrationAuthority><?= $resource['RegistrationAuthority']['name'];?></RegistrationAuthority>
		<ProductForm><?= $resource['ProductForm']['code'];?></ProductForm>
		<Title language="<?= $resource['TitleLanguage']['code'];?>">
			<TitleType><?= $resource['TitleType']['code'];?></TitleType>
			<TitleText><?= htmlspecialchars($resource['Resource']['title']);?></TitleText>
			<Subtitle><?= htmlspecialchars($resource['Resource']['subtitle']);?></Subtitle>
		</Title>
		<?php foreach($resource['AdditionalTitle'] as $at):?>
		<Title language="<?= $at['TitleLanguage']['code'];?>">
			<TitleType><?= $at['TitleType']['code'];?></TitleType>
			<TitleText><?= $at['title'];?></TitleText>
			<Subtitle><?= $at['subtitle'];?></Subtitle>
		</Title>
		<?php endforeach;?>
		<?php foreach($resource['Contributor'] as $c):?>
		<Contributor>
			<SequenceNumber><?=$c['contributor_sequence'];?></SequenceNumber>
			<ContributorRole><?=$c['ContributorRole']['code'];?></ContributorRole>
			<? if ($c['ContributorName']['type']==1): ?>
			<PersonName><?=$c['ContributorName']['name'];?></PersonName>
			<?else:?>
			<CoporateName><?=$c['ContributorName']['name'];?></CoporateName>
			<?endif;?>
		</Contributor>
		<?php endforeach;?>
		<?php foreach($resource['Language'] as $l):?>
		<Language>
			<LanguageRole><?=$l['rolecode'];?></LanguageRole>
			<LanguageCode><?=$l['code'];?></LanguageCode>
		</Language>
		<?php endforeach;?>
		<Subject>
		<SubjectSchemeIdentifier><?= $resource['Resource']['subjectschemeidentifier'];?></SubjectSchemeIdentifier>
		<SubjectHeadingText><?= $resource['Resource']['subjectheadingtext'];?></SubjectHeadingText>
		</Subject>
		<ImprintName><?= $resource['ImprintName']['name'];?></ImprintName>
		<Publisher>
			<PublishingRole><?= $resource['Resource']['publisher_role'];?></PublishingRole>
			<PublisherName><?= $resource['Publisher']['name'];?></PublisherName>
		</Publisher>
		<Publisher>
			<PublishingRole><?= $resource['Resource']['co_publisher_role'];?></PublishingRole>
			<PublisherName><?= $resource['CoPublisher']['name'];?></PublisherName>
		</Publisher>
		<CountryOfPublication><?= $resource['PublicationCountry']['code'];?></CountryOfPublication>
		<PublicationDate><?= $resource['Resource']['publicationdate'];?></PublicationDate>
		<CopyrightStatement>
			<CopyrightYear><?= $resource['Resource']['copyrightyear'];?></CopyrightYear>
			<?php foreach($resource['Owner'] as $o):?>
			<CopyrightOwner>
			<? if ($o['type']==1): ?>
				<PersonName><?= $o['name'];?></PersonName>
			<?else:?>
				<CoporateName><?= $o['name'];?></CoporateName>
			<?endif;?>
			</CopyrightOwner>
			<?php endforeach;?>
		</CopyrightStatement>
		<RelatedProduct>
			<RelationCode><?php echo $resource['RelationCode']['code'];?></RelationCode>
			<ProductIdentifier>
				<ProductIDType><?php echo $resource['RelationIdentifier']['code'];?></ProductIDType>
				<IDValue><?php echo $resource['Resource']['related_product'];?></IDValue>
			</ProductIdentifier>
		</RelatedProduct>
	</<?=$resource['RecordType']['name'];?>>
</ONIXDOIMonographicProductRegistrationMessage1>