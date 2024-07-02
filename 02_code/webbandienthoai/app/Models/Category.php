<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $table ='categoris';
    protected $fillable=[
        'status',
        'admin_id',
        'name',
        'slug',
        'image'
    ];
    public function admin(){
        return $this->beLongsTo(Admin::class);
    }
}
