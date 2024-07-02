<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table ='wishlist';
    protected $fillable = ['id','product_id','user_id'];
    public function user(){
        return $this->beLongsTo(User::class);
    }
    public function product(){
        return $this->beLongsTo(Product::class);
    }

}
