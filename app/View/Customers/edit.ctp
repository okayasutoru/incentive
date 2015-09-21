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
            <hr>
            <div class="col-md-10">
                <div class="modal-dialog" style="margin-bottom:0">
                    <div class="modal-content">
                        <div class="panel-heading">
                            <h3 class="panel-title"> <?php echo $customer['Customer']['name'];?> さんを編集</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->Form->create('Customer',array('class'=>'form-horizontal')); ?>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">顧客名</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('name',array('label'=>false,'placeholder'=>'Name','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">メール</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('email',array('label'=>false,'placeholder'=>'Email','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメイン名</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('company',array('label'=>false,'placeholder'=>'Company','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメイン名</label>
                                        <div class="col-sm-10">
                                            <?php echo $this->Form->input('position',array('label'=>false,'placeholder'=>'Position','class'=>'form-control'));?>
                                        </div>
                                    </div>
                                    <?php echo $this->Form->submit('編集する',array('class'=>'btn btn-sm btn-success'));?>
                                    <?php echo $this->Form->end();?>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>