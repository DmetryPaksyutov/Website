<?php

Class Controller_Forum  Extends Controller_Base {
	
	public $layouts = "first_layouts";
	
	function index() {
            $PageIndex = (isset($_GET['page'])) ? (int)$_GET['page'] : false;
            
            if($PageIndex){
                $begin = ((int)$PageIndex - 1) * 10 + 1;
                $end = (int)$PageIndex * 10;

		$select = array(
		'where' => "id >= $begin AND id <= $end"
		);
		$model = new Model_Topic($select);
		$topics = $model->getAllRow();
            }
		
		$this->template->vars('topics', $topics);
		$this->template->view('index');
	}
        
        function find() {
            $findText = (isset($_POST['find'])) ? $_POST['find'] : false;
            
            if ($findText) {
               $select = array(
		'where' => "title LIKE  %$findText%"
		);
		$model = new Model_Topic($select);
		$topics = $model->getAllRow(); 
            }
            else {
                $topics = array();
            }
            
            $this->template->vars('topics', $topics);
            $this->template->view('index');
        }
        
        function create() {
            $name_author = (isset($_POST['name'])) ? $_POST['name'] : false;
            $email_author = (isset($_POST['email'])) ? $_POST['email'] : false;
            $title = (isset($_POST['title'])) ? $_POST['title'] : false;
            $text = (isset($_POST['text'])) ? $_POST['text'] : false;
            $errors = array(
                "name" => false,
                "email" => false,
                "title" => false,
                "text" => false,
                "other" => false,
            );
            $isErrors = false;
            
            if (!$name_author) {
                $errors['name'] = true;
                $isErrors = true;
            }
            if (!$email_author) {
                $errors['email'] = true;
                $isErrors = true;
            }
            if (!$title) {
                $errors['title'] = true;
                $isErrors = true;
            }
            if (!$text) {
                $errors['text'] = true;
                $isErrors = true;
            }
            
            if ($isErrors) {
                $this->template->vars('errors', $errors);
                $this->template->view('create');
            }
            else {
                $modelTopic = Model_Topic();
                $modelTopic->name_author = $name_author;
                $modelTopic->email_author = $email_author;
                $modelTopic->text = $text;
                $modelTopic->title = $title;
                $modelTopic->count_answers = 0;
                $result = $modelTopic->save();
                
                $id = (isset($result->id)) ? (int)$result->id : false;
                if (!id) {
                    $errors['other'] = true;
                    $this->template->vars('errors', $errors);
                    $this->template->view('create');
                }
                else {
                    header('Location: /topic/?id=' . $id);
                }
                
            }


        }
	
}