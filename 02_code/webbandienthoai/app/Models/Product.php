<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'image', 'image2', 'image3', 'image4', 'info', 'quantity', 'sold', 'category_id', 'status', 'admin_id', 'info_detail'];
    public function admin()
    {
        return $this->beLongsTo(Admin::class);
    }
    public function category()
    {
        return $this->beLongsTo(Category::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


}
