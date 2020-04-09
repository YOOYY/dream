<?php echo $this->render("header{$this->en}.php");?>
    <div id="shoppage">
      <div class="banner_container"><img class="responsive" src="<?php echo "{$this->mimgUrl}shopbanner{$this->id}.jpg" ?>" alt=""></div>
      <div class="container">
        <h1><?php echo $this->translate->_("shopBuild");?></h1>
        <img class="responsive" src="<?php echo "{$this->mimgUrl}shoppic{$this->id}.jpg"; ?>">
        <h1><?php echo $this->translate->_("shopScenes");?></h1>
        <div class="banner_box"><img class="prev" src="<?php echo $this->mimgUrl ?>prev.png" alt=""><img class="next" src="<?php echo $this->mimgUrl ?>next.png" alt="">
          <ul>
            <?php
                $x=1;
                while ($x<6){
                    $id = ($this->id-1)*5+$x;
                    echo "<li class='pos_{$x}'>
                    <div><img src='{$this->mimgUrl}layer{$id}.jpg'></div>
                  </li>";
                  $x++;
                }
            ?>
          </ul>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>