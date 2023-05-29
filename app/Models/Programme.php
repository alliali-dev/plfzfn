<?php

namespace App\Models;

use App\Models\Demandeur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $table = "programmes";
    protected $fillable = [];

    public function demandeur()
    {
        return $this->hasMany(Demandeur::class);
    }
}
