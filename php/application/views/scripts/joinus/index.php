<?php echo $this->render("header{$this->en}.php");?>
<div id="joinus">
      <div class="banner_container"><img class="responsive" src="<?php echo $this->mimgUrl ?>banner1.jpg" alt=""></div>
      <div class="container">
        <ul>
          <li><?php echo $this->translate->_("joinusCooperation");?></li>
          <li><?php echo $this->translate->_("joinusTalent");?></li>
        </ul>
        <div class="content">
          <div class="business">
            <h1><?php echo $this->translate->_("joinusMethod");?></h1>
            <div class="message">
              <div class="pagination fl">
                <div class="marginbottom">
                  <h2>&#62; <?php echo $this->translate->_("joinusMerchants");?></h2>
                  <p>E-mail：baosiwang@wedream.com</p>
                </div>
                <div>
                  <h2>&#62; <?php echo $this->translate->_("joinusDevelopment");?></h2>
                  <p>E-mail：anpengjuan@wedream.com</p>
                </div>
              </div>
              <div class="pagination fr">
                <div class="marginbottom">
                  <h2>&#62; <?php echo $this->translate->_("joinusMeetings");?></h2>
                  <p>E-mail：tenglong@wedream.com</p>
                </div>
              </div>
            </div><img src="<?php echo $this->mimgUrl ?>pic.jpg" alt="">
          </div>
          <div class="job">
            <?php
          foreach($this->list as $val){
            if($val['english'] && $this->en){
                $name = $val['english'];
            }else{
                $name = $val['name'];
            }
            echo '<div class="title">'.$this->translate->_("joinusPlace").'-'.$name.'</div>';
            $l = count($val['jobs']);
            foreach($val['jobs'] as $index => $job){
              $jobinfo = '<div>
              <h2>'.$job['title'].'</h2>
              <p class="english">'.$job['english'].'</p>
              <p>E-mail</p>
              <p class="email">'.$job['email'].'</p>
              <button class="more" data-id="'.$job['id'].'">'.$this->translate->_("joinusDetail").'&nbsp&#62;</button>
            </div>';
            if(($index ==($l-1)) && ($index%2 == 0)){
                echo '<div class="chapter">';
                echo $jobinfo;
                echo '</div>';
            }else if($index%2 == 0){
                echo '<div class="chapter">';
                echo $jobinfo;
            }else{
                echo $jobinfo;
                echo '</div>';
            }

            }
          }
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="mask">
      <div class="cover">
        <h1></h1>
        <div class="line"></div>
        <div class="english"></div>
        <img class="close" src="<?php echo $this->mimgUrl ?>close.png" alt="">
        <div class="content">
            <div class="chapter"></div>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>