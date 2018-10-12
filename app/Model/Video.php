<?php

App::uses('AppModel', 'Model');

class Video extends AppModel {
	
	public $useTable = 'video';

    public $name = "Video";
    public $primaryKey = 'id';
}

?>