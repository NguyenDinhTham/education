<?php

App::uses('AppModel', 'Model');

class Blog extends AppModel {
	
	public $useTable = 'blog';

    public $name = "Blog";
    public $primaryKey = 'id';
}

?>