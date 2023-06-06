<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
     }

     function index()
     {
          $data['judul'] = "Data Dosen";
          $data['dosen'] = $this->ModelDosen->getDosen()->result_array();
          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu', $data);
          $this->load->view('dosen/index', $data);
          $this->load->view('templates/footer');
     }

     public function tambah()
     {
          $data['judul'] = 'Tambah Data Dosen';
          $data['dosen'] = $this->ModelDosen->getDosen(['id' => $this->uri->segment(3)])->result_array();
          $this->load->view('templates/header');
          $this->load->view('templates/menu', $data);
          $this->load->view('dosen/tambah');
          $this->load->view('templates/footer');
     }

     public function SimpanDataDosen($id = null)
     {
          $this->form_validation->set_rules(
               'perguruan_tinggi',
               'nama',
               'prodi',
               'jabatan',
               'pendidikan',
               'jnskel',
               'stts_aktif',
               'ikatankerja',
               'required',
               [
                    'required' => 'Semua Data harus diisi'
               ]
          );
          $data = array(
               'perguruan_tinggi' => $this->input->post('perguruan_tinggi'),
               'nama' => $this->input->post('nama'),
               'prodi' => $this->input->post('prodi'),
               'jabatan' => $this->input->post('jabatan'),
               'pendidikan' => $this->input->post('pendidikan'),
               'jnskel' => $this->input->post('jnskel'),
               'stts_aktif' => $this->input->post('stts_aktif'),
               'ikatankerja' => $this->input->post('ikatankerja'),
          );
          $this->load->model('ModelDosen');
          $this->ModelDosen->simpanDataDosen($data);
          redirect('dosen');
     }

     public function edit()
     {
          $data['judul'] = 'Edit Data Dosen';
          $this->load->model('ModelDosen');
          $data['dosen'] = $this->ModelDosen->getDosen(['id' => $this->uri->segment(3)])->result_array();
          $where = ['id' => $this->uri->segment(3)];
          $data['dosen'] = $this->ModelDosen->dosenWhere($where)->row_array();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/menu', $data);
          $this->load->view('dosen/edit', $data);
          $this->load->view('templates/footer');
     }

     public function editDataDosen()
     {
          $this->form_validation->set_rules(
               'perguruan_tinggi',
               'nama',
               'prodi',
               'jabatan',
               'pendidikan',
               'jnskel',
               'stts_aktif',
               'ikatankerja',
               'required',
               [
                    'required' => 'Semua Data harus diisi'
               ]
          );
          $data = array(
               'perguruan_tinggi' => $this->input->post('perguruan_tinggi'),
               'nama' => $this->input->post('nama'),
               'prodi' => $this->input->post('prodi'),
               'jabatan' => $this->input->post('jabatan'),
               'pendidikan' => $this->input->post('pendidikan'),
               'jnskel' => $this->input->post('jnskel'),
               'stts_aktif' => $this->input->post('stts_aktif'),
               'ikatankerja' => $this->input->post('ikatankerja'),
          );
          $this->load->model('ModelDosen');
          $this->ModelDosen->editDataDosen(['id' => $this->input->post('id')], $data);
          redirect('dosen');
     }

     public function hapus()
     {
          $where = ['id' => $this->uri->segment(3)];
          $this->ModelDosen->hapus($where);
          redirect('dosen');
     }
}
