<?php

namespace App\Models;

use CodeIgniter\Model;

class DevicesModel extends Model
{
    protected $table = 'devices';
    protected $allowedFields = ['d_model', 'd_serial_number', "d_name", "d_active", "d_activated",
                                "d_note", "d_notification_phone", "d_notification_email"];
    protected $useTimestamps = true;
    protected $createdField  = 'd_created_at';
    protected $updatedField  = 'd_updated_at';

    public function getDevice($device_id)
    {
        return $this->asArray()
            ->where(['d_id' => $device_id])
            ->orWhere(["d_serial_number" => $device_id])
            ->first();
    }



}