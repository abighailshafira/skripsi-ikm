<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananModel extends Model
{
    protected $table      = 'ms_layanan';
    protected $primaryKey = 'id_layanan';

    protected $allowedFields = ['layanan']; 
    // protected $returnType = 'array';

    public function getLayanan()
    {
        return $this->findAll();

        // $sql = 'SELECT * FROM ms_layanan';
        // $query = $this->db->query($sql);
        // return($query->getResultArray());
    }

    public function getLayananById($id)
    {
        return $this->find($id);
    }

    public function createLayanan($data)
    {
        return $this->insert($data);

        // $sql = 'INSERT INTO ms_layanan VALUES ' . ($data);
        // $query = $this->db->query($sql);

        // return($query->getResultArray());
    }

    public function updateLayanan($id, $data)
    {
        return $this->update($id, $data);
    }
  }
?>