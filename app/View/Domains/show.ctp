<div id="wrapper">
    <?php echo $this->Element('nav_top');?>
    <?php echo $this->Element('nav_left');?>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Domain. List</h2>
                    <h5>ドメイン情報のリストを表示するページです </h5>
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                    ドメインリスト
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>ドメイン名</th>
                                    <th>取得サイト</th>
                                    <th>価格</th>
                                    <th>取得日</th>
                                    <th>有効期限</th>
                                    <th>更新日</th>
                                    <th>顧客名</th>
                                </tr>
                            </thead>
                            <tbody>
	                            <?php foreach($domains as $domain): ?>
	                            	<tr>
	                            		<td><?php echo $domain['Domain']['id']; ?></td>
	                            		<td><?php echo $domain['Domain']['name']; ?></td>
	                            		<td><?php echo $domain['Domain']['site']; ?></td>
	                            		<td><?php echo $domain['Domain']['price']; ?></td>
                                        <td><?php echo $domain['Domain']['get_date']; ?></td>
                                        <td><?php echo $domain['Domain']['expiration_date']; ?></td>
                                        <td><?php echo $domain['Domain']['updated_date']; ?></td>
	                            		<td><?php echo $domain['Customer']['name']; ?></td>
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
