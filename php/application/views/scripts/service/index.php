<?php echo $this->render("header{$this->en}.php");?>
    <div id="service">
      <div class="banner_container"><img class="responsive" src="<?php echo $this->mimgUrl ?>banner1.jpg" alt=""></div>
      <div class="navbar">
        <ul class="nav">
          <li><?php echo $this->translate->_("serviceNav1");?></li>
          <li><?php echo $this->translate->_("serviceNav2");?></li>
          <li class="last"><?php echo $this->translate->_("serviceNav3");?></li>
        </ul>
      </div>
      <div class="container">
        <div class="content">
        <?php echo $this->translate->_("serviceContent1");?>
          <img class="pic" src="<?php echo $this->mimgUrl ?>pic1.png" alt="">
        </div>
        <div class="content">
        <?php echo $this->translate->_("serviceContent2");?>
          <img class="pic" src="<?php echo $this->mimgUrl ?>pic2.png" alt="">
        </div>
        <div>
          <div class="item item1 margintop"><img src="<?php echo $this->mimgUrl ?>pic3.png" alt="">
            <div class="panel">
              <h3 class="title"><?php echo $this->translate->_("serviceTitle1");?></h3>
              <p class="des"><?php echo $this->translate->_("serviceDes1");?></p>
              <div class="line"></div>
            </div>
          </div>
          <div class="item item2">
            <div class="panel">
              <h3 class="title"><?php echo $this->translate->_("serviceTitle2");?></h3>
              <p class="des"><?php echo $this->translate->_("serviceDes2");?></p>
              <div class="line"></div>
            </div><img src="<?php echo $this->mimgUrl ?>pic4.png" alt="">
          </div>
          <div class="item item1"><img src="<?php echo $this->mimgUrl ?>pic5.png" alt="">
            <div class="panel">
              <h3 class="title"><?php echo $this->translate->_("serviceTitle3");?></h3>
              <p class="des"><?php echo $this->translate->_("serviceDes3");?></p>
              <div class="line"></div>
            </div>
          </div>
          <div class="item item2">
            <div class="panel">
              <h3 class="title"><?php echo $this->translate->_("serviceTitle4");?></h3>
              <p class="des"><?php echo $this->translate->_("serviceDes4");?></p>
              <div class="line"></div>
            </div><img src="<?php echo $this->mimgUrl ?>pic6.png" alt="">
          </div>
          <div class="item item1"><img src="<?php echo $this->mimgUrl ?>pic7.png" alt="">
            <div class="panel">
              <h3 class="title"><?php echo $this->translate->_("serviceTitle5");?></h3>
              <p class="des"><?php echo $this->translate->_("serviceDes5");?></p>
              <div class="line"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>