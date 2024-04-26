<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpState extends Model
{
    use HasFactory;

    protected $table = 'emp_state';

    public function employee()
    {
        return $this->hasMany(Employee::class, 'state_emp', 'state_num');
    }
}
