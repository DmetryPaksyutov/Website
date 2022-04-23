<?php

Class Controller_Article  Extends Controller_Base {
	
	public $layouts = "first_layouts";
	
	function index() {
		$idArticle = (isset($_GET['id'])) ? (int)$_GET['id'] : false;
                $ArticleViewPath = $idArticle . DS . 'index';
                
                $isArticle = false;
		if(is_dir(SITE_PATH . 'views' . DS . 'layouts' . DS . $ArticleViewPath)){
			$isArticle = true;
		}
		
                if (isArticle) {
                   $this->template->view($ArticleViewPath); 
                }
                else {
                    $this->template->view('notArticle' . DS . 'index');
                }
		
	}
	
}