<?php

Class Model_Answer Extends Model_Base {
	
	public $id;
	public $name;
	public $text;
        public $id_source;
	
	public function fieldsTable(){
		return array(
			
                    'id' => 'Id',
                    'name' => 'Name',
                    'text' => 'Text',
                    'id_source' => 'Id Source',

		);
	}
	
}