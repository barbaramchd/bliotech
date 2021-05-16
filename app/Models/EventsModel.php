<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
    protected $table = 'events';
    protected $allowedFields = ['e_type', 'e_device_id', "e_note", "e_resolved_at", "e_resolved_by"];
    protected $useTimestamps = true;
    protected $createdField  = 'e_created_at';
    protected $updatedField  = 'e_updated_at';
    protected $deletedField  = 'e_deleted_at';
    protected $primaryKey = 'e_id';

    public function getLatestByDevice($device_id){
        return $this->asArray()
            ->where(['e_device_id' => $device_id])
            ->where(["e_type"=> 1])
            ->orderBy("e_created_at","DESC")
            ->first();
    }

    public function getLatestByPhone($phone){
        return $this->asArray()
            ->join("devices","devices.d_id = events.e_device_id")
            ->join("clicks","devices.d_id = clicks.c_device")
            ->where(['d_notification_phone' => $phone])
            ->where(["e_type"=> 1])
            ->orderBy("c_created_at","DESC")
            ->first();
    }


}