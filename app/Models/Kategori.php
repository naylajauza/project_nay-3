<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug'];
    public function Kategori(){
        return $this->hasMany(Kategori::class, 'id','id');
    }

    // Menyimpan slug otomatis ketika membuat atau memperbarui berita
    public static function boot()
    {
        parent::boot();

        // Menggunakan event 'creating' untuk membuat slug otomatis sebelum berita disimpan
        static::creating(function ($kategori) {
            // Membuat slug dari judul jika slug tidak ada
            if (empty($kategori->slug)) {
                $kategori->slug = Str::slug($kategori->title);
            }

            // Menangani duplikasi slug
            $slug = $kategori->slug;
            $originalSlug = $slug;
            $count = 1;

            // Periksa apakah slug sudah ada, jika ya, tambahkan angka di belakang slug
            while (Kategori::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            // Set slug yang unik
            $kategori->slug = $slug;
        });
    }

    use HasFactory;
}
