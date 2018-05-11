<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simon extends CI_Controller
{

    public function index()
    {
        $data['title'] = '<b>Welcome</b>';

        $query=$this->db->query("select * from product");
        $num=$query->num_rows();

        $data['name'] = "Simon : {$num}";


        if ($this->input->get('x') != null && $this->input->get('y') != null) {
            $x = $this->input->get('x');
            $y = $this->input->get('y');
            $result = $x + $y;
            $data['x'] = $x;
            $data['y'] = $y;
            $data['result'] = $result;

            $this->load->view('simon', $data);
            $this->load->view('temps/header', $data);

        }else{
//            redirect("/",'refresh');
            $this->load->view('simon2');
            $this->load->view('temps/header',$data);

        }
    }
}
