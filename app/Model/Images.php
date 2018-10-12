<?php

App::uses('AppModel', 'Model');

class Images extends AppModel {
	
	public $useTable = 'images';

    public $name = "Images";
    public $primaryKey = 'id';
}

?>