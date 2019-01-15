<?php
class Home extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_pkl'); 
       /* if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
             if(empty($this->session->userdata('masuk'))){
                redirect(base_url('index.php/Login'));
             }else{
                redirect(base_url('index.php/Home')); 
             }
         }*/
    }
    public function index(){
        
             $this->Home();
    }
    public function Home(){
        $data['dudi']=$this->M_pkl->getQuery("select count(DUDI_ID) as jum_dudi from prk_dudi")->result();
            if($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="home";
                $this->load->view('header',$menu);
                $this->load->view('home_pegawai',$data);
                $this->load->view('footer'); 
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="home";
                $this->load->view('header_dudi',$menu);
                $this->load->view('home_dudi',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
         
    }
}
?>