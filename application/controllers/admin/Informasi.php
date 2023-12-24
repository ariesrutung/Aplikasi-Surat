<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model', 'auth');
        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("auth/login"));
        }
    }

    public function index()
    {

        $judul = [
            'title' => 'Management Informasi',
            'sub_title' => ''
        ];

        $data['data'] = $this->db->get('informasi')->result_array();
        $this->load->view('new_ui/template/header', $judul);
        $this->load->view('new_ui/informasi/index', $data);
        $this->load->view('new_ui/template/footer');
    }

    public function hapus($id)
    {

        $data = $this->db->get_where('informasi', ['id' => $id])->row_array();

        unlink("./uploads/informasi/" . $data['gambar']);

        $this->db->where(['id' => $id]);
        $this->db->delete('informasi');
        $this->session->set_flashdata('success', 'Berhasil Dihapus!');
        redirect(base_url('admin/informasi'));
    }

    public function tambah_informasi()
    {

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('ket_gambar', 'Keterangan Gambar', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Tambah Informasi',
                'sub_title' => ''
            ];
            $this->load->view('new_ui/template/header', $judul);
            $this->load->view('new_ui/informasi/tambah_informasi');
            $this->load->view('new_ui/template/footer');
        } else {

            $judul = $this->input->post("judul", TRUE);
            $isi = $this->input->post("isi", TRUE);
            $lokasi = $this->input->post("lokasi", TRUE);
            $ket_gambar = $this->input->post("ket_gambar", TRUE);
            $tanggal = $this->input->post("tanggal", TRUE);
            $kategori = $this->input->post("kategori", TRUE);
            $penulis = $this->session->userdata('id_user');

            $config['upload_path']          = './uploads/informasi';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $data = array('upload_data' => $this->upload->data());
                $gambar = $data['upload_data']['file_name'];
                $slug = url_title($this->input->post('judul'), 'dash', TRUE);

                $save = [
                    'judul' => $judul,
                    'isi' => $isi,
                    'lokasi' => $lokasi,
                    'gambar' => $gambar,
                    'ket_gambar' => $ket_gambar,
                    'slug' => $slug,
                    'tanggal' => $tanggal,
                    'kategori' => $kategori,
                    'penulis' => $penulis,
                ];

                $this->db->insert('informasi', $save);
                $this->session->set_flashdata('success', 'Berhasil Ditambahkan!');
                redirect(base_url("admin/informasi"));
            }
        }
    }

    public function edit_informasi($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('ket_gambar', 'Keterangan Gambar', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $judul = [
                'title' => 'Management Informasi',
                'sub_title' => 'Surat Masuk'
            ];

            $data['informasi'] = $this->db->get_where('informasi', ['id' => $id])->row_array();
            $this->load->view('new_ui/template/header', $judul);
            $this->load->view('new_ui/informasi/edit_informasi', $data);
            $this->load->view('new_ui/template/footer');
        } else {
            $judul = $this->input->post("judul", TRUE);
            $isi = $this->input->post("isi", TRUE);
            $lokasi = $this->input->post("lokasi", TRUE);
            $ket_gambar = $this->input->post("ket_gambar", TRUE);
            $tanggal = $this->input->post("tanggal", TRUE);
            $kategori = $this->input->post("kategori", TRUE);

            $config['upload_path']          = './uploads/informasi';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = $this->db->get_where('informasi', ['id' => $id])->row_array();
                unlink("./uploads/informasi/" . $data['gambar']);

                $data = array('upload_data' => $this->upload->data());
                $gambar = $data['upload_data']['file_name'];
                $slug = url_title($this->input->post('judul'), 'dash', TRUE);

                $update = [
                    'judul' => $judul,
                    'isi' => $isi,
                    'lokasi' => $lokasi,
                    'gambar' => $gambar,
                    'ket_gambar' => $ket_gambar,
                    'slug' => $slug,
                    'tanggal' => $tanggal,
                    'kategori' => $kategori,

                ];

                $this->db->where('id', $id);
                $this->db->update('informasi', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("admin/informasi"));
            } else {
                $update = [
                    'judul' => $judul,
                    'isi' => $isi,
                    'lokasi' => $lokasi,
                    'gambar' => $gambar,
                    'ket_gambar' => $ket_gambar,
                    'slug' => $slug,
                    'tanggal' => $tanggal,
                    'kategori' => $kategori,
                ];

                $this->db->where('id', $id);
                $this->db->update('informasi', $update);

                $this->session->set_flashdata('success', 'Berhasil Diupdate!');
                redirect(base_url("admin/informasi"));
            }
        }
    }
}
