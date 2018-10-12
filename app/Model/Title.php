<?php

App::uses('AppModel', 'Model');

class Title extends AppModel {
	
	public $useTable = 'title';

    public $name = "Title";
    public $primaryKey = 'id';
}

?>