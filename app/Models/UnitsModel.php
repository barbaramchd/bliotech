<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitsModel extends Model
{
    protected $table = 'units';
    protected $allowedFields = ['u_name', 'u_company', "u_address1", "u_address2", "u_city", "u_state", "u_zip",
                                "u_country", "u_phone", "u_email", "u_website","u_type","u_size","u_active"];
    protected $useTimestamps = true;
    protected $createdField  = 'u_created_at';
    protected $updatedField  = 'u_updated_at';
    protected $primaryKey = 'u_id';
    protected $deletedField  = 'u_deleted_at';




}