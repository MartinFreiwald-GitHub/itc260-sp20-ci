<!DOCTYPE html>
<html lang="en">
  <head>
	<title><?php if(isset($title)){echo $title;}?></title>

<!-- 

config -title & $title are variables we are working with.  $title comes from News.php.  The other title 
comes from the config file.  Need a custom tag for $title php
if title has a value, we echo its value.
else echo config title

 -->



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel -->
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/<?=$this->config->item('style')?>" media="screen">
	
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/bootswatch.min.css">
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=base_url()?>" class="navbar-brand"><?=$this->config->item('banner')?></a>
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<li class="active"><a href="#" title="">Active Link</a></li>
			<li><?=anchor('customer/mylist','Customers')?></li>
			<li><?=anchor('customer/add','Add Customer')?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
    <?php
    echo bootswatchFeedback();
    ?>

