<?php
class Dudi extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Dudi');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            $this->Dudi();
         }
        
    }
    public function Dudi(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="dudi";
                $this->load->view('header',$menu);
                $data['dudi'] = $this->M_Dudi->dudi_list()->result();
                $this->load->view('dudi_list',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function Dudi_in(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="dudi";
                $this->load->view('header',$menu);
                $this->load->view('dudi_in');
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function Dudi_ed($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="dudi";
                $this->load->view('header',$menu);
                $where = $id;
                $data['dudi'] = $this->M_Dudi->dudi_ed($where)->result();
                $this->load->view('dudi_ed',$data);
                $this->load->view('footer');  
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
         
    }
     public function ins_dudi(){
        $dn=$this->input->post('dn');
        $dp=$this->input->post('dp');
        $da=$this->input->post('da');
        $dt=$this->input->post('dt');
        $de=$this->input->post('de');

         $data=array(
            'DUDI_NAMA'=>$dn,
            'DUDI_PIMPINAN'=>$dp,
            'DUDI_ALAMAT'=>$da,
            'DUDI_TELEPON'=>$dt,
            'DUDI_EMAIL'=>$de
            );
        $this->M_Dudi->insertdudi($data,'prk_dudi');
        redirect('Dudi');
    }
    public function upd_dudi(){
        $di=$this->input->post('di');
        $dn=$this->input->post('dn');
        $dp=$this->input->post('dp');
        $da=$this->input->post('da');
        $dt=$this->input->post('dt');
        $de=$this->input->post('de');

        $data=array(
            'DUDI_NAMA'=>$dn,
            'DUDI_PIMPINAN'=>$dp,
            'DUDI_ALAMAT'=>$da,
            'DUDI_TELEPON'=>$dt,
            'DUDI_EMAIL'=>$de
            );
        $where=array('DUDI_ID'=>$di);
        $this->M_Dudi->updatedudi($where,$data,'prk_dudi');
        redirect('Dudi');
    }
}
?>