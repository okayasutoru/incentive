<?php echo $this->Element('nav');?>
	
	<div id="page-wrapper">		 
	<h2>お問い合わせフォーム</h2>
	<div class="panel-body">
		<p>よろしければ「送信」ボタンを押してください</p>
		<!DOCTYPE html>
		<?php echo $this -> Form -> create('Contact'); ?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<div class="news-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>										
							<th>Name</th>
							<th>
								<?php echo h($this -> data['Contact']['name']); ?>
								<?php echo $this -> Form -> input('name', array('type' => 'hidden')); ?>
							</th>					
					</thead>
					<thead>
							<th>Mail</th>
							<th>
								<?php echo h($this -> data['Contact']['email']); ?>
								<?php echo $this -> Form -> input('email', array('type' => 'hidden')); ?>
							</th>
					</thead>
					<thead>
							<th>Message</th>
							<th>
								<?php echo h($this -> data['Contact']['content']); ?>
								<?php echo $this -> Form -> input('content', array('type' => 'hidden')) ?>
							</th>
						</tr>
					</thead>
					<thead>
							<th>きっかけ</th>
							<th>
								<?php echo $sexList[$this -> data['Contact']['mtr_sex_id']]; ?>
								<?php echo $this -> Form -> input('mtr_sex_id', array('type' => 'hidden')); ?>
							</th>
					</thead>
				</table>
			</div>
		</div>

		<?php echo $this -> Form -> input('confirmed', array('type' => 'hidden', 'value' => 'true')); ?>
		<div class="submitbtn">
			<div class="submit">
				<input class="btn btn-warning pull-right" type="submit" value="送信" style="position: relative; left: -15px; top: -5px;"/>
			</div>
		</div>	
	</div>	
	</div>	
