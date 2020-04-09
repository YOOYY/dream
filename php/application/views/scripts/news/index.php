<?php echo $this->render("header{$this->en}.php");?>
  <div id="news">
      <div class="res_banner"><img class="responsive" src="<?php echo $this->mimgUrl ?>banner1.jpg" alt="">
        <p>NEWS</p>
      </div>
      <div class="container">
        <ul class="nav">
          <li class="active"><a href="<?php echo $this->baseUrl ?>news"><?php echo $this->translate->_("news");?></a></li>
          <li><i></i><a href="<?php echo $this->baseUrl ?>news/activity"><?php echo $this->translate->_("activity");?></a></li>
        </ul>
        <table class="content">
        <?php
          foreach($this->list as $val){
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

            $date = explode(' ',$val['time'])[0];
            echo  '<tr>
              <td class="thumb">
                <a href="'.$this->baseUrl.'news/news/id/'.$val['id'].'">
                  <img src="'.$val['thumb'].'"></a></td>
              <td class="list">
                <a href="'.$this->baseUrl.'news/news/id/'.$val['id'].'">
                  <h2 class="singletext">'.$title.'</h2>
                  <p class="time">'.$date.'</p>
                  <p class="des singletext">'.$des.'</p>
                </a>
              </td>
            </tr>';
          }
        ?>
        </table>
        <div class="page_div">
          <div class="page" id="page"></div>
        </div>
      </div>
    </div>
<?php echo $this->render("footer.php"); ?>