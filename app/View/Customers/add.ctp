<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h2>Customer &nbsp;Add</h2>   
              <h5>顧客情報の追加ができるページです</h5>
          </div>
        </div>
        <?php echo $this->Session->flash('flash_position');?>
        <hr>
      <div class="row">
        <div class="col-md-6 col-md-offset-2" style="margin-top:20px">
          <?php echo $this->Form->create('Customer', array('class'=>'form-horizontal'));?>
            <fieldset>
              <legend>顧客情報の追加</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">名前</label>
                <div class="col-sm-10">
                  <?php echo $this->Form->input('name',array('label'=>false,'placeholder'=>'Name','class'=>'form-control'));?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">メール</label>
                <div class="col-sm-10">
                  <?php echo $this->Form->input('email',array('label'=>false,'placeholder'=>'Email','class'=>'form-control'));?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">会社名</label>
                <div class="col-sm-10">
                  <?php echo $this->Form->input('company',array('label'=>false,'placeholder'=>'Company','class'=>'form-control'));?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">役職名</label>
                <div class="col-sm-10">
                  <?php echo $this->Form->input('position',array('label'=>false,'placeholder'=>'Position','class'=>'form-control'));?>
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
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
