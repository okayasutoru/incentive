<h1>サンプルアプリ１</h1>
<h2>問い合わせフォーム</h2>

<?php echo $this -> Form -> create('Contact');  ?>

<?php echo $this -> Form -> input('title'); ?>

<?php echo $this -> Form -> input('text'); ?>

<?php echo $this -> Form -> end('確認'); ?>
