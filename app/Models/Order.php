<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "order";
    protected $fillable = [
        'customer_id',
        'total_harga',
        'status',
        'noresi',
        'kurir',
        'layanan_ongkir',
        'biaya_ongkir',
        'estimasi_ongkir',
        'total_berat',
        'alamat',
        'pos'
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
