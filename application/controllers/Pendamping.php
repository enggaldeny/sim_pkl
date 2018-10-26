<?php
class Pendamping extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Pendamping');
        $this->load->model('M_pkl');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            $this->Pendamping(); 
         }
        
    }
    public function Pendamping(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="pendamping";
                $this->load->view('header',$menu);
                $data['pendamping'] = $this->M_Pendamping->pendamping_list()->result();
                $this->load->view('pendamping_list',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function ed_pgw(){
        $pi=$this->input->post('pi');
        $pnip=$this->input->post('pnip');
        $pn=$this->input->post('pn');
        $ph=$this->input->post('ph');
        $pa=$this->input->post('pa');

        $fields=array(
            'PGW_NIP'=>$pnip,
            'PGW_NAMA'=>$pn,
            'PGW_ALAMAT'=>$pa,
            'PGW_TELEPON'=>$ph
            );
        $where=array('PGW_ID'=>$pi);
        $this->M_pkl->updateData('prk_pegawai',$fields,$where);
        redirect('Pendamping');
    }
    
     public function add_pgw(){   
        $pi=$this->input->post('pi');
        $pn=$this->input->post('pn');
        $ph=$this->input->post('ph');
        $pa=$this->input->post('pa');
        $pl=$this->input->post('pl');
         $pu="-";$pp="-";
             
        if($pl=="checked"){
            $pl="1";
            $pu=$this->input->post('pu');
            $pp=$this->input->post('pp');
        }else{
            $pl="0";
        }
        $data=array(
            'PGW_NIP'=>$pi,
            'PGW_NAMA'=>$pn,
            'PGW_TELEPON'=>$ph,
            'PGW_ALAMAT'=>$pa,
            'PGW_LEVEL'=>$pl,
            'PGW_USERNAME'=>$pu,
            'PGW_PASSWORD'=>$pp,
            'PGW_STATUS'=>1
            );
        $this->M_pkl->saveData('prk_pegawai',$data);
        redirect('pendamping');
    }
     public function del_pgw(){
         $pi=$this->input->post('pi');
         $fields=array(
            'PGW_STATUS'=>'0'
            );
         $where=array('PGW_ID'=>$pi);
        $this->M_pkl->updateData('prk_pegawai',$fields,$where);
        redirect('Pendamping');
    }
}
?>