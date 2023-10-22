<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';

    protected $primaryKey = 'company_id';

    protected $fillable = ['company_name', 'logo_image', 'banner_image', 'is_featured'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id', 'company_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_companies', 'company_id', 'user_id');
    }
}
