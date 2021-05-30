<?php

namespace App\Models;

use CodeIgniter\Model;

class NotifEmailModel extends Model
{
    protected $table = 'notif_email';
    protected $allowedFields = ['device_id', 'email'];
    protected $useTimestamps = false;
    protected $primaryKey = 'id';

    public function getEmails($device_id)
    {
        return $this->asArray()
            ->where(['device_id' => $device_id])
            ->findAll();
    }



}