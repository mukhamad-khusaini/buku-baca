<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'price', 'image_url'];

    public function avarageStar()
    {
        $total=Rating::where('book_id', $this->id)->get()->map(function($rat){
            return $rat->value;
        });
        return ceil($total->sum()/count($total));
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
