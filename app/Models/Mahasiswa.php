<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "tblmahasiswa";
    protected $fillable =['nim','nama','alamat','telepon','email'];
    
    public function tblmatkul()
    {
        return $this->belongsToMany(Matkul::class);
    }
}
