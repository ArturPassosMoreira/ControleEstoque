<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel  extends Model {

    protected $afterFind = [
        'escapeXss'
    ];

    protected function escapeXss($data) {
        return esc($data);
    }
}