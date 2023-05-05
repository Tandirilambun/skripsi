<?php

namespace App\Models;

use App\Models\Strategi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jenis extends Model
{
    use HasFactory;
    protected $table = "jenis";
    
    protected $primaryKey = 'id_jenis';

    protected $fillable = [
        'jenis'
    ];
    public $timestamps = false;

    public function strategi(){
        return $this->hasMany(Strategi::class,'id_jenis');
    }
}
