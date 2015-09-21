<div id="wrapper">
    <?php echo $this->Element('nav_top');?>  
    <?php echo $this->Element('nav_left');?>  
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Admin Dashboard</h2>   
                    <h5>Welcome Jhon Deo,Love to see you back. </h5>
                </div>
            </div>              
            <hr>
            <div class="col-md-12">

                <div class="col-md-4 col-sm-6 col-xs-6" style="text-align:center">
                    <div class="button">
                        <?php echo $this->Html->link(' Customer',array('controller'=>'customers','action'=>'index'),array('class'=>'customer_text'));?>
                    </div>
        	    </div>

                <div class="col-md-4 col-sm-6 col-xs-6">           
                    <div class="circlePositioner">
                        <div id="circle">
                            <p id="text">
                                <?php echo $this->Html->link(' Domain',array('controller'=>'domains','action'=>'index'));?>
                            </p>
                        </div>
                    </div>
        	    </div>

                <div class="col-md-4 col-sm-6 col-xs-6">           
                    <div class="circlePositioner">
                        <div class="mainCircle">
                            <div class="spinningContainer">
                                <div class="leftContainer"></div>
                                <div class="rightContainer"></div>
                            </div>
                            <div class="overlay">
                                <p><?php echo $this->Html->link(' SSL',array('controller'=>'ssles','action'=>'index'));?></p>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
        </div>
    </div>
<?php echo $this->Html->css('Buttons/customer'); ?>
<?php echo $this->Html->css('Buttons/domain'); ?>
<?php echo $this->Html->css('Buttons/ssl'); ?>