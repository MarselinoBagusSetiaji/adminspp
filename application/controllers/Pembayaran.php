<?php
class Pembayaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Pembayaran');
    }

    public function index(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Pembayaran";
        $data['pembayaran'] = $this->M_Pembayaran->data_pembayaran();
        $this->template->load_admin('index','pembayaran',$data);
    }

    public function tambah(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $data['title'] = "Data Pembayaran";
        $data['subtitle'] = "Tambah Data Pembayaran";
        $this->template->load_admin('index','pembayaran_tambah',$data);
    }

    public function simpan(){
        if($this->session->userdata('login')!= TRUE){
            redirect('login');
        }

        $this->M_Pembayaran->simpan();
        redirect('pembayaran');
    }

    public function hapus(){
      if($this->session->userdata('login')!= TRUE){
      redirect('login');
      }
      $id = $this->uri->segment(3);
      $this->M_Pembayaran->hapus_data_pembayaran($id);
      redirect('pembayaran');
    }
    public function pdf(){
      $this->load->library('dompdf_gen');

      $data['pembayaran'] = $this->M_Pembayaran->data_pembayaran()->result();

      $this->load->view('laporan_pembayaran_pdf',$data);

      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);

      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("pembayaran", array('Attachment' =>0));

}

}
