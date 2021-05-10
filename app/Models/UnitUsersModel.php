<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitUsersModel extends Model
{
    protected $table = 'unit_users';
    protected $allowedFields = ['unit_id', 'device_id'];
    protected $useTimestamps = false;


    

}