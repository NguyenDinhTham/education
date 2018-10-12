<?php

App::uses('AppModel', 'Model');

class Star extends AppModel {
	
	public $useTable = 'star';

    public $name = "Star";
    public $primaryKey = 'id';
}

?>