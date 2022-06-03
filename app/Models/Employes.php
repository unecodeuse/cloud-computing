<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employes extends Model
{
  
    use HasFactory;
    protected $table= 'employes';
    protected $fillable = ["nom","prenom","email","ddn","telephone","adresse","fonction","salaire"];
}
