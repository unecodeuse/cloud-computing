<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $table='produits';
    protected $fillable = ["photo","nom","description","quantite","prix_unitaire"];
}
