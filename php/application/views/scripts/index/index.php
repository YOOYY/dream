<?php echo $this->render("header{$this->en}.php"); ?>
<ul id="mySlide">
    <?php
    foreach ($this->bannerlist as $bval) {
        if ($bval['path'] === 'index') {
            echo "<li><a><img class='responsive' src='{$this->mimgUrl}{$bval['name']}'></a></li>";
        }
    }
    ?>
</ul>
<div class="container margintop" id="features">
    <div class="features_left"><a href="<?php echo "{$this->baseUrl}brand/index{$this->nav_en}?index=edu"; ?>"><img src="<?php echo $this->mimgUrl ?>feature1.jpg" alt="">
            <div class="text">
                <h6>EDUMALL</h6>
                <p><?php echo $this->translate->_("indexEDUMALL"); ?></p>
            </div>
        </a><a class="row_2 first" href="#"><img src="<?php echo $this->mimgUrl ?>feature3.jpg">
            <div class="text">
                <h6><?php echo $this->translate->_("indexCoffee"); ?></h6>
                <p><?php echo $this->translate->_("indexCoffeeDes"); ?></p>
            </div>
        </a><a class="row_2" href="#"><img src="<?php echo $this->mimgUrl ?>feature4.jpg">
            <div class="text">
                <h6><?php echo $this->translate->_("indexMeal"); ?></h6>
                <p><?php echo $this->translate->_("indexMealDes"); ?></p>
            </div>
        </a></div>
    <div class="features_right"><a href="<?php echo "{$this->baseUrl}brand/index{$this->nav_en}?index=dream"; ?>"><img src="<?php echo $this->mimgUrl ?>feature2.jpg" alt="">
            <div class="text">
                <h6>Dream I Lab</h6>
                <p><?php echo $this->translate->_("indexDream"); ?></p>
            </div>
        </a><a class="last" href="<?php echo "{$this->baseUrl}brand/index{$this->nav_en}?index=library"; ?>"><img src="<?php echo $this->mimgUrl ?>feature5.jpg">
            <div class="text">
                <h6>The Library</h6>
                <p><?php echo $this->translate->_("indexLibrary"); ?></p>
            </div>
        </a></div>
</div>
<div class="margintop" id="newlist">
    <div class="container">
        <h1><?php echo $this->translate->_("indexNews"); ?></h1>
        <ol class="list">
            <?php
            foreach ($this->list as $val) {
                if ($val['title' . $this->en] && $this->en) {
                    $title = $val['title' . $this->en];
                } else {
                    $title = $val['title'];
                }
                $href = $this->baseUrl . 'news/' . ($val['type'] == 1 ? 'news' : 'article') . '/id/' . $val['id'];
                $date = explode(' ', $val['time'])[0];
                echo '<li>
							<a href="' . $href . '">
							<span class="list_title">' . $title . '</span>
							<span class="list_date">' . $date . '
								<span class="visibility">日</span>
							</span>
							</a>
						</li>';
            }
            ?>
        </ol><a class="more" href="<?php echo $this->baseUrl ?>news/activity"><?php echo $this->translate->_("indexMore"); ?><img src="<?php echo $this->imgUrl ?>more.png" alt=""></a>
    </div>
</div>
<div class="container" id="friendlink">
    <h1><?php echo $this->translate->_("indexBrand"); ?></h1>
    <table>
        <tr>
            <td class="side"><img src="<?php echo $this->mimgUrl ?>icon1.png" alt=""></td>
            <td><img src="<?php echo $this->mimgUrl ?>icon2.png" alt=""></td>
            <td><img src="<?php echo $this->mimgUrl ?>icon3.png" alt=""></td>
            <td class="side"><img src="<?php echo $this->mimgUrl ?>icon4.png" alt=""></td>
        </tr>
        <tr>
            <td class="side"><img src="<?php echo $this->mimgUrl ?>icon5.png" alt=""></td>
            <td><img src="<?php echo $this->mimgUrl ?>icon6.png" alt=""></td>
            <td><img src="<?php echo $this->mimgUrl ?>icon7.png" alt=""></td>
            <td class="side"><img src="<?php echo $this->mimgUrl ?>icon8.png" alt=""></td>
        </tr>
    </table>
</div>
<?php echo $this->render("footer.php"); ?>