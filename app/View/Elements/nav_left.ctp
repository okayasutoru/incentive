<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <?php echo $this->Html->image('find_user.png',array('class'=>'user-image img-responsive'));?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="fa fa-user fa-3x"></i> Customer<span class="fa arrow"></span>',array('#','#'),array('escape'=>false));?>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo $this->Html->link('&nbsp;Index',array('controller'=>'customers','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;List',array('controller'=>'customers','action'=>'show'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;Add',array('controller'=>'customers','action'=>'add'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;edit',array('controller'=>'customers','action'=>'pre_edit'),array('escape'=>false));?>
                    </li>
                </ul>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="fa fa-globe fa-3x"></i> Domain<span class="fa arrow"></span>',array('controller'=>'domains','action'=>'index'),array('escape'=>false));?>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo $this->Html->link('&nbsp;Index',array('controller'=>'domains','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;list',array('controller'=>'domains','action'=>'show'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;Add',array('controller'=>'domains','action'=>'add'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;edit',array('controller'=>'domains','action'=>'pre_edit'),array('escape'=>false));?>
                    </li>
                </ul>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="fa fa-key fa-3x"></i> SSL<span class="fa arrow"></span>',array('controller'=>'domains','action'=>'index'),array('escape'=>false));?>
                <ul class="nav nav-second-level">
                    <li>
                        <?php echo $this->Html->link('&nbsp;Index',array('controller'=>'ssles','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;List',array('controller'=>'ssles','action'=>'show'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;edit',array('controller'=>'ssles','action'=>'pre_edit'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;add_upload',array('controller'=>'ssles','action'=>'add_upload'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('&nbsp;add_create',array('controller'=>'ssles','action'=>'add_create'),array('escape'=>false));?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
