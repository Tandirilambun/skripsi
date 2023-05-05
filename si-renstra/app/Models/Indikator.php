<?php

namespace App\Models;

use App\Models\Strategi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Indikator extends Model
{
    use HasFactory;
    protected $table = "indikator";
    
    protected $primaryKey = 'id_indikator';

    protected $fillable = [
        'id_strategi',
        'deskripsi_indikator',
        'indikator_numerik'
    ];

    public $timestamps = false;
    
    public function strategi(){
        return $this->belongsTo(Strategi::class, 'id_indikator');
    }

    public function capaian(){
        return $this->hasMany(Capaian::class, 'id_indikator');
    }
}
