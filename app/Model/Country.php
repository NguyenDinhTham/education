<?php

App::uses('AppModel', 'Model');

class Country extends AppModel {
	
	public $useTable = 'countrys';

    public $name = "Country";
    public $primaryKey = 'id';
}

?>