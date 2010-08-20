<?php

class Publisher extends AppModel {
    var $name = 'Publisher';
    var $hasMany = array ('Resource'=>array('className'=>'Resource','foreignKey'=>'publisher_id')
		,'Resource1'=>array('className'=>'Resource','foreignKey'=>'co_publisher_id'));
}

?>
