<?php

class belajar extends CI_controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function parsing()
    {
       //$data['bio'] ="Nama Saya Sunu";
       $data=array(
        'nama' => "sunu pinasti",
        'pekerjaan' => "mahasiswa"
       );
        $this->load->view('view_belajar',$data);
    }
}