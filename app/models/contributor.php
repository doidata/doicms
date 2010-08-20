<?php
class Contributor extends AppModel {
    var $name = 'Contributor';
    var $belongsTo = array ('ContributorName','ContributorRole');
    var $hasAndBelongsToMany = 'Resource';


/*
	function afterFind($models){
		$this->Resource->bindModel(array('belongsTo'=>array('ImprintName')),false);
		foreach($models as &$model){
			if(!isset($model['Resource']))
				return $models;
			else
				foreach($model['Resource'] as &$res){
					$in=$this->Resource->ImprintName->findById($res['imprint_name_id']);
					$res['imprint_name']=$in['ImprintName']['name'];
				}
		}
		return $models;
	}
*/

}

?>
