<?php

Class Controller_Index Extends Controller_Base {
	
	
	public $layouts = "first_layouts";
	
	
	function index() {
		$select = array(
				'where' => "id >= 1 AND id <= 3"
			);
		$model = new Model_Article($select);
		$articles = $model->getAllRow();
                
                $this->template->vars('articles', $articles);
		$this->template->view('index');
	}
	
}