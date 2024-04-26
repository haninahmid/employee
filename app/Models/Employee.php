<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Employee extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $table = 'employ';

    protected $primaryKey = 'id_emp';

    protected $fillable = [
        'id_emp',
        'emp_number',
    ];

    public $timestamps = false;

    // public function getAuthPassword()
    // {
    //     return ''; // Return an empty string or any constant value
    // }

    public function validateCredentials(array $credentials)
    {
        return true; // Skip password validation
    }

    /**
     * Get the user that owns the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'num_nat', 'num_nat');
    }

    public function sciencesType()
    {
        return $this->belongsTo(SciencesType::class, 'scien_num', 'scien_num');
    }
    public function qualState()
    {
        return $this->belongsTo(QualState::class, 'qual_num', 'qual_num');
    }
    public function functionary()
    {
        return $this->hasOne(Functionary::class, 'id_emp', 'id_emp');
    }
    public function empState()
    {
        return $this->belongsTo(EmpState::class, 'state_emp', 'state_num');
    }

}
