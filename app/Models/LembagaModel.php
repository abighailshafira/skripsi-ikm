<?php

namespace App\Models;

use CodeIgniter\Model;

class LembagaModel extends Model
{
    protected $table      = 'ms_lembaga';
    protected $primaryKey = 'id_lembaga';
    protected $allowedFields = ['lembaga','logo','alamat','pic','kontak','email']; 

    public function getLembaga()
    {
        return $this->findAll();
    }

    public function lembagaById(){
        // Query SQL
        $sql = 'SELECT a.bidang, b.id_bidang, b.id_lembaga, b.lembaga, b.logo, b.alamat, b.pic, b.kontak, b.email FROM ms_bidang a, ms_lembaga b
        WHERE b.id_lembaga="0003" AND a.id_bidang=b.id_bidang';
        $query = $this->db->query($sql);

        // Query Builder
        // $db      = \Config\Database::connect();
        // $builder = $db->table('ms_lembaga');
        // $builder->select('bidang, nama_lembaga, alamat, pic, kontak, email');
        // $builder->join('ms_bidang', 'ms_bidang.id_bidang = ms_lembaga.id_bidang');
        // $query = $builder->get();

        return($query->getResultArray());
    }

    public function getLembagaById($id)
    {
        return $this->find($id);
    }

    public function createLembaga($data)
    {
        return $this->insert($data);
    }

    public function updateLembaga($id, $data)
    {
        return $this->update($id, $data);
    }
  }
?>