<?php

App::uses('AppModel', 'Model');

class Itinerary extends AppModel {
	
	public $useTable = 'itinerary';

    public $name = "Itinerary";
    public $primaryKey = 'id';
}

?>