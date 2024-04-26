<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SciencesType extends Model
{
    use HasFactory;
    protected $table = 'sciences_type';

    public function employee()
    {
        return $this->hasMany(Employee::class, 'scien_num', 'scien_num');
    }
}
