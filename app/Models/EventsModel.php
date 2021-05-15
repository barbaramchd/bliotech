<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
    protected $table = 'events';
    protected $allowedFields = ['e_type', 'e_device_id', "e_note"];
    protected $useTimestamps = true;
    protected $createdField  = 'e_created_at';
    protected $updatedField  = 'e_updated_at';
    protected $deletedField  = 'e_deleted_at';
    protected $primaryKey = 'e_id';


}