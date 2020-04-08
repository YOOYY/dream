<?php
require_once APPLICATION_ROOT_PATH . 'models/Logs.php';

class Joinus{
    public function __construct() {
        $this->_db = Zend_Registry::get('db');
    }

    public function getList() {
        $res = $this->_db->fetchAll('select id,title,english,email,place from joinus');
        $list = $this->_db->fetchAll('select * from jobgroup');
        foreach($list as &$v){
            $v['jobs'] = array();
            foreach($res as $r){
                if($r['place'] == $v['id']){
                    array_push($v['jobs'],$r);
                }
            }
        }
        return $list;
    }

    public function info() {
        return $this->_db->fetchAll('select id,title,english,content from joinus');
    }
}
?>