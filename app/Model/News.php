<?php

App::uses('AppModel', 'Model');

class News extends AppModel {
	
	public $useTable = 'news';

    public $name = "News";
    public $primaryKey = 'id';
}

?>