<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Categories extends Authenticatable
{
    use HasFactory;
    protected $guarded=[];
    protected $fillable = ['name', 'slug',];

    // public function Transactions(){
    //     return $this->hasMany(Transactions::class);
    // }
}
