<?php

namespace App\Models;

use CodeIgniter\Model;

class ClicksModel extends Model
{
    protected $table = 'clicks';
    protected $allowedFields = ['c_device', 'c_event'];
    protected $useTimestamps = true;
    protected $createdField  = 'c_created_at';
    protected $updatedField  = 'c_updated_at';
    protected $primaryKey = 'c_id';

    public function getClickCount($event_id){
        return $this->where(['c_event' => $event_id])
            ->countAllResults();
    }

}