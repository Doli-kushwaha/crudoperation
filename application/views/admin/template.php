<?php
$this->load->view('admin/header');
if(isset($viewfile)){
$this->load->view($viewfile);
}
$this->load->view('admin/footer');

?>