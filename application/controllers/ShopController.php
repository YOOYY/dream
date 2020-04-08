<?php

class ShopController extends Front_Controller_Action {

    public function preDispatch() {
        $this->view->title = $this->config['sitename'].'线下店铺';
        $this->view->keywords = $this->config['sitename'].'线下店铺';
        $this->view->description = $this->config['sitename'].'线下店铺';

        $this->view->mimgUrl = $this->view->imgUrl.'shop/';
        $this->view->header= '<link rel="stylesheet" href="'.$this->view->baseUrl.'css/shop.css">';
    }

    public function indexAction() {
        $this->view->footer= "<script>
        $(function(){
            $('.icon').click(function(){
                var index = $(this).index()-1;
                animate(index,this);
            })
            $('.navbar img').mouseenter(function(){
                var index = $(this).parent().index();
                animate(index,this);
            })
            $('#shop .navbar img').eq(0).mouseenter();
            
            function animate(index,_that){
                var imgIndex = index+1;
        
                $('#shop .banner').attr('src','".$this->view->mimgUrl."banner'+ imgIndex +'.jpg');
                $('.navbar img').removeClass('active');
                $(_that).addClass('active');
                $('.map .icon').removeClass('active');
                $('.map .icon').each(function(i,item){
                    var imgSrc = $(this).attr('src');
                    if(index === i){
                        $(this).addClass('active');
                        imgSrc = imgSrc.replace('tip'+ imgIndex +'".$this->view->translate->_("_en").".png','tip'+ imgIndex +'_active".$this->view->translate->_("_en").".png');
                    }else{
                        imgSrc = imgSrc.replace('tip'+ (i+1) +'_active".$this->view->translate->_("_en").".png','tip'+ (i+1) +'".$this->view->translate->_("_en").".png');
                    }
                    $(this).attr('src',imgSrc);
                })

                $('#shop .tips').hide();
                $('#shop .tips').eq(index).show();
            }
        })
      </script>";
        $this->render('index');
    }

    public function shoppageAction() {
        $this->view->id = (int) $this->_getParam('id', 1);
        $this->view->footer= '<script src="'.$this->view->baseUrl.'js/layer.js"></script>';
        $this->render('shoppage');
    }
}