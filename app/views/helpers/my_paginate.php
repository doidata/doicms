<?
App::import('Helper', 'Paginator');
class MyPaginateHelper extends PaginatorHelper{
	function topLinks(){
		$str=$this->counter(array('format' => __('%start%-%end%', true)));
		$str.=$this->next(__('next 100', true).' >>', array(), null, array('class' => 'disabled'));
		return $str;

	}
}
?>