<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Roles $Roles
 */
class User extends AppModel {




	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'roles_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public function beforeSave($options = array()) {
    		if (isset($this->data[$this->alias]['password'])) {
        	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    		}
    		return true;
	}
}
?>
