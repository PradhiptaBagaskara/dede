<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ukm extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori','kategori');
    }
 
    public function index()
    {
        $kategoris = $this->kategori->get();
        $this->load->view('ukm/index', ['Ukms' => $kategoris]);
    }

    public function create()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama')
        ];
        if ($data['nama_kategori']) {
            $this->kategori->save($data);
            redirect(base_url().'admin/kategori','refresh');
        }

        $this->load->view('ukm/create');
    }

    public function edit($id)
    {
        $data = [
            'id_kategori' => $this->input->post('id_kategori'),
            'nama_kategori' => $this->input->post('nama')
        ];
        if ($data['id_kategori'] && $data['nama_kategori']) {
            $this->kategori->updateById($data, $id, 'id_kategori');
            redirect(base_url().'admin/ukm','refresh');
        }

        $kategori = $this->kategori->getById($id, 'id_kategori');
        // var_dump($kategori);die;
        $this->load->view('ukm/edit', ['Ukm' => $kategori]);
    }


    public function show($id)
    {
        $kategori = $this->kategori->getById($id, 'id_kategori');
        $this->load->view('ukm/show', ['Ukm' => $kategori]);
    }

    public function delete($id)
    {
        $this->kategori->deleteById($id, 'id_kategori');
        redirect('admin/ukm');
    }

 
}