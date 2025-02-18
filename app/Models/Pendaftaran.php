<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['namasiswa','alamat','no_tlp','tgl_lahir','id_kursus','tgl_pendaftaran','status'];
    public function Pendaftaran(){
        return $this->hasMany(Pendaftaran::class, 'id','id');
    }
    public function Kursus(){
        return $this->belongsTo(Kursus::class, 'id_kursus','id');
    }
}
