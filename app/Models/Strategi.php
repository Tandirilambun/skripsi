<?php

namespace App\Models;

use App\Models\Goal;
use App\Models\Jenis;
use App\Models\Indikator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Strategi extends Model
{
    use HasFactory;
    protected $table = "strategi";
    
    protected $primaryKey = 'id_strategi';

    protected $fillable = [
        'id_goal',
        'id_jenis',
        'deskripsi_strategi'
    ];
    public $timestamps = false;
    public function goal(){
        return $this->belongsTo(Goal::class,'id_strategi');
    }
    public function jenis(){
        return $this->belongsTo(Jenis::class,'id_strategi');
    }
    public function indikator(){
        return $this->hasMany(Indikator::class,'id_strategi');
    }
}
