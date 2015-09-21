<?php

class GenerateShell extends AppShell {

  public function main() {

  	exec(getcwd().'/webroot/1.php');

  	// if (file_exists('baka.key')) {
  	// 	exec('mkdir webroot/files/baka');
  	// 	exec('mv baka.key /var/www/cakephp/kiroku/app/webroot/files/baka');
  	// }
  }
}
