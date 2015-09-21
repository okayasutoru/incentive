<h1>サンプルアプリ１</h1>
<h2>お問い合わせフォーム</h2>
<p>よろしければ「送信」ボタンを押してください</p>
<!DOCTYPE html>
<?php echo $this -> Form -> create('Contact'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<table>
	
	<tr>
		<th>なまえ</th>
		<td>
			<?php echo h($this -> data['Contact']['name']); ?>
			<?php echo $this -> Form -> input('name', array('type' => 'hidden')); ?>
		</td>
	</tr>

	<tr>
		<th>メアド</th>
		<td>
			<?php echo h($this -> data['Contact']['mail']); ?>
			<?php echo $this -> Form -> input('mail', array('type' => 'hidden')); ?>
		</td>
	</tr>

	<tr>
		<th>性別</th>
		<td>
			<?php echo $sexList[$this -> data['Contact']['mtr_sex_id']]); ?>
			<?php echo $this -> Form -> input('mtr_sex_id', array('type' => 'hidden')); ?>
		</td>
	</tr>

	<tr>
		<th>年齢</th>
		<td>
			<?php echo $ageList[$this -> data['Contact']['mtr_age_id']]); ?>
			<?php echo $this -> Form -> input('mtr_age_id', array('type' => 'hidden')); ?>
		</td>
	</tr>

	<tr>
		<th>お問い合わせ表題</th>
		<td>
			<?php echo h($this -> data['Contact']['title']); ?>
			<?php echo $this -> Form -> input('title', array('type' => 'hidden')); ?>
		</td>
	</tr>

	<tr>
		<th>お問い合わせ内容</th>
		<td>
			<?php echo h($this -> data['Contact']['content']); ?>
			<?php echo $this -> Form -> input('content', array('type' => 'hidden')); ?>
		</td>
	</tr>

	<tr>
		<th>関心事</th>
		<td>
			<?php 
				if(!empty($this -> data['MtrFavolite']['mtrFavolite'])):
					foreach($this->data[MtrFavolite][MtrFavolite] as $key => $favolite):

					echo $this->Form->input('MtrFavolite.MtrFavolite.'.$key, array('type'=>'hidden'));
					echo $favoliteList[$favolite].'<br />';
				endforeach;
			endif;
			?>
		</td>
	</tr>
</table>
		
<?php echo $this -> Form -> input('confirmed', array('type' => 'hidden', 'value' => 'true')); ?>

<?php echo $this -> Form -> end('送信'); ?>








