<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	
	public $useTable = 'user';

    public $name = "User";
    public $primaryKey = 'id';
    
	public $validate = array(
			'email' => array(
                'required' => array(
                    'rule' => array('notBlank'),
                    'message' => 'A email address is required'
                )
			),
			'username' => array(
				'required' => array(
						'rule' => array('notBlank'),
						'message' => 'A username is required'
				),
				'between' => array(
						'rule'    => array('lengthBetween', 3, 20),
						'message' => 'username is between 3 to 20 characters'
				),
				'unique' => array(
					'rule' => 'uniqueUsername',
					'message' => 'Error! This username already exists.',
					'on' => array('create','update')
				)
			),
			'password' => array(
                'required' => array(
                    'rule' => array('notBlank'),
                    'message' => 'A password is required',
                    'on' => 'create'
                ),
                'between' => array(
                    'rule'    => array('lengthBetween', 6, 20),
                    'message' => 'Password is between 6 to 20 characters'
                )
            ),
            'confirm_password' => array(
                'compare'    => array(
                    'rule'    => array('validate_passwords'),
                    'message' => 'Password and confirm password do not match!',
                )
            )
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
					$this->data[$this->alias]['password']
			);
		}
		return true;
	}

	public function uniqueUsername() {
		return ($this->find('count', array('conditions' =>array($this->alias . '.username' => $this->data[$this->alias]['username'], $this->alias . '.username IS NOT NULL'))) == 0);
	}

    public function uniqueEmail() {
        return ($this->find('count', array('conditions' =>array($this->alias . '.email' => $this->data[$this->alias]['email'], $this->alias . '.email IS NOT NULL'))) == 0);
    }

	public function uniquePhone() {
		return ($this->find('count', array('conditions' =>array($this->alias . '.phone' => $this->data[$this->alias]['phone'], $this->alias . '.phone IS NOT NULL'))) == 0);
	}
        
    public function validate_passwords() {
        return $this->data[$this->alias]['password'] === $this->data[$this->alias]['confirm_password'];
    }
}

?>