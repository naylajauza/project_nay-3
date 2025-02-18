<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $fillable = ['nama_kursus','deskripsi','harga','durasi'];
    public function Kursus(){
        return $this->hasMany(Kursus::class, 'id','id');
    }
}
