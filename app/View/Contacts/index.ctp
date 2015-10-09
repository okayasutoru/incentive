	<?php echo $this->Element('nav');?>
 
	<div class="panel-body">
	<h2>問い合わせフォーム</h2>
	
	
	<form action="/incentive/contacts" id="ContactIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" class="col-sm-8 contact-form"/></div>	
	<div class="input text required"><label for="ContactName">Name</label><input name="data[Contact][name]" maxlength="255" type="text" id="ContactName" required="required"/></div>	
	<div class="input email required"><label for="ContactEmail">Email</label><input name="data[Contact][email]" maxlength="255" type="email" id="ContactEmail" required="required"/></div>	
	<div class="input radio required"><fieldset><legend>Mtr Sex Id</legend><input type="hidden" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId_" value=""/><input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId1" value="1" required="required" /><label for="ContactMtrSexId1">Facebook</label><input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId2" value="2" required="required" /><label for="ContactMtrSexId2">Twitter</label><input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId3" value="3" required="required" /><label for="ContactMtrSexId3">知人の紹介</label><input type="radio" name="data[Contact][mtr_sex_id]" id="ContactMtrSexId4" value="4" required="required" /><label for="ContactMtrSexId4">その他</label></fieldset></div>	
	<div class="input textarea required"><label for="ContactContent">Content</label><textarea name="data[Contact][content]" maxlength="255" cols="30" rows="6" id="ContactContent" required="required"></textarea></div>	
	<div class="submit"><input  type="submit" value="確認"/></div></form>

<div class="container">
<div class="row">
<div class="col-sm-4">
<h3>Drop me a line!</h3>
<hr>
<address>
<strong>Email:</strong> <a href="mailto:#"> name@domain.com</a><br><br>
<strong>Phone:</strong> (555)123-4567
</address>
</div>
    
<div class="col-sm-8 contact-form">
<form id="contact" method="post" class="form" role="form">
<div class="row">
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
</div>
<div class="col-xs-6 col-md-6 form-group">
<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
</div>
</div>
<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" type="submit">Submit</button>
</form>
</div>
</div>
</div>
