<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
		<?= $this->fetch('meta') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
              <?= $this->Html->css('bootstrap.min.css')?>
               <?= $this->Html->css('font-awesome.min.css')?>
                <?= $this->Html->css('nprogress.css')?>
                <?= $this->Html->css('green.css')?>
                <?= $this->Html->css('bootstrap-progressbar-3.3.4.min.css')?>
                <?= $this->Html->css('jqvmap.min.css')?>
                 <?= $this->Html->css('daterangepicker.css')?>
                 <?= $this->Html->css('custom.min.css')?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
	<?=$this->Html->css(
    'http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css',
    array(
        'inline' => false
    )
);?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>   
</head>
<body >

	   
  
    <?= $this->Flash->render() ?>
  
        <?= $this->fetch('content') ?>
  
    <footer>
    </footer>
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

</html>
