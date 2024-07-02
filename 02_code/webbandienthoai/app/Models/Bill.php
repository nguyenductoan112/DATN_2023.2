<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bill extends Model
{
    use HasFactory;
    protected $table ='bill';
    protected $fillable= ['user_id','ordertotal','payment','shipping_address','status'];
    public function user(){
        return $this->beLongsTo(User::class);
    }
    public function admin(){
        return $this->beLongsTo(Admin::class);
    }
}
