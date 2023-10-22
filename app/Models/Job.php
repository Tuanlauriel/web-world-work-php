<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    protected $primaryKey = 'job_id';

    protected $fillable = ['job_name', 'salary_id', 'offer', 'description', 'requirement', 'job_location', 'company_id', 'is_featured'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class, 'salary_id', 'salary_id');
    }
}
