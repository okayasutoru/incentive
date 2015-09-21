<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Domain &nbsp;List</h2>   
                    <h5>ドメイン情報の編集ができるページです</h5>
                </div>
            </div>
            <hr>
            <div class="col-md-10">
                <div class="modal-dialog" style="margin-bottom:0">
                    <div class="modal-content">
                        <div class="panel-heading">
                            <h3 class="panel-title"> <?php echo $domain['Domain']['name'];?> を編集</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->Form->create('Domain', array('class'=>'form-horizontal')); ?>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">名前</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('name',array('label'=>false,'placeholder'=>'名前','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">取得サイト</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('site',array('label'=>false,'placeholder'=>'取得サイト','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput">取得価格</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('price',array('label'=>false,'placeholder'=>'取得価格','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top:20px">
                                        <label class="col-sm-2 control-label" for="textinput">取得日</label>
                                        <div class="col-sm-10">
                                            <div class="form-inline" style="padding-left:15px">
                                                <?php echo $this->Form->input('get_date',array('label'=>false,'placeholder'=>'取得日','dateFormat'=>'YMD','maxYear'=>date('Y'),'monthNames'=>false,'separator' => array(' 年 ', ' 月 ', ' 日 '),'class'=>'form-control'));?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top:20px">
                                        <label class="col-sm-2 control-label" for="textinput">有効期限</label>
                                        <div class="col-sm-10">
                                            <div class="form-inline" style="padding-left:15px">
                                                <?php echo $this->Form->input('expiration_date',array('label'=>false,'placeholder'=>'有効期限','dateFormat'=>'YMD','monthNames'=>false,'separator' => array(' 年 ', ' 月 ', ' 日 '),'class'=>'form-control'));?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top:20px">
                                        <label class="col-sm-2 control-label" for="textinput">更新日</label>
                                        <div class="col-sm-10">
                                            <div class="form-inline" style="padding-left:15px">
                                                <?php echo $this->Form->input('updated_date',array('label'=>false,'placeholder'=>'更新日','dateFormat'=>'YMD','monthNames'=>false,'separator' => array(' 年 ', ' 月 ', ' 日 '),'class'=>'form-control'));?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->submit('編集する',array('class'=>'btn btn-sm btn-success','style'=>''));?>
                                </fieldset>
                            <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>