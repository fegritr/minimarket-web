<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = ['id', 'item_name', 'item_desc', 'category_id',  'price', 'quantity'];
}
