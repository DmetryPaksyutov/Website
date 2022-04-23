<?php

Class Model_Topic Extends Model_Base {
	
	public $id;
	public $title;
        public $name_author;
        public $email_author;
	public $text;
        public $count_answers;
	
	public function fieldsTable(){
		return array(
			
                    'id' => 'Id',
                    'title' => 'Title',
                    'text' => 'Text',
                    'name_author' => 'Name Author',
                    'email_author' => 'Email Author',
                    'count_answers' => 'Count Answers',
		);
	}
	
}