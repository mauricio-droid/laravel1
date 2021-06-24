<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // por si laravel no encuentra a que tabla conectarse 
     //protected $table = 'categories';

    protected $fillable = [
   		'name',
	];

	public function books(){
		return $this->hasMany(Book::class);
	}

	
    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->books()->delete();
        });
    }
}
