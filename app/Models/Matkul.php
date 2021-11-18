<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = "tblmatkul";
    protected $fillable = ['id','nama','kode'];
    
    public function tblmahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
    
}
