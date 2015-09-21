<?php

class Contact extends AppModel{

	public $belongsTo = array(
		'MtrSex',
		'MtrAge'
	);

	public $hasAndBelongsToMany = array(
		'MtrFavolite'
	);

	public $validate = array(
		'name' => array(
			array(
				'rule' => 'notEmpty',
				'message' => 'お名前は必ずご記入ください'
				),
			array(
				'rule' => array('maxLength', 200),
				'message' => 'お名前が長すぎます'
				),
			),
		'email' => array(
			array(
				'rule' => 'notEmpty',
				'message' => 'メールアドレスは必ずご記入ください'
				),
			array(
				'rule' => array('maxLength', 200),
				'message' => 'メールアドレスが長すぎます'
				),
			array(
				'rule' => 'email',
				'message' => '有効なメールアドレスを入力してください'
				),
			),
		'mtr_sex_id' => array(
			array(
				'rule' => 'notEmpty',
				'message' => '性別を選んでください'
				),
			),
		'mtr_age_id' => array(
			array(
				'rule' => 'notEmpty',
				'message' => '性別を選んでください'
				),
			),
		'content' => array(
			array(
				'rule' => 'notEmpty',
				'message' => 'お問い合わせ内容をご入力ください'
				),
			array(
				'rule' => array('maxLength', 4000),
				'message' => '文字数が多すぎます'
				)
			)
		);


}









