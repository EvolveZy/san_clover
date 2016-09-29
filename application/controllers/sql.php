<?php
/**
 * Created by PhpStorm.
 * User: zalmanzhao
 * Date: 9/27/2016
 * Time: 12:47 PM
 */
class  Sql extends CI_Controller{
    public function _construct()
    {
        parent::_construct();
    }
    public function index()
    {
        //echo phpinfo();
        //$dbA = $this->load->database('sqllite', TRUE);
        $a=$this->db->query("select * from user");
        var_dump($a->result());
    }
}