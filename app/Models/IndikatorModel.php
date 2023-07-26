<?php

namespace App\Models;

use CodeIgniter\Model;

class IndikatorModel extends Model
{
    protected $table      = 'ms_indikator';
    protected $primaryKey = 'id_indikator';

    protected $allowedFields = ['id_indikator','indikator','id_unsur']; 

    public function getIndikator()
    {
        $sql = 'SELECT a.id_indikator, a.indikator, b.id_unsur, b.unsur 
        FROM ms_indikator a, ms_unsur b
        WHERE a.id_unsur=b.id_unsur
        ORDER BY a.id_indikator';
        $query = $this->db->query($sql);
        
        return($query->getResultArray());
      
        // return $this->findAll();
    }

    public function getIndikatorById($id)
    {
        return $this->find($id);
    }

    public function createIndikator($data)
    {
        return $this->insert($data);
    }

    public function updateIndikator($id, $data)
    {
        return $this->update($id, $data);
    }
  }
?>