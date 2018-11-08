<?php
class Dudi extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Dudi');
        $this->load->model('M_pkl');       
    }
    public function index(){
        $this->dudi();
        
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
        $du=$this->input->post('du');
        $dpw=$this->input->post('dpw');

         $data=array(
            'DUDI_NAMA'=>$dn,
            'DUDI_PIMPINAN'=>$dp,
            'DUDI_ALAMAT'=>$da,
            'DUDI_TELEPON'=>$dt,
            'DUDI_EMAIL'=>$de,
            'DUDI_USERNAME'=>$du,
            'DUDI_PASSWORD'=>$dw
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
        $du=$this->input->post('du');
        $dpw=$this->input->post('dpw');
        $dpwk=$this->input->post('dpwk');
        if (!empty($dpw)){
            if($dpw == $dpwk){
             $data=array(
            'DUDI_NAMA'=>$dn,
            'DUDI_PIMPINAN'=>$dp,
            'DUDI_ALAMAT'=>$da,
            'DUDI_TELEPON'=>$dt,
            'DUDI_EMAIL'=>$de,
            'DUDI_USERNAME'=>$du,
            'DUDI_PASSWORD'=>md5($dpw)
            );
            $where=array('DUDI_ID'=>$di);
            $update=$this->M_pkl->updateData('prk_dudi', $data, $where);
            if ($update > 0) {
                 //echo $update;
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data DUDI telah diperbarui.";
                    redirect(base_url("index.php/Dudi"));
                }else{
                 //echo $update;
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data DUDI Gagal disimpan.";
                    redirect(base_url("index.php/Dudi"));
                }
            }else{
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Kesalahan! Password harus sama.";
                redirect(base_url("index.php/Dudi"));
            }
        }else{
            $data=array(
            'DUDI_NAMA'=>$dn,
            'DUDI_PIMPINAN'=>$dp,
            'DUDI_ALAMAT'=>$da,
            'DUDI_TELEPON'=>$dt,
            'DUDI_EMAIL'=>$de
                );
            $where=array('DUDI_ID'=>$di);
            $update=$this->M_pkl->updateData('prk_dudi', $data, $where);
            if ($update > 0) {
                //echo $update;
                $_SESSION['alert_sales_type'] = "success";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Berhasil! Data DUDI telah diperbarui.";
                redirect(base_url("index.php/Dudi"));
            }else{
                //echo $update;
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Kesalahan! Data DUDI Gagal disimpan.";
                redirect(base_url("index.php/Dudi"));
            }       
        }
       
    }
    public function del_dudi(){
         $di=$this->input->post('di');
         $where=array('DUDI_ID'=>$di);
        $this->M_pkl->deleteData('prk_dudi',$where);
        redirect('Dudi');
    }
}
?>