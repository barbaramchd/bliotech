<?php

namespace App\Models;

use CodeIgniter\Model;

class DevicesModel extends Model
{
    protected $table = 'devices';
    protected $allowedFields = ['model', 'serial_number', "name", "active", "activated",
                                "note", "notification_phone", "notification_email"];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getDevice($device_id)
    {
        return $this->asArray()
            ->where(['id' => $device_id])
            ->orWhere(["serial_number" => $device_id])
            ->first();
    }



}