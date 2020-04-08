<?php
require_once APPLICATION_ROOT_PATH . 'models/Logs.php';

class Article{
    public function __construct() {
        $this->_db = Zend_Registry::get('db');
    }

    public function getList($type='', $start=0, $limit = 8) {
        if($type){
            $where = 'where type = '.$type;
        }else{
            $where = '';
        }
        return $this->_db->fetchAll('select id,title,des,title_en,des_en,time,thumb,type from article '.$where.' order by weight desc,id desc limit ' . ($start*$limit) . ',' . $limit);
    }

    public function getNum($type=1) {
        return $this->_db->fetchOne('select count(*) from article where type='.$type);
    }

    public function getExt() {
        return $this->_db->fetchAll('select * from banner');
    }

    public function getInfo($id) {
        $info =  $this->_db->fetchRow('select id,title,time,content,title_en,des_en,content_en,reader,type from article where id='.$id);
        $next = $prev = '';
        $nextinfo = $this->_db->fetchRow('select id,title,title_en from article t1 where t1.id < ? and t1.type = ? order by t1.id desc limit 1', array($id, $info['type']));
        if (!empty($nextinfo)) {
            $next = $nextinfo;
        }

        $previnfo = $this->_db->fetchRow('select t1.id,t1.title,title_en from article t1 where t1.id > ? and t1.type = ? order by t1.id asc limit 1', array($id, $info['type']));
        if (!empty($previnfo)) {
            $prev = $previnfo;
        }
        return array('info'=>$info,'next'=>$next,'prev'=>$prev);
    }

    public function updateReader($id,$reader) {
        $where = $this->_db->quoteInto('id = ?', $id);
        $opts = array('reader'=>$reader);
        return $this->_db->update('article',$opts,$where);
    }
}
?>