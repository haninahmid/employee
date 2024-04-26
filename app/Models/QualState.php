<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualState extends Model
{
    use HasFactory;
    protected $table = 'qual_state';
    public function employee()
    {
        return $this->hasMany(Employee::class, 'qual_num', 'qual_num');
    }
}
