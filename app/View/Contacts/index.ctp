	<?php echo $this->Element('nav');?>
 
 	<div id="page-wrapper">
	<h2>問い合わせフォーム</h2>
	<div class="panel-body">
	
		<div class="col-sm-8 contact-form">
			<form id="contact" method="post" class="form" role="form">
				<form action="/incentive/contacts" id="ContactIndexForm" method="post" accept-charset="utf-8">
					<div style="display:none;">
						<input type="hidden" name="_method" value="POST" class="col-sm-8 contact-form"/>
					</div>	
					<div class="row">
						<div class="col-xs-6 col-md-6 form-group">
							<div class="input text required">
								<input class="form-control" name="data[Contact][name]" maxlength="255" id="ContactName" required="required" id="name" name="name" placeholder="Name" type="text" required autofocus/>
							</div>
						</div>
						<div class="col-xs-6 col-md-6 form-group">
							<div class="input email required">
								<input class="form-control" name="data[Contact][email]" maxlength="255" type="email" id="ContactEmail" id="email" name="email" placeholder="Email"required="required"/>
							</div>
						</div>
					</div>
					<div class="input textarea required">
						<textarea class="form-control" placeholder="Message" name="data[Contact][content]" maxlength="500" rows="5" id="ContactContent" required="required"></textarea>
					</div>
					<div class="kikkake">				
						<h5><I>Incentiveを知ったきっかけ</I></h5>
					</div>
					<div class="input radio required">
						<fieldset>
							<input type="hidden" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId_" value=""/>
							<div class="radio">
							<input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId1" value="1" required="required" /><label for="ContactMtrSexId1">Facebook</label>
							<input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId2" value="2" required="required" /><label for="ContactMtrSexId2">Twitter</label></div>
							<div class="radio">											
							<input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId3" value="3" required="required" /><label for="ContactMtrSexId3">知人の紹介</label>
							<input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId4" value="4" required="required" /><label for="ContactMtrSexId4">その他</label></div>
						</fieldset>
					</div>		
					<div class="submit"><button class="btn btn-warning pull-right" type="submit">確認</button></div>
				</form>
			</form>
		</div>
	</div>	
	</div>

