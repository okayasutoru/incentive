<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Customer. List</h2>   
                    <h5>顧客情報のリストを表示するページです </h5>
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    顧客リスト
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
                                    <th>ドメイン</th>
                                </tr>
                            </thead>
                            <tbody>
	                            <?php foreach($customers as $customer): ?>
	                            	<tr>
	                            		<td><?php echo $customer['Customer']['id']; ?></td>
	                            		<td><?php echo $customer['Customer']['name']; ?></td>
	                            		<td><?php echo $customer['Customer']['email']; ?></td>
                                        <td><?php echo $customer['Customer']['company']; ?></td>
	                            		<td><?php echo $customer['Customer']['position']; ?></td>
                                        <?php foreach($customer['Domain'] as $domain):?>
                                            <td><?php echo $domain['name']; ?></td>
                                        <?php endforeach;?>
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
<?php debug($customers);