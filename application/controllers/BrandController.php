<?php

class BrandController extends Front_Controller_Action {

    public function preDispatch() {
        $this->view->title = $this->config['sitename'].'品牌';
        $this->view->keywords = $this->config['sitename'].'品牌';
        $this->view->description = $this->config['sitename'].'品牌';

        $this->view->mimgUrl = $this->view->imgUrl.'brand/';
        $this->view->header= '<link rel="stylesheet" href="'.$this->view->baseUrl.'css/brand.css">';
    }

    public function indexAction() {
        $this->view->footer= "<script>
        $(function(){
            $('#brand .nav li').click(function(){
                var index = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                $('#brand .container>div').eq(index).show().siblings().hide();
                $('#brand .responsive').attr('src','".$this->view->mimgUrl."banner'+ (index+1) +'.jpg');
            })
            var index = GetQueryString('index');
            switch(index){
                case 'edu':
                    index = 2;
                    break;
                case 'dream':
                    index = 1;
                    break;
                case 'library':
                    index = 0;
                    break;
                default:
                    index = 0;
            }
            $('#brand .nav li').eq(index).click();
        })
      </script>";
        $this->render('index');
    }
}