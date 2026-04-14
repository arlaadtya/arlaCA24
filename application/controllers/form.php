<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Form_model');
    }

    public function index()
    {
        $data['form'] = $this->Form_model->get_all();

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
        
        $this->Form_model->insert($data);
        redirect('index.php/form');
    }

    public function hapus($id)
    {
        $this->Form_model->delete($id);
        redirect('index.php/form');
    }

    public function edit($id)
    {
        $data['form'] = $this->Form_model->get_by_id($id);

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

        $this->Form_model->update($id, $data);
        redirect('index.php/form');
    }
}