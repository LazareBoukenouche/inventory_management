<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryComment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $timestamps = false;
    
    protected $fillable = [
        'message',
        'date',
        'user_id',
        'category_id',
        'item_id',
    ];
    protected $table = 'im_comment';
}
