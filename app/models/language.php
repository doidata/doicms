<?php

class Language extends AppModel {
    var $name = 'Language';
    var $hasAndBelongsToMany = 'Resource';
}

?>
