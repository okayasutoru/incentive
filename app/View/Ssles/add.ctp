<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#look_trigger').click(function(){
        $('#look_domains').toggle();
    });
});
</script>
<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h2>SSL &nbsp;Add</h2>   
              <h5>SSL情報の追加ができるページです</h5>
          </div>
        </div>
        <hr>
      <div class="row">
        <div class="col-md-6 col-md-offset-2" style="margin-top:20px">
          <?php echo $this->Form->create('Ssl', array('class'=>'form-horizontal'));?>
            <fieldset>
              <legend>SSL情報の追加（ 各種証明書のアップロード ）</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメインID</label>
                <a><div id="look_trigger" style="font-size:13px;padding-top:7px;padding-left:7px"> ドメインを探す&nbsp;<i class="fa fa-search"></i></div></a>
              </div>

              <div id="look_domains" style="display:none">
                <div style="background-color:#f9f9f9;padding:15px">
                <?php foreach($domains as $domain): ?>
                    <div style="padding:3px"><?php echo $domain['Domain']['name']; ?></div>
                <?php endforeach; ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメイン名</label>
                
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="pull-right">
                  <?php echo $this->Form->submit('追加する',array('class'=>'btn btn-primary')); ?>
                  </div>
                </div>
              </div>
            </fieldset>
          <?php echo $this->Form->end();?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php debug($domains) ?>
