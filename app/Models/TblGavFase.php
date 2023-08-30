<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGavFase extends Model
{
    use HasFactory;

    protected $fillable = ['fase'];

    public function relacao_bj() {
        return $this->hasMany('App\Models\TblGavAux');
    }
}
