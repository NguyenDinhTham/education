<?php

App::uses('AppModel', 'Model');

class Meta extends AppModel {
	
	public $useTable = 'metas';

    public $name = "Meta";
    public $primaryKey = 'id';
}

?>