<?php

namespace App\Models;

use CodeIgniter\Model;

class PbnModel extends Model
{
    protected $table = "tb_pbn"; // Nama tabel
    protected $primaryKey = "id_pbn"; // Primary key
    protected $returnType = "object";
    protected $allowedFields = [
        'id_emailpbn',
        'creator_pbn',
        'tanggalbuat_pbn',
        'alamat_pbn',
        'tema_pbn',
    ];

    // Method untuk mendapatkan semua data PBN
    public function getAllPbns()
    {
        return $this->orderBy('id_pbn', 'ASC')->findAll();
    }

    // Method untuk mendapatkan detail PBN berdasarkan ID
    public function getPbnById($id_pbn)
    {
        return $this->find($id_pbn);
    }

    // Method untuk mendapatkan PBN berdasarkan creator
    public function getPbnsByCreator($creator)
    {
        return $this->where('creator_pbn', $creator)->findAll();
    }

    // Method untuk menambahkan PBN baru
    public function addPbn($data)
    {
        return $this->insert($data);
    }

    // Method untuk memperbarui PBN berdasarkan ID
    public function updatePbn($id_pbn, $data)
    {
        return $this->update($id_pbn, $data);
    }

    // Method untuk menghapus PBN berdasarkan ID
    public function deletePbn($id_pbn)
    {
        return $this->delete($id_pbn);
    }

    // Di dalam PbnModel
    public function getEmailById($id_emailpbn)
    {
        $emailModel = new EmailPbnModel();
        return $emailModel->find($id_emailpbn);  // Mengambil data email berdasarkan id_emailpbn
    }
    
}
