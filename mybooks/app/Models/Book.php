<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['title','author','published_year','price', 'cover_image'];
    use HasFactory;
    public function borrows(){
        return $this->hasMany(BorrowedBook::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'borrowed_books');
    }
    // app/Models/Book.php
    // app/Models/Book.php

    // app/Models/Book.php

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }




}
