<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agence_regional;

class Guichet extends Model
{
    use HasFactory;
    protected $table = "guichets";
    protected $fillable = [];

    // l'agence a laquelle appartient le guichet
    public function agence()
    {
        return $this->belongsTo(Agence_regional::class, 'agence_regional_id', 'id');
    }
}
