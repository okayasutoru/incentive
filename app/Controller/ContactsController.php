<?php

class ContactsController extends AppController{

	public $uses = array('Contact');

	public $components = array('Session');

	// 入力画面
 	   public function index() {
    }
 
    // 確認画面
    	public function con() {
    }
 
    // 送信処理
    public function send() {
    }
 
    // 完了画面
    public function comp() {
    }


	public function index2(){

		if (!empty($this -> request -> data)) {
			
			if ($this -> request -> data[$this -> Contact -> alias]['confirmed']) {
				
				if ($this -> Contact -> saveAll($this -> request -> data)) {
					$this -> redirect(array('action' => 'done'));

				}else{
					$this -> request -> data[$this -> Contact -> alias]['confirmed'] = false;
					$this -> Session -> setFlash('お問い合わせ内容を保存できませんでした。恐れ入りますが、もう一度お試しください');
				}

			}else{

				//saveAllは、値をまとめて保存するためのモデルメソッドですが、2番目に配列で、validate => only を指定する事で保存処理をせずにバリデーションのみを実行できる
				if ($this -> Contact -> saveAll($this -> request -> data, array('validate' => 'only'))) {
					$this -> render('confirm');

				}else{
					$this -> Session -> setFlash('エラーがあります。入力内容をご確認ください');
				}
			}
		}
	}

	public function done(){

	}
}










