<?php

App::uses('AppModel', 'Model');

class NewImages extends AppModel {
	
	public $useTable = 'new_images';

    public $name = "NewImages";
    public $primaryKey = 'id';
}

?>