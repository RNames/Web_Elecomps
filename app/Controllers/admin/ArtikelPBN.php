<?php

namespace App\Controllers\admin;

use App\Models\ArtikelpbnModel;
use App\Models\PbnModel;

class ArtikelPBN extends BaseController
{
    private $artikelpbnModel;
    protected $pbnModel;

    public function __construct()
    {
        $this->artikelpbnModel = new ArtikelpbnModel();
        $this->pbnModel = new PbnModel(); // Inisialisasi model
    }

    public function generateSlug($string)
    {
        $slug = strtolower($string);
        $slug = preg_replace('/[^a-z0-9\s]/', '', $slug);
        $slug = preg_replace('/\s+/', '-', $slug);
        return $slug;
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // Ambil artikel terbaru dan data terkait PBN
        $data['artikels'] = $this->artikelpbnModel->getArtikelTerbaru();

        // Pastikan bahwa data id_pbn juga diambil dengan benar
        foreach ($data['artikels'] as &$artikel) {
            if (!empty($artikel->id_pbn)) {
                // Cek apakah data id_pbn ada
                $id_pbn_data = $this->pbnModel->find($artikel->id_pbn);

                // Pastikan data ditemukan, jika tidak setkan null atau nilai default
                if ($id_pbn_data) {
                    $artikel->id_pbn = $id_pbn_data->id_pbn; // Mengakses menggunakan objek
                } else {
                    // Setkan id_pbn menjadi null jika tidak ditemukan
                    $artikel->id_pbn = null;
                }
            } else {
                // Jika id_pbn kosong, setkan null
                $artikel->id_pbn = null;
            }
        }

        return view('admin/artikelpbn/index', $data);
    }

    public function tambah()
    {
        // Periksa apakah pengguna sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // Ambil data PBN dari database
        $pbnData = $this->pbnModel->findAll(); // Pastikan $pbnModel sudah diinisialisasi

        // Kirim data ke view
        return view('admin/artikelpbn/tambah', [
            'pbns' => $pbnData, // Kirim data PBN ke view dengan nama variabel 'pbns'
            'validation' => \Config\Services::validation()
        ]);
    }

    public function proses_tambah()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // Ambil input
        $judul_artikelpbn = $this->request->getVar('judul_artikelpbn');
        $id_pbn = $this->request->getVar('id_pbn'); // Ambil id_pbn dari input form
        $deskripsi_artikelpbn = $this->request->getVar('deskripsi_artikelpbn');
        $creator_artikelpbn = $this->request->getVar('creator_artikelpbn');
        $tanggalbuat_artikelpbn = $this->request->getVar('tanggalbuat_artikelpbn');
        $statusupload_artikelpbn = $this->request->getVar('statusupload_artikelpbn');
        $tanggalupload_artikelpbn = $this->request->getVar('tanggalupload_artikelpbn');
        $alamatweb_backlink = $this->request->getVar('alamatweb_backlink');

        // Validasi statusupload_artikelpbn dan tanggalupload_artikelpbn
        if ($statusupload_artikelpbn === 'Sudah Diupload' && empty($tanggalupload_artikelpbn)) {
            session()->setFlashdata('error', 'Tanggal upload harus diisi jika status adalah "Sudah Diupload".');
            return redirect()->back()->withInput();
        }

        // Jika statusupload_artikelpbn adalah 'Belum Diupload', tanggalupload_artikelpbn boleh null
        if ($statusupload_artikelpbn === 'Belum Diupload') {
            $tanggalupload_artikelpbn = null;
        }

