<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailPbnModel extends Model
{
    protected $table = "tb_emailpbn"; // Nama tabel
    protected $primaryKey = "id_emailpbn"; // Primary key
    protected $returnType = "object";
    protected $allowedFields = [
        'creator_emailpbn',
        'tanggalbuat_emailpbn',
        'alamat_emailpbn',
        'password_emailpbn',
        'infolain_emailpbn',
    ];

    // Method untuk mendapatkan semua data email
    public function getAllEmails()
    {
        return $this->orderBy('id_emailpbn', 'ASC')->findAll();
    }

    // Method untuk mendapatkan detail email berdasarkan ID
    public function getEmailById($id_emailpbn)
    {
        return $this->find($id_emailpbn);
    }

    // Method untuk mendapatkan email berdasarkan creator
    public function getEmailsByCreator($creator)
    {
        return $this->where('creator_emailpbn', $creator)->findAll();
    }

    // Method untuk menambahkan email baru
    public function addEmail($data)
    {
        return $this->insert($data);
    }

    // Method untuk memperbarui email berdasarkan ID
    public function updateEmail($id_emailpbn, $data)
    {
        return $this->update($id_emailpbn, $data);
    }

    // Method untuk menghapus email berdasarkan ID
    public function deleteEmail($id_emailpbn)
    {
        return $this->delete($id_emailpbn);
    }
}
