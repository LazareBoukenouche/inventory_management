<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherLine extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'voucher_id',
        'nb_products',
        'price',
    ];
}
