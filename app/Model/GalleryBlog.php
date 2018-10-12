<?php

App::uses('AppModel', 'Model');

class GalleryBlog extends AppModel {
	
	public $useTable = 'gallery_blog';

    public $name = "GalleryBlog";
    public $primaryKey = 'id';
}

?>