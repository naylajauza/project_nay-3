<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    protected $fillable = ['judul','tanggal','id_kategori','deskripsi','cover','slug'];
    public function Artikel(){
        return $this->hasMany(Artikel::class, 'id','id');
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($artikel){
            if (empty($artikel->slug)) {
                $artikel->slug = Str::slug($artikel->title);
            }
            $slug = $artikel->slug;
            $originalSlug = $slug;
            $count = 1;

            while (Artikel::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $artikel->slug = $slug;
        });
    }
    public function Kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori','id');
    }
}
