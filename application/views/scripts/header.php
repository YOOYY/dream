<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
	<title><?php echo $this->title; ?></title>
	<meta name="keywords" content="<?php echo $this->keywords ?>">
    <meta name="description" content="<?php echo $this->description ?>">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="<?php echo $this->imgUrl; ?>favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->baseUrl; ?>css/base.css">
	<?php 
		if($this->header){
			echo $this->header;
		}
	?>
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="<?php echo $this->baseUrl; ?>css/iehack.css">
	<![endif]-->
    <script src="<?php echo $this->baseUrl; ?>js/respond.js"></script>
  </head>
  <body>
        <div style="position:absolute;right:3%;top:0%;background:#5c5c60;padding:10px;border-radius:0 0 5px 5px;color:#fff">
            <span id="zh" style="cursor:pointer">中</span> / <span id="en" style="cursor:pointer">En</span>
        </div>
    <div id="header">
      <div class="container">
        <a class="fl logo" href="<?php echo $this->baseUrl; ?>">
          <img class="responsive" src="<?php echo $this->imgUrl; ?>logo.png">
        </a>
        <ul class="nav">
          <li>
              <a class="<?php echo $this->controllername == 'index'?'active':''; ?>" href="<?php echo $this->baseUrl; ?>">
              <?php echo $this->translate->_("headerIndex");?></a>
          </li>
          <li>
            <div>
                <a href="<?php echo $this->baseUrl; ?>introduction" <?php echo $this->controllername == 'introduction'?'class="active"':''; ?>><?php echo $this->translate->_("headerIntroduction");?></a>
              <ul class="subnav">
                <li><a href="<?php echo $this->baseUrl; ?>introduction#vision"><?php echo $this->translate->_("headerVision");?></a></li>
                <li><a href="<?php echo $this->baseUrl; ?>introduction#belief"><?php echo $this->translate->_("headerBelief");?></a></li>
                <li><a href="<?php echo $this->baseUrl; ?>introduction#history"><?php echo $this->translate->_("headerHistory");?></a></li>
              </ul>
            </div>
          </li>
          <li><a <?php echo $this->controllername == 'service'?'class="active"':''; ?> href="<?php echo $this->baseUrl; ?>service"><?php echo $this->translate->_("headerService");?></a>
          </li>
          <li>
            <div>
            <a href="<?php echo $this->baseUrl; ?>brand" <?php echo $this->controllername == 'brand'?'class="active"':''; ?>>
            <?php echo $this->translate->_("headerBrand");?></a>
              <ul class="subnav">
                <li><a href="<?php echo $this->baseUrl; ?>brand?index=edu">EDUMALL</a></li>
                <li><a href="<?php echo $this->baseUrl; ?>brand?index=dream">Dream I Lab</a></li>
                <li><a href="<?php echo $this->baseUrl; ?>brand?index=library">The Library</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
            <a <?php echo $this->controllername == 'shop'?'class="active"':''; ?> href="<?php echo $this->baseUrl; ?>shop">
            <?php echo $this->translate->_("headerShop");?></a>
                <ul class="subnav">
                    <li><a href="<?php echo $this->baseUrl; ?>shop/shoppage/id/1">杭州店</a></li>
                    <li><a href="<?php echo $this->baseUrl; ?>shop/shoppage/id/2">扬州店</a></li>
                    <li><a href="<?php echo $this->baseUrl; ?>shop/shoppage/id/3">无锡店</a></li>
                    <li><a href="<?php echo $this->baseUrl; ?>shop/shoppage/id/4">宁波店</a></li>
                </ul>
            </div>    
          
          </li>
            <li>
                <div>
                <a <?php echo $this->controllername == 'news'?'class="active"':''; ?> href="<?php echo $this->baseUrl; ?>news">
                <?php echo $this->translate->_("media");?></a>
                <ul class="subnav">
                    <li><a href="<?php echo $this->baseUrl; ?>news"><?php echo $this->translate->_("news");?></a></li>
                    <li><a href="<?php echo $this->baseUrl; ?>news/activity"><?php echo $this->translate->_("activity");?></a></li>
                </ul>
                </div>
            </li>
          <li><a <?php echo $this->controllername == 'joinus'?'class="active"':''; ?> href="<?php echo $this->baseUrl; ?>joinus"><?php echo $this->translate->_("headerJoinus");?></a>
          </li>
        </ul>
        <div class="phone-nav"><img src="<?php echo $this->imgUrl ?>phone_nav.png" alt="">
          <ul class="subnav">
            <li><a href="<?php echo $this->baseUrl; ?>index"><?php echo $this->translate->_("headerIndex");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>introduction"><?php echo $this->translate->_("headerIntroduction");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>service"><?php echo $this->translate->_("headerService");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>brand"><?php echo $this->translate->_("headerBrand");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>shop"><?php echo $this->translate->_("headerShop");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>news"><?php echo $this->translate->_("media");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>joinus"><?php echo $this->translate->_("headerJoinus");?></a></li>
          </ul>
        </div>
      </div>
    </div>