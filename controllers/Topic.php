<?php

Class Controller_Topic  Extends Controller_Base {
	
	public $layouts = "first_layouts";
	
	function index() {
		$idTopic = (isset($_GET['id'])) ? (int)$_GET['id'] : false;
                
                $topicData = false;
                $answers = array();
                if ($idTopic) {
                    $selectTopic = array(
				'where' => "id = $idTopic"
			);
                    $modelTopic = new Model_Topic($selectTopic);
                    $topicData = $modelTopic->getOneRow();
                    
                    $selectAnswers = array(
				'where' => "id_source = $idTopic"
			);
                    $modelAnswer = new Model_Answer($selectAnswers);
                    $answers = $modelAnswer->getAllRow();
                       
                        
                }
                
                $errors = array(
                    "name" => false,
                    "text" => false,
                    "other" => false,
                 );
                $this->template->vars('topic', $topicData);
                $this->template->vars('answers', $answers);
                $this->template->vars('errors', $errors);
                $this->template->view('topic'); 

		
	}
        
        function answer() {
            $idTopic = (isset($_POST['id'])) ? (int)$_POST['id'] : false;
            $name = (isset($_POST['id'])) ? $_POST['name'] : false;
            $text = (isset($_POST['id'])) ? $_POST['text'] : false;
            
            $topicData = false;
            $answers = array();
            $errors = array(
                "name" => false,
                "text" => false,
                "other" => false,
            );
            
            if ($idTopic) {
                
                $selectTopic = array(
				'where' => "id = $idTopic"
			);
                $modelTopic = new Model_Topic($selectTopic);
                $topicData = $modelTopic->getOneRow();
                
                if ($name && $text) {
                    $modelAddAnswer = new Model_Ansver();
                    $modelAddAnswer->name = $name;
                    $modelAddAnswer->text = $text;
                    $modelAddAnswer->id_source = $idTopic;
                    $result = $modelAddAnswer->updete();
                    if ($result) {
                        $to = $topicData['email_author'];
                        $subject = "На вашу тему ответили!";
                        $message = "На вашу тему ответил " . $name . "\r\n";
                        mail($to, $subject, $message);
                    }
                    else {
                        $errors['other'] = true;
                    }
                }
                else {
                    if (!$name) {
                        $errors['name'] = true;
                    }
                    if (!$text) {
                        $errors['text'] = true;
                    }
                }
                
                $selectAnswers = array(
				'where' => "id_source = $idTopic"
			);
                $modelAnswer = new Model_Answer($selectAnswers);
                $answers = $modelAnswer->getAllRow();
            }
            
            $this->template->vars('topic', $topicData);
            $this->template->vars('answers', $answers);
            $this->template->vars('errors', $errors);
            $this->template->view('index');
        }
	
}