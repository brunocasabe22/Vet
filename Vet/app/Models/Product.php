<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{  
    
    protected $fillable = [
        'code',
        'image',
        'name',
        'stock',
         'sell_price',
        'status',
        'category_id',
        'provider_id',
    ];
  
    use HasFactory;

    public function category(){
        return $this ->belongsTo(Category::class);
    }
    public function provider(){
        return $this-> belongsTo(Provider::class);

    }
}
