<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FotoProduk extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'foto_produk';
    protected $guarded = ['id'];
}
