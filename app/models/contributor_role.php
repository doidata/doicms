<?php

class ContributorRole extends AppModel {
    var $name = 'ContributorRole';
    var $hasMany = array ('Resource','Contributor');
}

?>
