<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitUsersModel extends Model
{
    protected $table = 'unit_users';
    protected $allowedFields = ['unit_id', 'user_id'];
    protected $useTimestamps = false;

    public function getUnit($user_id)
    {
        return $this->asArray()
            ->where(['user_id' => $user_id])
            ->first();
    }

    public function getUser($unit_id)
    {
        return $this->asArray()
            ->where(['unit_id' => $unit_id])
            ->first();
    }
    

}