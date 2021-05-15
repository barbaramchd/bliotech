<?php

namespace App\Models;

use CodeIgniter\Model;

class ClicksModel extends Model
{
    protected $table = 'clicks';
    protected $allowedFields = ['c_device', 'c_event'];
    protected $useTimestamps = true;
    protected $createdField  = 'e_created_at';
    protected $primaryKey = 'c_id';


}