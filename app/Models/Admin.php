<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';

    public function functionary()
    {
        return $this->hasOne(Functionary::class, 'admin_num', 'admin_num');
    }
}
