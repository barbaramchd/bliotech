<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitsModel extends Model
{
    protected $table = 'units';
    protected $allowedFields = ['name', 'company', "address1", "address2", "city", "state", "zip",
                                "country", "phone", "email", "website","type","size","active"];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    

}