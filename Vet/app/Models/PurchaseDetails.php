<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    protected $fillable = [
        'shopping_id',
        'product_id',
        'quantity',
        'price',
       
            
        ];
    
    
        public function user(){
            return $this->belongsTo(User::class);
        }
    
        public function provider(){
            return $this->belongsTo(Provider::class);
        }
    
        public function purchaseDetails(){
            return $this->hasMany(PurchaseDetails::class);
        }




    use HasFactory;
}
