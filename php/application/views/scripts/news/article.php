<?php echo $this->render("header{$this->en}.php");?>
<div id="activity_article">
      <div class="res_banner"><img class="responsive" src="<?php echo $this->mimgUrl ?>banner2.jpg" alt="">
        <p>
            <?php 
                if($this->info['title'.$this->en] && $this->en){
                    $title = $this->info['title'.$this->en];
                }else{
                    $title = $this->info['title'];
                }
                echo $title;
            ?>
        </p>
      </div>
      <div class="container">
        <h1>
            <?php 
                if($this->info['title'.$this->en] && $this->en){
                    $title = $this->info['title'.$this->en];
                }else{
                    $title = $this->info['title'];
                }
                echo $title;
            ?>
        </h1>
        <p class="time"><?php echo $this->info['time'] ?></p>
        <div class="content">
            <?php
                if($this->info['content'.$this->en] && $this->en){
                    $content = $this->info['content'.$this->en];
                }else{
                    $content = $this->info['content'];
                }
                echo $content;
            ?>
        </div>
        <ol class="nav">
        <?php
          if($this->prev){
            if($this->prev['title'.$this->en] && $this->en){
                $prevtitle = $this->prev['title'.$this->en];
            }else{
                $prevtitle = $this->prev['title'];
            }
            echo '<li><a href="/news/article/id'.$this->prev['id'].'">'.$this->translate->_("newsPre").' | '.$prevtitle.'</a></li>';
          }
          if($this->next){
            if($this->next['title'.$this->en] && $this->en){
                $nexttitle = $this->next['title'.$this->en];
            }else{
                $nexttitle = $this->next['title'];
            }
            echo '<li><a href="/news/article/id'.$this->next['id'].'">'.$this->translate->_("newsNext").' | '.$nexttitle.'</a></li>';
          }
          ?>
        </ol>
      </div>
    </div>
    <?php
        $reader = $this->info['reader']+1;
        echo "<img style='width:0;height:0;Visibility:hidden' src='/news/updatereader/id/{$this->info['id']}/reader/{$reader}'>";
    ?>
<?php echo $this->render("footer.php"); ?>