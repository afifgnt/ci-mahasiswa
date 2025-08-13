<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing all mahasiswa
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail mahasiswa
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Tambah mahasiswa
    public function tambah($data)
    {
        $this->db->insert('mahasiswa', $data);
    }

    // Edit mahasiswa
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('mahasiswa', $data);
    }

    // Delete mahasiswa
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('mahasiswa');
    }
}