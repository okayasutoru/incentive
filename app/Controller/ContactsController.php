<?php
class ContactsController extends AppController{
	
	//使用モデルの設定
	public $uses = array('Contact');

	//beforeRenderコールバック
	public function beforeRender() {

		//フォーム選択用リスト
		$this->set('sexList', $this->Contact->MtrSex->find('list'));
		$this->set('ageList', $this->Contact->MtrAge->find('list'));
	}


        public function contact() {
        }
        public function done() {
                $timestamp = time();
                $adress = 'okayasu.toru@gmail.com';
                $output = date("Y年m月d日 H時i分s秒", $timestamp). 'で'. $adress. 'にincentiveからメールを送信しました';
                echo $output;

                mail($adress, 'cron件名（subject）', $output);
	}
	public function index() {

		if (!empty($this -> request -> data)) {
			
			if ($this -> request -> data[$this -> Contact -> alias]['confirmed']) {
				
				if ($this -> Contact -> saveAll($this -> request -> data)) {
					$this -> redirect(array('action' => 'done'));

				}else{
					$this -> request -> data[$this -> Contact -> alias]['confirmed'] = false;
					$this -> Session -> setFlash('登録を失敗しました');
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
	
	public function show(){}
//	public function done(){

//	}
}
