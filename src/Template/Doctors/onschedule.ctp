<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Radiology Services</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h4 class="media-heading"><strong><button type="button" class="btn btn-info btn-md btn3d">PEDI RADIOLOGIST</button></strong></h4>
                <ul class="nav side-menu">
				<?php  foreach ($results as $key=>$ul)://debug($ul);die;//debug($results);die; ?>
    <?php foreach ($ul->doctors as $OnSchedule):?>
	<?php //debug($ul->doctors);die;?>
                  <li><a><i class="fa fa-home"></i> <p class="btn btn-primary btn-xs"><?= h($OnSchedule->firstname) ?></p><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  </ul>
              </div>
              <div class="menu_section">
			      <?php /*debug($ul);die;*/ if($OnSchedule->OnSchedule==1){ ?>
                <h3>Live On</h3>
				<?php } ?>
				<?php endforeach; ?>
	             <?php endforeach; ?>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              
			  <h4 class="media-heading"><strong><button type="button" class="btn btn-info btn-md btn3d">peds(all Day)</button></strong></h4>
              <ul class="list-group ">
 <li class="list-group-item list-group-item-danger"><h6 class="media-heading">CONSULTATION</strong></h6></li>
  <li class="list-group-item list-group-item-danger"><h6 class="media-heading">FLUOROSCOPY</strong></h6></li>
