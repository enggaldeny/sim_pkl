<?php
class Siswa extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_Siswa');
        $this->load->model('M_Dudi'); 
        $this->load->model('M_pkl');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            $this->Siswa(); 
         }
        
    }
    public function Siswa(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="siswa";
                $this->load->view('header',$menu);
                $data['siswa'] = $this->M_pkl->getQuery("SELECT s.*, d.DUDI_NAMA, d.DUDI_PIMPINAN, d.DUDI_ALAMAT, d.DUDI_TELEPON, d.DUDI_EMAIL FROM prk_siswa s LEFT JOIN prk_dudi d ON s.DUDI_ID=d.DUDI_ID")->result();
                $this->load->view('siswa_list',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    
     public function Siswa_in(){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="siswa";
                $this->load->view('header',$menu);
                $data['kelas'] = $this->M_pkl->getQuery("SELECT * FROM `prk_kelas_jurusan`")->result();
                $this->load->view('siswa_in',$data);
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    
    public function Siswa_ed($id){
        if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "DUDI"){
                redirect(base_url('index.php/Login'));
            }elseif($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="siswa";
                $this->load->view('header',$menu);
                $where = $id;
                $sw=$this->M_Siswa->siswa_ed($where)->result();
                $di=$this->M_Dudi->dudi_list()->result();
                $where = $id;
                $data=['siswa'=>$sw,'dudi'=>$di];
                $this->load->view('siswa_ed',$data);
                $this->load->view('footer');   
            }else{
                redirect(base_url('index.php/Login'));
            }
             
         }
        
    }
    public function upd_siswa(){
        $si=$this->input->post('si');
        $sn=$this->input->post('sn');
        $sj=$this->input->post('sj');
        $sa=$this->input->post('sa');
        $sh=$this->input->post('sh');
        $so=$this->input->post('so');

        $data=array(
            'SW_NAMA'=>$sn,
            'SW_JK'=>$sj,
            'SW_ALAMAT'=>$sa,
            'SW_HP'=>$sh,
            'SW_HP_ORTU'=>$so            
            );
        $where=array('SW_NIS'=>$si);
        $update=$this->M_pkl->updateData('prk_siswa', $data, $where);
         if ($update) {
            $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Siswa telah Diperbarui.";
            redirect(base_url("index.php/Siswa"));
        }else{
            $_SESSION['alert_sales_type'] = "danger";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Kesalahan! Data Siswa gagal Disimpan. Mohon Cek Kembali isian Anda";
            redirect(base_url("index.php/Siswa"));
        }
        //redirect('Siswa');
    }
    
    public function add_siswa(){
        $si=$this->input->post('si');        
        $sk=$this->input->post('sk');
        $sn=$this->input->post('sn');
        $sj=$this->input->post('sj');
        $sa=$this->input->post('sa');
        $sh=$this->input->post('sh');
        $so=$this->input->post('so');

        $data=array(
            'SW_NIS'=>$si,
            'SW_NAMA'=>$sn,
            'SW_JK'=>$sj,
            'SW_ALAMAT'=>$sa,
            'SW_HP'=>$sh,
            'SW_HP_ORTU'=>$so,
            'JURKEL_ID'=>$sk
            );
        $add = $this->M_pkl->saveData('prk_siswa',$data);
         //if ($add > 0) {
            $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Siswa telah Disimpan.";
            redirect(base_url("index.php/Siswa"));
       //}else{
            //$_SESSION['alert_sales_type'] = "danger";
            //$_SESSION['alert_sales_show'] = "show";
            //$_SESSION['alert_sales_msg'] = "Kesalahan! Data Siswa gagal Disimpan. Mohon Cek Kembali isian Anda";
            //redirect(base_url("index.php/Siswa"));
        //}
       // redirect('Siswa');
    }
    public function siswa_del(){
         $si=$this->input->post('si');
         $where=array('SW_NIS'=>$si);
        $del = $this->M_pkl->deleteData('prk_siswa',$where);
        if ($del > 0) {
            $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Siswa telah Dihapus.";
            redirect(base_url("index.php/Siswa"));
        }else{
            $_SESSION['alert_sales_type'] = "danger";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Data Siswa Gagal Dihapus.";
            redirect(base_url("index.php/Siswa"));
        }
    }
}
?>