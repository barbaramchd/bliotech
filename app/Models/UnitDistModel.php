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
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->findAll();
    }

    public function getEventsFromDistrict($distict_id)
    {
        return $this->asArray()
            ->where(['district_id' => $distict_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("devices", "devices.d_id = unit_devices.device_id")
            ->join("events", "events.e_device_id = devices.d_id")
            ->findAll();
    }

}