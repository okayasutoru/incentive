<?php

class CustomersController extends AppController{

	public $uses=array('Customer', 'Domain', 'Ssl');

	public function index(){

	}

	public function show(){

		$customers=$this->Customer->find('all', array(
			'recursive'=>1,
			'order'=>array('Customer.id'=>'ASC'),
			));

		$this->set(compact('customers'));
	}

	public function add(){
		
		if(!empty($this->request->data)){
			
			if($this->Customer->save($this->request->data)){
				$this->Session->setFlash('顧客情報を追加しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-success'
					),
					'flash_position'
				);
			}else{
				$this->Session->setFlash('顧客情報の追加に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),
					'flash_position'
				);
			}
		}
	}

	public function pre_edit(){

		$customers=$this->Customer->find('all', array(
			'recursive'=>1,
			'order'=>array('Customer.id'=>'ASC'),
			));

		$this->set(compact('customers'));
	}

	public function edit($id){

		$customer=$this->Customer->findById($id);

		$this->set(compact('customer'));

		if($this->request->isPost()||$this->request->isPut()) {
			$this->Customer->id=$id;

			if($this->Customer->save($this->request->data)) {
				$this->Session->setFlash('顧客情報を編集しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-success'
					),
					'flash_position'
				);
				$this->redirect(array('action'=>'pre_edit'));

			} else {
				$this->Session->setFlash('顧客情報の編集に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),
					'flash_position'
				);
			}

		}else {
			$this->request->data=$this->Customer->findById($id);

			if(empty($this->request->data)) {
				$this->Session->setFlash('顧客情報が見つかりませんでした','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-info'
					),
					'flash_position'
				);
			}
		}
	}

	public function delete($id=null){

		$this->Customer->id=$id;

	    if($this->Customer->delete()){
	        $this->Session->setFlash('顧客情報を削除しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-info'
					),
					'flash_position'
				);
	        $this->redirect(array('action'=>'pre_edit'));
	    }else{
	        $this->Sessin->setFlash('顧客情報の削除に失敗しました','alert',array(
					'plugin'=>'BoostCake',
					'class'=>'alert-danger'
					),
					'flash_position'
				);
	    }
	}
}
