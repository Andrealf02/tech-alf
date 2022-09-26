<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'price'];

    public function randomProduct(){
            Product::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
    }

}
