<?php

Class Controller_Index Extends Controller_Base {
	
	
	public $layouts = "first_layouts";
	
	
	function index() {
		$userInfo = array (
			'id' => 'Id',
			'first_name' => 'First name',
			'last_name' => 'Last name'
		);
		$this->template->vars('userInfo', $userInfo);
		$this->template->view('index');
	}
	
}