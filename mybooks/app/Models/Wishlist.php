<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'book_id'];

    // تحديد العلاقة مع نموذج User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // تحديد العلاقة مع نموذج Book
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
