<?php

App::uses('CakeEmail','Network/Email');

class ReminderShell extends AppShell {

    public $uses = array('Domain');

    public function main() {
      $domains = $this->Domain->find('all',array(
        'recursive'=>-1,
      ));

      // $email = new CakeEmail();
      //
      // $email->transport('Mail');
      //
      // $email->from('yooska14@apu.ac.jp');
      // $email->to('yooska14@gmail.com');
      //
      // $email->subject('テスト件名');
      // $email->send('テスト本文です');

      $address = 'yooska14@gmail.com';

      foreach ($domains as $domain) {

        $subject15 = '管理しているドメインが残り15日で有効期限を迎えます。';
        $subject45 = '管理しているドメインが残り45日で有効期限を迎えます。';

        $header15 = "次のドメインが残り15日で有効期限を迎えます。";
        $content15 = $domain['Domain']['name'];

        $header45 = "次のドメインが残り45日で有効期限を迎えます。";
        $content45 = $domain['Domain']['name'];

        if ($domain['Domain']['expiration_date'] == date('Y-m-d',strtotime('+15 day'))) {

          mail($address, $subject15, $header15.$content15);

        }elseif ($domain['Domain']['expiration_date'] == date('Y-m-d',strtotime('+45 day'))) {

          mail($address, $subject45, $header45.$content45);

        }
      }

  }
}