        // Validasi foto artikel
        if (!$this->validate([
            'foto_artikelpbn' => [
                'rules' => 'uploaded[foto_artikelpbn]|is_image[foto_artikelpbn]|max_dims[foto_artikelpbn,572,572]|mime_in[foto_artikelpbn,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih foto terlebih dahulu',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'max_dims' => 'Maksimal ukuran gambar 572x572 pixels',
                    'mime_in' => 'File yang anda pilih wajib berekstensikan jpg/jpeg/png'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {
            // Simpan artikel ke dalam database
            $file_foto = $this->request->getFile('foto_artikelpbn');
            $currentDateTime = date('dmYHis');
            $newFileName = str_replace(' ', '-', "{$judul_artikelpbn}_{$currentDateTime}.{$file_foto->getExtension()}");
            $file_foto->move('asset-user/images', $newFileName);

            // Siapkan data untuk insert
            $data = [
                'id_pbn' => $id_pbn,  // Tambahkan id_pbn ke data
                'judul_artikelpbn' => $judul_artikelpbn,
                'deskripsi_artikelpbn' => $deskripsi_artikelpbn,
                'creator_artikelpbn' => $creator_artikelpbn,
                'tanggalbuat_artikelpbn' => $tanggalbuat_artikelpbn,
                'statusupload_artikelpbn' => $statusupload_artikelpbn,
                'tanggalupload_artikelpbn' => $tanggalupload_artikelpbn,
                'alamatweb_backlink' => $alamatweb_backlink,
                'foto_artikelpbn' => $newFileName,
                'slug_in' => $this->generateSlug($judul_artikelpbn),
                'slug_en' => $this->generateSlug($this->request->getVar('judul_artikelpbn_en')),
            ];

            // Insert ke database
            $this->artikelpbnModel->insert($data);

            return redirect()->to(base_url('admin/artikelpbn'));
        }
    }

    public function edit($id_artikelpbn)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $artikelData = $this->artikelpbnModel->find($id_artikelpbn);
        if (!$artikelData) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan.');
        }

        // Ambil data PBN untuk dropdown
        $pbnData = $this->pbnModel->findAll();

        return view('admin/artikelpbn/edit', [
            'artikelData' => $artikelData,
            'pbns' => $pbnData, // Kirim data PBN ke view
            'validation' => \Config\Services::validation()
        ]);
    }

    public function proses_edit($id_artikelpbn)
{
    if (!session()->get('logged_in')) {
        return redirect()->to(base_url('login'));
    }

    $artikelData = $this->artikelpbnModel->find($id_artikelpbn);
    if (!$artikelData) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan.');
    }

    // Ambil input dari form
    $judul_artikelpbn = $this->request->getVar('judul_artikelpbn');
    $id_pbn = $this->request->getVar('id_pbn'); 
    $deskripsi_artikelpbn = $this->request->getVar('deskripsi_artikelpbn');
    $creator_artikelpbn = $this->request->getVar('creator_artikelpbn');
    $statusupload_artikelpbn = $this->request->getVar('statusupload_artikelpbn');
    $tanggalupload_artikelpbn = $this->request->getVar('tanggalupload_artikelpbn');
    $alamatweb_backlink = $this->request->getVar('alamatweb_backlink');

    // Validasi statusupload_artikelpbn dan tanggalupload_artikelpbn
    if ($statusupload_artikelpbn === 'Sudah Diupload' && empty($tanggalupload_artikelpbn)) {
        session()->setFlashdata('error', 'Tanggal upload harus diisi jika status adalah "Sudah Diupload".');
        return redirect()->back()->withInput();
    }
    if ($statusupload_artikelpbn === 'Belum Diupload') {
        $tanggalupload_artikelpbn = null;
    }

    // Validasi foto jika ada
    if ($this->request->getFile('foto_artikelpbn')->isValid()) {
        if (!$this->validate([
            'foto_artikelpbn' => [
                'rules' => 'is_image[foto_artikelpbn]|max_dims[foto_artikelpbn,572,572]|mime_in[foto_artikelpbn,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'max_dims' => 'Maksimal ukuran gambar 572x572 pixels',
                    'mime_in' => 'File yang anda pilih wajib berekstensikan jpg/jpeg/png',
                ],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // Hapus foto lama
        $filePath = 'asset-user/images/' . $artikelData->foto_artikelpbn; // Ganti [] dengan ->
        if (is_file($filePath)) {
            unlink($filePath);
        }

        // Simpan foto baru
        $file_foto = $this->request->getFile('foto_artikelpbn');
        $currentDateTime = date('dmYHis');
        $newFileName = str_replace(' ', '-', "{$judul_artikelpbn}_{$currentDateTime}.{$file_foto->getExtension()}");
        $file_foto->move('asset-user/images', $newFileName);
    } else {
        $newFileName = $artikelData->foto_artikelpbn; // Tetap gunakan foto lama
    }

    // Siapkan data untuk update
    $data = [
        'id_pbn' => $id_pbn,
        'judul_artikelpbn' => $judul_artikelpbn,
        'deskripsi_artikelpbn' => $deskripsi_artikelpbn,
        'creator_artikelpbn' => $creator_artikelpbn,
        'statusupload_artikelpbn' => $statusupload_artikelpbn,
        'tanggalupload_artikelpbn' => $tanggalupload_artikelpbn,
        'alamatweb_backlink' => $alamatweb_backlink,
        'foto_artikelpbn' => $newFileName,
        'slug_in' => $this->generateSlug($judul_artikelpbn),
    ];

    // Update artikel
    $updated = $this->artikelpbnModel->update($id_artikelpbn, $data);

    if ($updated) {
        session()->setFlashdata('success', 'Artikel berhasil diperbarui.');
    } else {
        session()->setFlashdata('error', 'Gagal memperbarui artikel.');
    }

    return redirect()->to(base_url('admin/artikelpbn'));
}

    public function delete($id = false)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // Ambil data artikel sebagai array
        $data = $this->artikelpbnModel->asArray()->find($id);

        if ($data) {
            $filePath = 'asset-user/images/' . $data['foto_artikelpbn'];

            if (is_file($filePath)) {
                unlink($filePath);
            } else {
                error_log("File tidak ditemukan: " . $filePath);
            }

            $this->artikelpbnModel->delete($id);
        } else {
            return redirect()->to(base_url('admin/artikelpbn/index'))->with('error', 'Artikel tidak ditemukan.');
        }

        return redirect()->to(base_url('admin/artikelpbn/index'))->with('success', 'Artikel berhasil dihapus.');
    }
    
}
