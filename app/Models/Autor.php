<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Autor extends Model
{
    use HasFactory;
    // por si laravel no encuentra a que tabla conectarse 
     //protected $table = 'autors';

	protected $fillable = [
   		'name',
	];

	public function books(){
		return $this->hasMany(Book::class);
	}

}
