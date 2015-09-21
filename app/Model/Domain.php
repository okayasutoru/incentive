<?php

class Domain extends AppModel{

	public $belongsTo = array(
		'Customer');

	public $hasMany = array(
		'Ssl' => array(
			'className' => 'Ssl',
			'foreign_key' => 'domain_id',
			));

	public $validate = array(
		'name' => array(
				'rule' => 'notEmpty',
				'message' => '何も入力されていません',
			),
		'site' => array(
				'rule' => 'notEmpty',
				'message' => '何も入力されていません',
			),
		'price' => array(
				'rule' => 'notEmpty',
				'message' => '何も入力されていません',
			),
	);
}
