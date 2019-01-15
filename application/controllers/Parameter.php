<?php
class Parameter extends CI_Controller{    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_pkl');
    }
    public function index(){
         if(empty($this->session->userdata('pv'))){
             redirect(base_url('index.php/Login'));
         }else{
             $this->Parameter();
         }
    }
    public function Parameter(){
        if(empty($this->session->userdata('masuk'))){
             redirect(base_url('index.php/Login'));
         }else{
            if($this->session->userdata('as') == "PEGAWAI"){
                $menu['class']="parameter";
                $this->load->view('header',$menu);
                $data['parameter'] = $this->M_pkl->getData('prk_kategori')->result();
                $data['det_par'] = $this->M_pkl->getQuery('select * from prk_kategori k, prk_detail_kategori d where k.ktg_id=d.ktg_id')->result();
                $this->load->view('parameter',$data);
                $this->load->view('footer'); 
            }else{
                redirect(base_url('index.php/Login'));
            }
         }
    }
    
    public function ed_detprm(){
        $dki=$this->input->post('dki');
        $dk=$this->input->post('dk');

        $fields=array(
            'DK_NAMA'=>$dk
            );
        $where=array('DK_ID'=>$dki);
        $this->M_pkl->updateData('prk_detail_kategori',$fields,$where);
        $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Parameter telah Diperbarui";
        redirect('Parameter');
    }
    
    public function add_detprm(){
        $dk=$this->input->post('dk');
        $kt=$this->input->post('kt');

        $fields=array(
            'DK_NAMA'=>$dk,
            'KTG_ID'=>$kt,
            'BOBOT'=>25
            );
        $this->M_pkl->saveData('prk_detail_kategori',$fields);
        $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Parameter telah Disimpan";
        redirect('Parameter');
    }
    
    public function add_prm(){
        $kn=$this->input->post('kn');
        
        $fields=array(
            'KTG_NAMA'=>$kn
            );
        $this->M_pkl->saveData('prk_kategori',$fields);
         $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Parameter telah Disimpan";
        redirect('Parameter');
        
    }
    
     public function ed_prm(){
        $ki=$this->input->post('ki');
        $kn=$this->input->post('kn');

        $fields=array(
            'KTG_NAMA'=>$kn
            );
        $where=array('KTG_ID'=>$ki);
        $this->M_pkl->updateData('prk_kategori',$fields,$where);
         $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Parameter telah Diperbarui";
        redirect('Parameter');
    }
    public function del_prm(){
         $pr=$this->input->post('pr');
         $where=array('KTG_ID'=>$pr);
        $cek_prm=$this->M_pkl->getQuery("select KTG_ID from prk_detail_kategori where KTG_ID='$pr'");
        if($cek_prm->num_rows() >0){
            $_SESSION['alert_sales_type'] = "danger";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Data Parameter masih dipakai, harap ganti / hapus terlebih dahulu Parameter di Tabel Detail Parameter.";
            redirect(base_url("index.php/Parameter"));
        }else{
            $del = $this->M_pkl->deleteData('prk_kategori',$where);
            $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Parameter telah Dihapus.";
            redirect(base_url("index.php/Parameter"));
        }     
        
    }
    public function del_detprm(){
         $dpr=$this->input->post('dpr');
         $where=array('DK_ID'=>$dpr);
        $cek_dprm=$this->M_pkl->getQuery("select DK_ID from prk_det_nilai where DK_ID='$dpr'");
        if($cek_dprm->num_rows() >0){
            $_SESSION['alert_sales_type'] = "danger";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Data Parameter masih dipakai untuk penilaian.";
            redirect(base_url("index.php/Parameter"));
        }else{
            $del = $this->M_pkl->deleteData('prk_detail_kategori',$where);
            $_SESSION['alert_sales_type'] = "success";
            $_SESSION['alert_sales_show'] = "show";
            $_SESSION['alert_sales_msg'] = "Berhasil! Data Parameter telah Dihapus.";
            redirect(base_url("index.php/Parameter"));
        }
       
        
            
        
    }
}
?>