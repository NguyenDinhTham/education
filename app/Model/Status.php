<?php

App::uses('AppModel', 'Model');

class Status extends AppModel {
	
	public $useTable = 'status';

    public $name = "Status";
    public $primaryKey = 'id';
}

?>