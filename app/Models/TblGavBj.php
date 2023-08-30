<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGavBj extends Model
{
    use HasFactory;

    protected $fillable = ['numero_bj'];

    public function relacao_fase() {
        return $this->hasMany('App\Models\TblGavAux');
    }
}
