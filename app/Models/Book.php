<?php

namespace App\Models;

use App\Models\Autor;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // por si laravel no sabe a que tabla conectarse
    // protected $table = 'books';

    protected $fillable = [
    	'name',
		'category_id',
		'autor_id',
    ];

    public function autor(){
		return $this->belongsTo(Autor::class);
	}

	public function category(){
		return $this->belongsTo(Category::class);
	}


}
