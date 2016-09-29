<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Common Admin Controller Code can be kept here */
class Base extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->is_logged_in()) {
            header('location: /_admin/login');
            exit;
        }
    }

    protected function is_logged_in()
    {
        $user_id = $this->session->userdata('admin_id');
        return $user_id;
    }

    protected function json_output($data, $type = '')
    {
        /* add a comman status header */
        if ($type == 'err')
        {
            if (
                is_array($data) &&
                isset($data['exception']) &&
                $data['exception'] instanceof Exception
            )
            {
                $e = $data['exception'];

                $data['exception'] = array(
                    'file'      => $e->getFile(),
                    'line'      => $e->getLine(),
                    'message'   => $e->getMessage(),
                    'trace'     => $e->getTraceAsString(),
                );
            }

            $data = array(
                'status'    => array(
                    'success'   => false,
                    'error'     => $data
                )
            );
        }
        else if ($type == 'msgs')
        {
            $data = array(
                'status'    => array(
                    'msgs'  => $data,
                )
            );
        }
        else {
            $data['status'] = array(
                'success'   => true,
            );
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }

    protected function isPostRequest()
    {
        return strtoupper($_SERVER['REQUEST_METHOD']) == 'POST';
    }

    protected function isGetRequest()
    {
        return strtoupper($_SERVER['REQUEST_METHOD']) == 'GET';
    }

    protected function get_raw_input()
    {
        if ($this->raw_input) {
            return $this->raw_input;
        }

        $this->raw_input = file_get_contents('php://input');
        return $this->raw_input;
    }
}
