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
        $pl=$this->input->post('pl');
        if(isset($pl)){
            $pl="1";
            $pu=$this->input->post('pu');
            $pp=md5($this->input->post('pp'));
            
            if(!empty($pp)){
                echo $pu;
            $fields=array(
            'PGW_NIP'=>$pnip,
            'PGW_NAMA'=>$pn,
            'PGW_ALAMAT'=>$pa,
            'PGW_TELEPON'=>$ph,
            'PGW_LEVEL'=>$pl,
            'PGW_USERNAME'=>$pu,
            'PGW_PASSWORD'=>$pp
            );
            $where=array('PGW_ID'=>$pi);
            $update=$this->M_pkl->updateData('prk_pegawai',$fields,$where);
                if ($update > 0) {
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data Guru telah diperbarui.";
                    redirect(base_url("index.php/Pendamping"));
                }else{
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data Guru Gagal disimpan.";
                    redirect(base_url("index.php/Pendamping"));
                }
            }else{
            //$pu=$this->input->post('pu');
               // echo $pu;
             $fields=array(
            'PGW_NIP'=>$pnip,
            'PGW_NAMA'=>$pn,
            'PGW_ALAMAT'=>$pa,
            'PGW_TELEPON'=>$ph,
            'PGW_LEVEL'=>$pl,
            'PGW_USERNAME'=>$pu
            );
            $where=array('PGW_ID'=>$pi);
            $update=$this->M_pkl->updateData('prk_pegawai',$fields,$where);
                if ($update > 0) {
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data Guru telah diperbarui.";
                    redirect(base_url("index.php/Pendamping"));
                }else{
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data Guru Gagal disimpan.";
                    redirect(base_url("index.php/Pendamping"));
                }
            }
            
        }else{
            //echo $pl;
            $fields=array(
            'PGW_NIP'=>$pnip,
            'PGW_NAMA'=>$pn,
            'PGW_ALAMAT'=>$pa,
            'PGW_TELEPON'=>$ph
            );
            $where=array('PGW_ID'=>$pi);
        
            $update=$this->M_pkl->updateData('prk_pegawai',$fields,$where);
            if ($update > 0) {
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data Guru telah diperbarui.";
                    redirect(base_url("index.php/Pendamping"));
                }else{
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data Guru Gagal disimpan.";
                    redirect(base_url("index.php/Pendamping"));
                }
        }        
       // redirect('Pendamping');
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
        $add=$this->M_pkl->saveData('prk_pegawai',$data);
         if ($add > 0) {
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data Guru telah diperbarui.";
                    redirect(base_url("index.php/Pendamping"));
                }else{
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data Guru Gagal disimpan.";
                    redirect(base_url("index.php/Pendamping"));
                }
    }
     public function del_pgw(){
         $pi=$this->input->post('pi');
         $where=array('PGW_ID'=>$pi);
          $cek_pgw=$this->M_pkl->getQuery("select PGW_ID from prk_dudi where PGW_ID='$pi'");
         $cek_lvl = $this->M_pkl->getQuery("select PGW_ID from prk_pegawai where PGW_ID='$pi' and PGW_LEVEL=1"); 
         if($cek_pgw->num_rows() >0){
            $_SESSION['alert_sales_type'] = "danger";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Data Pendamping masih dipakai, harap ganti terlebih dahulu Pendamping di DUDI Terkait pada menu Plotting.";
            redirect(base_url("index.php/Pendamping"));
         }else{
            if($cek_lvl->num_rows() > 0){
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Guru ini adalah POKJA PKL, Anda tidak dapat menghapusnya sebelum mengganti Level menjadi Pendamping.";
                redirect(base_url("index.php/Pendamping"));
            }else{
                $del = $this->M_pkl->deleteData('prk_pegawai',$where);
                $_SESSION['alert_sales_type'] = "success";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Berhasil! Data Pendamping telah Dihapus.";
                redirect(base_url("index.php/Pendamping"));
            }
            
         }
    }
}
?>