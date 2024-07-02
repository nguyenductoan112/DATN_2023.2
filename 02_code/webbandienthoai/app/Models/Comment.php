<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table ='comment';
    protected $fillable=[
        'status',
        'admin_id',
        'user_id',
        'product_id',
        'content',
        'id','star'
    ];
    public function user(){
        return $this->beLongsTo(User::class);
    }
}
