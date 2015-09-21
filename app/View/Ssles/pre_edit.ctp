<?php echo $this->Html->css('mycss'); ?>
<div id="wrapper">
    <?php echo $this->Element('nav_top');?>
    <?php echo $this->Element('nav_left');?>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ssl &nbsp;List</h2>
                    <h5>SSL情報の編集ができるページです</h5>
                </div>
            </div>
            <?php echo $this->Session->flash('flash_position');?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    SSLリスト (クリックすると編集画面へ飛びます)
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th>id</th>
                                  <th>認証局</th>
                                  <th>ドメイン名</th>
                                  <th>CSR</th>
                                  <th>証明書</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($ssles as $ssl): ?>
                                    <tr>
                                      <td><?php echo $ssl['Ssl']['id']; ?></td>
    	                            		<td><?php echo $ssl['Ssl']['c_authority']; ?></td>
    	                            		<td><?php echo $ssl['Domain']['name']; ?></td>
    	                            		<td><?php echo $ssl['Ssl']['csr']; ?></td>
    	                            		<td><?php echo $ssl['Ssl']['certificate']; ?></td>
                                      <td><?php echo $this->Html->link('削除',array('action'=>'delete',$ssl['Ssl']['id']),array('class'=>'btn-sm btn-danger','style'=>'text-align:center'));?></td>
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
