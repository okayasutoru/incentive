<?php

class DomainsController extends AppController{

	public $uses=array('Customer', 'Domain', 'Ssl');

	public function index(){

	}

	public function show(){

		$domains=$this->Domain->find('all', array(
			'recursive'=>0,
			'order'=>array('Domain.id'=>'ASC'),
			));

		$this->set(compact('domains'));
	}

	public function add(){

		if(!empty($this->request->data)){

			if($this->Domain->save($this->request->data)){
				$this->Session->setFlash('ドメイン情報を追加しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-success'
					),'flash_position'
				);

			}else{
				$this->Session->setFlash('ドメイン情報の追加に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),'flash_position'
				);
			}
		}
	}

	public function pre_edit(){

		$domains=$this->Domain->find('all', array(
			'recursive'=>0,
			'order'=>array('Domain.id'=>'ASC'),
			));

		$this->set(compact('domains'));
	}

	public function edit($id){

		$domain=$this->Domain->findById($id);

		$this->set(compact('domain'));

		if($this->request->isPost()||$this->request->isPut()) {
			$this->Domain->id=$id;

			if($this->Domain->save($this->request->data)) {
				$this->Session->setFlash('ドメイン情報を編集しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-success'
					),'flash_position'
				);
				$this->redirect(array('action'=>'pre_edit'));

			} else {
				$this->Session->setFlash('ドメイン情報の編集に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),'flash_position'
				);
			}

		}else {
			$this->request->data=$this->Domain->findById($id);

			if(empty($this->request->data)) {
				$this->Session->setFlash('ドメイン情報が見つかりませんでした','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-info'
					),'flash_position'
				);
			}
		}
	}

	public function delete($id=null){

		$this->Domain->id=$id;

	    if($this->Domain->delete()){
	        $this->Session->setFlash('ドメイン情報を削除しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-info'
					),'flash_position'
	        );
	        $this->redirect(array('action'=>'pre_edit'));
	    }else{
	        $this->Sessin->setFlash('ドメイン情報の削除に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),'flash_position'
	        );
	    }
	}
}
