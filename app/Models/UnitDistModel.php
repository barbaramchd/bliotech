<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitDistModel extends Model
{
    protected $table = 'unit_districts';
    protected $allowedFields = ['unit_id', 'district_id'];
    protected $useTimestamps = false;

    public function getUnitsFromDistrict($district_id)
    {
        return $this->asArray()
            ->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->findAll();
    }

    public function getUsersFromDistrict($district_id){

        return $this->asArray()
            ->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_users", "units.u_id = unit_users.unit_id")
            ->join("users","users.id = unit_users.user_id")
            ->findAll();

    }

    public function getEventsFromDistrict($district_id)
    {
        return $this->asArray()
            ->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("devices", "devices.d_id = unit_devices.device_id")
            ->join("events", "events.e_device_id = devices.d_id")
            ->findAll();
    }

    public function getUniqueEventsFromDistrict($district_id)
    {
        return $this->asArray()
            ->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("devices", "devices.d_id = unit_devices.device_id")
            ->join("events_by_devices", "events_by_devices.e_device_id = unit_devices.device_id")
            ->orderBy("e_created_at","DESC")
            ->findAll();
    }

    public function getActiveCount($district_id){
        return $this->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->where(['u_active' => 1])
            ->countAllResults();
    }

    public function getOverdueCount($district_id){
        return $this->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("events_by_devices", "events_by_devices.e_device_id = unit_devices.device_id")
            ->where(['e_type' => 1])
            ->where("e_created_at <= DATE_SUB(NOW(),INTERVAL 3 HOUR)")
            ->countAllResults();
    }

    public function getAttentionCount($district_id){
        return $this->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("events_by_devices", "events_by_devices.e_device_id = unit_devices.device_id")
            ->where(['e_type' => 1])
            ->where("e_created_at >= DATE_SUB(NOW(),INTERVAL 3 HOUR)")
            ->countAllResults();
    }

    public function getSolvedCount($district_id){
        return $this->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("events_by_devices", "events_by_devices.e_device_id = unit_devices.device_id","left")
            ->where("((e_type IS NULL) OR (e_type = 2))")//->where(['e_type' => 2])
            //->where("e_created_at >= DATE_SUB(NOW(),INTERVAL 3 HOUR)")
            ->countAllResults();
            //->getCompiledSelect();

    }

    public function getAllEvents($district_id){
        return $this->asArray()->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("events_by_devices", "events_by_devices.e_device_id = unit_devices.device_id","left")
            ->findAll();
        //->getCompiledSelect();

    }

    public function getAllEventsCount($district_id){
        return $this->where(['district_id' => $district_id])
            ->join("units", "units.u_id = unit_districts.unit_id")
            ->join("unit_devices", "unit_devices.unit_id = units.u_id")
            ->join("events_by_devices", "events_by_devices.e_device_id = unit_devices.device_id","left")
            //->where("e_created_at >= DATE_SUB(NOW(),INTERVAL 3 HOUR)")
            ->countAllResults();

    }

}