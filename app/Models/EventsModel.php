<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
    protected $table = 'events';
    protected $allowedFields = ['type', 'device_id', "note"];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


}