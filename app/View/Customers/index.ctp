<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>人物インタビュー</h2>

			<h3>旅</h3>  
				<p>旅先で起こったあんなことやこんなこと</p>
				<p>ワクワクやドキドキを共有していただきました！</p>
			<h3>留学</h3>
				<p>リアルな体験をシェア！</p>
			<h3>スタッフの与太話</h3>
				<p>Incentiveスタッフがふと考えたことや日常の些細なことをつれづれなるままに綴るコーナー</p>
                </div>
<div>こんにちは</div>
            </div>
            <hr>
            <div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">           
					<div class="panel panel-back noti-box">
						<?php echo $this->Html->link('<span class="icon-box bg-color-blue set-icon"><i class="fa fa-list"></i></span>',array('action'=>'show'),array('escape'=>false,'style'=>'color:white'));?>
						<div class="text-box">
							<p><?php echo $this->Html->link('List',array('action'=>'show'),array('class'=>'main-text','style'=>'color:#333333'));?></p>
							<p class="text-muted">Messages</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">           
					<div class="panel panel-back noti-box">
						<?php echo $this->Html->link('<span class="icon-box bg-color-red set-icon"><i class="fa fa-plus"></i></span>',array('action'=>'add'),array('escape'=>false,'style'=>'color:white'));?>
						<div class="text-box" >
							<p><?php echo $this->Html->link('Add',array('action'=>'add'),array('class'=>'main-text','style'=>'color:#333333'));?></p>
							<p class="text-muted">Messages</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">           
					<div class="panel panel-back noti-box">
						<?php echo $this->Html->link('<span class="icon-box bg-color-green set-icon"><i class="fa fa-pencil"></i></span>',array('action'=>'pre_edit'),array('escape'=>false,'style'=>'color:white'));?>
						<div class="text-box" >
							<p><?php echo $this->Html->link('Edit',array('action'=>'pre_edit'),array('class'=>'main-text','style'=>'color:#333333'));?></p>
							<p class="text-muted">Messages</p>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
