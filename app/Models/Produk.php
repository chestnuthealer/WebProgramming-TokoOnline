<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kategori;
use App\Models\FotoProduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = "produk";
    protected $guarded = ['id'];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function fotoProduk()
    {
        return $this->hasMany(FotoProduk::class);
    }
    public function gambar()
    {
        return $this->hasMany(FotoProduk::class);
    }
}
