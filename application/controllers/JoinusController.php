<?php
require_once APPLICATION_ROOT_PATH . 'models/Joinus.php';

class JoinusController extends Front_Controller_Action {

    public function preDispatch() {
        $this->_joinus = new Joinus();
        $this->view->title = $this->config['sitename'].'联系我们';
        $this->view->keywords = $this->config['sitename'].'联系我们';
        $this->view->description = $this->config['sitename'].'联系我们';

        $this->view->mimgUrl = $this->view->imgUrl.'joinus/';
        $this->view->header= '<link rel="stylesheet" href="'.$this->view->baseUrl.'css/joinus.css">';
    }

    public function indexAction() {
        $this->view->list = $this->_joinus->getList();
        $info = $this->_joinus->info();
        $this->view->footer= "<script>
        $(function(){
            var list = ".json_encode($info).";
            $('#joinus ul li').click(function(){
                var index = $(this).index();
                $(this).addClass('active').siblings().removeClass('active');
                $('.content>div').eq(index).show().siblings().hide();
                $('#joinus .responsive').attr('src','{$this->view->mimgUrl}banner'+ (index+1) +'.jpg');
            })
            $('#joinus ul li').eq(0).click();
            $('.close').click(function(){
                $('.mask').hide();
            })
            $('.more').click(function(){
                var id = $(this).data('id');
                for(var i = 0;i<list.length;i++){
                    if(id == list[i].id){
                        $('.mask h1').text(list[i].title);
                        $('.mask .english').text(list[i].english);
                        $('.mask .content .chapter').html(list[i].content{$this->view->en});
                    }
                }
                $('.mask').show();
            })
        })
      </script>";
        $this->render('index');
    }
}