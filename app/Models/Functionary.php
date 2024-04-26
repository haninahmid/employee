<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functionary extends Model
{
    use HasFactory;

    protected $table = 'functionary';

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_emp', 'id_emp');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_num', 'admin_num');
    }
    public function office()
    {
        return $this->belongsTo(Office::class, 'office_num', 'office_num');
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_num', 'agency_num');
    }
}
