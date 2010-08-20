<?php

class TitleLanguage extends AppModel {
    var $name = 'TitleLanguage';
    var $hasMany = array ('Resource'=>array('className'=>'Resource','foreignKey'=>'title_language_id'),'AdditionalTitle'=>array('className'=>'AdditionalTitle','foreignKey'=>'title_language_id'));
}

?>
