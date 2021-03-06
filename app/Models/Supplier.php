<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'adress',
        'zipcode',
        'city',
        'country',
        'email',
        'phone_number',
    ];

    public $timestamps = false;
    
    protected $table = 'im_supplier';
}
