<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Bill_Detail extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
    protected $fillable = ['bill_id','product_name','image','quantity','price','info'];
    public function bill(){
        return $this->belongTo(Bill::class);
    }
}
