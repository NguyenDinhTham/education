<?php

App::uses('AppModel', 'Model');

class Booking extends AppModel {
	
	public $useTable = 'booking';

    public $name = "Booking";
    public $primaryKey = 'id';
}

?>