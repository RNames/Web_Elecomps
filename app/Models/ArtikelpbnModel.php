<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelpbnModel extends Model
{
    protected $table = "artikel_pbn";  // Update table name to match the new one
    protected $primaryKey = "id_artikelpbn";  // Update primary key to match the new column
    protected $returnType = "object";
    protected $allowedFields = [
        'id_artikelpbn',
        'id_pbn',
        'creator_artikelpbn',
        'tanggalbuat_artikelpbn',
        'judul_artikelpbn',
        'judul_artikelpbn_en',
        'foto_artikelpbn',
        'deskripsi_artikelpbn',
        'deskripsi_artikelpbn_en',
        'statusupload_artikelpbn',
        'tanggalupload_artikelpbn',
        'alamatweb_backlink',
        'slug_in',
    ];

    // Method to get the latest articles
    public function getArtikelTerbaru()
    {
        return $this->db->table('artikel_pbn')
            ->join('tb_pbn', 'tb_pbn.id_pbn = artikel_pbn.id_pbn', 'left') // Join dengan tabel tb_pbn
            ->select('artikel_pbn.*, tb_pbn.alamat_pbn') // Tambahkan alamat_pbn
            ->orderBy('artikel_pbn.id_artikelpbn', 'desc') // Urutkan berdasarkan id_artikelpbn secara descending
            ->get()
            ->getResult(); // Kembalikan hasil query
    }    

    // Method to get article details by ID
    public function getDetailArtikel($id_artikelpbn)
    {
        return $this->find($id_artikelpbn);
    }

    // Method to get article by slug
    public function getDetailArtikelBySlug($slug, $locale)
    {
        $slugField = $locale === 'id' ? 'slug_in' : 'slug_en';
        return $this->where($slugField, $slug)->first();
    }

    // Method to get related articles (other than the current one)
    public function getArtikelLainnya($id_artikelpbn, $limit = 4)
    {
        return $this->where('id_artikelpbn !=', $id_artikelpbn)
            ->orderBy('id_artikelpbn', 'ASC')
            ->limit($limit)
            ->findAll();
    }

    // Method to get articles by status
    public function getArtikelByStatus($status, $limit = 4)
    {
        return $this->where('statusupload_artikelpbn', $status)
            ->orderBy('id_artikelpbn', 'ASC')
            ->limit($limit)
            ->findAll();
    }

    // Method to get all PBN
public function getAllPbn()
{
    return $this->db->table('tb_pbn')
        ->select('*')  // Pastikan kolom 'id_pbn' dimasukkan
        ->orderBy('id_pbn', 'desc')
        ->get()
        ->getResult();
}



}
