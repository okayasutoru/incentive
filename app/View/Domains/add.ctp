<div id="wrapper">
    <?php echo $this->Element('nav_top');?>
    <?php echo $this->Element('nav_left');?>
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h2>Domain &nbsp;Add</h2>
              <h5>ドメイン情報の追加ができるページです</h5>
          </div>
        </div>
        <?php echo $this->Session->flash('flash_position');?>
        <hr>
      <div class="row">
        <div class="col-md-6 col-md-offset-2" style="margin-top:20px">
          <?php echo $this->Form->create('Domain', array('class'=>'form-horizontal'));?>
            <fieldset>
              <legend>ドメイン情報の追加</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">ドメイン名</label>
                <div class="col-sm-10">
                  <?php echo $this->Form->input('name',array('label'=>false,'placeholder'=>'ドメイン名','class'=>'form-control'));?>
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

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">取得日</label>
                  <div class="form-inline" style="padding-left:15px">
                    <div class="col-sm-10">
                      <?php echo $this->Form->input('get_date',array('label'=>false,'placeholder'=>'取得日','dateFormat'=>'YMD','maxYear'=>date('Y'),'monthNames'=>false,'separator' => array(' 年 ', ' 月 ', ' 日 '),'class'=>'form-control'));?>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">有効期限</label>
                  <div class="form-inline" style="padding-left:15px">
                    <div class="col-sm-10">
                      <?php echo $this->Form->input('expiration_date',array('label'=>false,'placeholder'=>'有効期限','dateFormat'=>'YMD','monthNames'=>false,'separator' => array(' 年 ', ' 月 ', ' 日 '),'class'=>'form-control'));?>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput" style="padding-right:5px">更新日</label>
                  <div class="form-inline" style="padding-left:15px">
                    <div class="col-sm-10">
                      <?php echo $this->Form->input('updated_date',array('label'=>false,'placeholder'=>'更新日','dateFormat'=>'YMD','monthNames'=>false,'separator' => array(' 年 ', ' 月 ', ' 日 '),'class'=>'form-control'));?>
                    </div>
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
          <?php echo $this->Form->end();?>
        </div>
      </div>
    </div>
  </div>
</div>
