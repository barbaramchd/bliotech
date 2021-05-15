<?php

namespace App\Models;

use CodeIgniter\Model;

class DistrictModel extends Model
{
    protected $table = 'districts';
    protected $allowedFields = ['name', 'registration_code', "manager_id"];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getDistrictByUser($user_id)
    {
        return $this->asArray()
            ->where(['manager_id' => $user_id])
            ->first();
    }

}