<li class="list-group-item list-group-item-danger"><h6 class="media-heading">HOSPITAL & ED</strong></h6></li>
 <li class="list-group-item list-group-item-danger"><h6 class="media-heading">SEDATION</strong></h6></li>
 </ul>
			  <div class="count"> <?php  foreach ($results as $key=>$ul)://debug($ul);die;//debug($results);die; ?>
    <?php foreach ($ul->doctors as $OnSchedule):?>
   <a href="#">
    <?php /*debug($ul);die;*/ if($OnSchedule->OnSchedule==1 && $OnSchedule->dept_id==2){ ?><hr><?php echo  $this->html->image($OnSchedule->photo,array('width'=>'94px','class'=>"img-circle img-responsive")); ?><hr><br /><?php } ?>
     </a>
	
	<?php if($OnSchedule->OnSchedule==1&& $OnSchedule->dept_id==2){ ?>
	<span class="count_top"><i class="fa fa-user"></i> <?= h($OnSchedule->firstname) ?> <?= h($OnSchedule->lastname) ?> </span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Cell:</h7><?= h($OnSchedule->Cell) ?></span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Pager:</h7> <?= h($OnSchedule->pager) ?></span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Extension: </h7><?= h($OnSchedule->Office_extension) ?></span>
	<?php } ?>
	 	<?php endforeach; ?>
	<?php endforeach; ?>
	 </div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
			    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              
			  <h4 class="media-heading"><strong><button type="button" class="btn btn-info btn-md btn3d">IR (All Day)</button></strong></h4>
  <ul class="list-group">
 <li class="list-group-item list-group-item-success"><h6 class="media-heading"><strong>PROCEDURES</strong></h6></li>
  <li class="list-group-item list-group-item-success"><h6 class="media-heading"><strong>CONFRENCE</strong></h6></li>
  <li class="list-group-item list-group-item-success"><h6 class="media-heading"><strong>ALL NURSERIES</strong></h6></li>
  <li class="list-group-item list-group-item-success"><h6 class="media-heading"><strong>OUTSIDE READS</strong></h6></li>
 </ul>
			  <div class="count"> <?php  foreach ($results as $key=>$ul)://debug($ul);die;//debug($results);die; ?>
    <?php foreach ($ul->doctors as $OnSchedule):?>
   <a href="#">
    <?php /*debug($ul);die;*/ if($OnSchedule->OnSchedule==1 && $OnSchedule->dept_id==3){ ?><hr><?php echo  $this->html->image($OnSchedule->photo,array('width'=>'94px','class'=>"img-circle img-responsive")); ?><hr><br /><?php } ?>
     </a>
	
	<?php if($OnSchedule->OnSchedule==1&& $OnSchedule->dept_id==3){ ?>
	<span class="count_top"><i class="fa fa-user"></i> <?= h($OnSchedule->firstname) ?> <?= h($OnSchedule->lastname) ?> </span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Cell:</h7><?= h($OnSchedule->Cell) ?></span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Pager:</h7> <?= h($OnSchedule->pager) ?></span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Extension: </h7><?= h($OnSchedule->Office_extension) ?></span>
	<?php } ?>
	 	<?php endforeach; ?>
	<?php endforeach; ?>
	 </div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
						    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              
			  <h4 class="media-heading"><strong><button type="button" class="btn btn-info">Neuro Rad</button></strong></h4>
			  <div class="count"> <?php  foreach ($results as $key=>$ul)://debug($ul);die;//debug($results);die; ?>
    <?php foreach ($ul->doctors as $OnSchedule):?>
   <a href="#">
    <?php /*debug($ul);die;*/ if($OnSchedule->OnSchedule==1 && $OnSchedule->dept_id==1){ ?><hr><?php echo  $this->html->image($OnSchedule->photo,array('width'=>'94px','class'=>"img-circle img-responsive")); ?><hr><br /><?php } ?>
     </a>
	
	<?php if($OnSchedule->OnSchedule==1&& $OnSchedule->dept_id==1){ ?>
	<span class="count_top"><i class="fa fa-user"></i> <?= h($OnSchedule->firstname) ?> <?= h($OnSchedule->lastname) ?> </span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Cell:</h7><?= h($OnSchedule->Cell) ?></span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Pager:</h7> <?= h($OnSchedule->pager) ?></span>
	<span class="count_top"><i class="fa fa-user"></i> <br />Extension: </h7><?= h($OnSchedule->Office_extension) ?></span>
	<?php } ?>
	 	<?php endforeach; ?>
	<?php endforeach; ?>
	 </div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
			    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              
			  <h4 class="text-left"><strong><button type="button" class="btn btn-info btn-md btn3d">ANNOUNCEMENTS</button></strong></h4>
			  <?php  foreach ($tset1 as $key=>$ul)://debug($ul);die;//debug($results);die; ?>
    <?php foreach ($ul->doctors as $announce):?>
	<?php //debug($ul['procedure_name']);die;?>
	<?php if($announce->procedures_id==50 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==49 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==48 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==47 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==46 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	
	<?php if($announce->procedures_id==45 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==44 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==43 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==42 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==41 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==40 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==39 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
	<?php if($announce->procedures_id==38 ){ ?>
	<strong><br /> <?= h($announce->firstname) ?><strong>
	<strong> <br /><?= h($announce->lastname) ?><strong>
	<strong><br /><h7>Cell:</h7><?= h($announce->Cell) ?></strong>
	<strong><br /><h7>Pager:</h7> <?= h($announce->pager) ?></strong>
	<strong><br /><h7>Extension: </h7><?= h($announce->Office_extension) ?></strong>
	<strong> <br /><?= h($ul['procedure_name']) ?><strong>
	<?php echo  $this->html->image($announce['photo'],array('width'=>'94px','class'=>"img-circle img-responsive")); ?>
	<?php } ?>
<?php endforeach; ?>
<?php endforeach; ?>
	 </div>
             
            </div>
            
            
          </div>
          <!-- /top tiles -->
          <br />

         


        
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	
	<?= $this->Html->meta('jquery.min.js') ?>
            <?=  $this->Html->script(' bootstrap.min ')?>
              <?=  $this->Html->css('font-awesome.min')?>
               <?=  $this->Html->script('fastclick')?>
               <?=  $this->Html->script('nprogress')?>
                <?=  $this->Html->script(' Chart.min')?>
               <?=  $this->Html->script('gauge.min.js')?>
                 <?=  $this->Html->script(' bootstrap-progressbar.min')?>
               <?=  $this->Html->script('icheck.min')?>
               <?=  $this->Html->script('skycons')?>
                  <?=  $this->Html->script('jquery.flot')?>
      <?=  $this->Html->script('jquery.flot.pie')?>
      <?=  $this->Html->script('jquery.flot.time')?>
       <?=  $this->Html->script('/jquery.flot.stack')?>
      <?=  $this->Html->script('jquery.flot.resize')?>
    <!-- Flot plugins -->
       <?=  $this->Html->script('jquery.flot.orderBars')?>
       <?=  $this->Html->script('jquery.flot.spline.min')?>
      <?=  $this->Html->script('curvedLines')?>
       <?=  $this->Html->script('date')?>
    <!-- JQVMap -->
     <?=  $this->Html->script('jquery.vmap')?>
       <?=  $this->Html->script('jquery.vmap.world')?>
       <?=  $this->Html->script('jquery.vmap.sampledata')?>
    <!-- bootstrap-daterangepicker -->
       <?=  $this->Html->script('moment.min')?>
       <?=  $this->Html->script('daterangepicker')?>

    <!-- Custom Theme Scripts -->
      <?=  $this->Html->script('custom.min')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?> 
	
  </body>