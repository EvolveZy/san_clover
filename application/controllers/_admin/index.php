<?php
/**
 * Created by PhpStorm.
 * User: zalmanzhao
 * Date: 9/26/2016
 * Time: 9:16 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once __DIR__ . '/Base.php';

class Index extends Base
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $products = "select p.*,c.name as category from products p LEFT JOIN category c on p.category_id=c.id order by create_at desc";
        $data["products"] = $this->db->query($products);
        $categories = "select * from category";
        $data["categories"] = $this->db->query($categories);
        $this->load->view("_admin/index", $data);
    }

    public function product_save()
    {
        $request = $_SERVER['REQUEST_METHOD'];
        $data = array();
        $data['message'] = '';
        $products = "select p.*,c.name as category from products p LEFT JOIN category c on p.category_id=c.id order by create_at desc";
        $data["products"] = $this->db->query($products);
        $categories = "select * from category";
        $data["categories"] = $this->db->query($categories);
        if ($request == "POST") {
            $pname = trim($this->input->post("name"));
            $category = trim($this->input->post("category"));
            $price = trim($this->input->post("price"));
            $manualoverride = trim($this->input->post("manualoverride"));
            $unit = trim($this->input->post("unit"));
            $description = trim($this->input->post("description"));
            $enabled = trim($this->input->post("enabled"));
            if (!empty($pname) && !empty($price)) {
                $config['upload_path'] = APPPATH . "../assets/products";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = time();
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('img')) {
                    $this->session->set_userdata('error', $this->upload->display_errors());
                } else {
                    $img = $this->upload->file_name;
                    $sql = "INSERT INTO products (name, category_id, price,manualoverride,unit,description,img_src,status,create_at) VALUES ('" . $pname . "','" . $category . "','" . $price . "','" . $manualoverride . "','" . $unit . "','" . $description . "','" . $img . "','" . $enabled . "','" . date('y-m-d h:i:s', time()) . "')";
                    if ($this->db->query($sql)) {
                        $this->session->set_userdata('error', "添加成功");
                    } else {
                        $this->session->set_userdata('error', "添加失败");
                    }
                }
            } else {
                $this->session->set_userdata('error', "名称和价格不能为空！");
            }
        }
        redirect('_admin/index');
    }

    public function product_edit()
    {
        $id=$this->input->get_post("id");
        $data = array();
        $categories = "select * from category";
        $data["categories"] = $this->db->query($categories);
        if ($this->input->post('action') == 'save') {
            $id = trim($this->input->post("id"));
            $pname = trim($this->input->post("name"));
            $category = trim($this->input->post("category"));
            $price = trim($this->input->post("price"));
            $manualoverride = trim($this->input->post("manualoverride"));
            $unit = trim($this->input->post("unit"));
            $description = trim($this->input->post("description"));
            $enabled = trim($this->input->post("enabled"));
            $img = $_FILES["img"]["name"];
            if (!empty($pname) && !empty($price)) {
                if (!empty($img)) {
                    $config['upload_path'] = APPPATH . "../assets/products";
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['file_name'] = time();
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('img')) {
                        $data['error'] = $this->upload->display_errors();
                        $this->load->view("_admin/product_edit", $data);
                        return;
                    } else {
                        $img = $this->upload->file_name;
                        $sql = "update products set name='" . $pname . "',category_id='" . $category . "',price='" . $price . "',manualoverride='" . $manualoverride . "',unit='" . $unit . "',description='" . $description . "',img_src='" . $img . "',status='" . $enabled . "',update_at='" . date('y-m-d h:i:s', time()) . "' where id='{$id}'";
                    }
                } else {
                    $sql = "update products set name='" . $pname . "',category_id='" . $category . "',price='" . $price . "',manualoverride='" . $manualoverride . "',unit='" . $unit . "',description='" . $description . "',status='" . $enabled . "',update_at='" . date('y-m-d h:i:s', time()) . "' where id='{$id}'";
                }
                if ($this->db->query($sql)) {
                    $data['error'] = "修改成功";
                } else {
                    $data['error'] = "修改失败";
                }
            }
        }
        $products = "select p.*,c.name as category from products p LEFT JOIN category c on p.category_id=c.id where p.id='{$id}'";
        $data["product"] = $this->db->query($products)->row();;
        $this->load->view("_admin/product_edit", $data);
    }

    public function product_delete()
    {
        $id = $this->input->post("id");
        $sql="delete from products where id='{$id}'";
        if ($this->db->query($sql)) {
            echo "删除成功";
        } else {
            echo "删除失败";
        }
    }

    public function categories()
    {
        $categories = "select * from category";
        $data["categories"] = $this->db->query($categories);
        $this->load->view("_admin/category", $data);
    }

    public  function get_product_category()
    {
        $id = $this->input->post("id");
        $sql="select count(*) as countp from products where category_id='{$id}'";
        if ($result=$this->db->query($sql)) {
            echo $result->row()->countp;
        } else {
            echo 0;
        }
    }

    public function category_delete()
    {
        $id = $this->input->post("id");
        $sql="delete from category where id='{$id}'";
        if ($this->db->query($sql)) {
            $sql="update products set category_id='' where category_id='{$id}'";
            $this->db->query($sql);
            echo "删除成功";
        } else {
            echo "删除失败";
        }
    }

    public function category_edit_save()
    {
        $id=$this->input->post("id");
        $name=$this->input->post("name");
        $sql="update category set name='{$name}' where id='{$id}'";
        if ($this->db->query($sql)) {
            echo "修改成功";
        } else {
            echo "修改失败";
        }
    }

    public function category_save()
    {
        $name=trim($this->input->post("name"));
        $sql="select * from category where name='{$name}'";
        echo $sql;
        if($this->db->query($sql))
        {
            $this->session->set_userdata('cerror', "已经有了，就不要再加了嘛");
        }
        elseif (empty($name))
        {
            $this->session->set_userdata('cerror', "空的就不要加了嘛");
        }
        else
        {
            $sql="insert category(name) values('{$name}')";
            if ($this->db->query($sql)) {
                $this->session->set_userdata('cerror', "添加成功");
            } else {
                $this->session->set_userdata('cerror', "添加失败");
            }
        }
        redirect("/_admin/categories");
    }

    public function home_page()
    {
        $home_page = "select * from home_page";
        $data["home_page"] = $this->db->query($home_page);
        $this->load->view("_admin/homepage", $data);
    }

    public function home_page_save()
    {
        $request = $_SERVER['REQUEST_METHOD'];
        if ($request == "POST") {
            $img = $_FILES["name"]["name"];
            if (!empty($img)) {
                $config['upload_path'] = APPPATH . "../assets/images";
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = time();
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('name')) {
                    $this->session->set_userdata('herror', $this->upload->display_errors());
                } else {
                    $name = $this->upload->file_name;
                    $sql = "INSERT INTO home_page (image_src,create_at) VALUES ('" . $name . "','" . date('y-m-d h:i:s', time()) . "')";
                    if ($this->db->query($sql)) {
                        $this->session->set_userdata('herror', "图片添加成功");
                    } else {
                        $this->session->set_userdata('herror', "图片添加失败");
                    }
                }
            } else {
                $this->session->set_userdata('herror', "空的就不要上传哈！");
            }
        }
        redirect('_admin/homepage');
    }
}