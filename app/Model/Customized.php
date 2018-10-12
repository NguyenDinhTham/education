<?php

App::uses('AppModel', 'Model');

class Customized extends AppModel {
	
	public $useTable = 'custommized';

    public $name = "Customized";
    public $primaryKey = 'id';
}

?>