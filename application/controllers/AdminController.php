<?php
require_once APPLICATION_ROOT_PATH . 'models/Admin.php';
require_once APPLICATION_ROOT_PATH . 'models/Util.php';
/**
 * 后台管理主页
 * @package admin
 */
class AdminController extends Front_Controller_Action {

    public function preDispatch() {
        $this->_admin = new Admin();
        $this->util = new Util();
    }

    public function indexAction() {
        $this->render('index');
    }

    //管理员登陆后台
    public function loginAction() {
        $req = json_decode(file_get_contents('php://input'));
        $name = $req->name;
        $password = $req->password;
        try {
            $res = $this->_admin->login($name,$password);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function adminlistAction() {
        try {
            $res = $this->_admin->adminList();
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function createadminAction() {
        try {
            $req = json_decode(file_get_contents('php://input'),true);
            $req['password'] = $this->_admin->_encrypt($req['password']);
            $res = $this->_admin->create('adminuser',$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function updateadminAction() {
        try {
            $req = json_decode(file_get_contents('php://input'),true);
            $id = $req['id'];
            if(isset($req['password'])){
                $req['password'] = $this->_admin->_encrypt($req['password']);
            }
            $res = $this->_admin->update('adminuser',$id,$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }
    
    public function deladminAction() {
        try {
            $req = json_decode(file_get_contents('php://input'),true);
            $id = $req['id'];
            $res = $this->_admin->delete('adminuser',$id);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function bannerAction() {
        $name = $this->getRequest()->getPost('name');
        $path = $this->getRequest()->getPost('path');

        $path = dirname(dirname(dirname(__FILE__))) . '/htdocs/imgs/'.$path.'/';
        if($path === 'index'){
            $type = array('image/jpeg','image/png');
        }else{
            $type = array('image/jpeg');
        }

        try {
            $res = $this->_admin->upfile($name,$path,null,$type);
            if($path === 'index'){
                $id = substr($res,6,1);
                $this->_admin->update('banner',$id,array('name'=>$res));
            }
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function bannerlistAction() {
        try {
            $res = $this->_admin->getlist('banner');
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function uploadfileAction() {
        $name = uniqid();
        $path = dirname(dirname(dirname(__FILE__))) . '/htdocs/imgs/article/';

        try {
            $filename = $this->_admin->upfile($name,$path);
            $res = $this->view->imgUrl.'article/'.$filename;
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function joinlistAction() {
        try {
            $res = $this->_admin->joinList();
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function joblistAction() {
        try {
            $res = $this->_admin->getlist('jobgroup');
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function createjobAction() {
        $req = json_decode(file_get_contents('php://input'),true);
        try {
            $res = $this->_admin->create('jobgroup',$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function updatejobAction() {
        $req = json_decode(file_get_contents('php://input'),true);
        $id = $req['id'];
        try {
            $res = $this->_admin->update('jobgroup',$id,$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function deljobAction() {
        $id = json_decode(file_get_contents('php://input'))->id;
        try {
            $this->_admin->delete('jobgroup',$id);
            $res = $this->_admin->itemDelete($id);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function createjoinAction() {
        $req = json_decode(file_get_contents('php://input'),true);
        try {
            $res = $this->_admin->create('joinus',$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function updatejoinAction() {
        $req = json_decode(file_get_contents('php://input'),true);
        $id = $req['id'];
        try {
            $res = $this->_admin->update('joinus',$id,$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function deljoinAction() {
        $id = json_decode(file_get_contents('php://input'))->id;

        try {
            $res = $this->_admin->delete('joinus',$id);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    
    public function articlelistAction() {
        try {
            $res = $this->_admin->getlist('article');
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function createarticleAction() {
        $req = json_decode(file_get_contents('php://input'),true);
        try {
            $res = $this->_admin->create('article',$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function updatearticleAction() {
        $req = json_decode(file_get_contents('php://input'),true);
        $id = $req['id'];
        try {
            $res = $this->_admin->update('article',$id,$req);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }

    public function delarticleAction() {
        $id = json_decode(file_get_contents('php://input'))->id;

        try {
            $res = $this->_admin->delete('article',$id);
            $res = ['error'=>0,'data'=>$res];
        } catch (Exception $e) {
            $res = $this->util->err($e);
        }
        echo json_encode($res);
    }
}
