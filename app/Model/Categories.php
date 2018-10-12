<?php

App::uses('AppModel', 'Model');

class Categories extends AppModel {
	
	public $useTable = 'categories';

    public $name = "Categories";
    public $primaryKey = 'id';
}

?>