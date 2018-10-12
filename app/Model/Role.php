<?php

App::uses('AppModel', 'Model');

class Role extends AppModel {
	
	public $useTable = 'role';

    public $name = "Role";
    public $primaryKey = 'id';
}

?>