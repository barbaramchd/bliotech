<?php

namespace App\Models;

use CodeIgniter\Model;

class NotifPhoneModel extends Model
{
    protected $table = 'notif_phone';
    protected $allowedFields = ['device_id', 'phone'];
    protected $useTimestamps = false;
    protected $primaryKey = 'id';

    public function getEmails($device_id)
    {
        return $this->asArray()
            ->where(['device_id' => $device_id])
            ->findAll();
    }



}