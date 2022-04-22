<?php

Class model_article Extends model_base {
	
	public $id;
	public $title;
	public $small_text;
	public $date_create;
        public $image_path;
	
	public function fieldsTable(){
		return array(
			
			'id' => 'Id',
			'title' => 'Title',
			'small_text' => 'Small Text',
			'date_create' => 'Date Create',
                        'image_path' => 'Image Path',

		);
	}
	
}