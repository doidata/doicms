<?php

class TitleType extends AppModel {
    var $name = 'TitleType';
    var $hasMany = array ('Resource','AdditionalTitle');
}

?>
