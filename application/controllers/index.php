<?php
/**
 * Created by PhpStorm.
 * User: zalmanzhao
 * Date: 9/26/2016
 * Time: 11:31 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

    public  function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $home_page="select * from home_page";
        $data["homepage"]=$this->db->query($home_page);
        $cateroties="select * from category";
        $data["categories"]=$this->db->query($cateroties);
        $this->load->view("clover/index",$data);
    }

    public function category($id="1")
    {
        $products="select * from products where category_id='".$id."'";
        $data["products"]=$this->db->query($products);
        $category="select * from category where id='".$id."'";
        $data["category"]=$this->db->query($category)->num_rows() ;
        $cateroties="select * from category";
        $data["categories"]=$this->db->query($cateroties);
        $this->load->view("clover/category",$data);
    }
}
