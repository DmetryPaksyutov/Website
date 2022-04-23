<?php

Class Model_Article Extends Model_Base {
	
	public $id;
	public $title;
	public $date_create;
        public $image_path;
	
	public function fieldsTable(){
		return array(
			
			'id' => 'Id',
			'title' => 'Title',
			'date_create' => 'Date Create',
                        'image_path' => 'Image Path',

		);
	}
        
        
	
}