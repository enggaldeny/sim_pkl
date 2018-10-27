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
        $bb=$this->input->post('bb');

        $fields=array(
            'DK_NAMA'=>$dk,
            'BOBOT'=>$bb
            );
        $where=array('DK_ID'=>$dki);
        $this->M_pkl->updateData('prk_detail_kategori',$fields,$where);
        redirect('Parameter');
    }
    
    public function add_detprm(){
        $dk=$this->input->post('dk');
        $kt=$this->input->post('kt');
        $bb=$this->input->post('bb');

        $fields=array(
            'DK_NAMA'=>$dk,
            'KTG_ID'=>$kt,
            'BOBOT'=>$bb
            );
        $this->M_pkl->saveData('prk_detail_kategori',$fields);
        redirect('Parameter');
    }
    
    public function add_prm(){
        $kn=$this->input->post('kn');
        
        $fields=array(
            'KTG_NAMA'=>$kn
            );
        $this->M_pkl->saveData('prk_kategori',$fields);
        redirect('Parameter');
    }
}
?>