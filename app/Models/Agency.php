<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;

    protected $table = 'agency';

    public function functionary()
    {
        return $this->hasOne(Functionary::class, 'agency_num', 'agency_num');
    }
}
