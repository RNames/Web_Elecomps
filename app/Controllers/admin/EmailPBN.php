<?php

namespace App\Controllers\admin;

use App\Models\EmailPbnModel;

class EmailPBN extends BaseController
{
    private $emailPbnModel;

    public function __construct()
    {
        $this->emailPbnModel = new EmailPbnModel();
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'emails' => $this->emailPbnModel->findAll(),
        ];

        return view('admin/emailpbn/index', $data);
    }

    public function tambah()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // Ambil daftar email dari model
        $emails = $this->emailPbnModel->getAllEmails();

        return view('admin/emailpbn/tambah', [
            'validation' => $this->validator,
            'emails' => $emails,  // Kirim data email ke view
        ]);
    }

    public function proses_tambah()
{
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }

    // Validasi input
    if (!$this->validate([
        'creator_emailpbn' => 'required',
        'alamat_emailpbn' => 'required|valid_email',
        'password_emailpbn' => 'required',
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    $data = [
        'creator_emailpbn' => $this->request->getVar('creator_emailpbn'),
        'tanggalbuat_emailpbn' => date('Y-m-d H:i:s'),
        'alamat_emailpbn' => $this->request->getVar('alamat_emailpbn'),
        'password_emailpbn' => $this->request->getVar('password_emailpbn'), // Simpan password aslinya
        'infolain_emailpbn' => $this->request->getVar('infolain_emailpbn'),
    ];

    $this->emailPbnModel->insert($data);

    return redirect()->to(base_url('admin/emailpbn'))->with('success', 'Email berhasil ditambahkan.');
}

    public function edit($id_emailpbn)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $emailData = $this->emailPbnModel->find($id_emailpbn);
        if (!$emailData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Email tidak ditemukan.');
        }

        return view('admin/emailpbn/edit', [
            'emailData' => $emailData,
            'validation' => \Config\Services::validation()
        ]);
    }

    public function proses_edit($id_emailpbn)
{
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }

    $emailData = $this->emailPbnModel->find($id_emailpbn);
    if (!$emailData) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Email tidak ditemukan.');
    }

    // Validasi input: hanya 'required' untuk 'creator_emailpbn'
    if (!$this->validate([
        'creator_emailpbn' => 'required', // hanya wajib diisi tanpa validasi email
        'alamat_emailpbn' => 'required|valid_email',
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    $data = [
        'creator_emailpbn' => $this->request->getVar('creator_emailpbn'),
        'alamat_emailpbn' => $this->request->getVar('alamat_emailpbn'),
        'infolain_emailpbn' => $this->request->getVar('infolain_emailpbn'),
    ];

    // Update password jika ada perubahan, jangan hash
    if ($this->request->getVar('password_emailpbn')) {
        $data['password_emailpbn'] = $this->request->getVar('password_emailpbn'); // Simpan password aslinya
    }

    $this->emailPbnModel->update($id_emailpbn, $data);

    return redirect()->to(base_url('admin/emailpbn/index'))->with('success', 'Email berhasil diperbarui.');
}

    public function delete($id_emailpbn)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $emailData = $this->emailPbnModel->find($id_emailpbn);
        if (!$emailData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Email tidak ditemukan.');
        }

        $this->emailPbnModel->delete($id_emailpbn);

        return redirect()->to(base_url('admin/emailpbn/index'))->with('success', 'Email berhasil dihapus.');
    }
}
