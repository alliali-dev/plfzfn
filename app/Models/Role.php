<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [];

    public function getUser()
    {
        return $this->hasMany(User::class);
    }
}
