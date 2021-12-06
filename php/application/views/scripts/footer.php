<div id="footer">
    <div class="container">
        <div class="cover">
            <div class="link">
                <dl>
                    <dt><?php echo $this->translate->_("footerAboutus"); ?></dt>
                    <dd>
                        <a href="<?php echo "{$this->baseUrl}introduction/index{$this->nav_en}"; ?>">
                            <?php echo $this->translate->_("footerIntroduction"); ?>
                        </a>
                    </dd>
                    <dd><a href="<?php echo $this->baseUrl; ?>joinus/index<?php echo $this->nav_en; ?>"><?php echo $this->translate->_("footerContact"); ?></a></dd>
                    <dd><a href="<?php echo "{$this->baseUrl}news/index{$this->nav_en}"; ?>"><?php echo $this->translate->_("footerNews"); ?></a></dd>
                </dl>
                <dl>
                    <dt><?php echo $this->translate->_("footerNotice"); ?></dt>
                    <dd><a href="<?php echo "{$this->baseUrl}news/legal{$this->nav_en}"; ?>"><?php echo $this->translate->_("footerLegal"); ?></a></dd>
                    <dd><a href="<?php echo "{$this->baseUrl}news/service{$this->nav_en}"; ?>"><?php echo $this->translate->_("footerService"); ?></a></dd>
                    <dd><a href="<?php echo "{$this->baseUrl}news/privacy{$this->nav_en}"; ?>"><?php echo $this->translate->_("footerPrivacy"); ?></a></dd>
                </dl>
                <dl class="phone">
                    <dt><?php echo $this->translate->_("footerHotline"); ?></dt>
                    <dd>021-86802380</dd>
                </dl>
            </div>
            <div class="code">
                <div class="erweibox"><img src="<?php echo $this->imgUrl ?>code.jpg" alt="">
                    <p><?php echo $this->translate->_("footerWeChatService"); ?></p>
                </div>
                <div class="erweibox marginleft20"><img src="<?php echo $this->imgUrl ?>code1.jpg" alt="">
                    <p><?php echo $this->translate->_("footerWeChatProgram"); ?></p>
                </div>
            </div>
        </div>
        <p class="tips"> <a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo $this->translate->_("footerLicense"); ?>沪ICP备18024039号-1</a>
            <a class="beian" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010602008563" target="_blank"><img src="<?php echo $this->imgUrl ?>beian.png">&nbsp<?php echo $this->translate->_("footerSecurity"); ?></a>
        </p>
    </div>
</div>
<script src="<?php echo $this->baseUrl; ?>js/jquery.js"></script>
<script src="<?php echo $this->baseUrl; ?>js/base.js"></script>
<?php
if ($this->footer) {
    echo $this->footer;
}
?>
</body>

</html>