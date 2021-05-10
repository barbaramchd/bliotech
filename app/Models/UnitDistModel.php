<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitDistModel extends Model
{
    protected $table = 'unit_districts';
    protected $allowedFields = ['unit_id', 'district_id'];
    protected $useTimestamps = false;

    public function getUnitsFromDistrict($distict_id)
    {
        return $this->asArray()
            ->where(['district_id' => $distict_id])
            ->join("units", "units.id = unit_districts.unit_id")
            ->findAll();
    }
    

}