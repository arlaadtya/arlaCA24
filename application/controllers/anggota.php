<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        if (!$this->session->userdata('login')){
            redirect('login');
        }
    }

    public function index()
    {
        $data['anggota'] = $this->Anggota_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('form/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('form/tambah');
        $this->load->view('templates/footer');
    }

    // SIMPAN
    public function simpan()
    {
        $data = [
            'no' => $this->input->post('no'),
            'no_anggota' => $this->input->post('no_anggota'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'status' => 'Aktif'
        ];
        
        $this->Anggota_model->insert($data);
        redirect('index.php/anggota');
    }

    public function hapus($id)
    {
        $this->Anggota_model->delete($id);
        redirect('index.php/anggota');
    }

    public function edit($id)
    {
        $data['anggota'] = $this->Anggota_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('form/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'no_anggota' => $this->input->post('no_alamat'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'status' => $this->input->post('status')
        ];

        $this->Anggota_model->update($id, $data);
        redirect('index.php/anggota');
    }
}