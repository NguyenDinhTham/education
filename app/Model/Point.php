<?php

App::uses('AppModel', 'Model');

class Point extends AppModel {
	
	public $useTable = 'point';

    public $name = "Point";
    public $primaryKey = 'id';
}

?>