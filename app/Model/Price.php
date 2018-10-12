<?php

App::uses('AppModel', 'Model');

class Price extends AppModel {
	
	public $useTable = 'price';

    public $name = "Price";
    public $primaryKey = 'id';
}

?>