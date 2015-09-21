<?php

class Customer extends AppModel{

	public $hasMany = array(
		'Domain' => array(
			'className' => 'Domain',
			'foreignkey' => 'customer_id',
			),
		);

		public $validate = array(
			'name' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
			'email' => array(
				array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
				array(
					'rule' => 'email',
					'message' => 'メールアドレスを記入してください',
				),
			),
			'company' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
			'position' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
		);
}
