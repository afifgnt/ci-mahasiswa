<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa_model->listing();
        $this->load->view('mahasiswa/list', $data);
    }

    public function tambah()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nim', 'NIM', 'required',
            array('required' => '%s harus diisi'));
        $valid->set_rules('nama', 'Nama Mahasiswa', 'required',
            array('required' => '%s harus diisi'));

        if($valid->run() === FALSE) {
            $this->load->view('mahasiswa/tambah');
        } else {
            $i = $this->input;
            $data = array(
                'nim'       => $i->post('nim'),
                'nama'      => $i->post('nama'),
                'alamat'    => $i->post('alamat')
            );
            $this->mahasiswa_model->tambah($data);
            $this->session->set_flashdata('sukses', 'Data telah ditambah');
            redirect(base_url('mahasiswa'), 'refresh');
        }
    }

    public function edit($id)
    {
        $mahasiswa = $this->mahasiswa_model->detail($id);
        
        $valid = $this->form_validation;
        $valid->set_rules('nim', 'NIM', 'required',
            array('required' => '%s harus diisi'));
        $valid->set_rules('nama', 'Nama Mahasiswa', 'required',
            array('required' => '%s harus diisi'));


        if($valid->run() === FALSE) {
            $data = array('mahasiswa' => $mahasiswa);
            $this->load->view('mahasiswa/edit', $data);
        } else {
            $i = $this->input;
            $data = array(
                'id'        => $id,
                'nim'       => $i->post('nim'),
                'nama'      => $i->post('nama'),
                'alamat'    => $i->post('alamat')
            );
            $this->mahasiswa_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data telah diupdate');
            redirect(base_url('mahasiswa'), 'refresh');
        }
    }

    public function delete($id)
    {
        if($this->mahasiswa_model->detail($id)) {
            $data = array('id' => $id);
            $this->mahasiswa_model->delete($data);
            $this->session->set_flashdata('sukses', 'Data telah dihapus');
            redirect(base_url('mahasiswa'), 'refresh');
        } else {
            $this->session->set_flashdata('danger', 'Data tidak ditemukan');
            redirect(base_url('mahasiswa'), 'refresh');
        }
    }
}