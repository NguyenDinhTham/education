<?php

App::uses('AppModel', 'Model');

class Nation extends AppModel {
	
	public $useTable = 'nation';

    public $name = "Nation";
    public $primaryKey = 'id';
}

?>