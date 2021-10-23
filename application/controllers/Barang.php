<?php
defined ('BASEPATH') OR exit('No direct script acces allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data['judul']="Daftar barang";
        $data['barang']=$this->Barang_model->getAllBarang();
        $this-> load->view('templates/header',$data);
        $this->load->view('barang/index');
        $this-> load->view('templates/footer');
    
    }
    function tambah(){
        $data['judul']="Tambah data barang";
          
        $this->form_validation->set_rules('id_barang','Kode Barang','required');
        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('harga','Harga','required|numeric');
        $this->form_validation->set_rules('stock','Stock','required|numeric');

        if( $this->form_validation->run() == FALSE){

                $this-> load->view('templates/header',$data);
                $this->load->view('barang/tambah',);
                $this-> load->view('templates/footer');

        } else {
            $this->Barang_model->tambahbarang();
            $this->session->set_flashdata('flshtambah','Ditambahkan');
            redirect('Barang');
        }
    }
    public function hapus($id){
        $this->Barang_model->hapusdatabarang($id);
        $this->session->set_flashdata('flshtambah','Dihapus');
        redirect('Barang');
    }

}