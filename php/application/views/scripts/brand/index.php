<?php echo $this->render("header{$this->en}.php");?>
    <div id="brand">
      <div class="banner_container"><img class="responsive" src="<?php echo $this->mimgUrl ?>banner1.jpg" alt=""></div>
      <div class="navbar">
        <ul class="nav">
            <li>The Library</li>
            <li>Dream I Lab</li>
            <li>EDUMALL</li>
        </ul>
      </div>
      <div class="container margintop">
      <div id="library">
          <h1><?php echo $this->translate->_("brandLibrary");?></h1>
          <p><?php echo $this->translate->_("brandLibraryDes1");?></p>
          <p><?php echo $this->translate->_("brandLibraryDes2");?></p>
          <h1 class="margintop120"><?php echo $this->translate->_("brandEnv");?></h1>
          <div class="top"><img class="first" src="<?php echo $this->mimgUrl ?>pic11.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic12.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic13.jpg" alt=""></div>
          <div class="bottom"><img class="first w57" src="<?php echo $this->mimgUrl ?>pic14.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic15.jpg" alt=""></div>
        </div>
        <div id="dream">
          <h1><?php echo $this->translate->_("brandDream");?></h1>
          <p><?php echo $this->translate->_("brandDreamDes1");?></p>
          <p><?php echo $this->translate->_("brandDreamDes2");?></p>
          <h1 class="margintop120"><?php echo $this->translate->_("brandEnv");?></h1>
          <div class="top"><img class="first" src="<?php echo $this->mimgUrl ?>pic6.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic7.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic8.jpg" alt=""></div>
          <div class="bottom"><img class="first w57" src="<?php echo $this->mimgUrl ?>pic9.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic10.jpg" alt=""></div>
        </div>
        <div id="edu">
          <h1><?php echo $this->translate->_("brandEdu");?></h1>
          <p><?php echo $this->translate->_("brandEduDes1");?></p>
          <p><?php echo $this->translate->_("brandEduDes2");?></p>
          <h1 class="margintop120"><?php echo $this->translate->_("brandEnv");?></h1>
          <div class="top"><img class="first" src="<?php echo $this->mimgUrl ?>pic1.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic2.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>pic3.jpg" alt=""></div>
          <div class="bottom"><img class="first" src="<?php echo $this->mimgUrl ?>pic4.jpg" alt=""><img class="w57" src="<?php echo $this->mimgUrl ?>pic5.jpg" alt=""></div>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>