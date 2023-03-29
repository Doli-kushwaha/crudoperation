<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
       parent::__construct();
        $this->load->database();
        $this->load->helper('file');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }


	public function index()
	{
		$data['usersdata'] = $this->db->get('user')->result_array();
		// print_r($data['user']); die;
		// $this->load->view('welcome_message');
		$this->load->view('admin/table_view',$data);
	}



	public function adduser(){
		$this->load->view('admin/add_user');
	}

	public function add_users(){
		$data = array();
        $this->form_validation->set_rules('username', 'Username ', 'required');
        $this->form_validation->set_rules('mob_no', 'mobno', 'required');
         $this->form_validation->set_rules('email', 'email', 'required');
         if ($this->form_validation->run() == true) {
            $this->adduser();
        } else {
        //     /$data = array();
             if (!empty($_FILES['photo']['name'])) {
                $photo =  preg_replace('/\s+/', '-', $_FILES['photo']['name']);
                $config['upload_path'] = realpath('./assets/images/');
                $config['allowed_types'] = '*';
                $config['file_name'] = $photo;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo', $config)) {
                    $error = array('error' => $this->upload->display_errors());
//              
                } else {
//              
                }
                $data['photo'] = $photo;
                // print_r( $data['photo']); die;
            }
          $data['uname'] = $this->input->post('username');
          $data['email'] = $this->input->post('uemail');
          $data['mob_no'] = $this->input->post('mobno');
          $result = $this->db->insert('user',$data);
        if ($result) {
                $this->session->set_flashdata('success', 'Record Add successfully');
                redirect('Admin');
            } else {
              $this->session->set_flashdata('danger', 'Failed');
                redirect('admin');
                // echo"failed";
            }
        }

	}


      
      public function edituser($id){
      	$this->db->where('uid',$id);
      	$data['user'] = $this->db->get('user')->row();
      	$this->load->view('admin/edit_user',$data);
      }

      public function updateuser($id){
      	$data = array();
        $this->form_validation->set_rules('username', 'Username ', 'required');
        $this->form_validation->set_rules('mob_no', 'mobno', 'required');
         $this->form_validation->set_rules('email', 'email', 'required');
         if ($this->form_validation->run() == true) {
            $this->adduser();
        } else {
        //     /$data = array();
             if (!empty($_FILES['photo']['name'])) {
                $photo =  preg_replace('/\s+/', '-', $_FILES['photo']['name']);
                $config['upload_path'] = realpath('./assets/images/');
                $config['allowed_types'] = '*';
                $config['file_name'] = $photo;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('photo', $config)) {
                    $error = array('error' => $this->upload->display_errors());
//              
                } else {
//              
                }
                $data['photo'] = $photo;
                // print_r( $data['photo']); die;
            }
          $data['uname'] = $this->input->post('username');
          $data['email'] = $this->input->post('uemail');
          $data['mob_no'] = $this->input->post('mobno');
          $this->db->where('uid',$id);
          $result = $this->db->update('user',$data);
        if ($result) {
                $this->session->set_flashdata('success', 'Record Update successfully');
                redirect('Admin');
            } else {
              $this->session->set_flashdata('danger', 'Failed');
                redirect('admin');
                // echo"failed";
            }
        }
    }


   public function userdelete($id){
	$this->db->where('uid',$id);
	$result = $this->db->delete('user');
	if ($result) {
                $this->session->set_flashdata('success', 'Record Delete successfully');
                redirect('Admin');
            } else {
              $this->session->set_flashdata('danger', 'Failed');
                redirect('admin');
                // echo"failed";
            }

      }
     






}
