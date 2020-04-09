<?php

class ServiceController extends Front_Controller_Action {

    public function preDispatch() {
        $this->view->title = $this->config['sitename'].'主营业务';
        $this->view->keywords = $this->config['sitename'].'主营业务';
        $this->view->description = $this->config['sitename'].'主营业务';

        $this->view->mimgUrl = $this->view->imgUrl.'service/';
    }

    public function indexAction() {
        $this->view->header= '<link rel="stylesheet" href="'.$this->view->baseUrl.'css/service'.$this->view->en.'.css">';
        $this->view->footer= "<script>
        $(function(){
            $('#service .nav li').click(function(){
                var index = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                $('#service .container>div').eq(index).show().siblings().hide();
                $('#service .responsive').attr('src','".$this->view->mimgUrl."banner'+ (index+1) +'.jpg');
            })
            $('#service .nav li').eq(0).click();
        })
      </script>";
        $this->render('index');
    }
}