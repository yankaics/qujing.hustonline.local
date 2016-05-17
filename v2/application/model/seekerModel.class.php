<?php
/**
 * Created by PhpStorm.
 * User: cmm
 * Date: 16/4/23
 * Time: 上午6:52
 */
class seekerModel{

    public $_table = 'baoming';

    function findAllByRandom(){
        $sql = 'select * from '.$this->_table.' order by rand()';
        return DB::findAll($sql);
    }

    function findOneById($id){
        $sql = 'select * from '.$this->_table.' where id='.$id;
        return DB::findOne($sql);
    }

    function del_by_id($id){
        return DB::del($this->_table, 'id='.$id);
    }

    function count(){
        $sql = 'select count(*) from '.$this->_table;
        return DB::findResult($sql, 0, 0);
    }

    function insert($data){
        return DB::insert($this->_table, $data);
    }

    function update($data, $id){
        return DB::update($this->_table, $data, 'id='.$id);
    }
}