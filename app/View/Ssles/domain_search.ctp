<?php echo $this->Html->css('mycss'); ?>
<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>SSL情報追加画面</h2>   
                    <h5>任意のドメインを選択してください</h5>
                </div>
            </div>
            <?php echo $this->Session->flash('flash_position');?>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    ドメインリスト (クリックしてSSLと紐付けるドメインを選択して下さい)
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>ドメイン名</th>
                                    <th>取得サイト</th>
                                    <th>取得価格</th>
                                    <th>取得日</th>
                                    <th>有効期限</th>
                                    <th>更新日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($domains as $domain): ?>
                                    <tr>
                                        <td><?php echo $this->Html->link($domain['Domain']['id'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
                                        <td><?php echo $this->Html->link($domain['Domain']['name'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
                                        <td><?php echo $this->Html->link($domain['Domain']['site'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
                                        <td><?php echo $this->Html->link($domain['Domain']['price'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
                                        <td><?php echo $this->Html->link($domain['Domain']['get_date'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
                                        <td><?php echo $this->Html->link($domain['Domain']['expiration_date'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
                                        <td><?php echo $this->Html->link($domain['Domain']['updated_date'],array('action'=>'add',$domain['Domain']['id'])); ?></td>
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