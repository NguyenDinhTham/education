<?php

App::uses('AppModel', 'Model');

class ConstDefine extends AppModel {
	
	public $useTable = 'const';

    public $name = "ConstDefine";
    public $primaryKey = 'id';
}

?>