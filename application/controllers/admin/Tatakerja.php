<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tatakerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        // $this->load->model('Tatakerja_model');

        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("admin/auth/login"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Tata Kerja Aparat Desa',
            'sub_title' => ''
        ];

        $data['tatakerja'] = $this->db->get('tatakerja')->result_array();
        $this->load->view('backend/template/header', $judul);
        $this->load->view('backend/tatakerja/index', $data);
        $this->load->view('backend/template/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('tatakerja', ['id' => $id])->row_array();

        unlink("./uploads/aparatdesa/" . $data['gambar']);

        $this->db->where(['id' => $id]);
        $this->db->delete('tatakerja');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('admin/tatakerja'));
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('tugas', 'Tugas', 'required|trim');
        $this->form_validation->set_rules('fungsi', 'Fungsi', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Tambah Data Tata Kerja',
                'sub_title' => ''
            ];
            $this->load->view('backend/template/header', $judul);
            $this->load->view('backend/tatakerja/tambah_data_tatakerja');
            $this->load->view('backend/template/footer');
        } else {
            $nama_lengkap =  $this->input->post("nama_lengkap", TRUE);
            $jabatan =  $this->input->post("jabatan", TRUE);
            $tugas =  $this->input->post("tugas", TRUE);
            $fungsi =  $this->input->post("fungsi", TRUE);

            $config['upload_path']          = './uploads/aparatdesa';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $data = array('upload_data' => $this->upload->data());
                $gambar = $data['upload_data']['file_name'];
                $slug = url_title($this->input->post('nama_lengkap'), 'dash', TRUE);
                $save = [
                    'nama_lengkap' => $nama_lengkap,
                    'jabatan' => $jabatan,
                    'tugas' => $tugas,
                    'fungsi' => $fungsi,
                    'gambar' => $gambar,
                    'slug' => $slug,

                ];

                $this->db->insert('tatakerja', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("admin/tatakerja"));
            }
        }
    }

    public function edit($id)
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('tugas', 'Tugas', 'required|trim');
        $this->form_validation->set_rules('fungsi', 'Fungsi', 'required|trim');


        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management User',
                'sub_title' => 'Surat Masuk'
            ];

            $data['tatakerja'] = $this->db->get_where('tatakerja', ['id' => $id])->row_array();
            $this->load->view('backend/template/header', $judul);
            $this->load->view('backend/tatakerja/edit_data_tatakerja', $data);
            $this->load->view('backend/template/footer');
        } else {

            $nama_lengkap =  $this->input->post("nama_lengkap", TRUE);
            $jabatan =  $this->input->post("jabatan", TRUE);
            $tugas =  $this->input->post("tugas", TRUE);
            $fungsi =  $this->input->post("fungsi", TRUE);

            $config['upload_path']          = './uploads/aparatdesa';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = $this->db->get_where('tatakerja', ['id' => $id])->row_array();
                unlink("./uploads/aparatdesa/" . $data['gambar']);

                $data = array('upload_data' => $this->upload->data());
                $gambar = $data['upload_data']['file_name'];
                $slug = url_title($this->input->post('nama_lengkap'), 'dash', TRUE);

                $update = [
                    'nama_lengkap' => $nama_lengkap,
                    'jabatan' => $jabatan,
                    'tugas' => $tugas,
                    'fungsi' => $fungsi,
                    'gambar' => $gambar,
                    'slug' => $slug,

                ];

                $this->db->where('id', $id);
                $this->db->update('tatakerja', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("admin/tatakerja"));
            } else {
                $update = [
                    'nama_lengkap' => $nama_lengkap,
                    'jabatan' => $jabatan,
                    'tugas' => $tugas,
                    'fungsi' => $fungsi,
                    'gambar' => $gambar,
                    'slug' => $slug,

                ];

                $this->db->where('id', $id);
                $this->db->update('tatakerja', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("admin/tatakerja"));
            }
        }
    }
}
