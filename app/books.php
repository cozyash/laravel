<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //
	protected $table = 'books';
	public $timestamps = false;
	protected $attributes = [
        'name' => false,
        'author' => false,
        'price' => false,
    ];
}
