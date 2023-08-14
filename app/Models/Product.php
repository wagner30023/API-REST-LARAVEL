<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    public function getPriceAtribute()
    {
        return $this->atributes['price'] / 100;
    }

    public function setPriceAtribute($attr)
    {
        return $this->atributes['price'] = $attr * 100;
    }

    public function store()
    {
        $this->belongsTo(Store::class);
    }
}
