<?php

App::uses('Component', 'Controller');

class AdminAppServiceComponent extends Component {
	
	public $components = array('AppService');

	public $AdminAppService;

	/**	@var Model */
	public $User;

	/**	@var Model */
	public $UserDetail;
	
	public function initialize(Controller $controller) {
		
        //Register Model
        $this->User = ClassRegistry::init('User');

	}

}

?>
