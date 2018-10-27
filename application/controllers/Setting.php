<?php
class Setting extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
         $this->load->model('M_pkl');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
             $this->Setting();
         }
    }
    public function Setting(){
        if(empty($this->session->userdata('masuk'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="setting";
                $this->load->view('header',$menu);
                $this->load->view('akunsmk_ed');
                $this->load->view('footer'); 
            }elseif($this->session->userdata('as') == "DUDI"){
                $menu['class']="setting";
                $this->load->view('header_dudi',$menu);
                $this->load->view('akundudi_ed');
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
         }
         
    }
    
    function updAkunsmk(){ 
        if (!empty($_POST['pw'])){
            //echo "yes";
            if ($_POST['pw'] == $_POST['konfirm']){
                $fields = array(
                'pgw_nama' => $_POST['nm'],
                'pgw_telepon' => $_POST['hp'],
                'pgw_alamat' => $_POST['alm'],
                'pgw_username' => $_POST['unm'],
                'pgw_password' => md5($_POST['pw']));
                $where = array('pgw_id'=>$_POST['pid']);
                $update = $this->M_pkl->updateData('prk_pegawai', $fields, $where);
                
                if ($update > 0) {
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data akun telah disimpan.";
                    redirect(base_url("index.php/Login/Logout"));
                }else{
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data akun Gagal disimpan.";
                    redirect(base_url("index.php/Setting"));
                }
            }else{
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Kesalahan! Password harus sama.";
                redirect(base_url("index.php/Setting"));
            }
        }else{
            //echo "no";
            $fields = array(
                'pgw_nama' => $_POST['nm'],
                'pgw_telepon' => $_POST['hp'],
                'pgw_alamat' => $_POST['alm'],
                'pgw_username' => $_POST['unm']);
            $where = array('pgw_id'=>$_POST['pid']);
            $update = $this->M_pkl->updateData('prk_pegawai', $fields, $where);
            if ($update > 0) {
                $_SESSION['alert_sales_type'] = "success";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Berhasil! Data akun telah disimpan.";
                redirect(base_url("index.php/Login/Logout"));
            }else{
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Kesalahan! Data akun Gagal disimpan.";
                redirect(base_url("index.php/Setting"));
            }       
        }
        
    }
    function updAkundudi(){ 
        if (!empty($_POST['pw'])){
            //echo "yes";
            if ($_POST['pw'] == $_POST['konfirm']){
                $fields = array(
                'dudi_username' => $_POST['unm'],
                'dudi_password' => md5($_POST['pw']));
                $where = array('dudi_id'=>$_POST['pid']);
                $update = $this->M_pkl->updateData('prk_dudi', $fields, $where);
                
                if ($update > 0) {
                    $_SESSION['alert_sales_type'] = "success";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Berhasil! Data akun telah disimpan.";
                    redirect(base_url("index.php/Login/Logout"));
                }else{
                    $_SESSION['alert_sales_type'] = "danger";
                    $_SESSION['alert_sales_show'] = "show";
                    $_SESSION['alert_sales_msg'] = "Kesalahan! Data akun Gagal disimpan.";
                    redirect(base_url("index.php/Setting"));
                }
            }else{
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Kesalahan! Password harus sama.";
                redirect(base_url("index.php/Setting"));
            }
        }else{
            //echo "no";
            $fields = array(
                'dudiusername' => $_POST['unm']);
            $where = array('dudi_id'=>$_POST['pid']);
            $update = $this->M_pkl->updateData('prk_dudi', $fields, $where);
            if ($update > 0) {
                $_SESSION['alert_sales_type'] = "success";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Berhasil! Data akun telah disimpan.";
                redirect(base_url("index.php/Login/Logout"));
            }else{
                $_SESSION['alert_sales_type'] = "danger";
                $_SESSION['alert_sales_show'] = "show";
                $_SESSION['alert_sales_msg'] = "Kesalahan! Data akun Gagal disimpan.";
                redirect(base_url("index.php/Setting"));
            }       
        }
        
    }
}
?>