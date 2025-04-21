<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $fillable = ['nama_siswa','pencapaian','cover','pesan'];
    public function Testiomni(){
        return $this->hasMany(Testimoni::class, 'id','id');
    }
}
