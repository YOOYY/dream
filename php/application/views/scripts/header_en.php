<!DOCTYPE html>
<html <?php echo 'lang="en" class="english"'; ?>>
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
        <a class="fl logo" href="<?php echo "{$this->baseUrl}index/index{$this->nav_en}"; ?>">
            <img class="responsive" src="<?php echo $this->imgUrl; ?>logo.png">
        </a>
        <ul class="nav">
            <li>
                <a class="<?php echo $this->controllername == 'index'?'active':''; ?>" href="<?php echo "{$this->baseUrl}index/index{$this->nav_en}";?>"><?php echo $this->translate->_("headerIndex");?></a>
            </li>
            <li>
                <div>
                    <a <?php echo "href='{$this->baseUrl}introduction/index{$this->nav_en}' " ;echo $this->controllername == 'introduction'?'class="active"':''; ?>>
                    <?php echo $this->translate->_("headerIntroduction");?></a>
                    <ul class="subnav">
                        <li><a href="<?php echo "{$this->baseUrl}introduction/index{$this->nav_en}#vision";?>"><?php echo $this->translate->_("headerVision");?></a></li>
                        <li><a href="<?php echo "{$this->baseUrl}introduction/index{$this->nav_en}#belief";?>"><?php echo $this->translate->_("headerBelief");?></a></li>
                        <li><a href="<?php echo "{$this->baseUrl}introduction/index{$this->nav_en}#history";?>"><?php echo $this->translate->_("headerHistory");?></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a <?php echo $this->controllername == 'service'?'class="active"':''; ?> href="<?php echo $this->baseUrl; ?>service/index<?php echo $this->nav_en;?>">
                <?php echo $this->translate->_("headerService");?></a>
            </li>
            <li>
                <div>
                    <a <?php echo "href='{$this->baseUrl}brand/index{$this->nav_en}' " ;echo $this->controllername == 'brand'?'class="active"':''; ?>>
                    <?php echo $this->translate->_("headerBrand");?></a>
                    <ul class="subnav">
                        <li><a href="<?php echo "{$this->baseUrl}brand/index{$this->nav_en}?index=library"; ?>">The Library</a></li>
                        <li><a href="<?php echo "{$this->baseUrl}brand/index{$this->nav_en}?index=dream"; ?>">Dream I Lab</a></li>
                        <li><a href="<?php echo "{$this->baseUrl}brand/index{$this->nav_en}?index=edu"; ?>">EDUMALL</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div>
                    <a <?php echo "href='{$this->baseUrl}shop/index{$this->nav_en}' " ;echo $this->controllername == 'shop'?'class="active"':''; ?>>
                        <?php echo $this->translate->_("headerShop");?></a>
                    <ul class="subnav">
                        <li><a href="<?php echo "{$this->baseUrl}shop/shoppage/id/1{$this->nav_en}";?>">Hangzhou</a></li>
                        <li><a href="<?php echo "{$this->baseUrl}shop/shoppage/id/2{$this->nav_en}";?>">Yangzhou</a></li>
                        <li><a href="<?php echo "{$this->baseUrl}shop/shoppage/id/3{$this->nav_en}";?>">Wuxi</a></li>
                        <li><a href="<?php echo "{$this->baseUrl}shop/shoppage/id/4{$this->nav_en}";?>">Ningbo</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div>
                    <a <?php echo "href='{$this->baseUrl}news/index{$this->nav_en}' " ;echo $this->controllername == 'news'?'class="active"':''; ?>>
                    <?php echo $this->translate->_("media");?></a>
                    <ul class="subnav">
                        <li><a href="<?php echo "{$this->baseUrl}news/index{$this->nav_en}"; ?>"><?php echo $this->translate->_("news");?></a></li>
                        <li><a href="<?php echo "{$this->baseUrl}news/activity{$this->nav_en}"; ?>"><?php echo $this->translate->_("activity");?></a></li>
                    </ul>
                </div>
            </li>
          <li><a <?php echo $this->controllername == 'joinus'?'class="active"':''; ?> href="<?php echo $this->baseUrl; ?>joinus/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerJoinus");?></a>
          </li>
        </ul>
        <div class="phone-nav"><img src="<?php echo $this->imgUrl ?>phone_nav.png" alt="">
          <ul class="subnav">
            <li><a href="<?php echo $this->baseUrl; ?>index/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerIndex");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>introduction/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerIntroduction");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>service/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerService");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>brand/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerBrand");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>shop/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerShop");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>news/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("media");?></a></li>
            <li><a href="<?php echo $this->baseUrl; ?>joinus/index<?php echo $this->nav_en;?>"><?php echo $this->translate->_("headerJoinus");?></a></li>
          </ul>
        </div>
      </div>
    </div>