<?php
class ContactsController extends AppController{

        public function contact() {
        }
        public function email() {
                $timestamp = time();
                $adress = 'okayasu.toru@gmail.com';
                $output = date("Y年m月d日 H時i分s秒", $timestamp). 'で'. $adress. 'にincentiveからメールを送信しました';
                echo $output;

                mail($adress, 'cron件名（subject）', $output);
        }
}	
}

