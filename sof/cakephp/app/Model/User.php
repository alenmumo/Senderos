<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{
	public $hasOne = 'Wishlist'; //un ususario tiene una wishlist que le pertenece
    public $validate = array
    (
        'username' => array
        (
			'rule1' => array
            (
				'rule' => array('notEmpty')			
			),
			'rule2' => array
            (
				'rule' => array('isUnique'),
				'message' => 'The username is already used'
			),
            'rule3' => array
            (
                'rule' => array('between', 6, 100),
                'message' => 'Minimum 6 characters long'
            )
        ),
		'password' => array
        (
            'rule1' => array
            (
                'rule' => array('notEmpty')
            ),
            'rule2' => array
            (
                'rule' => array('between', 8, 100),
                'message' => 'Minimum 8 characters long'
            )
		),
		'name' => array
        (
            'rule1' => array
            (
                'rule' => array('notEmpty')
            ),
            'rule2' => array
            (
                'rule' => array('between', 2, 100),
                'message' => 'Minimum 2 characters long'
            )
	    ),
	    'lastname' => array
        (
            'rule1' => array
            (
                'rule' => array('notEmpty')
            ),
            'rule2' => array
            (
                'rule' => array('between', 2, 100),
                'message' => 'Minimum 2 characters long'
            )
		),
        'email' => array
        (
            'rule1' => array
            (
                'rule' => array('notEmpty')
            ),
            'rule2' => array
            (
                'rule' => 'email',
                'message' => 'Invalid email'
            ),
            'rule3' => array
            (
                'rule' => array('isUnique'),
                'message' => 'The email is already used'
            )
        ),
		'country' => array
        (
            'rule1' => array
            (
                'rule' => array('notEmpty')
            )
		),
		'role' => array
        (
			'rule' => array('inList', array('admin', 'cust')),
			'message' => 'Please enter a valid role',
			'allowEmpty' => false
		)
    );

    public function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password']))
        {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
}