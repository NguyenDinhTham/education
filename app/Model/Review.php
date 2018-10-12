<?php

App::uses('AppModel', 'Model');

class Review extends AppModel {
	
	public $useTable = 'review';

    public $name = "Review";
    public $primaryKey = 'id';
}

?>