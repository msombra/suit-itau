<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblGavAux extends Model
{
    use HasFactory;

    protected $table = 'tbl_gav_aux';

    public function numero_bj() {
        return $this->belongsTo('App\Models\TblGavBj');
    }

    public function fase_processual() {
        return $this->belongsTo('App\Models\TblGavFase');
    }
}
