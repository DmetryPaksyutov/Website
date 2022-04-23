<?php

Class Controller_Articles  Extends Controller_Base {
	
	public $layouts = "first_layouts";
	
	function index() {
		/*$PageIndex = (isset($_GET['page'])) ? (int)$_GET['page'] : false;
		if($PageIndex){
                    $begin = ((int)$PageIndex - 1) * 10 + 1;
                    $end = (int)$PageIndex * 10;

			$select = array(
				'where' => "id >= $begin AND id <= $end"
			);*/
                    $select = array(
				'where' => "id > 0 ",
			);
                    $model = new Model_Article($select);
                    $articles = $model->getAllRow();
                       
		//}else{
		//	$articles = false;
		//}
		
		$this->template->vars('articles', $articles);
		$this->template->view('index');
	}
	
}