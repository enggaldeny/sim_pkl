<?php
class Home extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
             $this->Home();
         }
    }
    public function Home(){
        if(empty($this->session->userdata('masuk'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="home";
                $this->load->view('header',$menu);
                $this->load->view('home_pegawai');
                $this->load->view('footer'); 
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="home";
                $this->load->view('header_dudi',$menu);
                $this->load->view('home_pegawai');
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
         }
         
    }
}
?>