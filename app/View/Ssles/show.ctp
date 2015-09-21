<?php echo $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/zeroclipboard/2.1.5/ZeroClipboard.min.js'); ?>
<?php $this->Html->scriptStart(array('inline' => false)); ?>
window.onload = function() {
    //
    var clip = new ZeroClipboard(document.getElementsByClassName("btn"));
    clip.on("ready", function() {
        // 準備完了
    });
};
<?php $this->Html->scriptEnd(); ?>

<div id="wrapper">
    <?php echo $this->Element('nav_top');?>
    <?php echo $this->Element('nav_left');?>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>SSL List</h2>
                    <h5>SSL情報のリストを表示するページです </h5>
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    SSLリスト
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
                                  <?php $csr_at = '/files/csr/'.$ssl['Ssl']['id'].'/'.$ssl['Ssl']['csr']; ?>
                                  <?php $file = new File(getcwd().$csr_at); ?>
                                  <?php $hidari = $file->read(); ?>
	                            		<td><?php echo $ssl['Ssl']['csr']; ?><a class="btn" data-clipboard-text="<?php echo h($hidari);?>" href="javascript:void(0)" onClick="hogeFunction();return false;"><i class="fa fa-clipboard"></i></a></td>
                                  <?php $file->close();?>

                                  <?php $certificate_at = '/files/certificate/'.$ssl['Ssl']['id'].'/'.$ssl['Ssl']['certificate']; ?>
                                  <?php $file = new File(getcwd().$certificate_at); ?>
                                  <?php $migi = $file->read(); ?>
	                            		<td><?php echo $ssl['Ssl']['certificate']; ?><a class="btn" data-clipboard-text="<?php echo h($migi);?>" href="javascript:void(0)" onClick="hogeFunction();return false;"><i class="fa fa-clipboard"></i></a></td>
                                  <?php $file->close();?>
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

<?php debug($ssles); ?>
<style>
.table > tbody > tr > td {
  vertical-align: inherit;
}
</style>
