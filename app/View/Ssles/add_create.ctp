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
            <h2>SSL &nbsp;Add_create</h2>
              <h5>CSRの自動生成ができるページです</h5>
          </div>
        </div>
        <?php echo $this->Session->flash('flash_position');?>
        <hr>
      <div class="row">
        <div class="col-md-6 col-md-offset-2" style="margin-top:20px">
          <?php echo $this->Form->create('Ssl', array('class'=>'form-horizontal','type'=>'file'));?>
            <fieldset>
              <legend>CSRの自動生成（ 組織名・ファイル名の入力 ）</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメインID</label>
                  <?php if($now_id): ?>
                    <div style="font-size:13px;padding-top:7px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <?php echo $now_id['Domain']['id']; ?>
                    </div>
                  <?php else: ?>
                    <div style="padding-top:7px;"></div>
                  <?php endif; ?>
                <a id="look_trigger" style="font-size:13px;padding-top:7px;">
                  ドメインを探す&nbsp;<i class="fa fa-search"></i>
                </a>
              </div>

              <div id="look_domains" style="display:none">
                <div style="background-color:#f9f9f9;padding:15px">
                <?php foreach($domains as $domain): ?>
                    <div style="padding:3px"><?php echo $this->Html->link($domain['Domain']['name'], array($domain['Domain']['id'])); ?></div>
                <?php endforeach; ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメイン名</label>
                <div class="col-sm-10">
                  <?php if($now_id): ?>
                    <div id="look_trigger" style="padding-top:7px;padding-left:7px"><?php echo $now_id['Domain']['name']; ?></div>
                  <?php endif;?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">組織名</label>
                <div class="col-sm-8">
                  <?php echo $this->Form->input('org_name',array('label'=>false,'class'=>'form-control')); ?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ファイル名</label>
                <div class="col-sm-8">
                  <?php echo $this->Form->input('file_name',array('label'=>false,'class'=>'form-control')); ?>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="pull-right">
                  <?php echo $this->Form->submit('追加する',array('class'=>'btn btn-primary')); ?>
                  </div>
                </div>
              </div>
            </fieldset>
            <?php if($now_id): ?>
              <?php echo $this->Form->input('domain_id',array('type'=>'hidden','value'=>$now_id['Domain']['id'])); ?>
            <?php endif;?>
          <?php echo $this->Form->end();?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php debug($domains) ?>
