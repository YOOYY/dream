<?php
require_once APPLICATION_ROOT_PATH . 'models/Article.php';

class IndexController extends Front_Controller_Action {

    public function preDispatch() {
        $this->view->title = $this->config['sitename'].'首页';
        $this->view->keywords = $this->config['sitename'].'首页';
        $this->view->description = $this->config['sitename'].'首页';
    }

    public function indexAction() {
        $article = new Article();
        $this->view->list = $article->getlist();
        $this->view->bannerlist = $article->getExt();
        $this->view->header= 
            '<link rel="stylesheet" href="'.$this->view->baseUrl.'css/index.css">
            <link rel="stylesheet" href="'.$this->view->baseUrl.'css/edslider.css">';
        $this->view->footer= 
            '<script src="'.$this->view->baseUrl.'js/index.js"></script>
            <script src="'.$this->view->baseUrl.'js/jquery.edslider.js"></script>';
        $this->render('index');
    }
}
