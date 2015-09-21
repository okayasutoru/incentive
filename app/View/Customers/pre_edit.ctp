<?php echo $this->Html->css('mycss'); ?>
<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Customer &nbsp;List</h2>   
                    <h5>顧客情報の編集ができるページです</h5>
                </div>
            </div>
            <?php echo $this->Session->flash('flash_position');?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    顧客リスト (クリックすると編集画面へ飛びます)
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>名前</th>
                                    <th>メールアドレス</th>
                                    <th>会社名</th>
                                    <th>役職名</th>
                                </tr>
                            </thead>
                            <tbody>
	                            <?php foreach($customers as $customer): ?>
	                            	<tr>
	                            		<td><?php echo $this->Html->link($customer['Customer']['id'],array('action'=>'edit',$customer['Customer']['id'])); ?></td>
	                            		<td><?php echo $this->Html->link($customer['Customer']['name'],array('action'=>'edit',$customer['Customer']['id'])); ?></td>
	                            		<td><?php echo $this->Html->link($customer['Customer']['email'],array('action'=>'edit',$customer['Customer']['id'])); ?></td>
	                            		<td><?php echo $this->Html->link($customer['Customer']['company'],array('action'=>'edit',$customer['Customer']['id'])); ?></td>
	                            		<td><?php echo $this->Html->link($customer['Customer']['position'],array('action'=>'edit',$customer['Customer']['id'])); ?></td>
                                        <td><?php echo $this->Html->link('削除',array('action'=>'delete',$customer['Customer']['id']),array('class'=>'btn-sm btn-danger','style'=>'text-align:center'));?></td>
	                            	</tr>
	                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript">
  $(function(){
    $(".btn-danger").on('click', function(){
        if(window.confirm("この顧客データを削除しますがよろしいですか？")) {
            location.href = $(this).attr('href');
        } else {
            return false;
        }
    });
  });
</script>
