<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    use HasFactory;
    protected $table = "capaian";
    
    protected $primaryKey = 'id_capaian';

    protected $fillable = [
        'id_indikator',
        'tahun',
        'hasil',
        'capaian'
    ];
    public $timestamps = false;

    public function indikator(){
        return $this->belongsTo(Indikator::class, 'id_capaian');
    }
}
