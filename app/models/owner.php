<?php

class Owner extends AppModel {
    var $name = 'Owner';
    var $hasAndBelongsToMany = array ('Resource');
}

?>
