<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitsModel extends Model
{
    protected $table = 'units';
    protected $allowedFields = ['u_name', 'u_company', "u_address1", "u_address2", "u_city", "u_state", "u_zip",
                                "u_country", "u_phone", "u_email", "u_website","u_type","u_size","u_active"];
    protected $useTimestamps = true;
    protected $createdField  = 'u_created_at';
    protected $updatedField  = 'u_updated_at';
    protected $primaryKey = 'u_id';
    protected $deletedField  = 'u_deleted_at';


    public function get_own_unit($unit_id, $user_id, $manager=false){


        if (!$manager){
            return $this->asArray()
                ->join("unit_users","unit_users.unit_id=units.u_id")
                ->where(['user_id' => $user_id])
                ->where(["u_id"=> $unit_id])
                ->first();
        }else{
            return $this->asArray()
                ->join("unit_districts","unit_districts.unit_id=units.u_id")
                ->join("districts","districts.id = unit_districts.district_id")
                ->where(['manager_id' => $user_id])
                ->where(["u_id"=> $unit_id])
                ->first();
        }
    }

    public function getUsersFromUnit($unit_id){

            return $this->asArray()
                ->where(["u_id"=> $unit_id])
                ->join("unit_users", "units.u_id = unit_users.unit_id")
                ->join("users","users.id = unit_users.user_id")
                ->findAll();

    }
    public function getDevicesFromUnit($unit_id){

        return $this->asArray()
            ->where(["u_id"=> $unit_id])
            ->join("unit_devices", "units.u_id = unit_devices.unit_id")
            ->join("devices","devices.d_id = unit_devices.device_id")
            ->findAll();

    }


}