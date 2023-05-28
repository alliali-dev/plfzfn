<?php

namespace App\Models;

use App\Models\Programme;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;
    protected $table = "demandeurs";
    protected $fillable = [];

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }
}
