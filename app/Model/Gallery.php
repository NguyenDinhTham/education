<?php

App::uses('AppModel', 'Model');

class Gallery extends AppModel {
	
	public $useTable = 'gallery';

    public $name = "Gallery";
    public $primaryKey = 'id';
}

?>