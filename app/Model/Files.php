<?php

App::uses('AppModel', 'Model');

class Files extends AppModel {
	
	public $useTable = 'files';

    public $name = "Customized";
    public $primaryKey = 'id';
}

?>