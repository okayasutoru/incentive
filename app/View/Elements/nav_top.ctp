<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <?php echo $this->Html->link('Kiroku',array('controller'=>'pages','action'=>'index'),array('class'=>'navbar-brand','style'=>'letter-spacing:4px'));?>
    </div>
    <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout(いらない)</a> </div>
</nav>   