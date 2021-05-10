<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitDevModel extends Model
{
    protected $table = 'unit_devices';
    protected $allowedFields = ['unit_id', 'device_id'];
    protected $useTimestamps = false;


    

}