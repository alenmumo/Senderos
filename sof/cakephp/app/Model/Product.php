<?php
/**
 * Created by PhpStorm.
 * User: Erick
 * Date: 09/10/14
 * Time: 12:40 AM
 */

class Product extends AppModel
{
/*The $validate array tells CakePHP how to validate your data when the save() method is called.*/
	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
			'rule' => 'isUnique',
            'message' => 'The name is already used',
			'rule' => array('minLength', 1)
        ),
        'genre' => array(
            'rule' => 'notEmpty'
        ),
		'console' => array(
            'rule' => 'notEmpty'
        ),
		'release_year' => array(
            'rule' => 'notEmpty'
        ),
		'price' => array(
            'rule' => 'notEmpty'
        ),
		'description' => array(
            'rule' => 'notEmpty'
        ),
		'amount' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>