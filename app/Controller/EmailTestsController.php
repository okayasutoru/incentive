<?php

App::uses( 'CakeEmail', 'Network/Email');
class EmailTestsController extends AppController{
    public function index(){
        echo 'メール送信テスト！';
    }
}
