<?php

namespace App\Models;

use App\Models\Strategi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Goal extends Model
{
    use HasFactory;
    protected $table = "goal";
    
    protected $primaryKey = 'id_goal';

    protected $fillable = [
        'roadmap',
        'tahun_awal',
        'tahun_akhir',
        'strategi_goal'
    ];
    public $timestamps = false;
    public function strategi(){
        return $this->hasMany(Strategi::classname(), 'id_goal');
    }
}
