<?php

App::uses('AppModel', 'Model');

class Contact extends AppModel {
	
	public $useTable = 'contact';

    public $name = "Contact";
    public $primaryKey = 'id';
}

?>