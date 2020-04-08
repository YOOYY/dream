<?php echo $this->render("header{$this->en}.php");?>
<div id="activity">
      <div class="res_banner"><img class="responsive" src="<?php echo $this->mimgUrl ?>banner2.jpg" alt="">
        <p><?php echo $this->translate->_("media");?></p>
      </div>
      <div class="container">
        <ul class="nav">
          <li><a href="<?php echo $this->baseUrl ?>news"><?php echo $this->translate->_("news");?></a></li>
          <li class="active"><i></i><a href="<?php echo $this->baseUrl ?>news/activity"><?php echo $this->translate->_("activity");?></a></li>
        </ul>
        <ul class="newslist clearfix">
        <?php 
          foreach($this->list as $index => $val){
            $date = explode(' ',$val['time'])[0];
            $dateArr = explode('-',$date);
            $day = array_pop($dateArr);
            $date = implode('.',$dateArr);
            $style = ($index%2 == 1)?'class="mr0"':'';

            if($val['title'.$this->en] && $this->en){
                $title = $val['title'.$this->en];
            }else{
                $title = $val['title'];
            }

            if($val['des'.$this->en] && $this->en){
                $des = $val['des'.$this->en];
            }else{
                $des = $val['des'];
            }

            echo '<li '.$style.'>
            <a href="'.$this->baseUrl.'news/article/id/'.$val['id'].'">
            <img class="responsive" src="'.$val['thumb'].'">
            <div class="text">
              <div class="time">
                <div class="day">'.$day.'</div>
                <div class="line"></div>
                <div class="year">'.$date.'</div>
              </div>
              <div class="list">
                <h2 class="title">'.$title.'</h2>
                <div class="des">'.$des.'</div>
                <div class="more"><i class="icon"></i>'.$this->translate->_("newsDetails").'</div>
              </div>
            </div></a></li>';
          }
        ?>
        </ul>
        <div class="page_div">
          <div class="page" id="page"></div>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>