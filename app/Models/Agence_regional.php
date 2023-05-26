<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guichet;

class Agence_regional extends Model
{
    use HasFactory;
    protected $table = "agence_regionals";
    protected $fillable = [];

    //les guichets de l'agence 
    public function guichet()
    {
        return $this->hasMany(Guichet::class);
    }
}
