<?php

namespace App\Controllers\admin;

use App\Models\PbnModel;
use App\Models\EmailPbnModel;

class PBN extends BaseController
{
    private $pbnModel;
    private $emailPbnModel;  // Deklarasi properti emailPbnModel

    public function __construct()
    {
        $this->pbnModel = new PbnModel();
        $this->emailPbnModel = new EmailPbnModel();  // Inisialisasi emailPbnModel
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'pbn' => $this->pbnModel->findAll(),
            'emailModel' => new EmailPbnModel() // Kirimkan model email ke view
        ];

        return view('admin/pbn/index', $data);
    }

    public function tambah()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }
    
        // Ambil data email yang tersedia untuk dropdown
        $emails = $this->emailPbnModel->findAll();
    
        // Kirim data emails ke view
        return view('admin/pbn/tambah', [
            'validation' => $this->validator,
            'emails' => $emails,  // Menambahkan data emails ke view
        ]);
    }
    
    public function proses_tambah()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }
    
        // Validasi input
        if (!$this->validate([
            'email_pbn' => 'required',
            'creator_pbn' => 'required',
            'alamat_pbn' => 'required',
            'tema_pbn' => 'required',
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    
        // Ambil data dari form
        $data = [
            'id_emailpbn' => $this->request->getVar('email_pbn'), // Menyimpan id_emailpbn
            'creator_pbn' => $this->request->getVar('creator_pbn'),
            'tanggalbuat_pbn' => date('Y-m-d H:i:s'),
            'alamat_pbn' => $this->request->getVar('alamat_pbn'),
            'tema_pbn' => $this->request->getVar('tema_pbn'),
        ];
    
        // Simpan data PBN
        $this->pbnModel->save($data);
    
        return redirect()->to(base_url('admin/pbn'))->with('success', 'PBN berhasil ditambahkan.');
    }
    
    public function edit($id_pbn)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }
    
        // Ambil data PBN
        $pbnData = $this->pbnModel->find($id_pbn);
        if (!$pbnData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('PBN tidak ditemukan.');
        }
    
        // Ambil data email PBN yang tersedia
        $emails = $this->emailPbnModel->findAll(); // Ganti dengan model yang sesuai untuk mengambil data email
    
        return view('admin/pbn/edit', [
            'pbnData' => $pbnData,
            'emails' => $emails, // Kirimkan data email ke view
            'validation' => \Config\Services::validation(),
        ]);
    }
    

    public function proses_edit($id_pbn)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $pbnData = $this->pbnModel->find($id_pbn);
        if (!$pbnData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('PBN tidak ditemukan.');
        }

        // Validasi input
        if (!$this->validate([
            'creator_pbn' => 'required',
            'alamat_pbn' => 'required',
            'tema_pbn' => 'required',
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            'creator_pbn' => $this->request->getVar('creator_pbn'),
            'alamat_pbn' => $this->request->getVar('alamat_pbn'),
            'tema_pbn' => $this->request->getVar('tema_pbn'),
        ];

        $this->pbnModel->update($id_pbn, $data);

        return redirect()->to(base_url('admin/pbn/index'))->with('success', 'PBN berhasil diperbarui.');
    }

    public function delete($id_pbn)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $pbnData = $this->pbnModel->find($id_pbn);
        if (!$pbnData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('PBN tidak ditemukan.');
        }

        $this->pbnModel->delete($id_pbn);

        return redirect()->to(base_url('admin/pbn/index'))->with('success', 'PBN berhasil dihapus.');
    }

    public function add()
    {
        $emailModel = new EmailPbnModel();
        $emails = $emailModel->getAllEmails(); // Ambil semua email

        // Kirimkan data email ke view
        return view('admin/pbn/tambah', [
            'emails' => $emails
        ]);
    }

    public function simpan()
{
    $emailModel = new EmailPbnModel();

    $data = [
        'creator_emailpbn' => $this->request->getPost('creator_emailpbn'),
        'tanggalbuat_emailpbn' => $this->request->getPost('tanggalbuat_emailpbn'),
        'alamat_emailpbn' => $this->request->getPost('email_pbn'),
        'password_emailpbn' => $this->request->getPost('password_emailpbn'),
        'infolain_emailpbn' => $this->request->getPost('infolain_emailpbn'),
    ];

    // Simpan data ke dalam tabel tb_emailpbn
    $emailModel->addEmail($data);

    // Redirect setelah berhasil
    return redirect()->to(base_url('admin/pbn'))->with('success', 'Email PBN berhasil ditambahkan.');
}
    
}
