<?php

App::uses('AppModel', 'Model');

class NewsVideo extends AppModel {
	
	public $useTable = 'news_video';

    public $name = "NewsVideo";
    public $primaryKey = 'id';
}

?>