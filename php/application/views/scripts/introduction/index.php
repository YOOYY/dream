<?php echo $this->render("header{$this->en}.php");?>
    <div id="introduction">
        <img class="responsive" src="<?php echo $this->mimgUrl ?>bg.jpg" alt="">
      <div class="container">
        <h1 id="vision"><?php echo $this->translate->_("introductionVision");?></h1>
        <p><?php echo $this->translate->_("introductionVisionDes");?></p>
        <h1 id="belief"><?php echo $this->translate->_("introductionBelief");?></h1>
        <table class="iconbox">
          <tr>
            <td><img src="<?php echo $this->mimgUrl ?>icon1<?php echo $this->translate->_("_en");?>.png" alt=""></td>
            <td><img src="<?php echo $this->mimgUrl ?>icon2<?php echo $this->translate->_("_en");?>.png" alt=""></td>
            <td class="last"><img src="<?php echo $this->mimgUrl ?>icon3<?php echo $this->translate->_("_en");?>.png" alt=""></td>
          </tr>
        </table>
        <h1 id="history"><?php echo $this->translate->_("introductionHistory");?></h1>
        <p class="text-align-left"><?php echo $this->translate->_("introductionHistoryDes");?></p>
        <h1><?php echo $this->translate->_("introductionEnv");?></h1>
        <div class="top"><img class="first" src="<?php echo $this->mimgUrl ?>show1.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>show2.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>show3.jpg" alt=""></div>
        <div class="bottom"><img class="first" src="<?php echo $this->mimgUrl ?>show4.jpg" alt=""><img src="<?php echo $this->mimgUrl ?>show5.jpg" alt=""></div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>