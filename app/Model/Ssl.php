<?php

class Ssl extends AppModel{

	public $belongsTo = array(
		'Domain');

		public $validate = array(
			'c_authority' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
			'csr' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
			'certificate' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
			'domain_id' => array(
					'rule' => 'notEmpty',
					'message' => '何も入力されていません',
				),
		);

	public $actsAs = array(
		'Upload.Upload' => array(
			'csr' => array(
				'fields' => array(
					'dir' => 'photo_dir',
				),
				'thumbnailSizes' => array(
					'thumb200' => '200w',
				),
				'path' => '{ROOT}{DS}webroot{DS}files{DS}{field}{DS}',
	            'thumbnailMethod' => 'php', // GD利用
	            'thumbnailName' => 'comThumbnail', // サムネイル名を指定
	            'thumbnailType' => 'png', // サムネイルの拡張子をpngに処理
	        ),
			'certificate' => array(
				'fields' => array(
					'dir' => 'photo_dir',
				),
				'thumbnailSizes' => array(
					'thumb200' => '200w',
				),
				'path' => '{ROOT}{DS}webroot{DS}files{DS}{field}{DS}',
	            'thumbnailMethod' => 'php', // GD利用
	            'thumbnailName' => 'comThumbnail', // サムネイル名を指定
	            'thumbnailType' => 'png', // サムネイルの拡張子をpngに処理
	        ),
		),
	);
}
