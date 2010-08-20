<?php

class AdditionalTitle extends AppModel {
    var $name = 'AdditionalTitle';
    var $belongsTo = array ('Resource','TitleLanguage','TitleType');
}

?>
