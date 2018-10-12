<?php

App::uses('AppModel', 'Model');

class Subcategories extends AppModel {
	
	public $useTable = 'subcategories';

    public $name = "Subcategories";
    public $primaryKey = 'id';
}

?>