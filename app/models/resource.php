<?php

class Resource extends AppModel {
    var $name = 'Resource';
    var $belongsTo = array ('Publisher' => array ('className'=>'Publisher','foreignKey'=>'publisher_id'),'CoPublisher' => array ('className'=>'Publisher','foreignKey'=>'co_publisher_id'),'DoiMode','DoiStructuralType','ImprintName','NotificationType','ProductForm','PublicationCountry','RecordType','RegistrationAuthority','RegistrantName','TitleType','TitleLanguage','SeriesIdentifier','RelationCode','RelationIdentifier');
    var $hasMany = array ('AdditionalTitle');
    var $hasAndBelongsToMany = array ('Contributor','Language','Owner');
}

?>
