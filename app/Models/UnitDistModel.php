<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitDistModel extends Model
{
    protected $table = 'unit_districts';
    protected $allowedFields = ['unit_id', 'district_id'];
    protected $useTimestamps = false;


    

}