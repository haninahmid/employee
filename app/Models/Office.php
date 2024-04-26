<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $table = 'office';

    public function functionary()
    {
        return $this->hasOne(Functionary::class, 'office_num', 'office_num');
    }
}
