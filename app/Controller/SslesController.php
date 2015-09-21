<?php

App::uses('File','Utility');
App::uses('AppShell','Console/Command');
App::uses('GenerateShell','Console/Command');

class SslesController extends AppController{

	public $uses=array('Customer', 'Domain', 'Ssl');

	public function index(){

	}

	public function domain_search(){

		$domains=$this->Domain->find('all', array(
			'recursive'=>0,
			'order'=>array('Domain.id'=>'ASC'),
			));

		$this->set(compact('domains'));
	}

	public function show(){

		$ssles=$this->Ssl->find('all', array(
			'recursive'=>0,
			'order'=>array('Ssl.id'=>'ASC'),
			));

		$this->set(compact('ssles'));
	}

	public function add_upload($id = null){

		if(!empty($this->request->data)){

			if($this->Ssl->save($this->request->data)){
				$this->Session->setFlash('SSL情報を追加しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-success'
					),'flash_position'
				);
				$this->redirect(array());
			}else{
				$this->Session->setFlash('SSL情報の追加に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),'flash_position'
				);
			}
		}

		$domains=$this->Domain->find('all', array(
			'recursive'=>0,
			'order'=>array('Domain.id'=>'ASC'),
			));
		$now_id=$this->Domain->findById($id);

		$this->set(compact('domains','now_id'));
	}

	public function add_create($id = null) {

		if(!empty($this->request->data)){

			$fname = $this->request->data['Ssl']['file_name'];
			$oname = $this->request->data['Ssl']['org_name'];

$script = <<<EOF
#!/bin/bash
C="JP"   # Country Name
ST="stname"  # State or Province Name
L="lname"   # Locality Name
O=$oname   # Organization Name
OR="orname"  # Organizational Unit Name
CN=$fname  # Common Name
E="hoge@example.com"   # Email Address

openssl genrsa 2048 > \$CN.key
expect - <<EOS
spawn openssl req -new -key \${CN}.key -out \${CN}.csr
expect "Country Name (2 letter code)*:"
send   "\${C}\n"
expect "State or Province Name (full name)*:"
send   "\${ST}\n"
expect "Locality Name (eg, city)*:"
send   "\${L}\n"
expect "Organization Name (eg, company)*:"
send   "\${O}\n"
expect "Organizational Unit Name*:"
send   "\${OR}\n"
expect "Common Name*:"
send   "\${CN}\n"
expect "Email Address*:"
send   "\${E}\n"
expect "A challenge password*:"
send   "\n"
expect "An optional company name*:"
send   "\n"
sleep 0.1
EOS

EOF;

if (exec($script)) {
	echo 'good';
}else{
	echo 'bad';
}
		  	// if(exec(getcwd().'/1.php')){
		  	// 	echo 'good';
		  	// }else{
		  	// 	echo 'bad';
		  	// }

		  	// if (file_exists('baka.key')) {
		  	// 	exec('mkdir webroot/files/baka');
		  	// 	exec('mv baka.key /var/www/cakephp/kiroku/app/webroot/files/baka');
		  	// }
		}

		$domains=$this->Domain->find('all', array(
			'recursive'=>0,
			'order'=>array('Domain.id'=>'ASC'),
			));
		$now_id=$this->Domain->findById($id);

		$this->set(compact('domains','now_id'));
	}

	public function pre_edit(){

		$ssles=$this->Ssl->find('all', array(
			'recursive'=>0,
			'order'=>array('Ssl.id'=>'ASC'),
			));

		$this->set(compact('ssles'));
	}

	public function edit($id){

		$ssl=$this->Ssl->findById($id);

		$this->set(compact('ssl'));

		if($this->request->isPost()||$this->request->isPut()) {
			$this->Ssl->id=$id;

			if($this->Ssl->save($this->request->data)) {
				$this->Session->setFlash('SSL情報を編集しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-success'
				),'flash_position'
				);
				$this->redirect(array('action'=>'pre_edit'));

			} else {
				$this->Session->setFlash('SSL情報の編集に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),'flash_position'
				);
			}

		}else {
			$this->request->data=$this->Ssl->findById($id);

			if(empty($this->request->data)) {
				$this->Session->setFlash('SSL情報が見つかりませんでした','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-info'
					),'flash_position'
				);
			}
		}
	}

	public function delete($id=null){

		$this->Ssl->id=$id;

	    if($this->Ssl->delete()){
	        $this->Session->setFlash('SSL情報を削除しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-info'
					),'flash_position'
	        );
	        $this->redirect(array('action'=>'pre_edit'));
	    }else{
	        $this->Sessin->setFlash('SSL情報の削除に失敗しました','alert',array(
						'plugin'=>'BoostCake',
						'class'=>'alert-danger'
						),'flash_position'
					);
	    }
	}
}
