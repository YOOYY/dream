<?php echo $this->render("header{$this->en}.php");?>
<div id="shop">
      <div class="banner_container"><img class="responsive banner" src="<?php echo $this->mimgUrl ?>banner1.jpg" alt=""></div>
      <div class="container">
        <div class="navbar">
            <a href="<?php echo $this->baseUrl ?>shop/shoppage"><img src="<?php echo $this->mimgUrl ?>nav1.png" alt=""></a>
            <a href="<?php echo $this->baseUrl ?>shop/shoppage/id/2"><img src="<?php echo $this->mimgUrl ?>nav2.png" alt=""></a>
            <a href="<?php echo $this->baseUrl ?>shop/shoppage/id/3"><img src="<?php echo $this->mimgUrl ?>nav3.png" alt=""></a>
            <a href="<?php echo $this->baseUrl ?>shop/shoppage/id/4"><img class="last" src="<?php echo $this->mimgUrl ?>nav4.png" alt=""></a>
        </div>
        <div class="map"><img class="responsive" src="<?php echo $this->mimgUrl ?>map.png" alt="">
        <img class="icon1 icon" src="<?php echo $this->mimgUrl ?>tip1<?php echo $this->translate->_("_en");?>.png" alt="">
        <img class="icon2 icon" src="<?php echo $this->mimgUrl ?>tip2<?php echo $this->translate->_("_en");?>.png" alt="">
        <img class="icon3 icon" src="<?php echo $this->mimgUrl ?>tip3<?php echo $this->translate->_("_en");?>.png" alt="">
        <img class="icon4 icon" src="<?php echo $this->mimgUrl ?>tip4<?php echo $this->translate->_("_en");?>.png" alt="">
          <h2 class="tips double"><?php echo $this->translate->_("shopTip1");?><br><?php echo $this->translate->_("shopTel");?>0571-85022988</h2>
          <h2 class="tips"><?php echo $this->translate->_("shopTip2");?></h2>
          <h2 class="tips double"><?php echo $this->translate->_("shopTip3");?><br><?php echo $this->translate->_("shopTel");?>0510-82827700</h2>
          <h2 class="tips"><?php echo $this->translate->_("shopTip4");?></h2>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>